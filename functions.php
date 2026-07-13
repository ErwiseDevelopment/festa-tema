<?php
/**
 * Festa do Sangue de Jesus — functions.php
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'FSDJ_THEME_VERSION', '1.4.1' );

/**
 * Atualização automática do tema via GitHub (biblioteca YahnisElsts PUC v5).
 * Mostra "Atualização disponível" no painel do WordPress e instala com 1 clique,
 * comparando a Version do style.css no repositório com a versão instalada.
 *
 * Repo: https://github.com/ErwiseDevelopment/festa-tema  (PÚBLICO — não exige token).
 * A pasta do tema ("festadosanguedejesus") difere do nome do repo ("festa-tema"),
 * por isso o repo é informado por extenso e o slug (3º parâmetro) é a pasta.
 *
 * Para lançar uma versão: suba um commit na branch `main` com a Version do style.css
 * maior que a instalada — o aviso aparece no painel em até 1h (ou na hora, ao abrir
 * Painel → Atualizações / Aparência → Temas).
 */
$fsdj_puc_loader = get_template_directory() . '/plugin-update-checker/plugin-update-checker.php';
if ( is_readable( $fsdj_puc_loader ) ) {
	require $fsdj_puc_loader;

	$fsdj_update_checker = \YahnisElsts\PluginUpdateChecker\v5\PucFactory::buildUpdateChecker(
		'https://github.com/ErwiseDevelopment/festa-tema/',
		get_template_directory() . '/functions.php',
		'festadosanguedejesus', // slug = pasta do tema (não o nome do repo).
		1                        // checagem de fundo a cada 1h.
	);

	$fsdj_update_checker->setBranch( 'main' );

	// Repo é público; se um dia virar privado, defina MEU_GH_TOKEN no wp-config.php.
	if ( defined( 'MEU_GH_TOKEN' ) && MEU_GH_TOKEN ) {
		$fsdj_update_checker->setAuthentication( MEU_GH_TOKEN );
	}

	// Checagem imediata ao abrir as telas de Atualizações/Temas.
	foreach ( array( 'load-update-core.php', 'load-themes.php' ) as $fsdj_puc_hook ) {
		add_action( $fsdj_puc_hook, array( $fsdj_update_checker, 'checkForUpdates' ) );
	}

	unset( $fsdj_puc_loader, $fsdj_puc_hook );
}

/**
 * Theme setup
 */
function fsdj_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 100,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );
	register_nav_menus( array(
		'primary' => __( 'Menu Principal', 'festadosanguedejesus' ),
		'footer'  => __( 'Menu do Rodapé', 'festadosanguedejesus' ),
	) );
}
add_action( 'after_setup_theme', 'fsdj_setup' );

/**
 * Enqueue assets
 */
