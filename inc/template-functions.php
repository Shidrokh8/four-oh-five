<?php
/**
 * Additional features to allow styling of the templates
 *
 * @package WordPress
 * @subpackage Four_Oh_Five
 * @since 1.0
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function fourohfive_body_classes( $classes ) {
	// Add class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Add class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Add class if we're viewing the Customizer for easier styling of theme options.
	if ( is_customize_preview() ) {
		$classes[] = 'fourohfive-customizer';
	}

	// Add class on front page.
	if ( is_front_page() && 'posts' !== get_option( 'show_on_front' ) ) {
		$classes[] = 'fourohfive-front-page';
	}

	// Add a class if there is a custom header.
	if ( has_header_image() ) {
		$classes[] = 'has-header-image';
	}

	// Add class if sidebar is used.
	if ( is_active_sidebar( 'sidebar-1' ) && ! is_page() ) {
		$classes[] = 'has-sidebar';
	}
}

/**
 * Count our number of active panels.
 *
 * Primarily used to see if we have any panels active, duh.
 */
function fourohfive_panel_count() {

	$panel_count = 0;

	/**
	 * Filter number of front page sections in Four Oh Five.
	 *
	 * @since Four Oh Five 1.0
	 *
	 * @param $num_sections integer
	 */
	$num_sections = apply_filters( 'fourohfive_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		if ( get_theme_mod( 'panel_' . $i ) ) {
			$panel_count++;
		}
	}

	return $panel_count;
}

/**
 * Checks to see if we're on the homepage or not.
 */
function fourohfive_is_frontpage() {
	return ( is_front_page() && ! is_home() );
}


/**
 * Register Bootstrap 4 Nav Walker
 */

require_once('bs4navwalker.php');
