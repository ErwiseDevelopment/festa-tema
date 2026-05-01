<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<section class="sponsor" id="patrocinadores">
	<div class="sponsor__radial"></div>
	<div class="sponsor__redbg" style="background-image:url('<?php echo fsdj_img( 'bg-overlay-red.png' ); ?>')"></div>
	<div class="sponsor__cross"></div>
	<div class="sponsor__divider gold-divider"></div>

	<div class="sponsor__inner">
		<h2 class="sponsor__title text-gold-gradient reveal reveal--blur">Patrocinador da Vida</h2>

		<div class="reveal">
			<div class="sponsor__logos">
				<div class="sponsor__slot">Logo</div>
				<div class="sponsor__slot">Logo</div>
				<div class="sponsor__slot">Logo</div>
				<div class="sponsor__slot">Logo</div>
			</div>
			<p class="sponsor__note">Espaço reservado para patrocinadores</p>
		</div>

		<div class="reveal" style="margin-top:3rem;">
			<a href="<?php echo esc_url( home_url( '/patrocine/' ) ); ?>" class="gold-btn" style="color: var(--c-red-deep);">Quero Patrocinar</a>
		</div>
	</div>
</section>
