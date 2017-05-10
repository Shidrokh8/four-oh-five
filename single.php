<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Four_Oh_Five
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="container py-4">
	<div class="row">
		<div class="col-12 col-md-8">

			<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/post/content', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

					echo '<ul class="pagination py-4">';
						echo '<li class="page-item" style="width: 50%;">';
							previous_post_link('<strong>%link</strong>');
						echo '</li>';
						echo '<li class="page-item text-right" style="width: 50%;">';
							next_post_link('<strong>%link</strong>');
						echo '</li>';
					echo '</ul>';

				endwhile; // End of the loop.
			?>

		</div>
		<div class="col-12 col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
