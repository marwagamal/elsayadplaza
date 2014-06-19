			<?php while (have_posts()) : the_post(); ?>
			<!-- article-post-->
							<div class="article-post">
								<!-- entry-header-->
								<div class="entry-header clear">
									<h1 class="entry-title"><?php the_title(); ?></h1>	
								</div>
								<!-- /entry-header-->
								<!-- entry-content-->
								<div class="entry-content clear">
									<?php the_content(); ?>
								</div>
								<!-- /entry-content-->
							</div>
							<!-- /article-post-->				
 

  
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
