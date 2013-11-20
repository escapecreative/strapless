<?php
/*
The template that runs the homepage, if "Reading Settings" > Front Page Displays...
is set to "Your latest posts"

Also serves as the fallback for all other content types,
if a more specific template file is not provided.
*/

get_header(); ?>

<div class="jumbotron">
	<div class="container">
		<?php if ( is_front_page() || is_home() ) { ?>
			<h1><?php _e('Welcome to '); ?><?php echo bloginfo('name'); ?></h1>
			<p class="lead"><?php bloginfo('description'); ?></p>
		<?php } else { ?>
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
					<p><?php _e('Sorry, but we couldn&#8217;t find the articles you were looking for. Try searching for one.'); ?></p>
					<?php get_search_form(); ?>
				</article>

			<?php endif; ?>

		</div> <!-- .col-md-8 -->

		<?php get_sidebar(); ?>

	</div> <!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>