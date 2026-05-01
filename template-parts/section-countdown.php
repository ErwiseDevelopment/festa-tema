<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<section class="countdown" id="countdown" data-target-date="2026-07-25T00:00:00-03:00">
	<div class="countdown__radial"></div>
	<div class="countdown__redbg" style="background-image:url('<?php echo fsdj_img( 'bg-overlay-red.png' ); ?>')"></div>
	<div class="countdown__cross"></div>
	<div class="countdown__divider gold-divider"></div>

	<div class="countdown__inner">
		<h2 class="countdown__title text-gold-gradient reveal reveal--blur">Contagem Regressiva</h2>
		<div class="countdown__grid" id="countdown-grid" data-stagger>
			<div class="cu reveal reveal--zoom" style="--i:0"><div class="cu__box"><span class="cu__num" data-cu="days">00</span></div><span class="cu__label">Dias</span></div>
			<div class="cu reveal reveal--zoom" style="--i:1"><div class="cu__box"><span class="cu__num" data-cu="hours">00</span></div><span class="cu__label">Horas</span></div>
			<div class="cu reveal reveal--zoom" style="--i:2"><div class="cu__box"><span class="cu__num" data-cu="minutes">00</span></div><span class="cu__label">Min</span></div>
			<div class="cu reveal reveal--zoom" style="--i:3"><div class="cu__box"><span class="cu__num" data-cu="seconds">00</span></div><span class="cu__label">Seg</span></div>
		</div>
	</div>
</section>
