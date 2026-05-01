<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<?php
$cards = array(
	array(
		'image' => 'motivos-1.jpg',
		'title' => 'AMBIENTE DE TRANSFORMAÇÃO E CURA',
		'desc'  => 'Neste ambiente de cura, Deus deseja restaurar cada área da sua vida, pois o Sangue de Jesus tem poder para transformar toda a sua história.',
	),
	array(
		'image' => 'motivos-2.jpg',
		'title' => 'PREGAÇÕES PODEROSAS',
		'desc'  => 'Deus quer falar com você por meio de pregadores ungidos, missionários e evangelizadores dedicados que estarão lá, esperando para te encontrar.',
	),
	array(
		'image' => 'motivos-3.jpg',
		'title' => 'TESTEMUNHOS DE MILAGRES',
		'desc'  => 'A Festa do Sangue de Jesus nasceu de um milagre. Cremos que aqueles que honram este Sangue Precioso recebem abundantes graças do céu.',
	),
	array(
		'image' => 'motivos-4.jpg',
		'title' => 'A GOTA DO RECOMEÇO',
		'desc'  => "Sua vida esteve por um fio, mas agora Deus lhe dá a\ngota da vitória. Basta uma gota do Sangue de Jesus\npara curar e restaurar o seu ser.",
	),
	array(
		'image' => 'motivos-5.jpg',
		'title' => 'ENCONTRO NACIONAL DOS VITORIOSOS',
		'desc'  => "Junte-se aos vitoriosos em nosso encontro anual. Em\nfamília, honramos o Sangue de Jesus e recebemos\nabundantes graças que vêm do céu.",
	),
	array(
		'image' => 'motivos-6.jpg',
		'title' => 'HONRAR O SANGUE DE JESUS',
		'desc'  => "Muitos viajam por ídolos, mas poucos se movem\npor Jesus. Honrar Seu Sangue é o movimento que\nnos traz as graças que só a fé pode alcançar.",
	),
);
?>
<section class="motivos">
	<div class="motivos__atmos" style="background-image:url('<?php echo fsdj_img( 'bg-atmosphere.png' ); ?>')"></div>

	<div class="motivos__inner">
		<h2 class="motivos__title reveal reveal--blur">MOTIVOS PARA IR</h2>

		<div class="motivos__grid" data-stagger>
			<?php foreach ( $cards as $i => $c ) : ?>
				<article class="motivo reveal reveal--zoom" style="--i:<?php echo (int) $i; ?>">
					<div class="motivo__img">
						<img src="<?php echo fsdj_img( $c['image'] ); ?>" alt="<?php echo esc_attr( $c['title'] ); ?>" loading="lazy">
					</div>
					<h3 class="motivo__title"><?php echo esc_html( ( $i + 1 ) . '. ' . $c['title'] ); ?></h3>
					<p class="motivo__desc"><?php echo esc_html( $c['desc'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
