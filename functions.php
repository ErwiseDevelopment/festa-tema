<?php
/**
 * Festa do Sangue de Jesus — functions.php
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'FSDJ_THEME_VERSION', '1.1.2' );

/**
 * Atualização automática do tema (servidor próprio + Update URI).
 * Veja inc/updater.php para o passo-a-passo de como hospedar o update.json.
 */
require_once get_template_directory() . '/inc/updater.php';

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
