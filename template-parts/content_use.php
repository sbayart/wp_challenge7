<section class="firstaside">
	<?php
		$args = array(
		            'posts_per_page'   => 1,
					'offset'           => 2,
		            'orderby'          => 'date',
		            'category_name'    => 'use-it'
		        );
		$posts = get_posts($args);
		foreach ($posts as $post) {
			setup_postdata( $post );
	?>
	<div class="">
		<section>
			<h4><?php the_title(); ?></h4>
			<?php the_content(); ?>
		</section>
		<?php the_post_thumbnail('medium') ?>
	</div>
	<?php };?>
</section>
<section class="secondaside">
	<?php
		$args = array(
		            'posts_per_page'   => 1,
					'offset'           => 1,
		            'orderby'          => 'date',
		            'category_name'    => 'use-it'
		        );
		$posts = get_posts($args);
		foreach ($posts as $post) {
			setup_postdata( $post );
	?>
	<div class="">
		<?php the_post_thumbnail('medium') ?>
		<section>
			<h4><?php the_title(); ?></h4>
			<?php the_content(); ?>
		</section>
	</div>
	<?php };?>
</section>
<section class="thirdaside">
<?php
		$args = array(
		            'posts_per_page'   => 1,
		            'orderby'          => 'date',
		            'category_name'    => 'use-it'
		        );
		$posts = get_posts($args);
		foreach ($posts as $post) {
			setup_postdata( $post );
	?>
	<div class="">
		<section>
			<h4><?php the_title(); ?></h4>
			<?php the_content(); ?>
		</section>
		<?php the_post_thumbnail('medium') ?>
	</div>
	<?php };?>
</section>
