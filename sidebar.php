<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Four_Oh_Five
 * @since 1.0
 * @version 1.0
 */

  if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
  }

  dynamic_sidebar( 'sidebar-1' );

?>
