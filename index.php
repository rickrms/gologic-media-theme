<?php
/**
 * Blog index
 *
 * @package GoLogic_Media
 */
get_header();
?>

<div class="gologic-content gologic-section--light">
	<div class="gologic-wrap">
		<p class="gologic-eyebrow"><?php esc_html_e( 'Insights', 'gologic-media' ); ?></p>
		<h1><?php esc_html_e( 'The GoLogic Media Blog', 'gologic-media' ); ?></h1>
		<p><?php esc_html_e( 'Practical SEO, web design, and online marketing advice for small businesses.', 'gologic-media' ); ?></p>

		<div class="gologic-post-list">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="gologic-post-card">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="gologic-post-meta"><?php echo esc_html( get_the_date() ); ?></div>
				<?php the_excerpt(); ?>
				<p><a href="<?php the_permalink(); ?>" class="gologic-learn-more"><?php esc_html_e( 'Read more →', 'gologic-media' ); ?></a></p>
			</article>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'No posts yet — check back soon.', 'gologic-media' ); ?></p>
		<?php endif; ?>
		</div>

		<?php the_posts_pagination(); ?>
	</div>
</div>

<?php
get_footer();
