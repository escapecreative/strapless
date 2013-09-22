<?php get_header(); ?>

<div class="jumbotron">
	<div class="container">
		<h1><?php _e('Page Not Found'); ?></h1>
		<p class="lead"><?php _e('The page you&lsquo;re looking for doesn&lsquo;t exist. Search our site, or view one of our site&rsquo;s pages or a recent article below.'); ?></p>
		<div class="row">
			<div class="col-md-3">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div> <!-- .container -->
</div> <!-- .jumbotron -->

<div class="container" id="main">
	<div class="row">
		<div class="col-md-8">

			<div class="row">
				<div class="col-md-6 posts">
					<h3><?php _e('Recent Articles'); ?></h3>
					<ul>
						<?php
							$args = array(
								'numberposts' => '10',
								'post_status' => 'publish'
							);
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent ) {
								echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"] . '</a></li>';
							}
						?>
					</ul>
				</div> <!-- .posts -->
				<div class="col-md-6 pages">
					<h3><?php _e('Page Sitemap'); ?></h3>
					<ul>
						<?php wp_list_pages('title_li=&sort_column=menu_order'); ?>
					</ul>
				</div> <!-- .pages -->
			</div> <!-- .row -->

		</div> <!-- .col-md-8 -->

		<?php get_sidebar(); ?>

	</div> <!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>