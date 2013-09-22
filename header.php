<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->

<head profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>" />

	<!-- Force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<?php if (is_search() || is_404()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title><?php wp_title(''); ?></title>
	<meta name="title" content="<?php wp_title(''); ?>" />
	<meta name="author" content="" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_img/icon/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_img/icon/apple-touch-icon.png">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="wrap">

<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">Menu</button>
			<a class="navbar-brand" href="<?php echo get_option('home'); ?>/"><?php echo bloginfo('name'); ?></a>
		</div>
		<div class="collapse navbar-collapse">
			<?php wp_nav_menu(
				array (
					'theme_location' => 'primary-nav',
					'menu_class' => 'nav navbar-nav',
					'depth' => 2,
					'container' => '',
					'walker' => new Bootstrap_Walker_Nav_Menu()
				)
			); ?>
		</div> <!-- .navbar-collapse -->
	</div> <!-- .container -->
</div> <!-- .navbar -->