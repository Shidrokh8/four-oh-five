<?php
/**
 * Four Oh Five back compat functionality
 *
 * Prevents Four Oh Five from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage Four_Oh_Five
 * @since Four Oh Five 1.0
 */

/**
 * Prevent switching to Four Oh Five on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Four Oh Five 1.0
 */
function fourohfive_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'fourohfive_upgrade_notice' );
}
add_action( 'after_switch_theme', 'fourohfive_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Four Oh Five on WordPress versions prior to 4.7.
 *
 * @since Four Oh Five 1.0
 *
 * @global string $wp_version WordPress version.
 */
function fourohfive_upgrade_notice() {
	$message = sprintf( __( 'Four Oh Five requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'four-oh-five' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since Four Oh Five 1.0
 *
 * @global string $wp_version WordPress version.
 */
function fourohfive_customize() {
	wp_die( sprintf( __( 'Four Oh Five requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'four-oh-five' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'fourohfive_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since Four Oh Five 1.0
 *
 * @global string $wp_version WordPress version.
 */
function fourohfive_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Four Oh Five requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'four-oh-five' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'fourohfive_preview' );
