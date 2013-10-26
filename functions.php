<?php
include('_inc/functions/menus.php'); /* Register Menus, Create Menu Locations, Walker_Nav_Menu */
include('_inc/functions/widget-areas.php'); /* Add Widget-Areas */
include('_inc/functions/images.php'); /* Add Image Sizes */
include('_inc/functions/comments.php'); /* Custom Comment Formatting */
include('_inc/functions/wp-admin.php'); /* For the WP Admin backend only */

// Clean up the <head>
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add RSS links to <head> section
automatic_feed_links();

// Add post format theme support
add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video'));

// Add support for featured images
add_theme_support( 'post-thumbnails' );

// Only on front-end pages, NOT in admin area
if (!is_admin()) {

	// Load CSS
	add_action('wp_enqueue_scripts', 'twbs_load_styles', 11);
	function twbs_load_styles() {
		// Bootstrap
		wp_register_style('bootstrap-styles', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css', array(), null, 'all');
		wp_enqueue_style('bootstrap-styles');
		// Google Fonts
		// wp_register_style('google-fonts', '//fonts.googleapis.com/css?family=Open+Sans', array(), null, 'all');
		// wp_enqueue_style('google-fonts');
		// Theme Styles
		wp_register_style('theme-styles', get_stylesheet_uri(), array(), null, 'all');
		wp_enqueue_style('theme-styles');
		// Font Awesome
		wp_register_style('font-awesome', '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css', array(), null, 'all');
		wp_enqueue_style('font-awesome');
	}

	// Load Javascript
	add_action('wp_enqueue_scripts', 'twbs_load_scripts', 12);
	function twbs_load_scripts() {
		// jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), null, false);
		wp_enqueue_script('jquery');
		// Bootstrap
		wp_register_script('bootstrap-scripts', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js', array('jquery'), null, true);
		wp_enqueue_script('bootstrap-scripts');
		// Modernizr
		wp_register_script('modernizr', get_template_directory_uri() . '/_js/modernizr-2.6.2.js', array(), null, false);
		wp_enqueue_script('modernizr');
	}

} // end if !is_admin

// Checks to see if it's a subpage of a parent
// http://codex.wordpress.org/Conditional_Tags#Testing_for_sub-Pages
function is_tree( $pid ) { // $pid = The ID of the page we're looking for pages underneath
	global $post; // load details about this page
	if ( is_page($pid) )
		return true; // we're at the page or at a sub page
	$anc = get_post_ancestors( $post->ID );
	foreach ( $anc as $ancestor ) {
		if( is_page() && $ancestor == $pid ) {
			return true;
		}
	}
	return false; // we aren't at the page, and the page is not an ancestor
}

// Edit profile contact fields on user screen
// http://sixrevisions.com/wordpress/10-techniques-for-customizing-the-wordpress-admin-panel/
// For using these fields on author.php template, see:
// http://www.wpbeginner.com/wp-themes/how-to-add-a-custom-author-profile-page-to-your-wordpress/
function twbs_new_contactmethods( $contactmethods ) {
	unset($contactmethods['aim']);
	unset($contactmethods['jabber']);
	unset($contactmethods['yim']);
	$contactmethods['twitter'] = 'Twitter Username';
	$contactmethods['facebook'] = 'Facebook Profile URL';
	$contactmethods['linkedin'] = 'LinkedIn Profile URL';
	return $contactmethods;
}
add_filter('user_contactmethods','twbs_new_contactmethods',10,1);

// Adds 'odd' and 'even' classes to each post
// http://wp-snippets.com/1458/add-oddeven-to-posts/
function oddeven_post_class ( $classes ) {
	global $current_class;
	$classes[] = $current_class;
	$current_class = ($current_class == 'odd') ? 'even' : 'odd';
	return $classes;
}
add_filter ('post_class', 'oddeven_post_class');
global $current_class;
$current_class = 'odd';

// Add class if post has a featured image
function twbs_has_thumb_class($classes) {
	global $post;
	if( has_post_thumbnail($post->ID) ) { $classes[] = 'has-featured'; }
		return $classes;
}
add_filter('post_class', 'twbs_has_thumb_class');

// Allows use of "the_slug" to echo the current post slug
function the_slug($echo=true) {
	$slug = basename(get_permalink());
	do_action('before_slug', $slug);
	$slug = apply_filters('slug_filter', $slug);
	if( $echo ) echo $slug;
	do_action('after_slug', $slug);
	return $slug;
}
?>