function fsdj_enqueue_assets() {
	wp_enqueue_style(
		'fsdj-fonts',
		'https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap',
		array(),
		null
	);
	wp_enqueue_style(
		'fsdj-style',
		get_stylesheet_uri(),
		array(),
		FSDJ_THEME_VERSION
	);
	wp_enqueue_style(
		'fsdj-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'fsdj-style' ),
		FSDJ_THEME_VERSION
	);
	wp_enqueue_script(
		'fsdj-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		FSDJ_THEME_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'fsdj_enqueue_assets' );

/**
 * Helper — image URL inside the theme.
 */
function fsdj_img( $file ) {
	return esc_url( get_template_directory_uri() . '/assets/images/' . ltrim( $file, '/' ) );
}

/**
 * Helper — config map (overrides via Customizer).
 */
function fsdj_config() {
	$defaults = array(
		'instagram_festa'      => 'https://www.instagram.com/festadosanguedejesus/',
		'instagram_comunidade' => 'https://www.instagram.com/comaguaviva/',
		'instagram_raquel'     => 'https://www.instagram.com/raquelaguaviva/',
		'site_comunidade'      => 'https://comunidadeaguaviva.com',
		'whatsapp'             => 'https://wa.me/5527999635665?text=Preciso%20de%20ajuda%20para%20chegar%20na%20Festa%20do%20Sangue%20de%20Jesus%202026',
		'email'                => 'contato@festadosanguedejesus.com.br',
		'doacao'               => 'https://doacoesfestadosangue.doardigital.com.br/doacao',
		'ingresso_gratuito'    => 'https://eventos.comunidadeaguaviva.com/evento/ingresso-gratuito',
		'ingresso_promocional' => 'https://eventos.comunidadeaguaviva.com/evento/ingresso',
		'ingresso_online'      => 'https://eventos.comunidadeaguaviva.com/evento/ingresso-online',
		'ingresso_vitoria'     => 'https://eventos.comunidadeaguaviva.com/evento/ingresso-vip',
		'ingresso_experiencia' => 'https://eventos.comunidadeaguaviva.com/evento/ingresso-experiencia',
		'ingresso_eu_sou'      => 'https://eventos.comunidadeaguaviva.com/evento/eu-sou-vitorioso-',
		'ingresso_vitoria_hoje'=> 'https://eventos.comunidadeaguaviva.com/evento/ingresso-vitoria-de-hoje',
		'endereco'             => 'Rua dos Golfinhos, 1175, Retiro do Congo, Vila Velha/ES',
		'data_evento'          => '25 e 26 de Julho de 2026',
	);
	return apply_filters( 'fsdj_config', $defaults );
}
function fsdj_cfg( $key ) {
	$cfg = fsdj_config();
	return isset( $cfg[ $key ] ) ? $cfg[ $key ] : '';
}

/**
 * Customizer — todos os links do tema editáveis.
 */
function fsdj_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'fsdj_links', array(
		'title'    => __( 'FSDJ — Links e Contatos', 'festadosanguedejesus' ),
		'priority' => 40,
	) );
	$fields = array(
		'instagram_festa'      => array( 'label' => 'Instagram da Festa',           'type' => 'url' ),
		'instagram_comunidade' => array( 'label' => 'Instagram da Comunidade',      'type' => 'url' ),
		'instagram_raquel'     => array( 'label' => 'Instagram da Raquel',          'type' => 'url' ),
		'site_comunidade'      => array( 'label' => 'Site da Comunidade',           'type' => 'url' ),
		'whatsapp'             => array( 'label' => 'Link de WhatsApp',             'type' => 'url' ),
		'email'                => array( 'label' => 'E-mail de contato',            'type' => 'text' ),
		'doacao'               => array( 'label' => 'Link de Doação',               'type' => 'url' ),
		'ingresso_gratuito'    => array( 'label' => 'URL Ingresso Vitória (free)',   'type' => 'url' ),
		'ingresso_promocional' => array( 'label' => 'URL Ingresso Vitória (promo)',  'type' => 'url' ),
		'ingresso_online'      => array( 'label' => 'URL Passaporte Gota (online)',  'type' => 'url' ),
		'ingresso_vitoria'     => array( 'label' => 'URL Passaporte Vitorioso',      'type' => 'url' ),
		'ingresso_experiencia' => array( 'label' => 'URL Desperta Vitorioso',        'type' => 'url' ),
		'ingresso_eu_sou'      => array( 'label' => 'URL Eu Sou Vitorioso',          'type' => 'url' ),
		'ingresso_vitoria_hoje'=> array( 'label' => 'URL Vitória de Hoje',           'type' => 'url' ),
		'endereco'             => array( 'label' => 'Endereço do evento',           'type' => 'text' ),
		'data_evento'          => array( 'label' => 'Data do evento',               'type' => 'text' ),
	);
	foreach ( $fields as $key => $f ) {
		$wp_customize->add_setting( 'fsdj_' . $key, array(
			'default'           => fsdj_cfg( $key ),
			'sanitize_callback' => 'url' === $f['type'] ? 'esc_url_raw' : 'sanitize_text_field',
		) );
		$wp_customize->add_control( 'fsdj_' . $key, array(
			'label'   => $f['label'],
			'section' => 'fsdj_links',
			'type'    => $f['type'],
		) );
	}
}
add_action( 'customize_register', 'fsdj_customize_register' );

