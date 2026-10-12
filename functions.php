<?php
/**
 * GoLogic Media — functions and theme setup.
 *
 * This theme is a design system only: it provides styling, layout,
 * navigation, and block patterns. All page content lives in WordPress
 * pages built with the block editor. No function here outputs page content.
 *
 * @package GoLogic_Media
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

/* ----------------------------------------------------------
   GitHub auto-updates via plugin-update-checker
---------------------------------------------------------- */
require get_template_directory() . '/inc/plugin-update-checker/plugin-update-checker.php';
$gologic_media_update_checker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/rickrms/gologic-media-theme/',
    get_template_directory() . '/functions.php',
    'gologic-media-theme'
);
$gologic_media_update_checker->setBranch('main');


define( 'GOLOGIC_MEDIA_VERSION', '2.0.0' );
define( 'GOLOGIC_MEDIA_PHONE', '201-530-0372' );
define( 'GOLOGIC_MEDIA_PHONE_LINK', 'tel:+12015300372' );

/* ----------------------------------------------------------
   Theme setup
---------------------------------------------------------- */
function gologic_media_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );

	register_nav_menus( array(
		'primary'         => __( 'Primary Menu', 'gologic-media' ),
		'footer-services' => __( 'Footer: Services', 'gologic-media' ),
		'footer-company'  => __( 'Footer: Company', 'gologic-media' ),
	) );
}
add_action( 'after_setup_theme', 'gologic_media_setup' );

/* ----------------------------------------------------------
   Assets: Montserrat (incl. 300 for the thin wordmark),
   stylesheet, navigation + chat scripts
---------------------------------------------------------- */
function gologic_media_assets() {
	wp_enqueue_style(
		'gologic-media-fonts',
		'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap',
		array(),
		null
	);
	wp_enqueue_style( 'gologic-media-style', get_stylesheet_uri(), array( 'gologic-media-fonts' ), GOLOGIC_MEDIA_VERSION );

	wp_enqueue_script( 'gologic-media-nav', get_template_directory_uri() . '/assets/js/navigation.js', array(), GOLOGIC_MEDIA_VERSION, true );
	wp_enqueue_script( 'gologic-media-chat', get_template_directory_uri() . '/assets/js/chatbot.js', array(), GOLOGIC_MEDIA_VERSION, true );
	wp_localize_script( 'gologic-media-chat', 'gologicChat', array(
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		'nonce'   => wp_create_nonce( 'gologic_chat_nonce' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'gologic_media_assets' );

/* ----------------------------------------------------------
   Block patterns — insertable via the block editor
   (Patterns tab → GoLogic). Never auto-output.
---------------------------------------------------------- */
function gologic_media_pattern_category() {
	register_block_pattern_category( 'gologic-media', array( 'label' => __( 'GoLogic', 'gologic-media' ) ) );
}
add_action( 'init', 'gologic_media_pattern_category', 5 );

function gologic_media_register_patterns() {
	$dir = get_template_directory() . '/patterns/';
	if ( ! is_dir( $dir ) ) { return; }
	foreach ( glob( $dir . '*.php' ) as $file ) {
		// Each pattern file registers itself via register_block_pattern().
		include $file;
	}
}
add_action( 'init', 'gologic_media_register_patterns' );

/* ----------------------------------------------------------
   Customizer: hero background image override.
   Lets the site owner swap the hero image without code.
---------------------------------------------------------- */
function gologic_media_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'gologic_media_hero', array(
		'title'    => __( 'Homepage Hero', 'gologic-media' ),
		'priority' => 30,
	) );

	$wp_customize->add_setting( 'gologic_media_hero_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gologic_media_hero_image', array(
		'label'    => __( 'Hero Background Image', 'gologic-media' ),
		'section'  => 'gologic_media_hero',
		'settings' => 'gologic_media_hero_image',
	) ) );
}
add_action( 'customize_register', 'gologic_media_customize_register' );

/**
 * Hero image URL: Customizer override, else the bundled default.
 * Used by the hero block pattern at insert time.
 */
function gologic_media_hero_image_url() {
	$custom = get_theme_mod( 'gologic_media_hero_image', '' );
	if ( ! empty( $custom ) ) {
		return esc_url( $custom );
	}
	return esc_url( get_template_directory_uri() . '/assets/images/hero.png' );
}

