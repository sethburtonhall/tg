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
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

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

		<script src="//cdnjs.cloudflare.com/ajax/libs/FitText.js/1.1/jquery.fittext.min.js"></script>
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
								<?php bones_header_nav(); ?>
							</nav>
						</div>

						<div class="twelvecol first">
							<div class="main-nav-wrapper">
								<nav id="nav" role="navigation" class="main-nav">
									<?php bones_main_nav(); ?>
									<div class="social-nav">
										<ul>
											<li><a href="http://instagram.com/traininggroundcolorado" target="_blank" title="Instagram"><img src="http://localhost:8888/wp-content/themes/bones/library/images/instagram.png" alt="Instgram"></a></li>
											<li><a href="https://twitter.com/Training_Ground" target="_blank" title="Twitter"><img src="http://localhost:8888/wp-content/themes/bones/library/images/twitter.png" alt="Twitter"></a></li>
											<li><a href="https://www.facebook.com/ColoradoTG" target="_blank" title="Facebook"><img src="http://localhost:8888/wp-content/themes/bones/library/images/facebook.png" alt="Facebook"></a></li>
											<li><a href="http://vimeo.com/user1207351" target="_blank" title="Vimeo"><img src="http://localhost:8888/wp-content/themes/bones/library/images/vimeo.png" alt="Vimeo"></a></li>
											<li><a href="http://www.flickr.com/photos/trainingground/" target="_blank" title="Flickr"><img src="http://localhost:8888/wp-content/themes/bones/library/images/flickr.png" alt="Flickr"></a></li>
											<li><a href="http://trainingground.tumblr.com/" target="_blank" title="Tumblr"><img src="http://localhost:8888/wp-content/themes/bones/library/images/tumblr.png" alt="Tumblr"></a></li>
											<li><a href="#more" title="More"><img src="http://localhost:8888/wp-content/themes/bones/library/images/more.png" alt="More"></a></li>
										</ul>
									</div>	
								</nav>


							</div>
						</div>



					</div> <!-- end #inner-header -->

			</header> <!-- end header -->
