<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<?php
/**
 * 10 ícones de benefícios — mesma ordem do allBenefits do React.
 */
$benefits = array(
	array( 'label' => 'Acesso aos dias do evento', 'svg'   => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>' ),
	array( 'label' => 'Noite exclusiva dia 24',    'svg'   => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>' ),
	array( 'label' => 'Lugar próximo ao palco',    'svg'   => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>' ),
	array( 'label' => 'Kit físico',                'svg'   => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 12 20 22 4 22 4 12"/><rect x="2" y="7" width="20" height="5"/><line x1="12" y1="22" x2="12" y2="7"/><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"/><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"/></svg>' ),
	array( 'label' => 'Manual autografado',        'svg'   => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>' ),
	array( 'label' => '1 ano EAD CAV',             'svg'   => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>' ),
	array( 'label' => 'Transmissão online',        'svg'   => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>' ),
	array( 'label' => 'E-book digital',            'svg'   => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>' ),
	array( 'label' => 'Assento reservado',         'svg'   => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 18v-2a4 4 0 0 1 4-4h6a4 4 0 0 1 4 4v2"/><path d="M5 18v3M19 18v3"/><path d="M3 12h2v-3a3 3 0 0 1 3-3h8a3 3 0 0 1 3 3v3h2"/></svg>' ),
	array( 'label' => 'Modalidade gratuita',       'svg'   => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 9V7a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v2a2 2 0 0 0 0 4v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-2a2 2 0 0 0 0-4z"/><path d="M9 12l2 2 4-4"/></svg>' ),
);

$tickets = array(
	array(
		'tier'         => 'premium',
		'name'         => "PASSAPORTE\nDESPERTA VITORIOSO",
		'tag'          => 'Presencial',
		'subtitle'     => 'Incluso 3 dias de evento 24, 25 e 26 de Julho (Experiência Exclusiva)',
		'price'        => '12x de R$ 229,97',
		'total'        => 'R$ 2.759,64',
		'badge'        => 'MAIS COMPLETO',
		'active'       => array( 0, 1, 2, 3, 4, 5 ),
		'cta_link_key' => 'ingresso_experiencia',
		'details'      => array(
			array( 'text' => 'Acesso aos dias 24, 25 e 26 de Julho.', 'bold' => true ),
			array( 'text' => 'A experiência completa e inesquecível! Além de garantir seu lugar na frente, você terá uma vivência exclusiva na Comunidade Água Viva no dia 24/07. Participe da Live do Terço da Vitória e desfrute de um momento íntimo de fotos e autógrafos com a nossa fundadora, Raquel.', 'bold' => true ),
			array( 'text' => 'Lugar exclusivo na festa, próximo ao palco' ),
			array( 'text' => 'Kit premium (terço, cruz, livro "7 Gotas de Vitória", sinal, vela, chaveiro, caderno, caneta, caneca, camiseta, ato de consagração impresso e brindes naturais da comunidade)' ),
			array( 'text' => 'Incluso um ano de acesso à plataforma EAD CAV (Caminho de Cura Água Viva)' ),
		),
	),
	array(
		'tier'         => 'highlight',
		'name'         => 'PASSAPORTE VITORIOSO',
		'tag'          => 'Presencial',
		'subtitle'     => 'Acesso aos dias 25 e 26 de Julho com kit exclusivo, assento reservado e 1 ano de acesso ao EAD CAV',
		'price'        => '12x de R$ 99,97',
		'total'        => 'R$ 1.199,64',
		'badge'        => '',
		'active'       => array( 0, 3, 5, 8 ),
		'cta_link_key' => 'ingresso_vitoria',
		'details'      => array(
			array( 'text' => 'Acesso aos dias 25 e 26 de julho.', 'bold' => true ),
			array( 'text' => 'Kit Vitorioso (terço, cruz, livro "7 Gotas de Vitória", sinal, vela, chaveiro, caderno, caneta, caneca, camiseta, ato de consagração impresso)' ),
			array( 'text' => 'Assento reservado na fileira posterior ao Passaporte Desperta Vitorioso' ),
			array( 'text' => 'Incluso um ano de acesso à plataforma EAD CAV (Caminho de Cura Água Viva)' ),
			array( 'text' => 'Esse passaporte não dá acesso a entrada no dia 24 (sexta-feira)', 'bold' => true ),
		),
	),
	array(
		'tier'         => 'gota',
		'name'         => "PASSAPORTE\nGOTA DA VITÓRIA",
		'tag'          => 'Online',
		'subtitle'     => 'Para quem está longe e quer ajudar a festa',
		'price'        => "R$ 49,90\nON-LINE",
		'total'        => '',
		'badge'        => '',
		'active'       => array( 6, 7 ),
		'cta_link_key' => 'ingresso_online',
		'details'      => array(
			array( 'text' => 'Transmissão via plataforma própria', 'bold' => true ),
			array( 'text' => 'E-book "Desperta Vitorioso" e Ato de Consagração Digital' ),
			array( 'text' => 'Esta modalidade não permite a participação presencial.', 'bold' => true ),
		),
	),
	array(
		'tier'         => 'vitoria',
		'name'         => 'INGRESSO VITÓRIA',
		'tag'          => 'Presencial – Social',
		'subtitle'     => 'Acesso gratuito aos dias 25 e 26/07 (vagas limitadas e sem kit)',
		'price'        => 'Gratuito',
		'total'        => '',
		'badge'        => '',
		'active'       => array( 0, 9 ),
		'cta_link_key' => 'ingresso_gratuito',
		'details'      => array(
			array( 'text' => 'Modalidade Gratuita', 'bold' => true ),
			array( 'text' => 'Acesso aos dias 25 e 26 de julho de 2026' ),
			array( 'text' => 'Não incluso kits' ),
			array( 'text' => 'Sujeito à disponibilidade de lote.' ),
			array( 'text' => 'Esse passaporte não dá acesso a entrada no dia 24 (sexta-feira)', 'bold' => true ),
		),
	),
	array(
		'tier'         => 'eu-sou',
		'name'         => "INGRESSO\nEU SOU VITORIOSO",
		'tag'          => 'Presencial',
		'subtitle'     => 'Acesso aos 3 dias do evento (24, 25 e 26/07) com vivência exclusiva na Comunidade Água Viva',
		'price'        => '12x de R$ 29,90',
		'total'        => 'R$ 358,80',
		'badge'        => '',
		'active'       => array( 0, 1, 2, 8 ),
		'cta_link_key' => 'ingresso_eu_sou',
		'details'      => array(
			array( 'text' => 'Acesso aos dias 24, 25 e 26 de julho de 2026', 'bold' => true ),
			array( 'text' => 'Além de garantir seu lugar na frente, você terá uma vivência exclusiva na Comunidade Água Viva no dia 24/07. Participe da Live do Terço da Vitória e desfrute de um momento íntimo.', 'bold' => true ),
			array( 'text' => 'Lugar premium reservado' ),
			array( 'text' => 'Não incluso kits' ),
			array( 'text' => 'Sujeito à disponibilidade de lote.' ),
		),
	),
	array(
		'tier'         => 'vitoria-hoje',
		'name'         => "INGRESSO\nVITÓRIA DE HOJE",
		'tag'          => 'Presencial',
		'subtitle'     => 'Acesso aos dias 25 e 26/07 com lugar premium reservado',
		'price'        => '12x de R$ 20,97',
		'total'        => 'R$ 251,64',
		'badge'        => '',
		'active'       => array( 0, 8 ),
		'cta_link_key' => 'ingresso_vitoria_hoje',
		'details'      => array(
			array( 'text' => 'Acesso aos dias 25 e 26 de julho de 2026', 'bold' => true ),
			array( 'text' => 'Lugar premium reservado' ),
			array( 'text' => 'Não incluso kits' ),
			array( 'text' => 'Sujeito à disponibilidade de lote.' ),
			array( 'text' => 'Esse passaporte não dá acesso a entrada no dia 24 (sexta-feira)', 'bold' => true ),
		),
	),
);
?>
<section class="tickets" id="ingressos">
	<div class="tickets__radial"></div>
	<div class="tickets__redbg" style="background-image:url('<?php echo fsdj_img( 'bg-overlay-red.png' ); ?>')"></div>
	<div class="tickets__cross"></div>
	<div class="gold-divider" style="position:absolute;top:0;left:0;width:100%;"></div>

	<div class="tickets__inner">

		<div class="tickets__intro reveal reveal--blur">
			<h3 class="tickets__intro-title text-gold-gradient">Transforme Vidas através da sua Presença</h3>
			<p class="tickets__intro-text">
				Ao adquirir o seu ingresso, você não está apenas garantindo um lugar especial nesta festa;
				você está se tornando o viabilizador de um milagre.
			</p>
			<p class="tickets__intro-text">
				Sua contribuição é o que nos permite oferecer 2.000 ingressos gratuitos para quem precisa e
				levar a mensagem, via transmissão ao vivo, para milhares de lares. Todo valor arrecadado é
				integralmente revertido para a viabilização do evento. Sua generosidade garante que a
				estrutura seja paga e que possamos focar no que realmente importa: vidas sendo tocadas e
				transformadas pelo poder de Jesus.
			</p>
		</div>

		<div class="tickets__header reveal reveal--blur">
			<p class="tickets__eyebrow">Ingressos</p>
			<h2 class="tickets__title text-gold-gradient">Garanta sua vaga</h2>
			<p class="tickets__lead">
				Para que possamos preparar cada detalhe e te receber com todo o carinho que
				você merece, a sua inscrição é fundamental. Escolha abaixo a modalidade que
				melhor te atende e garanta o seu lugar na nossa Festa!
			</p>
		</div>

		<div class="tickets__grid" data-stagger>
			<?php foreach ( $tickets as $idx => $t ) :
				$slug = sanitize_title( $t['name'] . '-' . $idx );
			?>
				<div class="tk-wrap reveal reveal--rotate" data-open="false" data-tk-slug="<?php echo esc_attr( $slug ); ?>" style="--i:<?php echo (int) $idx; ?>">
					<div class="ticket-card" data-tier="<?php echo esc_attr( $t['tier'] ); ?>">

						<?php if ( $t['badge'] ) : ?>
							<div class="tk-badge"><span><?php echo esc_html( $t['badge'] ); ?></span></div>
						<?php endif; ?>

						<div class="tk-banner">
							<span class="tk-banner__ghost"><?php echo esc_html( str_replace( "\n", ' ', $t['name'] ) ); ?></span>
							<div class="tk-banner__inner">
								<h3 class="tk-banner__name"><?php echo nl2br( esc_html( $t['name'] ) ); ?></h3>
								<p class="tk-banner__tag"><?php echo esc_html( $t['tag'] ); ?></p>
							</div>
						</div>

						<div class="tk-body">
							<p class="tk-subtitle"><?php echo esc_html( $t['subtitle'] ); ?></p>

							<div class="tk-icons">
								<?php foreach ( $benefits as $bi => $b ) :
									$active = in_array( $bi, $t['active'], true );
									?>
									<span class="tk-icon" data-active="<?php echo $active ? 'true' : 'false'; ?>">
										<?php echo $b['svg']; // SVG inline. ?>
										<span class="tk-icon__tip"><?php echo esc_html( $b['label'] ); ?></span>
									</span>
								<?php endforeach; ?>
							</div>

							<div class="tk-price">
								<p class="tk-price__main"><?php echo nl2br( esc_html( $t['price'] ) ); ?></p>
								<?php if ( $t['total'] ) : ?>
									<p class="tk-price__total">Total: <?php echo esc_html( $t['total'] ); ?></p>
								<?php endif; ?>
							</div>

							<div class="tk-spacer"></div>

							<a class="tk-cta" href="<?php echo esc_url( fsdj_cfg( $t['cta_link_key'] ) ); ?>" target="_blank" rel="noopener">
								Garantir minha vaga
							</a>
						</div>

						<div class="tk-foot-line"></div>

						<button type="button" class="tk-detail-toggle" data-toggle-details aria-expanded="false">
							<span class="tk-detail-toggle__label">Ver detalhes</span>
							<span class="tk-detail-toggle__caret" aria-hidden="true">&#9654;</span>
						</button>
					</div>

					<div class="tk-details">
						<div class="tk-details__inner">
							<?php foreach ( $t['details'] as $d ) : ?>
								<p class="<?php echo ! empty( $d['bold'] ) ? 'is-bold' : ''; ?>"><?php echo esc_html( $d['text'] ); ?></p>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="tickets__close reveal reveal--blur">
			<h3 class="tickets__close-title text-gold-gradient">Seja o viabilizador de um milagre.</h3>
			<p class="tickets__close-text">
				A Live é gratuita, mas a nossa estrutura depende da sua generosidade. Adquira seu ingresso
				online voluntário e não deixe que a mensagem de Jesus pare por falta de recursos.
			</p>
		</div>
	</div>
</section>
