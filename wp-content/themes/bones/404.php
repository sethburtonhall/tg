<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="article-wrap clearfix" role="main">

						<article id="post-not-found" class="hentry clearfix">

							<header class="article-header">

								<h1><?php _e("Whoah! Epic 404 - Page Not Found", "bonestheme"); ?></h1>

							</header> <!-- end article header -->

							<section class="entry-content">

								<p><?php _e("The page you were looking for was not found, but maybe try looking again!", "bonestheme"); ?></p>

							</section> <!-- end article section -->

							<section class="search">

									<p><?php get_search_form(); ?></p>

							</section> <!-- end search section -->

						</article> <!-- end article -->

					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

			<?php include("home_widgets.php"); ?>

<?php get_footer(); ?>
