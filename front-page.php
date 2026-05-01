<?php
/**
 * Front Page — Festa do Sangue de Jesus 2026
 * Espelha a ordem de Index.tsx no projeto React.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

get_header();

get_template_part( 'template-parts/section', 'hero' );
get_template_part( 'template-parts/section', 'impact' );
get_template_part( 'template-parts/section', 'about' );
get_template_part( 'template-parts/section', 'motivos' );
get_template_part( 'template-parts/section', 'tickets' );
get_template_part( 'template-parts/section', 'speakers' );
get_template_part( 'template-parts/section', 'countdown' );
get_template_part( 'template-parts/section', 'howto' );
get_template_part( 'template-parts/section', 'declaration' );
get_template_part( 'template-parts/section', 'sponsor' );
get_template_part( 'template-parts/section', 'faq' );

get_footer();
