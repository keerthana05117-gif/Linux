<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage chocolate-house
 * @since chocolate-house 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function chocolate_house_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Chocolate_House_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Chocolate House Pro', 'chocolate-house' ),
		'button_text'      => __( 'Upgrade Pro', 'chocolate-house' ),
		'url'              => 'https://www.wpradiant.net/products/chocolate-shop-wordpress-theme',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'chocolate_house_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function chocolate_house_custom_control_scripts() {
	wp_enqueue_script( 'chocolate-house-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
	wp_enqueue_style( 'chocolate-house-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'chocolate_house_custom_control_scripts' );