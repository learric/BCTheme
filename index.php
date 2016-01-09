<?php get_header(); ?>
			
	<!--========
	hero section
	============-->
	<div class="hero">
	
	<!--=== slide container ===-->
		<div class="slideContainer" id="heroSlider">
		
			<?php
				$args = array( 'post_type' => 'custom_banners' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
					echo '<div>';
					the_content();
					echo '</div>';
				endwhile;
			?>
		
		</div> <!-- end slide container -->
	
	<!--=== countdown container ===-->
		<div class="countdownContainer">
			<p>our next<br />event is in:</p>
			<p id="eventTimer">00:00:00:00:00</p>
			<a href="events.html">Reserve a Spot!</a>
		</div> <!-- end countdown container -->
	
	<!--=== banner container ===-->
		<div class="bannerContainer">
		
			<?php
				$args = array( 'post_type' => 'banner_content', 'posts_per_page' => '1' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
					the_content();
				endwhile;
			?>
		
		</div> <!-- end banner container -->
	
	</div> <!-- end hero -->
	
	
	<!--===============
	testimonial section
	================-->
	<div class="testimonials">
	
		<span class="fa fa-comments"></span>
	
		<div id="testimonials">
			
				<?php
					$args = array( 'post_type' => 'testimonials' );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
						the_content();
					endwhile;
				?>
		
		</div>
	
	</div> <!-- end testimonials -->
	
	
	<!--============
	features section
	=============-->
	<div class="features">
		<div class="row collapseSides">
	
			<div class="features_wrapper">
					
				<div class="small-12 medium-4 columns"> 				
					<div class="feature_box">					
						<div class="feature_content">							
						
							<?php
								$args = array('post_type' => 'features', 'posts_per_page' => '1', 'offset' => '2');
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
									the_content();
								endwhile;
							?>						
							
						</div>
	
						<a href="events.html" class="learn_more button">More Info</a>
					</div>					
				</div> <!-- end column -->
	
				<div class="small-12 medium-4 columns">
					<div class="feature_box">
						<div class="feature_content">
			
							<?php
								$args = array('post_type' => 'features', 'posts_per_page' => '1', 'offset' => '1');
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
									the_content();
								endwhile;
							?>
							
						</div>
	
						<a href="get-involved.html" class="learn_more button">Help Now</a>
					</div>
				</div> <!-- end column -->
	
				<div class="small-12 medium-4 columns">
					<div class="feature_box">
						<div class="feature_content">
			
							<?php
								$args = array('post_type' => 'features', 'posts_per_page' => '1', 'offset' => '0');
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
									the_content();
								endwhile;
							?>
							
						</div>
	
						<a href="http://cymplifymusic.com/cleanbreak/" target="_blank" class="learn_more button">Shop Now</a>
					</div>
				</div> <!-- end column -->
	
			</div> <!-- end features wrapper -->
	
		</div> <!-- end row -->
	</div> <!-- end features -->
	
	<?php get_footer(); ?>

	<!--=== app ===-->
	
	<!-- slides -->
	<script src="custom/js/jquery.slides.min.js"></script>
	<script type="text/javascript">
	    jQuery(function () {
	    	jQuery('#heroSlider').slidesjs({
	    		width: 1200,
	    		height: 800,
	    		play: {
	    			active: false,
	    			auto: true,
	    			interval: 4000
	    		},
	    		pagination: {
	    			active: false
	    		},
	    		navigation: {
	    			active: false
	    		}
	    	});
	    });
	</script>
	
	<!-- countdown -->
	<script src="custom/js/jquery.plugin.min.js"></script>
	<script src="custom/js/jquery.countdown.min.js"></script>
	<script type="text/javascript">
	var nextEvent = new Date();
	nextEvent = new Date(nextEvent.getFullYear() + 1, 3 - 1, 1);
	jQuery('#eventTimer').countdown({
		until: nextEvent,
		compact: true,
		format: 'dHMS',
		layout: '{dnn} Days {hnn}{sep}{mnn}{sep}{snn}'
	});
	</script>
	
	<!-- app -->
	<script src="custom/js/app.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function () {
		jQuery('#testimonials ul').inewsticker({
			speed: 6000,
			effect: 'fade'
		});
	});
	</script>

	</body>

</html>