add_filter( 'fsdj_config', function ( $cfg ) {
	foreach ( array_keys( $cfg ) as $key ) {
		$val = get_theme_mod( 'fsdj_' . $key );
		if ( ! empty( $val ) ) {
			$cfg[ $key ] = $val;
		}
	}
	return $cfg;
} );

/**
 * Patrocinadores da Vida — número de slots por nível no Customizer.
 * Ajustar aqui caso precise de mais espaços.
 */
function fsdj_sponsor_slots() {
	return array(
		'ouro'   => array( 'label' => 'Ouro',   'count' => 6 ),
		'prata'  => array( 'label' => 'Prata',  'count' => 8 ),
		'bronze' => array( 'label' => 'Bronze', 'count' => 12 ),
	);
}

/**
 * Customizer — campos de upload para os logos de patrocinadores por nível.
 */
function fsdj_customize_register_sponsors( $wp_customize ) {
	$wp_customize->add_section( 'fsdj_sponsors', array(
		'title'       => __( 'FSDJ — Patrocinadores da Vida', 'festadosanguedejesus' ),
		'description' => __( 'Faça upload dos logos para cada nível. Ouro aparece maior, Prata médio e Bronze menor.', 'festadosanguedejesus' ),
		'priority'    => 41,
	) );

	foreach ( fsdj_sponsor_slots() as $tier => $cfg ) {
		for ( $i = 1; $i <= $cfg['count']; $i++ ) {
			$img_key = "fsdj_sponsor_{$tier}_{$i}_image";

			$wp_customize->add_setting( $img_key, array(
				'default'           => '',
				'sanitize_callback' => 'absint',
			) );
			$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, $img_key, array(
				'label'     => sprintf( '%s — Logo #%d', $cfg['label'], $i ),
				'section'   => 'fsdj_sponsors',
				'mime_type' => 'image',
			) ) );
		}
	}
}
add_action( 'customize_register', 'fsdj_customize_register_sponsors' );

/**
 * Lê os patrocinadores cadastrados no Customizer agrupados por nível.
 * Retorna apenas os slots que têm imagem.
 */
function fsdj_get_sponsors() {
	$out = array();
	foreach ( fsdj_sponsor_slots() as $tier => $cfg ) {
		$logos = array();
		for ( $i = 1; $i <= $cfg['count']; $i++ ) {
			$att_id = (int) get_theme_mod( "fsdj_sponsor_{$tier}_{$i}_image" );
			if ( ! $att_id ) { continue; }
			$src = wp_get_attachment_image_url( $att_id, 'large' );
			if ( ! $src ) { continue; }
			$logos[] = array(
				'src' => $src,
				'alt' => get_post_meta( $att_id, '_wp_attachment_image_alt', true ),
			);
		}
		$out[ $tier ] = array(
			'logos' => $logos,
		);
	}
	return $out;
}

/**
 * Apoiadores — número de slots de logo disponíveis no Customizer.
 * Aumentar o número caso precise de mais espaços.
 */
function fsdj_apoiador_slots() {
	return 12;
}

/**
 * Customizer — campos de upload para os logos dos apoiadores.
 */
function fsdj_customize_register_apoiadores( $wp_customize ) {
	$wp_customize->add_section( 'fsdj_apoiadores', array(
		'title'       => __( 'FSDJ — Apoiadores', 'festadosanguedejesus' ),
		'description' => __( 'Faça upload dos logos dos apoiadores. Aparecem em uma faixa menor, logo abaixo dos Patrocinadores da Vida.', 'festadosanguedejesus' ),
		'priority'    => 42,
	) );

	for ( $i = 1; $i <= fsdj_apoiador_slots(); $i++ ) {
		$img_key = "fsdj_apoiador_{$i}_image";
		$wp_customize->add_setting( $img_key, array(
			'default'           => '',
			'sanitize_callback' => 'absint',
		) );
		$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, $img_key, array(
			'label'     => sprintf( 'Apoiador — Logo #%d', $i ),
			'section'   => 'fsdj_apoiadores',
			'mime_type' => 'image',
		) ) );
	}
}
add_action( 'customize_register', 'fsdj_customize_register_apoiadores' );

