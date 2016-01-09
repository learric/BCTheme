<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>
		
		<link href="/mbc/custom/js/jquery.countdown.css" rel="stylesheet" />

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
	
		<!--==========
		header section
		==============-->
		<div class="header">
	
			<div class="row collapseSides">

			<!--=== logo ===-->
				<div class="logo">
					<div class="small-12 medium-8 columns collapseSides">
						<a href="/mbc/index.php" title=""><img src="/mbc/wp-content/themes/MyBlueCommunity/images/logo.png" alt="" /></a>
						<a href="#" id="mobileNav"><span class="fa fa-plus-square-o"></span><span class="fa fa-minus-square-o"></span></a>
					</div> <!-- end column -->
				</div> <!-- end logo -->
		
			<!--=== event logo ===-->
				<div class="small-12 medium-4 columns">
					<div class="event_logo">
						<a href="events.html" title=""><img src="/mbc/wp-content/themes/MyBlueCommunity/images/logo_blue_rock_small.png" alt="" /></a>
						<a href="events.html" title=""><img src="/mbc/wp-content/themes/MyBlueCommunity/images/logo_clean_break_small.png" alt="" /></a>
					</div> <!-- end event logo -->
		
			<!--=== social ===-->			
					<div class="social">
						<ul>
							<li><a href="https://www.facebook.com/cleanbreaker" title="Facebook CleanBreaker" target="_blank"><span class="fa fa-facebook"></span></a></li>
							<li><a href="https://twitter.com/bluecommunity" title="Twitter Blue Community" target="_blank"><span class="fa fa-twitter"></span></a></li>
							<li><a href="https://youtube.com/" title="YouTube" target="_blank"><span class="fa fa-youtube"></span></a></li>
							<li><a href="http://instagram.com/bluecommunity" title="Instagram" target="_blank"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div> <!-- end social -->
				</div> <!-- end column -->
		
			<!--=== main nav ===-->
				<div class="main_nav">
					<div class="small-12 columns collapseSides">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>
					</div> <!-- end column -->
				</div> <!-- end main nav -->
		
			</div> <!-- end row -->
			
		</div> <!-- end header -->