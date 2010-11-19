<?php
get_header();

if (!have_posts())
	echo 'No content to display';

$isFirst = true;
while (have_posts()) {
	the_post();
	
?>
<article id='post-<?php the_ID(); ?>' <?php if($isFirst) post_class('feature'); else post_class(); ?>>
	
		<header>
			<h1><a href='<?php the_permalink(); ?>' rel='bookmark'><?php the_title(); ?></a></h1>
			<?php the_excerpt(); ?>
		</header>
	
</article>
<?php
$isFirst = false;
}
?>

<nav>
<?php posts_nav_link(' ', 'Newer', 'Older'); ?>
</nav>

<?php get_footer(); ?>