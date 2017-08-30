<footer>
    <section class="greysection">
        <h3><?php
			$cat = get_the_category_by_ID(9); 
			 echo $cat;
	?></h3>
		<p class='sdtitle'><?php echo category_description(9); ?></p>
		<?php
			$args = array(
				'category_name'    => 'get-live-updates'
			);
			$posts = get_posts($args);
			foreach ($posts as $post) {
				setup_postdata($post);
                the_content();
            }; ?>
    </section>
    <?php get_template_part('template-parts/content_credits'); ?>
    <section class="lady">
		<div>
		<?php
			$args = array(
				'category_name'    => 'lady'
			);
			$posts = get_posts($args);
			foreach ($posts as $post) {
				setup_postdata($post); ?>
				<h3><?php the_title(); ?></h3><?php
                the_content();
            }; ?>
		</div>
    </section>
    <?php wp_footer() ?>
</footer>
<script src="<?php echo get_stylesheet_directory_uri().'/static/external/jquery/dist/jquery.min.js' ; ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri().'/static/external/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri().'/static/external/OwlCarousel2-2.2.1/dist/owl.carousel.min.js'; ?>"></script>
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    items:3,
    dots:true,
    nav:false,
    autoplay:true,
    autoplayTimeout:2000,
})

  </script>
</body>
</html>
