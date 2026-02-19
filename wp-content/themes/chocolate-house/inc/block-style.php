<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage chocolate-house
 * @since chocolate-house 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since chocolate-house 1.0
	 *
	 * @return void
	 */
	function chocolate_house_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'chocolate-house-border',
				'label' => esc_html__( 'Borders', 'chocolate-house' ),
			)
		);

		
	}
	add_action( 'init', 'chocolate_house_register_block_styles' );
}