<?php get_header(); ?>

<main class="row">
	<?php
	    get_template_part('template-parts/content_what');
	?>
</main>
<aside class="firstaside">
	<?php
		$args = array(
		            'posts_per_page'   => 1,
		            'orderby'          => 'date',
		            'category_name'    => 'use-it'
		        );
		$posts = get_posts($args);
		get_template_part('template-parts/content_use');
	?>
</aside>
<?php get_footer();
