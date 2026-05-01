<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header(); ?>

<div class="page-wrap">
	<?php if ( have_posts() ) : ?>
		<header>
			<h1>
				<?php
				if ( is_archive() ) {
					the_archive_title();
				} elseif ( is_search() ) {
					printf( esc_html__( 'Resultados para: %s', 'festadosanguedejesus' ), esc_html( get_search_query() ) );
				} else {
					esc_html_e( 'Últimas publicações', 'festadosanguedejesus' );
				}
				?>
			</h1>
		</header>

		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?> style="padding:1.5rem 0;border-bottom:1px solid hsl(var(--border));">
				<h2 style="margin-bottom:.5rem;"><a href="<?php the_permalink(); ?>" style="color:#fff;"><?php the_title(); ?></a></h2>
				<p style="color:hsl(var(--muted-foreground));font-size:.85rem;margin-bottom:1rem;">
					<?php echo esc_html( get_the_date() ); ?> · <?php the_author(); ?>
				</p>
				<div><?php the_excerpt(); ?></div>
			</article>
		<?php endwhile; ?>

		<div style="margin-top:2rem;text-align:center;"><?php the_posts_pagination(); ?></div>

	<?php else : ?>
		<p>Nenhum conteúdo encontrado.</p>
	<?php endif; ?>
</div>

<?php get_footer();
