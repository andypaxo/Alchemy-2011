<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(); bloginfo('name'); ?></title>
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(), '/html5reset.css'; ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class()?>><div id='main'>

<header>
	<h1>
		<a href='<?php bloginfo('url')?>'><img alt='<?php bloginfo('name'); ?>' src='<?php bloginfo('template_url'); ?>/title.png'/></a>
	</h1>
	<nav>
		<ul>
			<li><a href='#'><img src='<?php bloginfo('template_url'); ?>/about.png' alt='about' /></a></li>
			<li><a href='#'><img src='<?php bloginfo('template_url'); ?>/search.png' alt='search' /></a></li>
			<li><a href='#'><img src='<?php bloginfo('template_url'); ?>/subscribe.png' alt='subscribe' /></a></li>
		</ul>
	</nav>
</header>