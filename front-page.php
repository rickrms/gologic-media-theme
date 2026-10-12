<?php
/**
 * Front page — outputs the page content only.
 * All homepage content lives in the page itself (Pages → Homepage),
 * built with the block editor. This theme never injects content.
 *
 * @package GoLogic_Media
 */
get_header();

while ( have_posts() ) :
	the_post();
	the_content();
endwhile;

get_footer();