/**
 * Lê os apoiadores cadastrados no Customizer.
 * Retorna apenas os slots que têm imagem.
 */
function fsdj_get_apoiadores() {
	$logos = array();
	for ( $i = 1; $i <= fsdj_apoiador_slots(); $i++ ) {
		$att_id = (int) get_theme_mod( "fsdj_apoiador_{$i}_image" );
		if ( ! $att_id ) { continue; }
		$src = wp_get_attachment_image_url( $att_id, 'large' );
		if ( ! $src ) { continue; }
		$logos[] = array(
			'src' => $src,
			'alt' => get_post_meta( $att_id, '_wp_attachment_image_alt', true ),
		);
	}
	return $logos;
}

/**
 * Ingressos — modalidades que podem ser marcadas como Esgotado.
 * A chave (tier) deve bater com o 'tier' usado em
 * template-parts/section-tickets.php.
 */
function fsdj_ticket_tiers() {
	return array(
		'premium'      => 'Passaporte Desperta Vitorioso',
		'highlight'    => 'Passaporte Vitorioso',
		'gota'         => 'Passaporte Gotas de Misericórdia',
		'vitoria'      => 'Ingresso Vitória (gratuito)',
		'vitoria-promo' => 'Ingresso Vitória (promocional)',
		'eu-sou'       => 'Ingresso Eu Sou Vitorioso',
		'vitoria-hoje' => 'Ingresso Vitória de Hoje',
	);
}

/**
 * Sanitiza um checkbox do Customizer (retorna 1 ou 0).
 */
function fsdj_sanitize_checkbox( $checked ) {
	return ( isset( $checked ) && true === (bool) $checked ) ? 1 : 0;
}

/**
 * Estado "Esgotado" padrão de cada modalidade, antes de qualquer ajuste no Customizer.
 * O Ingresso Vitória (gratuito) já nasce ESGOTADO; as demais nascem disponíveis.
 * Pode ser revertido a qualquer momento em Aparência → Personalizar → "FSDJ — Ingressos (Esgotado)".
 */
function fsdj_soldout_default( $tier ) {
	return ( 'vitoria' === $tier ) ? 1 : 0;
}

/**
 * Customizer — marcar/desmarcar cada modalidade de ingresso como Esgotado.
 */
function fsdj_customize_register_tickets( $wp_customize ) {
	$wp_customize->add_section( 'fsdj_tickets', array(
		'title'       => __( 'FSDJ — Ingressos (Esgotado)', 'festadosanguedejesus' ),
		'description' => __( 'Marque para exibir "ESGOTADO" no lugar do preço e do botão. Desmarque para voltar a vender.', 'festadosanguedejesus' ),
		'priority'    => 43,
	) );

	foreach ( fsdj_ticket_tiers() as $tier => $label ) {
		$key = 'fsdj_soldout_' . str_replace( '-', '_', $tier );
		$wp_customize->add_setting( $key, array(
			'default'           => fsdj_soldout_default( $tier ),
			'sanitize_callback' => 'fsdj_sanitize_checkbox',
		) );
		$wp_customize->add_control( $key, array(
			'label'   => sprintf( 'Esgotado — %s', $label ),
			'section' => 'fsdj_tickets',
			'type'    => 'checkbox',
		) );
	}
}
add_action( 'customize_register', 'fsdj_customize_register_tickets' );

/**
 * Retorna se uma modalidade está marcada como Esgotada no Customizer.
 */
function fsdj_is_sold_out( $tier ) {
	$key = 'fsdj_soldout_' . str_replace( '-', '_', $tier );
	return (bool) get_theme_mod( $key, fsdj_soldout_default( $tier ) );
}
