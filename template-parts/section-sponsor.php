<?php if ( ! defined( 'ABSPATH' ) ) { exit; }

/* ── Patrocinadores da Vida ──────────────────────────────────────────────
 * Logos são gerenciados em: Aparência → Personalizar → FSDJ — Patrocinadores da Vida.
 * Ouro aparece maior, Prata médio, Bronze menor.
 */
$sp_levels  = fsdj_get_sponsors();
$sp_has_any = false;
foreach ( $sp_levels as $lv ) {
	if ( ! empty( $lv['logos'] ) ) { $sp_has_any = true; break; }
}
?>
<section class="sponsor" id="patrocinadores">
	<div class="sponsor__radial"></div>
	<div class="sponsor__redbg" style="background-image:url('<?php echo fsdj_img( 'bg-overlay-red.png' ); ?>')"></div>
	<div class="sponsor__cross"></div>
	<div class="sponsor__divider gold-divider"></div>

	<div class="sponsor__inner">
		<h2 class="sponsor__title text-gold-gradient reveal reveal--blur">Patrocinador da Vida</h2>

		<?php if ( $sp_has_any ) : ?>
			<div class="reveal sponsor__levels">
				<?php foreach ( $sp_levels as $tier => $level ) :
					if ( empty( $level['logos'] ) ) { continue; }
					?>
					<div class="sponsor__level sponsor__level--<?php echo esc_attr( $tier ); ?>">
						<div class="sponsor__logos sponsor__logos--<?php echo esc_attr( $tier ); ?>">
							<?php foreach ( $level['logos'] as $logo ) : ?>
								<div class="sponsor__logo">
									<img src="<?php echo esc_url( $logo['src'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" loading="lazy">
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php else : ?>
			<div class="reveal">
				<div class="sponsor__logos">
					<div class="sponsor__slot">Logo</div>
					<div class="sponsor__slot">Logo</div>
					<div class="sponsor__slot">Logo</div>
					<div class="sponsor__slot">Logo</div>
				</div>
				<p class="sponsor__note">Espaço reservado para patrocinadores</p>
			</div>
		<?php endif; ?>

		<div class="reveal" style="margin-top:3rem;">
			<a href="<?php echo esc_url( home_url( '/patrocine/' ) ); ?>" class="gold-btn" style="color: var(--c-red-deep);">Quero Patrocinar</a>
		</div>

		<?php
		/* ── Apoiadores ──────────────────────────────────────────────────
		 * Faixa menor de logos, gerenciada em: Aparência → Personalizar → FSDJ — Apoiadores.
		 */
		$apoiadores = fsdj_get_apoiadores();
		?>
		<div class="sponsor__supporters reveal">
			<h3 class="sponsor__supporters-title">Apoiadores</h3>

			<?php if ( ! empty( $apoiadores ) ) : ?>
				<div class="sponsor__supporters-logos">
					<?php foreach ( $apoiadores as $logo ) : ?>
						<div class="sponsor__supporters-logo">
							<img src="<?php echo esc_url( $logo['src'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" loading="lazy">
						</div>
					<?php endforeach; ?>
				</div>
			<?php else : ?>
				<div class="sponsor__supporters-logos">
					<div class="sponsor__supporters-slot">Logo</div>
					<div class="sponsor__supporters-slot">Logo</div>
					<div class="sponsor__supporters-slot">Logo</div>
					<div class="sponsor__supporters-slot">Logo</div>
				</div>
				<p class="sponsor__note">Espaço reservado para apoiadores</p>
			<?php endif; ?>
		</div>
	</div>
</section>
