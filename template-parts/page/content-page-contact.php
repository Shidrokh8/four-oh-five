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



<div class="container-contact py-4">	

<?php the_field($field_contact); ?>



<!-- PORTFOLIO ITEMS -->
		<div class="contact">
			<?php

			// check if the repeater field has rows of data
			if( have_rows('add_new') ):
				echo '<div class="row">';

			 	// loop through the rows of data
			    while ( have_rows('add_new') ) : the_row();
			    	echo '<div class="form_group">';

			    		$the_name = get_sub_field('item_name');
			    		$the_email = get_sub_field('item_email');
			    		$the_phone_number = get_sub_field('item_phone_number');
			    		$the_Select_the_Service_you_need = get_sub_field('item_Select_the_Service_you_need');
			    		$the_message = get_sub_field('item_message');

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
