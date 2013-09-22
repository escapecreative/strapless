<?php

// Add Class to Gravatar
add_filter('get_avatar', 'twbs_avatar_class');
function twbs_avatar_class($class) {
	$class = str_replace("class='avatar", "class='avatar img-circle media-object", $class);
	return $class;
}

// Add Class to Comment Reply Link
add_filter('comment_reply_link', 'twbs_reply_link_class');
function twbs_reply_link_class($class){
	$class = str_replace("class='comment-reply-link", "class='comment-reply-link btn btn-default btn-xs", $class);
	return $class;
}

// Customize Comment Output
// http://wp.tutsplus.com/tutorials/creative-coding/customizing-comments-in-wordpress-functionality-and-appearance/
// http://digwp.com/2010/02/custom-comments-html-output/
function twbs_comment_format($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>

	<li <?php comment_class('media'); ?> id="comment-<?php comment_ID(); ?>">
		<article>
			<div class="comment-meta pull-left">
				<?php echo get_avatar( $comment, 96 ); ?>
				<p class="text-center comment-author"><?php comment_author_link(); ?></p>
			</div> <!-- .comment-meta -->
			<div class="comment-content media-body">
				<p class="comment-date text-right text-muted pull-right"><?php echo human_time_diff( get_comment_time('U'), current_time('timestamp') ) . ' ago'; ?> &nbsp;<a class="comment-permalink" href="<?php echo htmlspecialchars ( get_comment_link( $comment->comment_ID ) ) ?>" title="Comment Permalink"><i class="icon-link"></i></a></p>
				<?php if ($comment->comment_approved == '0') { // Awaiting Moderation ?>
					<em><?php _e('Your comment is awaiting moderation.') ?></em>
				<?php } ?>
				<?php comment_text(); ?>
				<div class="reply pull-right">
					<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( '<i class="icon-reply"></i>&nbsp; Reply' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</div>
			</div> <!-- .comment-content -->
		</article>
<?php } // twbs_comment_format ?>