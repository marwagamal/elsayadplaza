			<div class="header-bg"></div>
			<!-- inner-wrap -->
			<div id="inner-wrap" class="slide">
				<!-- body-container -->
				<div class="body-container row">
					<!-- page-header -->

					<?php get_template_part('templates/page', 'header'); ?>
					<div class="main-content row">
						<div class="col-lg-8 page-content">
							<?php get_template_part('templates/content', 'page'); ?>
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
			<!-- /inner-wrap -->