/* ----------------------------------------------------------
   Chat widget markup (site chrome, printed before </body>)
---------------------------------------------------------- */
function gologic_media_chatbot_markup() {
	$phone      = GOLOGIC_MEDIA_PHONE;
	$phone_link = GOLOGIC_MEDIA_PHONE_LINK;
	?>
	<button id="gologic-chat-btn" aria-label="<?php esc_attr_e( 'Open chat', 'gologic-media' ); ?>" aria-expanded="false">
		<svg class="gologic-chat-open-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 2H4a2 2 0 0 0-2 2v18l4-4h14a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm-9 9H7V9h4v2zm6 0h-4V9h4v2z"/></svg>
		<svg class="gologic-chat-close-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 6.4 17.6 5 12 10.6 6.4 5 5 6.4 10.6 12 5 17.6 6.4 19 12 13.4 17.6 19 19 17.6 13.4 12z"/></svg>
	</button>
	<div id="gologic-chat-panel" role="dialog" aria-label="<?php esc_attr_e( 'Chat with GoLogic', 'gologic-media' ); ?>">
		<div class="gologic-chat-header">
			<h3><?php esc_html_e( 'Questions? Let’s talk.', 'gologic-media' ); ?></h3>
			<p><?php esc_html_e( 'Real humans. Fast answers.', 'gologic-media' ); ?></p>
		</div>
		<div class="gologic-chat-body">
			<div class="gologic-chat-phone-label"><?php esc_html_e( 'Call us now', 'gologic-media' ); ?></div>
			<a class="gologic-chat-phone" href="<?php echo esc_url( $phone_link ); ?>"><?php echo esc_html( $phone ); ?></a>
			<p class="gologic-chat-sub"><?php esc_html_e( 'Prefer to type? Send us a message.', 'gologic-media' ); ?></p>
			<button class="gologic-btn gologic-btn--primary" id="gologic-chat-start" type="button"><?php esc_html_e( 'Start Chat', 'gologic-media' ); ?></button>
			<form class="gologic-chat-form" id="gologic-chat-form" novalidate>
				<label for="gologic-chat-name"><?php esc_html_e( 'Your name', 'gologic-media' ); ?></label>
				<input type="text" id="gologic-chat-name" name="name" required autocomplete="name">
				<label for="gologic-chat-contact"><?php esc_html_e( 'Email or phone', 'gologic-media' ); ?></label>
				<input type="text" id="gologic-chat-contact" name="contact" required autocomplete="email">
				<label for="gologic-chat-message"><?php esc_html_e( 'How can we help?', 'gologic-media' ); ?></label>
				<textarea id="gologic-chat-message" name="message" required></textarea>
				<button class="gologic-btn gologic-btn--primary" type="submit" style="margin-top:16px;"><?php esc_html_e( 'Send Message', 'gologic-media' ); ?></button>
			</form>
			<div class="gologic-chat-success" id="gologic-chat-success">
				<p><?php esc_html_e( 'Thanks! We’ll be in touch shortly.', 'gologic-media' ); ?></p>
			</div>
		</div>
	</div>
	<?php
}
add_action( 'wp_footer', 'gologic_media_chatbot_markup' );

/* ----------------------------------------------------------
   Chat form handler: emails the site admin
---------------------------------------------------------- */
function gologic_media_chat_submit() {
	check_ajax_referer( 'gologic_chat_nonce', 'nonce' );

	$name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$contact = isset( $_POST['contact'] ) ? sanitize_text_field( wp_unslash( $_POST['contact'] ) ) : '';
	$message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

	if ( $name === '' || $contact === '' || $message === '' ) {
		wp_send_json_error( array( 'message' => __( 'Please fill in every field.', 'gologic-media' ) ) );
	}

	$to      = apply_filters( 'gologic_media_chat_recipient', get_option( 'admin_email' ) );
	$subject = sprintf( __( 'New website chat message from %s', 'gologic-media' ), $name );
	$body    = "Name: {$name}\nContact: {$contact}\n\nMessage:\n{$message}\n";
	$headers = array( 'Content-Type: text/plain; charset=UTF-8' );

	if ( wp_mail( $to, $subject, $body, $headers ) ) {
		wp_send_json_success();
	}
	wp_send_json_error( array( 'message' => __( 'Something went wrong. Please call us instead.', 'gologic-media' ) ) );
}
add_action( 'wp_ajax_gologic_chat_submit', 'gologic_media_chat_submit' );
add_action( 'wp_ajax_nopriv_gologic_chat_submit', 'gologic_media_chat_submit' );

/* ----------------------------------------------------------
   Basic Open Graph tags (Rank Math overrides when active)
---------------------------------------------------------- */
function gologic_media_og_tags() {
	if ( function_exists( 'rank_math' ) || defined( 'RANK_MATH_VERSION' ) ) { return; }
	if ( is_front_page() ) {
		echo '<meta name="description" content="' . esc_attr__( 'GoLogic Media — digital agency for small business. SEO, web design, web hosting, chatbots, and reputation management.', 'gologic-media' ) . '">' . "\n";
	}
	echo '<meta property="og:site_name" content="' . esc_attr( get_bloginfo( 'name' ) ) . '">' . "\n";
}
add_action( 'wp_head', 'gologic_media_og_tags', 5 );

/* ----------------------------------------------------------
   Excerpt length
---------------------------------------------------------- */
function gologic_media_excerpt_length( $length ) { return 28; }
add_filter( 'excerpt_length', 'gologic_media_excerpt_length' );
