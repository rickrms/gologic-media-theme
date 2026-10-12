<?php
/**
 * Single post
 *
 * @package GoLogic_Media
 */
get_header();

while ( have_posts() ) : the_post();
?>
<div class="gologic-content">
	<div class="gologic-wrap">
		<p class="gologic-eyebrow"><?php esc_html_e( 'Blog', 'gologic-media' ); ?></p>
		<h1><?php the_title(); ?></h1>
		<div class="gologic-post-meta" style="margin-bottom:28px;"><?php echo esc_html( get_the_date() ); ?></div>
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
