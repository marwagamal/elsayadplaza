			<div class="header-bg"></div>
			<!-- inner-wrap -->
			<div id="inner-wrap" class="slide">
				<!-- body-container -->
				<div class="body-container row">
					<!-- page-header -->

					<?php get_template_part('templates/page', 'header'); ?>
					<div class="main-content row">
						<div class="col-lg-8 page-content">
							<?php while (have_posts()) : the_post(); ?>
						  <div class="article-post">
								<!-- entry-header-->
							<div class="entry-header clear">
							  <h1 class="entry-title"><?php the_title(); ?></h1>
							  			
									<?php get_template_part('templates/entry-meta'); ?>
							  
							</div>
								<!-- /entry-content-->
													

							<div class="entry-content clear">
								 <?php echo get_the_post_thumbnail($page->ID, 'medium'); ?>
							  <?php the_content(); ?>
							</div>
							<footer>
							  <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
							</footer>
							</div>
							
						</div>
						<?php if (roots_display_sidebar()) : ?>
							<aside class="sidebar col-lg-4 <?php echo roots_sidebar_class(); ?>" role="complementary">
							  <?php include roots_sidebar_path(); ?>
							</aside><!-- /.sidebar -->
						  <?php endif; ?>
						
					</div>
				</div>
				<!-- /body-container -->					

    
  </div>
	<!-- /article-post-->
<?php endwhile; ?>
