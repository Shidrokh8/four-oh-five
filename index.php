<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * By default, posts are laid out in Bootstrap 4 cards using the Card Columns
 * class. See the documentation below:
 *
 * @link https://v4-alpha.getbootstrap.com/components/card/#card-columns
 *
 * @package WordPress
 * @subpackage Four_Oh_Five
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="container py-4">
	

		<?php
		if ( have_posts() ) :

			echo '<div class="card-columns">';

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/post/content', 'archive' );

			endwhile;

			echo '</div>';

			echo '<div class="d-flex justify-content-center py-4">';
			the_posts_pagination( array(
				'prev_text' => __( 'Previous', 'four-oh-five' ),
				'next_text' => __( 'Next', 'four-oh-five' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'four-oh-five' ) . ' </span>',
			) );
			echo '</div>';

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif;
		?>

	</div>
</div>

<?php get_footer(); ?>
