<?php

/**
 * Create a projects content type
 *
 * Extended reading:
 * @link https://codex.wordpress.org/Post_Types
 * @link https://www.smashingmagazine.com/2015/04/extending-wordpress-custom-content-types/
 *
 * Adding icons to the menu:
 * @link https://developer.wordpress.org/resource/dashicons/
 */

add_action( 'init', 'create_post_type' );
function create_post_type() {
  $labels = array(
    'name'               => 'Projects',
    'singular_name'      => 'Project',
    'menu_name'          => 'Projects',
    'name_admin_bar'     => 'Project',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Project',
    'new_item'           => 'New Project',
    'edit_item'          => 'Edit Project',
    'view_item'          => 'View Project',
    'all_items'          => 'All Projects',
    'search_items'       => 'Search Projects',
    'parent_item_colon'  => 'Parent Project',
    'not_found'          => 'No Projects Found',
    'not_found_in_trash' => 'No Projects Found in Trash'
  );

  $args = array(
    'labels'              => $labels,
    'public'              => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_nav_menus'   => true,
    'show_in_menu'        => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => null,
    'menu_icon'           => 'dashicons-grid-view',
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' ),
    'has_archive'         => true,
    'rewrite'             => array( 'slug' => 'projects' ),
    'query_var'           => true
  );

  register_post_type( 'fourohfive_project', $args );


  $labelsMenu = array(
    'name'               => 'Menus',
    'singular_name'      => 'Menu',
    'menu_name'          => 'Menus',
    'name_admin_bar'     => 'Menu',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Menu',
    'new_item'           => 'New Menu',
    'edit_item'          => 'Edit Menu',
    'view_item'          => 'View Menu',
    'all_items'          => 'All Menus',
    'search_items'       => 'Search Menus',
    'parent_item_colon'  => 'Parent Menu',
    'not_found'          => 'No Menus Found',
    'not_found_in_trash' => 'No Menus Found in Trash'
  );

  $argsMenu = array(
    'labels'              => $labelsMenu,
    'public'              => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_nav_menus'   => true,
    'show_in_menu'        => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => null,
    'menu_icon'           => 'dashicons-smiley',
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' ),
    'has_archive'         => true,
    'rewrite'             => array( 'slug' => 'menus' ),
    'query_var'           => true
  );

  register_post_type( 'fourohfive_menu', $argsMenu );
}

// Let's give our custom post type some category and tag like functionality
add_action( 'init', 'create_taxonomies' );
function create_taxonomies() {

  // Add a taxonomy like categories
  $labels = array(
    'name'              => 'Types',
    'singular_name'     => 'Type',
    'search_items'      => 'Search Types',
    'all_items'         => 'All Types',
    'parent_item'       => 'Parent Type',
    'parent_item_colon' => 'Parent Type:',
    'edit_item'         => 'Edit Type',
    'update_item'       => 'Update Type',
    'add_new_item'      => 'Add New Type',
    'new_item_name'     => 'New Type Name',
    'menu_name'         => 'Types',
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'type' ),
  );

  register_taxonomy('fourohfive_project_type',array('fourohfive_project'),$args);

  // Add a taxonomy like tags
  $labels = array(
    'name'                       => 'Attributes',
    'singular_name'              => 'Attribute',
    'search_items'               => 'Attributes',
    'popular_items'              => 'Popular Attributes',
    'all_items'                  => 'All Attributes',
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => 'Edit Attribute',
    'update_item'                => 'Update Attribute',
    'add_new_item'               => 'Add New Attribute',
    'new_item_name'              => 'New Attribute Name',
    'separate_items_with_commas' => 'Separate Attributes with commas',
    'add_or_remove_items'        => 'Add or remove Attributes',
    'choose_from_most_used'      => 'Choose from most used Attributes',
    'not_found'                  => 'No Attributes found',
    'menu_name'                  => 'Attributes',
  );

  $args = array(
    'hierarchical'          => false,
    'labels'                => $labels,
    'show_ui'               => true,
    'show_admin_column'     => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'attribute' ),
  );

  register_taxonomy('fourohfive_project_attribute','fourohfive_project',$args);
}
