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
    <?php
    		get_template_part('template-parts/content_use'); ?>

    <section class="lady">
        <div class="">
            <h3>Download Free</h3>
            <p class="text-uppercase"><i class="fa fa-usd" aria-hidden="true"></i> Pay with a tweet</p>
        </div>
    </section>
    <section class="contactus">
        <h3>Contact Us</h3>
        <p>A special thanks to Death.</p>
        <div class="form col-xs-6">
            <div class="form-group has-feedback">
                <label class="control-label" for="inputSuccess2">Your Name</label>
                <input type="text" class="form-control" aria-describedby="inputSuccess2Status">
                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                <!-- <span id="inputSuccess2Status" class="sr-only">(success)</span> -->
            </div>
            <div class="form-group has-feedback">
                <label class="control-label" for="inputSuccess2">Your Email</label>
                <input type="text" class="form-control" aria-describedby="inputSuccess2Status">
                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                <!-- <span id="inputSuccess2Status" class="sr-only">(success)</span> -->
            </div>
            <div class="form-group has-feedback">
                <label class="control-label" for="inputSuccess2">Message</label>
                <textarea type="text" class="form-control" aria-describedby="inputSuccess2Status"></textarea>
                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                <!-- <span id="inputSuccess2Status" class="sr-only">(success)</span> -->
            </div>
            <p class="green">Submit</p>
        </div>
        <div class="office col-xs-6">
            <h4>Office Location</h4>
            <p>The Pentagon</p>
            <p>Washington</p>
            <p>Phone: XXX-XXX-XXXX</p>
            <p>Fax: XXX-XXX-YYYY</p>
            <h4 class="social">Social</h4>
            <i class="fa fa-facebook-square fa-2x"></i>
            <i class="fa fa-twitter-square fa-2x"></i>
            <i class="fa fa-google-plus-square fa-2x"></i>
            <i class="fa fa-flickr fa-2x"></i>
        </div>
    </section>
    <section class="final">
        <div class="col-xs-12 col-lg-8">
            <h4>Follow Me!</h4>
            <p>Vuoi ricevere news su altri template?</p>
            <p>Visita Andrea Galanti.it e vedrai tutte le news riguardanti nuovi Theme!</p>
            <p>Go to:andreagalnti.it</p>
            <p>Flatfy Theme by Andrea Galanti is licensed to the public under the Creative Commons Attribution 3.0 License - NOT COMMERCIAL.</p>
        </div>
        <div class="col-xs-12 col-lg-4">
            <h4>Flatfy Theme</h4>
            <p>12 column Grid Bootstrap</p>
            <p>Form Contact</p>
            <p>Drag Gallery</p>
            <p>Full Responsive</p>
            <p>Lorem Ipsum</p>
            <p>Go to: andreagalanti.it/flatfy</p>
        </div>
    </section>
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
