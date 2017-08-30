
    <h3><?php
			$cat = get_the_category_by_ID(2); 
			 echo $cat;
	?></h3>
	
		<p class='sdtitle'><?php echo category_description(2); ?></p>

    <div class="firstrow">
		<?php
			$args = array(
				'posts_per_page'   => 3,
				'orderby'          => 'date',
				'order'            => 'ASC',
				'category_name'    => 'what-is'
			);
			$posts = get_posts($args);
			foreach ($posts as $post) {
    setup_postdata( $post );
    ?>
        <article>
            <?php the_post_thumbnail() ?>
            <div class="">
                <h4><?php the_title(); ?></h4>
                <?php the_content(); ?>
            </div>
        </article>
<?php };?>
	</div>
    <div class="secondrow">
		<?php
			$args = array(
		                'posts_per_page'   => 3,
		                'offset'           => 3,
		                'orderby'          => 'date',
		                'order'            => 'ASC',
		                'category_name'    => 'what-is'
		            );
		    $posts = get_posts($args);
foreach ($posts as $post) {
    setup_postdata( $post );
    ?>
        <article>
            <?php the_post_thumbnail() ?>
            <div class="">
                <h4><?php the_title(); ?></h4>
                <?php the_content(); ?>
            </div>
        </article>
<?php };?>
    </div> 






