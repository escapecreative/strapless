<?php
/* Template that powers all single blog post pages. */

get_header();

$date_published = get_the_date();
$date_modified = get_the_modified_date();

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1 class="page-title"><?php the_title(); ?></h1>
				<ul class="list-inline post-meta">
					<li><i class="icon-calendar"></i> <?php the_date(); ?></li>
					<?php if ( $date_published != $date_modified ) { ?>
					<li><i class="icon-time"></i> Updated: <?php echo human_time_diff( get_the_modified_date('U'), current_time('timestamp') ) . ' ago'; ?></li>
					<?php } // end if ?>
					<li><i class="icon-comments"></i> <?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></li>
				</ul>
				<p><i class="icon-folder-open"></i> <?php the_category(', '); ?></p>
				<?php if ( has_tag() ) { // Check if post has any tags ?>
				<p><i class="icon-tags"></i> <?php the_tags('', ', '); ?></p>
				<?php } // end if ?>
			</div> <!-- .col-md-8 -->
			<div class="col-md-4 img-featured">
				<?php // Insert featured image
				if (has_post_thumbnail()) {
					echo get_the_post_thumbnail($post->ID, 'large', array('class' => 'img-responsive', 'title' => ''));
				} else { // Use a fallback ?>
					<img class="thumbnail" src="http://placehold.it/750x500" alt="Image coming soon" />
				<?php } ?>
			</div> <!-- .col-md-4 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</div> <!-- .jumbotron -->

<div class="container" id="main">
	<div class="row">
		<div class="col-md-8">
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<?php the_content(); ?>
				<ul class="pager">
					<li class="previous"><?php previous_post_link('%link', '<i class="icon-chevron-left"></i>&nbsp; %title'); ?></li>
					<li class="next"><?php next_post_link('%link', '%title &nbsp;<i class="icon-chevron-right"></i>'); ?></li>
				</ul>
			</article>

			<?php comments_template(); ?>

		</div> <!-- .col-md-8 -->

<?php endwhile; endif; ?>

		<?php get_sidebar(); ?>

	</div> <!-- .row -->
</div> <!-- .container -->

<?php get_footer(); ?>