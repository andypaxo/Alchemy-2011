<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(); bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(), '/html5reset.css'; ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class()?>><div id='main'>

<header>
<h1>
<a href='<?php bloginfo('url')?>' alt='<?php bloginfo('name'); ?>'><img src='<?php bloginfo('template_url'); ?>/title.png'/></a>
</h1>
</header>