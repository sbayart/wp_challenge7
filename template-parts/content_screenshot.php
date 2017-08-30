<section class="fourthaside">
    <h3><?php
			$cat = get_the_category_by_ID(5); 
			 echo $cat;
	?></h3>
	
		<p class='sdtitle'><?php echo category_description(5); ?></p>
    <div class="photos owl-carousel owl-theme">
        <div class="item" style="width:300px"><img src="<?php echo get_stylesheet_directory_uri() . '/static/images/2.png'; ?>" alt="signin"></div>
        <div class="item" style="width:300px"><img src="<?php echo get_stylesheet_directory_uri() . '/static/images/3.png'; ?>" alt="joinnike"></div>
        <div class="item" style="width:300px"><img src="<?php echo get_stylesheet_directory_uri() . '/static/images/1.png'; ?>" alt="skatter"></div>
    </div>
</section>
