<?php
foreach ($posts as $post) {
    setup_postdata( $post );
    $tags = wp_get_post_tags($post->ID);
    ?>
        <article>
            <?php the_post_thumbnail() ?>
            <div class="">
                <h4><?php the_title(); ?></h4>
                <p><?php the_content(); ?></p>
            </div>
        </article>

<?php };?>
