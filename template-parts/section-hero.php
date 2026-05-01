<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<section class="hero" id="inicio">
	<video class="hero__video" autoplay muted loop playsinline poster="<?php echo fsdj_img( 'hero-bg.jpg' ); ?>">
		<source src="<?php echo esc_url( get_template_directory_uri() . '/assets/videos/hero-video.mov' ); ?>" type="video/mp4">
	</video>
	<div class="hero__overlay-1"></div>
	<div class="hero__overlay-2"></div>
	<img class="hero__atmosphere" src="<?php echo fsdj_img( 'bg-atmosphere.png' ); ?>" alt="" aria-hidden="true">
	<div class="hero__bottom-fade"></div>

	<div class="hero__content">
		<div class="hero__title">
			<img src="<?php echo fsdj_img( 'hero-logo-text.png' ); ?>" alt="Festa do Sangue de Jesus 2026">
		</div>

		<p class="hero__quote">
			"Sob a Cruz, recolhemos a vida<br>no Sangue de Jesus."
		</p>

		<a href="#ingressos" class="hero__cta gold-btn gold-btn--lg gold-btn--pulse" style="color:#291F61;">
			Inscreva-se Agora
		</a>
	</div>

	<a href="#impact" class="hero__scroll animate-bounce" aria-label="Rolar para baixo">
		<span>Scroll</span>
		<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
	</a>
</section>
