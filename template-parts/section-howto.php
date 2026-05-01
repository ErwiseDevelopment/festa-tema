<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<?php
$items = array(
	array(
		'svg'   => '<svg viewBox="0 0 24 24"><path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/></svg>',
		'title' => 'Aeroporto mais próximo',
		'desc'  => 'Vitória - ES (VIX)',
	),
	array(
		'svg'   => '<svg viewBox="0 0 24 24"><path d="M19 17h2v-3h-2"/><path d="M14 17h-3v-7h10v7h-3"/><path d="M14 17a2 2 0 1 0 4 0 2 2 0 0 0-4 0z"/><path d="M2 17h3"/><path d="M5 17a2 2 0 1 0 4 0 2 2 0 0 0-4 0z"/><path d="M11 17H7"/><path d="M2 6h17v4H2z"/></svg>',
		'title' => 'Rodoviária',
		'desc'  => 'Vila Velha - ES',
	),
	array(
		'svg'   => '<svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
		'title' => 'Caravana',
		'desc'  => 'Convide sua família, amigos e traga sua caravana!',
	),
);
?>
<section class="howto" id="localizacao">
	<div class="howto__bg" style="background-image:url('<?php echo fsdj_img( 'localizacao-bg.png' ); ?>')"></div>
	<div class="howto__radial"></div>
	<div class="howto__redbg" style="background-image:url('<?php echo fsdj_img( 'bg-overlay-red.png' ); ?>')"></div>
	<div class="howto__cross"></div>
	<div class="howto__divider gold-divider"></div>

	<div class="howto__inner">
		<div class="reveal reveal--blur">
			<h2 class="howto__title text-gold-gradient">Localização</h2>
		</div>

		<div class="howto__grid">
			<div>
				<div class="howto__cards" data-stagger>
					<?php foreach ( $items as $i => $it ) : ?>
						<div class="howto-card reveal reveal--left" style="--i:<?php echo (int) $i; ?>">
							<?php echo $it['svg']; ?>
							<div>
								<h4 class="howto-card__title"><?php echo esc_html( $it['title'] ); ?></h4>
								<p class="howto-card__desc"><?php echo esc_html( $it['desc'] ); ?></p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>

				<div class="howto__address reveal">
					<svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
					<span>Rua dos Golfinhos, 1175, Retiro do Congo, Vila Velha/ES</span>
				</div>

				<a class="gold-btn reveal" style="color: var(--c-red-deep);"
				   href="<?php echo esc_url( fsdj_cfg( 'whatsapp' ) ); ?>"
				   target="_blank" rel="noopener">
					<span style="display:inline-flex;align-items:center;gap:.5rem;">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
						FALE CONOSCO
					</span>
				</a>
			</div>

			<div class="howto__map reveal reveal--right">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d3737.8128209452925!2d-40.3670828!3d-20.4728797!3m2!1i1024!2i768!4f13.1!2m1!1sRua%20dos%20Golfinhos%201175%20Retiro%20do%20Congo%20Vila%20Velha%20ES!5e0!3m2!1spt-BR!2sbr!4v1772658823494!5m2!1spt-BR!2sbr"
					loading="lazy"
					allowfullscreen
					referrerpolicy="no-referrer-when-downgrade"
					title="Localização do evento"></iframe>
			</div>
		</div>
	</div>
</section>
