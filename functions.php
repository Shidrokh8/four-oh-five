<?php
/**
 * Four Oh Five functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Four_Oh_Five
 * @since 1.0
 */

/**
 * Four Oh Five only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
  require get_template_directory() . '/inc/back-compat.php';
  return;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fourohfive_setup() {
  /*
   * Make theme available for translation.
   * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/fourohfive
   * If you're building a theme based on Four Oh Five, use a find and replace
   * to change 'four-oh-five' to the name of your theme in all the template files.
   */
  load_theme_textdomain( 'four-oh-five' );

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );

  /*
   * Enable support for Post Thumbnails on posts and pages.
   *
   * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
   */
  add_theme_support( 'post-thumbnails' );

  add_image_size( 'fourohfive-featured-image', 2000, 1200, true );

  add_image_size( 'fourohfive-thumbnail-avatar', 100, 100, true );

  // Set the default content width.
  $GLOBALS['content_width'] = 525;

  // This theme uses wp_nav_menu() in two locations.
  register_nav_menus( array(
    'top'    => __( 'Top Menu', 'four-oh-five' ),
    'social' => __( 'Social Links Menu', 'four-oh-five' ),
  ) );

  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

  // Add theme support for Custom Logo.
  add_theme_support( 'custom-logo', array(
    'width'       => 250,
    'height'      => 250,
    'flex-width'  => true,
  ) );

  // Add theme support for selective refresh for widgets.
  add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'fourohfive_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fourohfive_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'four-oh-five' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Add widgets here to appear in your sidebar.', 'four-oh-five' ),
    'before_widget' => '<div id="%1$s" class="card widget %2$s mb-4">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="card-header"><h2 class="h4 m-0">',
    'after_title'   => '</h2></div>',
    'class'         => 'list-group'
  ) );
}
add_action( 'widgets_init', 'fourohfive_widgets_init' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Four Oh Five 1.0
 *
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function fourohfive_excerpt_more( $link ) {
  if ( is_admin() ) {
    return $link;
  }

  $link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
    esc_url( get_permalink( get_the_ID() ) ),
    /* translators: %s: Name of current post */
    sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'four-oh-five' ), get_the_title( get_the_ID() ) )
  );
  return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'fourohfive_excerpt_more' );

/**
 * Add Google Fonts
 */
// function add_google_fonts() {

// wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Slab:300,700|Roboto:300,300i,700,700i', false ); 
// }

// add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

/**
 * Enqueue scripts and styles.
 */
function fourohfive_scripts() {

  // Theme stylesheet.
  wp_enqueue_style( 'fourohfive-style', get_stylesheet_uri() );

  // Load the html5 shiv.
  wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
  wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

  // Load threaded comments reply
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'fourohfive_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Custom comment walker.
 */
require get_parent_theme_file_path( '/inc/stylizer_comment_walker.php' );

/**
 * Custom comment form.
 */
require get_parent_theme_file_path( '/inc/stylizer_comment_form.php' );

/**
 * Create custom post types
 */
require get_parent_theme_file_path( '/inc/fourohfive_custom_post_types.php' );


