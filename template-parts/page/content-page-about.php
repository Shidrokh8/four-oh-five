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



<div class="container-portfolio-icons py-4">	

<!-- PORTFOLIO ITEMS -->
		<div class="portfolio-items">
			<?php

			// check if the repeater field has rows of data
			if( have_rows('add_new') ):
				echo '<div class="row">';

			 	// loop through the rows of data
			    while ( have_rows('add_new') ) : the_row();
			    	echo '<div class="col-6 col-md-3 text-center">';

			    		$the_title = get_sub_field('item_title');
			    		$the_link = get_sub_field('item_link');
			    		$the_image = get_sub_field('item_image');

			    		echo '<a href="'.$the_link.'">';
				        	echo '<img class="img-fluid" src="'.$the_image.'" alt="">';
				        echo '</a>';
				        echo '<h2 class="h6">'.$the_title.'</h2>';

			        echo '</div>';

			    endwhile;

			    echo '</div>';

			else :

			    // no rows found

			endif;

			?>
		</div>
<!-- END PORTFOLIO ITEMS -->

</div>



<!-- ABOUT SECTION -->
		<div class="bg-faded py-4">
			<div class="container">

			<p>ABOUT FIELDS GO HERE</p>


			</div>
		</div>
<!-- END ABOUT SECTION -->

	</article>
</div>
