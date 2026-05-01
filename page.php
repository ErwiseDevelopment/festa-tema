<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header(); ?>

<div class="page-wrap">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?>>
			<header>
				<h1><?php the_title(); ?></h1>
			</header>
			<div class="page-body">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; ?>
</div>

<?php get_footer();
