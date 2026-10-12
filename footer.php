</main><!-- #gologic-main -->

<footer class="gologic-footer">
	<div class="gologic-wrap">
		<div class="gologic-footer-grid">
			<div>
				<a class="gologic-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" style="margin-bottom:18px;">
					<span class="gologic-logo-main"><span class="go">GO</span><span class="logic">LOGIC</span></span>
					<span class="gologic-logo-sub">MEDIA</span>
				</a>
				<p><?php esc_html_e( 'A digital agency for small business — SEO, web design, and hosting that gets you found.', 'gologic-media' ); ?></p>
				<p><a class="gologic-footer-phone" href="<?php echo esc_url( GOLOGIC_MEDIA_PHONE_LINK ); ?>"><?php echo esc_html( GOLOGIC_MEDIA_PHONE ); ?></a></p>
			</div>
			<div>
				<h4><?php esc_html_e( 'Services', 'gologic-media' ); ?></h4>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer-services',
					'container'      => false,
					'fallback_cb'    => 'gologic_media_fallback_footer_services',
				) );
				?>
			</div>
			<div>
				<h4><?php esc_html_e( 'Company', 'gologic-media' ); ?></h4>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer-company',
					'container'      => false,
					'fallback_cb'    => 'gologic_media_fallback_footer_company',
				) );
				?>
			</div>
			<div>
				<h4><?php esc_html_e( 'Get Started', 'gologic-media' ); ?></h4>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Free Consultation', 'gologic-media' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'Blog', 'gologic-media' ); ?></a></li>
				</ul>
				<p style="margin-top:18px;"><a class="gologic-btn gologic-btn--primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get a Quote', 'gologic-media' ); ?></a></p>
			</div>
		</div>
		<div class="gologic-footer-bottom">
			<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php esc_html_e( 'GoLogic Media. All rights reserved.', 'gologic-media' ); ?></p>
			<p><?php esc_html_e( 'SEO, web design, and hosting for small business.', 'gologic-media' ); ?></p>
		</div>
	</div>
</footer>

<?php
function gologic_media_fallback_footer_services() {
	$items = array(
		'SEO' => '#services',
		'Web Design' => '#services',
		'Web Hosting' => '#services',
		'Website Chatbot' => '#services',
		'Reputation Management' => '#services',
	);
	echo '<ul>';
	foreach ( $items as $label => $url ) {
		echo '<li><a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></li>';
	}
	echo '</ul>';
}
function gologic_media_fallback_footer_company() {
	$items = array(
		'About' => home_url( '/about/' ),
		'Blog' => home_url( '/blog/' ),
		'Contact' => home_url( '/contact/' ),
	);
	echo '<ul>';
	foreach ( $items as $label => $url ) {
		echo '<li><a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></li>';
	}
	echo '</ul>';
}
?>

<?php wp_footer(); ?>
</body>
</html>
