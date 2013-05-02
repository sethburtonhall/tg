<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="article-wrap clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title" itemprop="headline"><?php echo get_the_title($post->post_parent);?><span data-icon="&#xe007;"></span></h1>

									<!-- what is tg nav -->
									<?php
										if (is_page(9) || in_array(9, $post->ancestors)) {
											tg_about_page_nav();
										}
									?>

									<!-- summer adventures nav -->
									<?php
										if (is_page(10) || in_array(10, $post->ancestors)) {
											tg_summer_adventures_page_nav();
										}
									?>

									<!-- weekend adventures nav -->
									<?php
										if (is_page(11) || in_array(11, $post->ancestors)) {
											tg_weekend_adventures_page_nav();
										}
									?>

									<!-- support/donate nav -->
									<?php
										if (is_page(12) || in_array(12, $post->ancestors)) {
											tg_support_page_nav();
										}
									?>

									<!-- resources nav -->
									<?php
										if (is_page(13) || in_array(13, $post->ancestors)) {
											tg_resources_page_nav();
										}
									?>

								</header> <!-- end article header -->

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
							</section> <!-- end article section -->

								<footer class="article-footer">
									<?php the_tags('<span class="tags">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?>

								</footer> <!-- end article footer -->

								<?php comments_template(); ?>

							</article> <!-- end article -->

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e("This is the error message in the page.php template.", "bonestheme"); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

						<!-- <?php get_sidebar(); ?> -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

			<?php include("home_widgets.php"); ?>

<?php get_footer(); ?>
