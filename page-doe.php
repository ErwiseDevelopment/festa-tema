<?php
/**
 * Template Name: Doe
 * Slug sugerido: /doe
 *
 * Este template redireciona para o sistema de doação configurado no Customizer.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$doe_url = fsdj_cfg( 'doacao' );
if ( $doe_url ) {
	wp_redirect( esc_url_raw( $doe_url ), 302 );
	exit;
}

get_header(); ?>
<div class="page-wrap">
	<h1>Doe</h1>
	<p>O link de doação ainda não foi configurado. Acesse <a href="<?php echo esc_url( fsdj_cfg( 'site_comunidade' ) ); ?>" target="_blank" rel="noopener">comunidadeaguaviva.com</a> para mais informações.</p>
</div>
<?php get_footer();
