<?php
/**
 * Custom header implementation
 *
 * @link https://codex.wordpress.org/Custom_Headers
 *
 * @package WordPress
 * @subpackage Four_Oh_Five
 * @since 1.0
 */

/**
 * Set up the WordPress core custom header feature.
 */

function fourohfive_custom_header_setup() {

	$fourohfive_custom_header = array(
		'default-image'	=> get_parent_theme_file_uri( '/assets/images/header.jpg' ),
		'flex-width' 		=> true,
		'width'					=> 1920,
		'flex-height'		=> true,
		'height'				=> 1080,
		'video'					=> true
	);
	add_theme_support( 'custom-header', $fourohfive_custom_header );

	$fourohfive_custom_header_defaults = array(
		'default-image' => array(
			'url'           => '%s/assets/images/header.jpg',
			'thumbnail_url' => '%s/assets/images/header.jpg',
			'description'   => __( 'Default Header Image', 'four-oh-five' )
		),
	);
	register_default_headers( $fourohfive_custom_header_defaults );

}
add_action( 'after_setup_theme', 'fourohfive_custom_header_setup' );