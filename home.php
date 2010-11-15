<?php
get_header();

if (!have_posts())
	echo 'No content to display';

$isFirst = true;
while (have_posts()) {
	the_post();
	
?>
<article id='post-<?php the_ID(); ?>' <?php if($isFirst) post_class('feature'); else post_class(); ?>>
	<a href='<?php the_permalink(); ?>' rel='bookmark'>
		<header>
			<h1><?php the_title(); ?></h1>
		</header>
	</a>
</article>
<?php
$isFirst = false;
}

get_footer();
?>