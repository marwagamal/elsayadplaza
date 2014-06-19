			
			<div class="header-bg"></div>
			<!-- inner-wrap -->
			<div id="inner-wrap" class="slide">
				<!-- body-container -->
				<div class="body-container row">
					<!-- page-header -->
					<?php get_template_part('templates/page', 'header'); ?>
					<!-- /page-header -->
					<!-- main-content-->
					<div class="main-content row">
						<!-- page-content-->
						<div class="col-lg-8 page-content">
							<!-- article-post-->
							
								<?php if (!have_posts()) : ?>
								  <div class="alert alert-warning">
									<?php _e('عفوا، لا يوجد موضوعات فى هذا التنصيف', 'roots'); ?>
								  </div>
								  
								<?php endif; ?>

								<?php while (have_posts()) : the_post(); ?>
								  <?php get_template_part('templates/content', get_post_format()); ?>
								<?php endwhile; ?>
							<!-- /article-post-->
											
							
							<div class="pagination-container pagination-centered">
								<?php if ($wp_query->max_num_pages > 1) : ?>
								<ul class="pagination">
									<li class="unavailable"><?php previous_posts_link(); ?></li>
									<li class="page-link-number current"><a href="#">1</a></li>
									
									<li class="bon-next-link"><?php next_posts_link(); ?></li>
								</ul>
								<?php endif; ?>
							</div>
						</div>
						<!-- /page-content-->
						<!-- sidebar-->
						
							<?php if (roots_display_sidebar()) : ?>
							<aside class="col-lg-4 sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
							  <?php include roots_sidebar_path(); ?>
							</aside><!-- /.sidebar -->
						  <?php endif; ?>
						
						<!-- /sidebar-->
						
					</div>
					<!-- /main-content-->
				</div>
				<!-- /body-container -->
			</div>
			<!-- /inner-wrap -->





