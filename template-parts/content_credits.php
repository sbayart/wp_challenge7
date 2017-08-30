<section class="credits">
        <h3><?php
			$cat = get_the_category_by_ID(6); 
			 echo $cat;
	?></h3>
		<p><?php echo category_description(6); ?></p>
        <div class="sscredit">
			<div class="row">
				<?php
					$args = array(
						'posts_per_page'   => 2,
						'orderby'          => 'date',
						'order'            => 'ASC',
						'category_name'    => 'credit'
					);
					$posts = get_posts($args);
					foreach ($posts as $post) {
			setup_postdata( $post );
			?>
				<article class="col-xs-6">
					<?php $meta = get_post_meta(get_the_ID(),'fa-icon', true) ?>
					<i class="fa fa-<?php echo $meta; ?> fa-4x "></i>
					<div class="">
						<h4><?php the_title(); ?></h4>
						<?php the_content(); ?>
					</div>
				</article>
			<?php };?>
			</div><!--row -->
						<div class="row">
				<?php
					$args = array(
						'posts_per_page'   => 2,
						'offset'           => 2,
						'orderby'          => 'date',
						'order'            => 'ASC',
						'category_name'    => 'credit'
					);
					$posts = get_posts($args);
					foreach ($posts as $post) {
			setup_postdata( $post );
			?>
				<article class="col-xs-6">
				<?php $meta = get_post_meta(get_the_ID(),'fa-icon', true) ?>
					<i class="fa fa-<?php echo $meta; ?> fa-4x "></i>
					<div class="">
						<h4><?php the_title(); ?></h4>
						<?php the_content(); ?>
					</div>
				</article>
			<?php };?>
			</div><!--row -->
		</div>
	</section>
