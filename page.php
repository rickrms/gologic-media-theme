<?php
/**
 * Single page
 *
 * @package GoLogic_Media
 */
get_header();

while ( have_posts() ) : the_post();
?>
<div class="gologic-content">
	<div class="gologic-wrap">
		<h1><?php the_title(); ?></h1>
		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'large', array( 'style' => 'border-radius:12px;margin-bottom:28px;' ) );
		}
		the_content();
		?>
	</div>
</div>
<?php
endwhile;

get_footer();
