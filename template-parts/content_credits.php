<section class="credits">
        <h3><?php
			$cat = get_the_category_by_ID(6); 
			 echo $cat;
	?></h3>
		<p><?php echo category_description(6); ?></p>
        <div class="sscredit">
            <div class="row">
                <article class="col-xs-6">
                    <i class="fa fa-desktop fa-4x "></i>
                    <div class="">
                        <h4>Bootstrap</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                    </div>
                </article>
                <article class="col-xs-6">
                    <i class="fa fa-picture-o fa-4x "> </i>
                    <div class="">
                        <h4>Owl-Carousel</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                    </div>
                </article>
            </div>
            <div class="row">
                <article class="col-xs-6">
                    <i class="fa fa-magic fa-4x "> </i>
                    <div class="">
                        <h4>Codrops</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                    </div>
                </article>
                <article class="col-xs-6">
                    <i class="fa fa-heart fa-4x "> </i>
                    <div class="">
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                    </div>
                </article>
            </div><!--row -->
        </div>
    </section>
