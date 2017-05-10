<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Four_Oh_Five
 * @since 1.0
 * @version 1.0
 */

?>

<header class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php the_custom_logo(); ?>


  <?php if ( is_front_page() ) : ?>
    <h1 class="h6 m-0"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
  <?php else : ?>
    <p class="h6 m-0"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
  <?php endif; ?>

  <div class="collapse navbar-collapse">
    <?php
      wp_nav_menu([
        'menu'            => 'top',
        'theme_location'  => 'top',
        'container'       => 'nav',
        'container_id'    => 'bs4navbar',
        'container_class' => '',
        'menu_id'         => false,
        'menu_class'      => 'navbar-nav',
        'depth'           => 2,
        'fallback_cb'     => 'bs4navwalker::fallback',
        'walker'          => new bs4navwalker()
      ]);
    ?>


  </div>
<div class="menu-social-container">
<div class="menu-social">

<a href=""><img src="http://wordpress-portfolio.dev/wp-content/uploads/2017/05/linkedin.png"></a>
<a href=""><img src="http://wordpress-portfolio.dev/wp-content/uploads/2017/05/facebook.png"></a>
<a href=""><img src="http://wordpress-portfolio.dev/wp-content/uploads/2017/05/twitter.png"></a>
<a href=""><img src="http://wordpress-portfolio.dev/wp-content/uploads/2017/05/instagram.png"></a>

</div>
</div>

</header>
