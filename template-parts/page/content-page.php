<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Four_Oh_Five
 * @since 1.0
 * @version 1.0
 */

?>


<header class="page-header">
                        <img class="img-fluid" src="<?php header_image(); ?>" alt="">
                    </header>


<img class="custom-img-class" src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="">


<div class="container py-4">
	<article <?php post_class(); ?> >

		<?php the_content(); ?>

	</article>
</div>
