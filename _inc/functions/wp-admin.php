<?php
// All functions that affect the /wp-admin/ area

// Add 'table' class to all <table> tags within the WYSIWYG
// http://wordpress.stackexchange.com/questions/85054/how-to-add-a-class-to-ul-tags-created-by-the-wordpress-editor-tinymce
add_filter('wp_insert_post_data', 'twbs_add_table_class');
function twbs_add_table_class( $postarr ) {
	$postarr['post_content'] = str_replace('<table', '<table class="table"', $postarr['post_content'] );
	return $postarr;
}

?>