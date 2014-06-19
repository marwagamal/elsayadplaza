					<div class="page-header row">
						<div class="col-lg-8 link-tree">
							<span class="tree-begin"><a href="http://elsayadplaza.com" title="" rel="home">الرئيسية</a></span>
							<?php if($post->post_parent) {
								$permalink = get_permalink($post->post_parent);
								$parent_title = get_the_title($post->post_parent);
							?>
								<span class="sep">›</span>
								<a href="<?php echo $permalink; ?>"><?php echo $parent_title; ?></a>
							<?php  } ?>
							<span class="sep">›</span>
							<span class="tree-end">
								<?php 
									if( is_404() ) { // if it's 404 page

										echo 'عفوا، الرابط غير صحيح '; // or Whatever you want


									} else  { 
										wp_title();            

									} 
								?>
							
							</span>
						</div>
						<div class="col-lg-4">
							<h3 class="page-title">
								 <?php 
									if( is_404() ) { // if it's 404 page

										echo 'عفوا، الرابط غير صحيح '; // or Whatever you want


									} else  { 
										wp_title();            

									} 
								?>
							</h3>
						</div>
					</div>
					<!-- /page-header -->
