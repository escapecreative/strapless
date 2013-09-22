<?php /* Create widget-ready areas */

// Sidebar - Global
// The default sidebar area if no others are used.
function sidebar_global_widget() {
	register_sidebar(array(
		'name' => 'Sidebar - Global',
		'id' => 'sidebar_global_widget',
		'description' => __('The default sidebar area if no others are used.'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>')
	);
}
add_action('init', 'sidebar_global_widget');
?>