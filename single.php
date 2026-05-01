<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header(); ?>

<div class="page-wrap">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?>>
			<header>
				<h1><?php the_title(); ?></h1>
				<p style="color:hsl(var(--muted-foreground));font-size:.85rem;text-align:center;margin-bottom:2rem;">
					<?php echo esc_html( get_the_date() ); ?> · <?php the_author(); ?>
				</p>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<figure style="margin-bottom:2rem;border-radius:.5rem;overflow:hidden;">
					<?php the_post_thumbnail( 'large' ); ?>
				</figure>
			<?php endif; ?>

			<div class="page-body">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; ?>
</div>

<?php get_footer();
