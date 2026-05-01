<?php
/**
 * Auto-update do tema via servidor próprio (sem plugin).
 *
 * Como funciona:
 *  1. O header "Update URI" no style.css aponta para um host customizado.
 *  2. O WordPress 6.1+ dispara o filtro `update_themes_{host}` antes de
 *     resolver atualização do tema.
 *  3. Aqui consultamos um JSON que você hospeda em qualquer URL e, se a
 *     versão lá for maior que a instalada, devolvemos os dados — o WP
 *     mostra "Atualização disponível" e instala via wp-admin como qualquer
 *     tema oficial.
 *
 * Para usar:
 *  - No `style.css` do tema, mantenha a linha:
 *        Update URI: https://festadosanguedejesus.com.br/wp-content/uploads/fsdj-theme/update.json
 *    (ajuste a URL para onde você vai hospedar o JSON e o ZIP)
 *
 *  - No servidor (pode ser o próprio site, GitHub Pages, S3, etc.) hospede:
 *        update.json
 *        festadosanguedejesus-1.2.0.zip   (gerado por: zip -r ... pasta-do-tema)
 *
 *  - Conteúdo do `update.json`:
 *        {
 *          "version":     "1.2.0",
 *          "download_url":"https://.../festadosanguedejesus-1.2.0.zip",
 *          "details_url": "https://festadosanguedejesus.com.br/changelog",
 *          "requires":    "6.0",
 *          "requires_php":"7.4",
 *          "tested":      "6.5"
 *        }
 *
 *  - Quando lançar uma versão nova:
 *        1. Bump em `Version:` no style.css (ex: 1.2.0).
 *        2. Crie o ZIP novo (`festadosanguedejesus-1.2.0.zip`).
 *        3. Atualize o `update.json` com a nova versão e URL do ZIP.
 *        4. Os sites que usam o tema vão ver "Atualização disponível"
 *           em até 12h (ou imediatamente em Painel → Atualizações).
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Slug do tema (precisa bater com o nome da pasta em wp-content/themes).
 */
const FSDJ_UPDATE_SLUG = 'festadosanguedejesus';

/**
 * Host usado no header "Update URI" — TEM que casar com o filtro abaixo.
 * Troque para o domínio que vai servir o update.json.
 */
const FSDJ_UPDATE_HOST = 'festadosanguedejesus.com.br';

/**
 * Filtro: WP procura update no host customizado.
 * Nome dinâmico do filtro: update_themes_{host}.
 */
add_filter( 'update_themes_' . FSDJ_UPDATE_HOST, 'fsdj_check_remote_update', 10, 4 );

function fsdj_check_remote_update( $update, $theme_data, $theme_stylesheet, $locales ) {
	// Se outro plugin já resolveu, deixa quieto.
	if ( ! empty( $update ) ) {
		return $update;
	}

	// Cache de 12h para não bater no servidor toda hora.
	$cache_key = 'fsdj_remote_update';
	$remote    = get_site_transient( $cache_key );

	if ( false === $remote ) {
		// URL extraída do "Update URI" do style.css (todo o resto do path
		// fica em $theme_data['UpdateURI']).
		$endpoint = isset( $theme_data['UpdateURI'] ) ? $theme_data['UpdateURI'] : '';
		if ( ! $endpoint ) {
			return $update;
		}

		$response = wp_safe_remote_get( $endpoint, array(
			'timeout' => 10,
			'headers' => array( 'Accept' => 'application/json' ),
		) );

		if ( is_wp_error( $response ) || 200 !== wp_remote_retrieve_response_code( $response ) ) {
			set_site_transient( $cache_key, array(), HOUR_IN_SECONDS ); // memoriza falha por 1h
			return $update;
		}

		$remote = json_decode( wp_remote_retrieve_body( $response ), true );
		if ( ! is_array( $remote ) ) {
			$remote = array();
		}
		set_site_transient( $cache_key, $remote, 12 * HOUR_IN_SECONDS );
	}

	if ( empty( $remote['version'] ) || empty( $remote['download_url'] ) ) {
		return $update;
	}

	// Compara com a versão instalada — se igual ou menor, não tem update.
	$installed = isset( $theme_data['Version'] ) ? $theme_data['Version'] : '0.0.0';
	if ( version_compare( $remote['version'], $installed, '<=' ) ) {
		return $update;
	}

	return array(
		'theme'        => $theme_stylesheet,
		'new_version'  => $remote['version'],
		'url'          => isset( $remote['details_url'] ) ? $remote['details_url'] : '',
		'package'      => $remote['download_url'],
		'requires'     => isset( $remote['requires'] )     ? $remote['requires']     : '',
		'requires_php' => isset( $remote['requires_php'] ) ? $remote['requires_php'] : '',
	);
}

/**
 * Limpa o cache quando o admin clica em "Verificar novamente" no Painel
 * → Atualizações. Sem isso o usuário ficaria esperando 12h por update novo.
 */
add_action( 'load-update-core.php', function () {
	delete_site_transient( 'fsdj_remote_update' );
} );

/**
 * Botão extra no admin para forçar verificação manual.
 * Aparece em Aparência → Temas (se o usuário for admin).
 */
add_filter( 'theme_action_links_' . FSDJ_UPDATE_SLUG, function ( $links ) {
	if ( ! current_user_can( 'update_themes' ) ) {
		return $links;
	}
	$url = wp_nonce_url(
		add_query_arg( array( 'fsdj_check_update' => 1 ), admin_url( 'themes.php' ) ),
		'fsdj_check_update'
	);
	$links[] = '<a href="' . esc_url( $url ) . '">Verificar atualização</a>';
	return $links;
} );

add_action( 'admin_init', function () {
	if ( empty( $_GET['fsdj_check_update'] ) ) return;
	check_admin_referer( 'fsdj_check_update' );
	delete_site_transient( 'fsdj_remote_update' );
	delete_site_transient( 'update_themes' );
	wp_safe_redirect( admin_url( 'themes.php' ) );
	exit;
} );
