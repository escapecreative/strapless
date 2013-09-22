<?php

// First, create all post types

// [Name of Post Type]
/* add_action('init', 'twbs_posttype_nameofposttype');
function twbs_posttype_nameofposttype() {
  $labels = array(
    'name' => _x('Speakers', 'post type general name'),
    'singular_name' => _x('Speaker', 'post type singular name'),
    'add_new' => __('Add New', 'speakers'),
    'add_new_item' => __('Add New Speaker'),
    'edit_item' => __('Edit Speaker'),
    'new_item' => __('New Speaker'),
    'view_item' => __('View Page'),
    'search_items' => __('Search Speakers'),
    'not_found' =>  __('No speakers found'),
    'not_found_in_trash' => __('No speakers found in Trash'), 
    'menu_name' => 'Speakers'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/_img/icon/whatever.png',
    'rewrite' => array('slug' => 'speakers'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title','editor','excerpt','revisions','custom-fields','thumbnail')
  ); 
  register_post_type('speakers',$args);
} */

// Second, create taxonomies, and assign them to post types

// Post Type Name - [Name of Taxonomy]
/* add_action('init', 'twbs_taxonomy_taxonomyname', 0);
function twbs_taxonomy_taxonomyname() {
	
	$labels = array(
    'name' => _x( 'Program Codes', 'taxonomy general name' ),
    'singular_name' => _x( 'Program Code', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Program Codes' ),
    'popular_items' => __( 'Popular Codes' ),
    'all_items' => __( 'All Program Codes' ),
    'edit_item' => __( 'Edit Program Codes' ), 
    'update_item' => __( 'Update Program Code' ),
    'add_new_item' => __( 'Add New Code' ),
    'new_item_name' => __( 'New Program Code' ),
    'separate_items_with_commas' => __( 'Separate codes with commas' ),
    'add_or_remove_items' => __( 'Add or remove codes' ),
    'choose_from_most_used' => __( 'Choose from most used codes' ),
    'menu_name' => __( 'Program Codes' ),
  ); 

  register_taxonomy('twbs_taxonomyname','posttypeassignedto',array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'program-codes'),
  ));
} */

?>