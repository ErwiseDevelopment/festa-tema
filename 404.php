<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header(); ?>

<div class="page-wrap page-404">
	<h1>404</h1>
	<p style="color:rgba(255,255,255,.85);font-size:1.125rem;margin-bottom:2rem;">
		A página que você procura não foi encontrada.
	</p>
	<a class="gold-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: var(--c-red-deep);">
		Ir para a página inicial
	</a>
</div>

<?php get_footer();
