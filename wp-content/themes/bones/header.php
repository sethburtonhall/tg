<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width">

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<script src="<?php echo get_stylesheet_directory_uri() ?>/library/js/libs/responsive-nav.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri() ?>/library/js/libs/jquery.flexslider.js"></script>

		<!-- drop Google Analytics Here -->
		
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div class="header-img"></div> <!-- end .header-img -->
					<div class="header-gradient"></div> <!-- end .header-gradient -->

					<div id="inner-header" class="wrap clearfix">

						<div class="fivecol first clearfix">
							<a href="<?php echo home_url(); ?>" rel="nofollow">
								<div class="logo"></div>
							</a>
						</div>

						<div class="sevencol last clearfix">
							<nav role="navigation" class="header-nav mask">
								<?php tg_header_nav(); ?>
							</nav>
						</div>

						<div class="twelvecol first">
							<div class="main-nav-wrapper">
								<nav id="nav" role="navigation" class="main-nav">
									<?php tg_main_nav(); ?>
									<div class="social-nav">
										<ul>
											<li><a href="http://instagram.com/traininggroundcolorado" target="_blank" title="Instagram" class="icon-instagram"></a></li>
											<li><a href="https://twitter.com/Training_Ground" target="_blank" title="Twitter" class="icon-twitter"></a></li>
											<li><a href="https://www.facebook.com/ColoradoTG" target="_blank" title="Facebook" class="icon-facebook"></a></li>
											<li><a href="http://vimeo.com/user1207351" target="_blank" title="Vimeo" class="icon-vimeo"></a></li>
											<li><a href="http://www.flickr.com/photos/trainingground/" target="_blank" title="Flickr" class="icon-flickr"></a></li>
											<li><a href="http://trainingground.tumblr.com/" target="_blank" title="Tumblr" class="icon-tumblr"></a></li>
											<li><a href="#more-info" title="More" class="icon-more"></a></li>
										</ul>
									</div>	
								</nav>


							</div>
						</div>



					</div> <!-- end #inner-header -->

			</header> <!-- end header -->
