<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage Four_Oh_Five
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css">
			.site {
			  display: flex;
			  min-height: 100vh;
			  flex-direction: column;
			}

			.site-content {
			  flex: 1;
			}
		</style>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class('site sticky-footer'); ?>>
	
		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
		<?php endif; ?>
		<?php if ( fourohfive_is_frontpage() ) : ?>
			<?php if ( has_header_image() ) : ?>
				<?php if ( has_header_video() ) : ?>
					
				<?php else : ?>
					<div style="background: url(<?php header_image(); ?>) center center no-repeat; background-size: cover; -webkit-transform: translate3d(0,0,0); translate3d(0,0,0); background-attachment: fixed; height: 50vh;"></div>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
