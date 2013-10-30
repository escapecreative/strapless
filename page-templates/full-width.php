<?php
/* Template Name: Full Width (no sidebar) */

get_header(); ?>

<div class="container" id="main">
	<div class="row">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h1 class="col-md-12 page-title"><?php the_title(); ?></h1>

	<article class="page col-md-12" id="post-<?php the_ID(); ?>">
		<div class="entry">
			<?php the_content(); ?>
		</div>
	</article>
	<?php endwhile; else: ?>
	<article class="page col-md-12 not-found">
		<div class="entry">
			<p class="lead"><?php _e('Sorry, this page does not exist. Try a search.'); ?></p>
			<?php get_search_form(); ?>
		</div>
	</article>
	<?php endif; ?>

	</div> <!-- .row -->
</div> <!-- .container -->

<?php get_footer(); ?>