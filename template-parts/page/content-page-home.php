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
                        <div class="logo-container">
                         <img class="spin logo" src="http://wordpress-portfolio.dev/wp-content/uploads/2017/05/Logo.png">
                         </div>
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
<div id="container-about2">
<div class="container-fluid greybg">

<!-- PORTFOLIO ITEMS -->
		<div class="about">
			<?php

			// check if the repeater field has rows of data
			if( have_rows('about-text') ):
				echo '<div class="row">';

			 	// loop through the rows of data
			    while ( have_rows('about-text') ) : the_row();
			    	echo '<div class="col-6 col-md-3 text-center">';
			    		$the_image = get_field('image');
			    		$the_icon = get_sub_field('icon');
			    		$the_title = get_sub_field('title');
			    		$the_text = get_sub_field('text');

				        	echo '<img class="img-fluid" src="'.$the_image.'" alt="">';
				        	echo '<p style="float: left;"><img src="'.$the_icon.'" alt="">';
				        	echo '<h2 >'.$the_title.'</h2>';
				        	echo '</p>';

			        echo '</div>';

			    endwhile;

			    echo '</div>';

			else :

			    // no rows found

			endif;

			?>
		</div>








<!-- 
<div id="experience" class="container">
<p style="float: left;"><img class="photo" src="http://wordpress-portfolio.dev/wp-content/uploads/2017/05/my-photo-01-1.png" height="30px" width="30px" > &nbsp;
<h2 class="padding-top"><img src="http://wordpress-portfolio.dev/wp-content/uploads/2017/05/aboutIcons-01.png" height="30px" width="30px" > Professional Profile
</h2></p>
Senior Graphic Design Specialist with 5+ years of experience
in management of the complete design process, from
conceptualization to delivery.

<div class="row">
<div class="col-8 col-md-4">
<p style="float: left;"><img src="http://wordpress-portfolio.dev/wp-content/uploads/2017/05/aboutIcons-03.png" height="30px" width="30px" > &nbsp;
<h2>Education</h2></p>
<b>Associate of Arts</b></br>
2014, Los Angeles Pierce College</br>

<b>Bachelor of Art – Graphic Design</b></br> 
BA in Art with concentration in Graphic Design
2017, California State University, Northridge</br>

Minor in Photography, Web Design, UI/UX, Coding (HTML and CSS)

</div>
</p>
<div class="col-sm-4">
<div>
<p style="float: left;"><img src="http://wordpress-portfolio.dev/wp-content/uploads/2017/05/aboutIcons-04.png" height="30px" width="30px" > &nbsp;
<h2>Professional Experience<h2>
</div>
<b>Gelcomm</b> 
Design Agency-Los Angeles</br>
Graphic Design Intern, Dec 2016 - Present
</p>
<b>CSUN</b> 
Art Department- Northridge</br>
AS , Jan 2017 - Present
</p>
<b> Freelance Graphic Designer</b> 
Graphic Designer, Jan 2015 - Present</br>
<b> Master Copy And Printing</b>
Printing Company in Santa Monica
Graphic Designer, Jul 2011 -Dec 2015

<b> 2011 to 2015 </b>
I worked as a Graphic Designer in Master Copy and Printing Company (Santa Monica)

</div>
</p>
<div class="col-sm-4">
<p style="float: left;"><img src="http://wordpress-portfolio.dev/wp-content/uploads/2017/05/aboutIcons-02.png" height="30px" width="30px" > &nbsp;
<h2>Skills</h2></p>
Adobe Creative Suite (Illustrator, Photoshop, InDesign, Adobe XD)</br>
Microsoft Office (Word, Excel, PowerPoint)</br>
Web (Dreamweaver, HTML, CSS, PHP).</br>
Photography (Photoshop, Lightroom)

</div>
</div> -->
<!-- </div>
</div>
</div>-->


</div>
		</div>

</article>
</div>
