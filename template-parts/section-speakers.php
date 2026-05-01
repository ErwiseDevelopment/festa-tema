<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<?php
$speakers = array(
	array( 'name' => 'RAQUEL CARPENTER', 'image' => 'raquel_02.png' ),
	array( 'name' => 'Geraldinho',       'image' => 'geraldinho.png' ),
	array( 'name' => 'TONY ALLYSSON',    'image' => 'tony_02.png' ),
	array( 'name' => 'ELIANA RIBEIRO',   'image' => 'eliana-ribeiro.png' ),
	array( 'name' => 'PADRE GUDIALACE',  'image' => 'padre_03.png' ),
	array( 'name' => 'KATIA ROLDI',      'image' => 'katia_02.png' ),
	array( 'name' => 'DUNGA',            'image' => 'dunga_02.png' ),
);
?>
<section class="speakers" id="convidados">
	<div class="speakers__bg" style="background-image:url('<?php echo fsdj_img( 'convidados-bg.jpg' ); ?>')"></div>
	<div class="speakers__dim"></div>
	<div class="speakers__atmos" style="background-image:url('<?php echo fsdj_img( 'bg-atmosphere.png' ); ?>')"></div>
	<div class="speakers__redbg" style="background-image:url('<?php echo fsdj_img( 'bg-overlay-red.png' ); ?>')"></div>
	<div class="speakers__divider gold-divider"></div>

	<div class="speakers__inner">
		<h2 class="speakers__title reveal reveal--blur">Presenças Confirmadas</h2>

		<div class="speakers__grid" data-stagger>
			<?php foreach ( $speakers as $i => $s ) : ?>
				<div class="speaker reveal reveal--zoom" style="--i:<?php echo (int) $i; ?>">
					<div class="speaker__photo">
						<img src="<?php echo fsdj_img( $s['image'] ); ?>" alt="<?php echo esc_attr( $s['name'] ); ?>" loading="lazy">
					</div>
					<p class="speaker__name"><?php echo esc_html( $s['name'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="reveal">
			<p class="speakers__quote">É graça sobre graça, e benção sobre benção!</p>
			<p class="speakers__sub">Tudo isso só faz sentido se você estiver lá.</p>
			<div class="speakers__cta">
				<a href="#ingressos" class="gold-btn" style="color: var(--c-red-deep);">inscrever-se</a>
			</div>
		</div>
	</div>
</section>
