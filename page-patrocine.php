<?php
/**
 * Template Name: Patrocine
 * Slug sugerido: /patrocine
 *
 * Espelha src/pages/Patrocine.tsx do projeto React.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* ── Cards de impacto (seção 3) ─────────────────────────────────────── */
$impact_cards = array(
	array(
		'svg'   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
		'title' => '+ 2.000 vidas impactadas',
		'text'  => 'Impactadas diretamente no último ano.',
	),
	array(
		'svg'   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>',
		'title' => 'Expectativa 2026',
		'text'  => 'Mais de 3.000 pessoas vindas de todo o Brasil.',
	),
	array(
		'svg'   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
		'title' => 'Alcance Digital',
		'text'  => 'Milhares de pessoas conectadas via lives e redes sociais.',
	),
);

/* ── Sistema de ícones de benefícios ─────────────────────────────────── */
$sp_benefits = array(
	array( 'label' => 'Outdoor',              'svg' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11l18-5v12L3 14v-3z"/><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"/></svg>' ),
	array( 'label' => 'Totem em shopping',    'svg' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>' ),
	array( 'label' => 'Rádio',                'svg' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.9 19.1C1 15.2 1 8.8 4.9 4.9"/><path d="M7.8 16.2c-2.3-2.3-2.3-6.1 0-8.5"/><circle cx="12" cy="12" r="2"/><path d="M16.2 7.8c2.3 2.3 2.3 6.1 0 8.5"/><path d="M19.1 4.9C23 8.8 23 15.2 19.1 19.1"/></svg>' ),
	array( 'label' => 'Painel de LED',        'svg' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="15" rx="2"/><polyline points="17 2 12 7 7 2"/></svg>' ),
	array( 'label' => 'Backdrop',             'svg' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>' ),
	array( 'label' => 'Microfone',            'svg' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/><line x1="12" y1="19" x2="12" y2="23"/><line x1="8" y1="23" x2="16" y2="23"/></svg>' ),
	array( 'label' => 'Instagram',            'svg' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>' ),
	array( 'label' => 'Transmissão ao vivo',  'svg' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>' ),
	array( 'label' => 'Kit exclusivo',        'svg' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 12 20 22 4 22 4 12"/><rect x="2" y="7" width="20" height="5"/><line x1="12" y1="22" x2="12" y2="7"/><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"/><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"/></svg>' ),
	array( 'label' => 'Stand de ativação',    'svg' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9h18l-2 12H5L3 9z"/><path d="M3 9l1-5h16l1 5"/><path d="M9 13v4M15 13v4"/></svg>' ),
	array( 'label' => 'Merchandising',        'svg' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/><path d="M18 14h-8M15 18h-5M10 6h8M18 10h-8"/></svg>' ),
);

/* ── Cotas ──────────────────────────────────────────────────────────── */
$sp_tiers = array(
	array(
		'name'        => 'COTA OURO',
		'subtitle'    => 'Parceiro de Resgate',
		'description' => 'O nível máximo de visibilidade e compromisso com a causa.',
		'tier'        => 'premium',
		'badge'       => 'DESTAQUE MÁXIMO',
		'accent'      => '#E2BE72',
		'accent_rgb'  => '226, 190, 114',
		'cta_dark'    => true,
		'active'      => array( 0, 1, 3, 4, 5, 6, 7, 8, 9, 10 ),
		'details'     => array(
			array(
				'heading' => 'Destaque Total',
				'items'   => array(
					'Divulgação da sua marca em Outdoor',
					'Divulgação em Totem expositor em shopping',
					'Divulgação em destaque no painel de LED do palco',
					'Sua marca em destaque no painel estruturado Backdrop',
					'Agradecimentos feitos no microfone',
				),
			),
			array(
				'heading' => 'Presença Digital',
				'items'   => array(
					'Postagem carrossel exclusivo após a festa no Instagram (@comaguaviva e @raquelaguaviva)',
					'Logo em destaque nas transmissões ao vivo (abertura, intervalos e encerramento)',
				),
			),
			array(
				'heading' => 'Experiência',
				'items'   => array(
					'Kit Exclusivo Patrocinador Ouro',
					'Espaço físico (stand) para ativação da marca',
					'Menções honrosas constantes durante os dois dias',
				),
			),
			array(
				'heading' => 'Ação de Merchandising',
				'items'   => array(
					'Materiais impressos poderão ser inseridos no kit oficial da Festa para todos os participantes confirmados.',
				),
			),
		),
	),
	array(
		'name'        => 'COTA PRATA',
		'subtitle'    => 'Pilar da Missão',
		'description' => 'Presença estratégica para marcas que acreditam na transformação social.',
		'tier'        => 'highlight',
		'badge'       => '',
		'accent'      => '#BFC3C9',
		'accent_rgb'  => '191, 195, 201',
		'cta_dark'    => true,
		'active'      => array( 1, 3, 4, 5, 6, 7, 8, 9, 10 ),
		'details'     => array(
			array(
				'heading' => 'Destaque Total',
				'items'   => array(
					'Divulgação em Totem expositor em shopping',
					'Divulgação no painel de LED do palco',
					'Logo no Backdrop',
					'Agradecimentos no microfone',
				),
			),
			array(
				'heading' => 'Presença Digital',
				'items'   => array(
					'Story exclusivo após a festa (@comaguaviva e @raquelaguaviva)',
					'Logo nas transmissões ao vivo (abertura e encerramento)',
				),
			),
			array(
				'heading' => 'Experiência',
				'items'   => array(
					'Kit Exclusivo Patrocinador Prata',
					'Espaço físico (stand) para ativação da marca',
				),
			),
			array(
				'heading' => 'Ação de Merchandising',
				'items'   => array(
					'Materiais poderão ser inseridos no kit oficial da Festa.',
				),
			),
		),
	),
	array(
		'name'        => 'COTA BRONZE',
		'subtitle'    => 'Semente de Esperança',
		'description' => 'Sua marca presente no coração do evento.',
		'tier'        => 'standard',
		'badge'       => '',
		'accent'      => '#CD7F32',
		'accent_rgb'  => '205, 127, 50',
		'cta_dark'    => true,
		'active'      => array( 1, 4, 5, 6, 7, 8, 10 ),
		'details'     => array(
			array(
				'heading' => 'Destaque Total',
				'items'   => array(
					'Divulgação em Totem expositor em shopping',
					'Logo no Backdrop',
					'Agradecimentos no microfone',
				),
			),
			array(
				'heading' => 'Presença Digital',
				'items'   => array(
					'Story exclusivo após a festa (@comaguaviva)',
					'Logo nas transmissões ao vivo (abertura e encerramento)',
				),
			),
			array(
				'heading' => 'Experiência',
				'items'   => array( 'Kit Exclusivo Patrocinador Bronze' ),
			),
			array(
				'heading' => 'Ação de Merchandising',
				'items'   => array( 'Materiais poderão ser inseridos no kit oficial da Festa.' ),
			),
		),
	),
);

$wpp_url = 'https://api.whatsapp.com/send/?phone=5527999635665&text&type=phone_number&app_absent=0';
$wpp_captacao = 'https://api.whatsapp.com/send/?phone=5527995237403&text&type=phone_number&app_absent=0';

get_header(); ?>

<!-- ═══════════ HERO ═══════════ -->
<section class="pat-hero" id="patrocinador">
	<div class="pat-hero__bg">
		<img src="<?php echo fsdj_img( 'patrocine-hero.webp' ); ?>" alt="" aria-hidden="true">
		<div class="pat-hero__shade"></div>
	</div>

	<div class="pat-hero__inner">
		<h1 class="pat-hero__title reveal reveal--blur">
			SEJA UM PATROCINADOR<br>DA VIDA!
		</h1>
		<p class="pat-hero__lead reveal" style="--i:1">
			Sua <strong>EMPRESA</strong> pode ser a ponte que resgata uma vida da morte
			para a esperança.<br>
			Junte-se à Comunidade Água Viva na Festa do Sangue de Jesus 2026.<br>
			Mais que um evento, um movimento de restauração que alcança milhares de
			famílias há mais de <strong>30 anos</strong>.
		</p>
		<div class="reveal" style="--i:2">
			<a href="#oportunidades" class="gold-btn gold-btn--lg" style="color:#fff;">
				Ver oportunidades de patrocínio
			</a>
		</div>
	</div>
</section>

<!-- ═══════════ SEÇÃO 2 — Onde a dor se transforma em vida ═══════════ -->
<section class="pat-s2">
	<div class="pat-s2__bg" style="background-image:url('<?php echo fsdj_img( 'patrocine-secao2.webp' ); ?>')"></div>
	<div class="pat-s2__shade"></div>
	<div class="gold-divider" style="position:absolute;top:0;left:0;width:100%;z-index:20;"></div>

	<div class="pat-s2__inner">
		<h2 class="pat-s2__title reveal reveal--blur">
			ONDE A DOR SE TRANSFORMA EM VIDA.
		</h2>
		<div class="pat-s2__text" data-stagger>
			<p class="reveal">A Comunidade Água Viva nasceu de um sim corajoso da nossa fundadora, Raquel Carpenter.</p>
			<p class="reveal">Hoje, somos um farol para quem perdeu o sentido de viver.</p>
			<p class="reveal">Sabemos que nenhuma missão se faz sozinho.</p>
			<p class="reveal">
				Nossa história é construída por mãos generosas que acreditam, junto conosco,
				que toda vida merece uma nova chance. E você pode fazer parte disso!
			</p>
		</div>
	</div>
</section>

<!-- ═══════════ SEÇÃO 3 — Impacto em números ═══════════ -->
<section class="pat-s3">
	<div class="pat-s3__radial"></div>
	<div class="pat-s3__redbg" style="background-image:url('<?php echo fsdj_img( 'bg-overlay-red.png' ); ?>')"></div>
	<div class="pat-s3__cross"></div>
	<div class="gold-divider" style="position:absolute;top:0;left:0;width:100%;z-index:20;"></div>

	<div class="pat-s3__inner">
		<h2 class="pat-s3__title text-gold-gradient reveal reveal--blur">
			O IMPACTO DA SUA MARCA EM NÚMEROS
		</h2>

		<h3 class="pat-s3__sub reveal" style="--i:1">
			A Festa do Sangue de Jesus é o ápice do nosso calendário de evangelização.<br>
			É o momento em que a gratidão transborda.
		</h3>

		<div class="pat-s3__cards" data-stagger>
			<?php foreach ( $impact_cards as $i => $card ) : ?>
				<div class="impact-card reveal reveal--rotate" style="--i:<?php echo (int) $i; ?>">
					<div class="impact-card__icon">
						<?php echo $card['svg']; ?>
					</div>
					<h3 class="impact-card__title"><?php echo esc_html( $card['title'] ); ?></h3>
					<p class="impact-card__text"><?php echo esc_html( $card['text'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>

		<p class="pat-s3__standalone reveal">
			Ao patrocinar, você não apenas ajuda a custear o evento, mas garante que a
			Comunidade Água Viva permaneça ativa o ano todo.
		</p>
	</div>
</section>

<!-- ═══════════ SEÇÃO 4 — Cotas de patrocínio ═══════════ -->
<section class="pat-s4" id="oportunidades">
	<div class="gold-divider" style="position:absolute;top:0;left:0;width:100%;z-index:20;"></div>
	<div class="pat-s4__glow"></div>

	<div class="pat-s4__inner">
		<h2 class="pat-s4__title text-gold-gradient reveal reveal--blur">
			SUA MARCA UNIDA A UM PROPÓSITO INABALÁVEL
		</h2>
		<p class="pat-s4__lead reveal" style="--i:1">
			Escolher uma das cotas de patrocínio da Festa do Sangue de Jesus é posicionar
			sua empresa ao lado de valores como família, espiritualidade e responsabilidade
			social. É ser visto por um público fiel que valoriza e apoia quem apoia a sua fé.
		</p>

		<div class="pat-s4__grid" data-stagger>
			<?php foreach ( $sp_tiers as $idx => $sp ) :
				$accent = $sp['accent'];
			?>
				<div class="sp-wrap reveal reveal--rotate" data-open="false" style="--i:<?php echo (int) $idx; ?>; --accent:<?php echo esc_attr( $accent ); ?>; --accent-rgb:<?php echo esc_attr( $sp['accent_rgb'] ); ?>;">
					<div class="sp-card" data-tier="<?php echo esc_attr( $sp['tier'] ); ?>">

						<?php if ( $sp['badge'] ) : ?>
							<div class="sp-badge"><span><?php echo esc_html( $sp['badge'] ); ?></span></div>
						<?php endif; ?>

						<div class="sp-banner">
							<span class="sp-banner__ghost"><?php echo esc_html( $sp['name'] ); ?></span>
							<div class="sp-banner__inner">
								<h3 class="sp-banner__name"><?php echo esc_html( $sp['name'] ); ?></h3>
								<p class="sp-banner__sub"><?php echo esc_html( $sp['subtitle'] ); ?></p>
							</div>
						</div>

						<div class="sp-body">
							<p class="sp-desc"><?php echo esc_html( $sp['description'] ); ?></p>

							<div class="sp-icons">
								<?php foreach ( $sp_benefits as $bi => $b ) :
									$active = in_array( $bi, $sp['active'], true );
									?>
									<span class="sp-icon" data-active="<?php echo $active ? 'true' : 'false'; ?>">
										<?php echo $b['svg']; ?>
										<span class="sp-icon__tip"><?php echo esc_html( $b['label'] ); ?></span>
									</span>
								<?php endforeach; ?>
							</div>

							<div class="sp-spacer"></div>

							<a class="sp-cta<?php echo ! empty( $sp['cta_dark'] ) ? ' is-dark-text' : ''; ?>"
							   href="<?php echo esc_url( $wpp_url ); ?>" target="_blank" rel="noopener">
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
								Quero esta cota
							</a>
						</div>

						<button type="button" class="sp-detail-toggle" data-toggle-sp aria-expanded="false">
							<span class="sp-detail-toggle__label">Ver detalhes</span>
							<span class="sp-detail-toggle__caret" aria-hidden="true">&#9654;</span>
						</button>
					</div>

					<div class="sp-details">
						<div class="sp-details__inner">
							<?php foreach ( $sp['details'] as $section ) : ?>
								<div class="sp-section">
									<h4 class="sp-section__heading"><?php echo esc_html( $section['heading'] ); ?></h4>
									<div class="sp-section__items">
										<?php foreach ( $section['items'] as $item ) : ?>
											<p><span aria-hidden="true">&#10022;</span><?php echo esc_html( $item ); ?></p>
										<?php endforeach; ?>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ═══════════ SEÇÃO 5 — CTA WhatsApp ═══════════ -->
<section class="pat-s5">
	<div class="pat-s5__radial"></div>
	<div class="pat-s5__redbg parallax-bg" data-parallax="0.18" style="background-image:url('<?php echo fsdj_img( 'bg-overlay-red.png' ); ?>')"></div>
	<div class="pat-s5__cross"></div>
	<div class="gold-divider" style="position:absolute;top:0;left:0;width:100%;z-index:20;"></div>

	<div class="pat-s5__inner">
		<h2 class="pat-s5__title text-gold-gradient reveal reveal--blur">
			Vamos escrever o próximo capítulo desta história juntos?
		</h2>
		<p class="pat-s5__sub reveal" style="--i:1">
			O resgate de uma vida começa com um passo de generosidade.
		</p>
		<p class="pat-s5__lead reveal" style="--i:2">
			<strong style="color:#D4AF37;">Clique no botão abaixo</strong> para falar diretamente com nosso setor de captação.
			Estamos prontos para alinhar como sua empresa pode brilhar junto conosco em 2026.
		</p>
		<div class="reveal" style="--i:3">
			<a class="gold-btn gold-btn--lg" href="<?php echo esc_url( $wpp_captacao ); ?>" target="_blank" rel="noopener" style="color:#fff;">
				<span style="display:inline-flex;align-items:center;gap:.6rem;">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
					Falar pelo WhatsApp
				</span>
			</a>
		</div>
	</div>
</section>

<!-- ═══════════ SEÇÃO 6 — Comunidade Água Viva ═══════════ -->
<section class="pat-s6">
	<div class="gold-divider" style="position:absolute;top:0;left:0;width:100%;z-index:20;"></div>

	<div class="pat-s6__inner">
		<h2 class="pat-s6__title reveal reveal--blur">
			Comunidade Água Viva: Há mais de 30 anos transformando dor em ressurreição.
		</h2>
		<p class="pat-s6__lead reveal" style="--i:1">
			Acompanhe os frutos que sua doação gera:
		</p>

		<div class="pat-s6__links" data-stagger>
			<a class="pat-s6__link reveal" href="<?php echo esc_url( fsdj_cfg( 'instagram_comunidade' ) ); ?>" target="_blank" rel="noopener">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
				@comaguaviva
			</a>
			<a class="pat-s6__link reveal" href="https://youtube.com/@comaguaviva" target="_blank" rel="noopener">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"/><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"/></svg>
				@comaguaviva
			</a>
			<a class="pat-s6__link reveal" href="<?php echo esc_url( fsdj_cfg( 'site_comunidade' ) ); ?>" target="_blank" rel="noopener">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
				comunidadeaguaviva.com
			</a>
		</div>
	</div>
</section>

<?php get_footer();
