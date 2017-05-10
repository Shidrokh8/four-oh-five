<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Four_Oh_Five
 * @since 1.0
 * @version 1.0
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class('card mb-4'); ?>>
  <?php if ( '' !== get_the_post_thumbnail() ) : ?>
    <div class="card-img-top img-fluid">
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'fourohfive-featured-image', array( 'class' => 'img-fluid' ) ); ?>
      </a>
    </div>
  <?php endif; ?>
  <div class="card-block">
    <?php the_title( '<h2 class="card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
 
</article>

