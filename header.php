<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta name="description" content="25 e 26 de julho — Festa do Sangue de Jesus 2026 em Vila Velha/ES. Uma experiência de fé, oração e restauração.">
	<meta name="theme-color" content="#0a0a0a">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="nav" id="site-nav">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav__left" aria-label="Sangue de Jesus">
		<?php if ( has_custom_logo() ) : the_custom_logo(); else : ?>
			<img src="<?php echo fsdj_img( 'logo-oficial.png' ); ?>" alt="Sangue de Jesus" width="120" height="56">
		<?php endif; ?>
	</a>

	<div class="nav__divider" aria-hidden="true"></div>

	<div class="nav__right">
		<div class="nav__date">
			<img src="<?php echo fsdj_img( 'nome_e_dta_1.png' ); ?>" alt="25 e 26 de Julho de 2026">
		</div>

		<div class="nav__menu">
			<a href="<?php echo esc_url( home_url( '/#participe' ) ); ?>">Conheça</a>
			<span class="sep">|</span>
			<a href="<?php echo esc_url( home_url( '/patrocine/' ) ); ?>">Patrocine</a>
			<span class="sep">|</span>
			<a href="<?php echo esc_url( fsdj_cfg( 'doacao' ) ); ?>" target="_blank" rel="noopener">Doe</a>
			<a href="<?php echo esc_url( home_url( '/#ingressos' ) ); ?>" class="nav__cta">Ingressos</a>
		</div>

		<button class="nav__toggle" id="nav-toggle" aria-label="Abrir menu" aria-expanded="false">
			<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
		</button>
	</div>

	<div class="nav__mobile" id="nav-mobile" aria-hidden="true">
		<ul>
			<li><a href="<?php echo esc_url( home_url( '/#participe' ) ); ?>">Conheça</a></li>
			<li><a href="<?php echo esc_url( home_url( '/patrocine/' ) ); ?>">Patrocine</a></li>
			<li><a href="<?php echo esc_url( fsdj_cfg( 'doacao' ) ); ?>" target="_blank" rel="noopener">Doe</a></li>
			<li><a href="<?php echo esc_url( home_url( '/#ingressos' ) ); ?>" class="nav__cta">Ingressos</a></li>
		</ul>
	</div>
</nav>

<main id="site-main">
