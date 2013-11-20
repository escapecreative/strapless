<?php
/*
The template that runs all date, author, category & tag archive pages.
*/

get_header(); ?>

<div class="jumbotron">
	<div class="container">
		<?php $post = $posts[0]; // Set $post so that the_date() works. ?>
		<?php /* Category Archives */ if (is_category()) { ?>
			<h1>Category: <?php single_cat_title(); ?></h1>
			<div class="row">
				<div class="col-md-8"><?php echo category_description(); ?></div>
			</div>
		<?php /* Tag Archives */ } elseif( is_tag() ) { ?>
			<h1>Tagged: <?php single_tag_title(); ?></h1>
			<div class="row">
				<div class="col-md-8"><?php echo tag_description(); ?></div>
			</div>
		<?php /* Date Archive -> DAY */ } elseif (is_day()) { ?>
			<h1>Articles from <?php the_date(); ?></h1>
		<?php /* Date Archive -> MONTH */ } elseif (is_month()) { ?>
			<h1>Articles from <?php the_time('F Y'); ?></h1>
		<?php /* Date Archive -> YEAR */ } elseif (is_year()) { ?>
			<h1>Articles from <?php the_time('Y'); ?></h1>
		<?php /* If this is an author archive */ } elseif (is_author()) {
			$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
			<h1>Author: <?php echo $curauth->display_name; ?></h1>
		<?php /* Paged Archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h1>Archives</h1>
		<?php } ?>
	</div> <!-- .container -->
</div> <!-- .jumbotron -->

<div class="container" id="main">
	<div class="row">
		<div class="col-md-8">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article <?php post_class('media'); ?>>
					<a class="pull-left" href="<?php the_permalink(); ?>">
						<?php // Insert featured image
						if (has_post_thumbnail()) {
							echo get_the_post_thumbnail($post->ID, 'thumbnail', array('class' => 'media-object', 'title' => '', 'alt' => 'alttag' ));
						} else { // Use a fallback ?>
							<img class="media-object" src="http://placehold.it/120x120" alt="No Image" />
						<?php } ?>
					</a>
					<div class="media-body">
						<h2 class="media-heading" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p><?php echo wp_trim_words( get_the_excerpt(), 30, '...' ); ?></p>
					</div> <!-- .media-body -->
				</article> <!-- .media -->
				<hr />

			<?php endwhile; ?>

				<ul class="pager">
					<li><?php next_posts_link('<i class="fa-chevron-left"></i>&nbsp; Older Articles') ?></li>
					<li><?php previous_posts_link('Newer Articles &nbsp;<i class="fa-chevron-right"></i>') ?></li>
				</ul>

			<?php else : // If no posts are found ?>

				<article>
					<h2><?php _e('Nothing Found'); ?></h2>
					<p><?php _e('Sorry, but we couldn&#8217;t find any articles of that type. Try searching for one.'); ?></p>
					<?php get_search_form(); ?>
				</article>

			<?php endif; ?>

		</div> <!-- .col-md-8 -->

		<?php get_sidebar(); ?>

	</div> <!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>