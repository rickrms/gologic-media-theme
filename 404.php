<?php
/**
 * 404
 *
 * @package GoLogic_Media
 */
get_header();
?>
<div class="gologic-content" style="text-align:center;">
	<div class="gologic-wrap">
		<h1><?php esc_html_e( 'Page not found', 'gologic-media' ); ?></h1>
		<p><?php esc_html_e( 'The page you’re looking for doesn’t exist or was moved.', 'gologic-media' ); ?></p>
		<p><a class="gologic-btn gologic-btn--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to Home', 'gologic-media' ); ?></a></p>
	</div>
</div>
<?php
get_footer();
