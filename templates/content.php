<!-- article-post-->
							<div class="article-post <?php post_class(); ?>">
								<!-- entry-header-->
								<div class="entry-header clear">
									<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>	
									<?php get_template_part('templates/entry-meta'); ?>
								</div>
								<!-- /entry-header-->
								<!-- entry-content-->
								<div class="entry-content clear">
									 <?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
									<?php the_excerpt(); ?>
								</div>
								<!-- /entry-content-->
							</div>
							<!-- /article-post-->

