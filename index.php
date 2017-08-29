<?php get_header(); ?>
<main>
    <main class="row">
        <!-- <div class="container"> -->
        <h3><?php
				$cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name;
		?> </h3>
        <p class="sdtitle">A special thanks to Death.</p>
        <div class="firstrow">
            <?php
                    $args = array(
                        'posts_per_page'   => 3,
                        'orderby'          => 'date',
                        'order'            => 'ASC',
                        'category_name'    => 'what-is'
                    );
                    $posts = get_posts($args);
                    get_template_part('template-parts/content_what');
                    ?>
           </div>
        <div class="secondrow">
        <?php $args = array(
                        'posts_per_page'   => 3,
                        'offset'           => 3,
                        'orderby'          => 'date',
                        'order'            => 'ASC',
                        'category_name'    => 'what-is'
                    );
		        $posts = get_posts($args);
		        get_template_part('template-parts/content_what');
        ?>
        </div> 
    </main>


<?php get_footer();
