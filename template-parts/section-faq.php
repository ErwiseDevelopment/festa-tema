<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<?php
$faqs = array(
	array(
		'q' => 'Quando e onde exatamente vai acontecer o evento?',
		'a' => "A celebração oficial será realizada nos dias 25 e 26 de julho de 2026. No entanto, temos um momento especial: o dia 24 de julho será uma noite exclusiva e intimista, dedicada apenas aos participantes que adquirirem o Passaporte Premium \"Desperta Vitorioso\".\n\nO encontro será presencial no nosso centro de evangelização, o Sítio Fonte da Vida, localizado na Rua dos Golfinhos, 1175 - Retiro do Congo, Vila Velha/ES (CEP 29129-899). Prepare o GPS, pois o lugar é um verdadeiro refúgio espiritual!",
	),
	array(
		'q' => 'Para quem é indicada a Festa do Sangue de Jesus?',
		'a' => 'Este evento é destinado a todos aqueles que creem que o Sangue de Jesus pode mudar tudo em nossas vidas; um verdadeiro "Hospital de Almas". Ele foi pensado segundo o coração de nossa fundadora para honrar e glorificar o Sangue de Jesus. Por ser um evento católico, teremos momentos profundos de pregação, atos litúrgicos e sacramentais, sendo também uma oportunidade valiosa para conhecer pessoas que partilham do mesmo propósito e fé.',
	),
	array(
		'q' => 'As inscrições são gratuitas? Como posso participar?',
		'a' => "Nossa missão é garantir que a graça chegue a todos. Por isso, oferecemos o \"Ingresso Vitória\", que é gratuito. Procure aqui no local das inscrições e você terá acesso aos dois dias principais da festa (25 e 26 de julho).\n\nAlém deste, temos também os Passaportes. Estes você pode comprar para ter experiências exclusivas, garantir seu lugar reservado e receber nossos kits, além de ajudar diretamente a comunidade na manutenção da nossa estrutura e na missão de evangelizar.",
	),
	array(
		'q' => 'Como posso garantir que estou em um canal seguro de inscrição?',
		'a' => "A sua segurança é nossa prioridade. Para evitar fraudes, siga sempre estas duas orientações:\n\nVerifique se o domínio (endereço do site) no local das inscrições está em nome da Comunidade Água Viva.\n\nConfira se, no rodapé da página de pagamento, consta a indicação: \"Sistema Desenvolvido por Evento Santo\".\n\nEm caso de qualquer dúvida, não prossiga e entre em contato direto com a nossa equipe oficial.",
	),
	array(
		'q' => 'Quais são as diferenças entre os tipos de Passaportes e Ingressos?',
		'a' => "Existem quatro formas de participar, cada uma com detalhes específicos:\n\nPassaporte Desperta Vitorioso (Presencial Exclusivo): É a experiência completa. Dá acesso aos 3 dias (incluindo a noite de 24/07). Oferece assento reservado na frente, 1 ano de acesso à Plataforma CAV (Caminho de Cura Água Viva) e o Kit Físico Premium, que vem com camiseta, livro \"7 Gotas de Vitória\", terço, cruz de mão, caneca, caderno, caneta, vela, chaveiro, ato de consagração impressos e alguns brindes da coleção de produtos naturais Água Viva.\n\nPassaporte Vitorioso (Presencial Completo): Dá acesso aos dias 25 e 26 de julho. Inclui assento reservado (atrás do setor Premium), 1 ano de acesso à Plataforma CAV e o Kit Físico Vitorioso (terço, cruz, livro, vela, caderno, caneta, caneca e o ato de consagração impresso). Não inclui o dia 24 nem os brindes naturais.\n\nIngresso Vitória (Presencial Social): Acesso gratuito aos dias 25 e 26. Não inclui assento reservado ou kits.\n\nPassaporte Gota da Vitória (100% Online): Para quem está longe. Oferece a transmissão oficial em alta qualidade (dias 25 e 26) por plataforma própria, além do E-book \"Desperta Vitorioso\" e o Ato de Consagração Digital.",
	),
	array(
		'q' => 'Como eu recebo minha confirmação de entrada?',
		'a' => 'Assim que o seu cadastro ou pagamento for confirmado pelo sistema, você receberá automaticamente um e-mail com o seu QR Code/Credencial. No dia do evento, basta apresentar esse código na tela do seu celular (ou impresso) junto com um documento oficial com foto. É rápido e seguro!',
	),
	array(
		'q' => 'O evento emite Nota Fiscal da minha compra?',
		'a' => 'Como somos uma Instituição Religiosa sem fins lucrativos, não emitimos Nota Fiscal comercial. No entanto, sua contribuição é documentada: nosso sistema gera automaticamente um Recibo Oficial de Inscrição e Doação, que tem total validade legal para comprovar sua transação.',
	),
	array(
		'q' => 'Quem serão os pregadores desta edição?',
		'a' => 'Prepare-se para ouvir vozes que são autoridade no assunto. Estarão conosco a nossa fundadora Raquel Carpenter, Eliana Ribeiro, Geraldinho Correa e diversos sacerdotes e amigos da comunidade. Se quiser ver o cronograma detalhado de cada pregação, basta acessar o link oficial em nosso site.',
	),
	array(
		'q' => 'Qual é a política caso eu precise cancelar minha participação?',
		'a' => 'Entendemos que imprevistos acontecem. Você tem o direito de desistir da compra e solicitar o reembolso total em até 7 dias corridos após a confirmação do pagamento. Esse processo segue estritamente o que orienta o Código de Defesa do Consumidor.',
	),
);
?>
<section class="faq" id="faq">
	<div class="faq__bg"></div>
	<div class="faq__divider gold-divider"></div>

	<div class="faq__inner">
		<div class="reveal reveal--blur">
			<h2 class="faq__title text-gold-gradient">Dúvidas</h2>
		</div>

		<div class="faq__list" data-stagger>
			<?php foreach ( $faqs as $i => $faq ) : ?>
				<div class="faq-item reveal" data-open="false" style="--i:<?php echo (int) $i; ?>">
					<button type="button" class="faq-item__btn" aria-expanded="false">
						<span><?php echo esc_html( $faq['q'] ); ?></span>
						<svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
					</button>
					<div class="faq-item__panel">
						<div class="faq-item__panel-inner">
							<div class="faq-item__hr"></div>
							<p class="faq-item__answer"><?php echo esc_html( $faq['a'] ); ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="faq__more-wrap reveal">
			<a href="<?php echo esc_url( home_url( '/termos/' ) ); ?>" class="faq__more">FAQ completa</a>
		</div>
	</div>
</section>
