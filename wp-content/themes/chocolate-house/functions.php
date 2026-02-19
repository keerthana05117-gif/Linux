<?php
/**
 * Chocolate House functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package chocolate-house
 * @since chocolate-house 1.0
 */

if ( ! function_exists( 'chocolate_house_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since chocolate-house 1.0
	 *
	 * @return void
	 */
	function chocolate_house_support() {

		load_theme_textdomain( 'chocolate-house', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		
		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'chocolate_house_support' );

if ( ! function_exists( 'chocolate_house_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since chocolate-house 1.0
	 *
	 * @return void
	 */
	function chocolate_house_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'chocolate-house-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style(
			'chocolate-house-animate-css',
			esc_url(get_template_directory_uri()).'/assets/css/animate.css' 
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'chocolate-house-style' );

		wp_style_add_data( 'chocolate-house-style', 'rtl', 'replace' );

		wp_enqueue_style( 'dashicons' );

		//font-awesome
		wp_enqueue_style( 'chocolate-house-fontawesome', get_template_directory_uri() . '/inc/fontawesome/css/all.css', array(), '6.7.0' );

		wp_enqueue_style('chocolate-house-owl.carousel-style',
		esc_url(get_template_directory_uri()) . '/assets/css/owl.carousel.css',
		array()
		);

		wp_enqueue_style('banquet-wedding-hall-swiper-css',
		esc_url(get_template_directory_uri()) . '/assets/css/swiper-bundle.css',
		array()
		);
		
	}

endif;

add_action( 'wp_enqueue_scripts', 'chocolate_house_styles' );

/* Enqueue Custom Js */
function chocolate_house_scripts() {

	wp_enqueue_script( 
		'chocolate-house-wow', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', 
		array('jquery') 
	);

	wp_enqueue_script(
		'chocolate-house-custom', esc_url(get_template_directory_uri()) . '/assets/js/custom.js',
		array('jquery')
	);

	wp_localize_script('chocolate-house-custom', 'chocolate_house_ajax', array(
	    'ajax_url' => admin_url('admin-ajax.php'),
	    'theme'    => get_option('chocolate_house_theme_mode')
	));

	wp_enqueue_script(
        'chocolate-house-scroll-to-top',
        esc_url(get_template_directory_uri()) . '/assets/js/scroll-to-top.js',
        array(), 
        null, 
        true // Load in footer
    );

	wp_enqueue_script(
		'banquet-wedding-hall-swiper-js',
		esc_url(get_template_directory_uri()) . '/assets/js/swiper-bundle.js',
		array(),
		true
	);

	wp_enqueue_script(
		'chocolate-house-owl.carousel-js',
		esc_url(get_template_directory_uri()) . '/assets/js/owl.carousel.js',
		array(),
		true
	);

}

// Force YITH Wishlist icon to show on WooCommerce product blocks
add_filter( 'render_block', function( $chocolate_house_content, $chocolate_house_block ) {
    if ( isset( $chocolate_house_block['blockName'] ) && $chocolate_house_block['blockName'] === 'woocommerce/product-image' ) {

        // Add wishlist button only if plugin is active
        if ( function_exists( 'YITH_WCWL' ) ) {
            $chocolate_house_wishlist_button = do_shortcode('[yith_wcwl_add_to_wishlist]');
            // Add button overlay
            $chocolate_house_content .= '<div class="yith-wishlist-block-overlay">' . $chocolate_house_wishlist_button . '</div>';
        }
    }
    return $chocolate_house_content;
}, 10, 2 );

/* Enqueue admin-notice-script js */
add_action('admin_enqueue_scripts', function ($hook) {
    if ($hook !== 'appearance_page_chocolate-house') return;

    wp_enqueue_script('admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', ['jquery'], null, true);
    wp_localize_script('admin-notice-script', 'pluginInstallerData', [
        'ajaxurl'     => admin_url('admin-ajax.php'),
        'nonce'       => wp_create_nonce('install_plugin_nonce'), // Match this with PHP nonce check
        'redirectUrl' => admin_url('themes.php?page=chocolate-house'),
    ]);
});

add_action('wp_ajax_check_plugin_activation', function () {
    if (!isset($_POST['plugin']) || empty($_POST['plugin'])) {
        wp_send_json_error(['message' => 'Missing plugin identifier']);
    }

    include_once ABSPATH . 'wp-admin/includes/plugin.php';

    // Map plugin identifiers to their main files
    $chocolate_house_plugin_map = [
        'woocommerce'          => 'woocommerce/woocommerce.php',
        'wordclever_ai_content_writer'    => 'wordclever-ai-content-writer/wordclever.php',
        'wishlist'             => 'yith-woocommerce-wishlist/init.php',
		'essential_blocks'             => 'essential-blocks/essential-blocks.php',
    ];
    
    $chocolate_house_requested_plugin = sanitize_text_field($_POST['plugin']);

    if (!isset($chocolate_house_plugin_map[$chocolate_house_requested_plugin])) {
        wp_send_json_error(['message' => 'Invalid plugin']);
    }

    $chocolate_house_plugin_file = $chocolate_house_plugin_map[$chocolate_house_requested_plugin];
    $chocolate_house_is_active   = is_plugin_active($chocolate_house_plugin_file);

    wp_send_json_success(['active' => $chocolate_house_is_active]);
});

add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );
add_action( 'wp_enqueue_scripts', 'chocolate_house_scripts' );

function chocolate_house_theme_setting() {
	
// Add block patterns
require get_template_directory() . '/inc/block-pattern.php';

// Add block Style
require get_template_directory() . '/inc/block-style.php';

// TGM
require get_template_directory() . '/inc/tgm/plugin-activation.php';

// Get Started
require get_template_directory() . '/get-started/getstart.php';

// Get Notice
require get_template_directory() . '/get-started/notice.php';

// Get Notice
require get_template_directory() . '/inc/customizer.php';

}
add_action('after_setup_theme', 'chocolate_house_theme_setting');

function chocolate_house_save_theme_option() {
  if (isset($_POST['mode'])) {
    update_option('chocolate_house_theme_mode', sanitize_text_field($_POST['mode']));
    wp_send_json_success();
  } else {
    wp_send_json_error('No theme provided');
  }
}
add_action('wp_ajax_save_theme_option', 'chocolate_house_save_theme_option');
add_action('wp_ajax_nopriv_save_theme_option', 'chocolate_house_save_theme_option');
