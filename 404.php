<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Four_Oh_Five
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="container py-4">
  <h1 class="display-4 font-weight-bold"><?php _e( 'Page Not Found', 'four-oh-five' ); ?></h1>
  <p class="lead pt-4"><?php _e( 'The page you&rsquo;re looking for could not be found. It may have moved or been deleted. Double check the link, perhaps there&rsquo;s a typo somewhere, or use the search form to see if you can find it there.', 'four-oh-five' ); ?></p>
  <?php get_search_form(); ?>
</div>

<?php get_footer(); ?>
