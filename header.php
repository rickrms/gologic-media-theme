<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="gologic-header">
	<div class="gologic-header-inner">
		<a class="gologic-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'GoLogic Media — home', 'gologic-media' ); ?>">
			<span class="gologic-logo-main"><span class="go">GO</span><span class="logic">LOGIC</span></span>
			<span class="gologic-logo-sub">MEDIA</span>
		</a>

		<button class="gologic-menu-toggle" aria-controls="gologic-primary-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Menu', 'gologic-media' ); ?>">
			<span></span>
		</button>

		<nav class="gologic-nav" id="gologic-primary-menu" aria-label="<?php esc_attr_e( 'Primary', 'gologic-media' ); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => false,
				'fallback_cb'    => 'gologic_media_fallback_menu',
			) );
			?>
		</nav>

		<div class="gologic-header-actions">
			<a class="gologic-header-phone" href="<?php echo esc_url( GOLOGIC_MEDIA_PHONE_LINK ); ?>"><?php echo esc_html( GOLOGIC_MEDIA_PHONE ); ?></a>
			<a class="gologic-btn gologic-btn--primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get a Quote', 'gologic-media' ); ?></a>
		</div>
	</div>
</header>

<?php
// Fallback menu when no menu is assigned yet.
function gologic_media_fallback_menu() {
	$items = array(
		'Services' => home_url( '/#services' ),
		'About'    => home_url( '/about/' ),
		'Blog'     => home_url( '/blog/' ),
		'Contact'  => home_url( '/contact/' ),
	);
	echo '<ul>';
	foreach ( $items as $label => $url ) {
		echo '<li><a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></li>';
	}
	echo '</ul>';
}
?>

<main id="gologic-main">
