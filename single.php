<?php
get_header();

if (!have_posts())
	echo 'No content to display';

while (have_posts()) {
	the_post();
?>
<article id='post-<?php the_ID(); ?>' <?php post_class('single'); ?>>
		<header>
			<h1><a href='<?php the_permalink(); ?>' rel='bookmark'><?php the_title(); ?></a></h1>
		</header>
	
		<?php the_content(); ?>
</article>
<?php
}

get_footer();
?>