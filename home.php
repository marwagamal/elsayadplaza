<?php
/*
Template Name: Home Template
*/
?>

<script type="text/javascript">

    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
<!-- inner-wrap -->
			<div id="inner-wrap" class="slide">
				<!-- slider-container -->
				<div id="slider-container" class="container full">
					<div class="slider-inner-container">
						<div id="main-slider" class="flexslider" data-interval="12000">
							 <ul class="slides">
								<li>
								  <img src="<?php echo get_bloginfo('template_directory');?>/assets/img/img1.jpg" alt="" />
								  <div class="flex-caption">
										<h2 class="primary-title">مرحبا بك في الصياد بلازا</h2>
									
										<h3 class="secondary-title">متميزون في المجال</h3>
										
										<a class="flex-readmore " href="/%d8%b9%d9%86-%d8%a7%d9%84%d9%85%d8%b4%d8%b1%d9%88%d8%b9/" title="Read More"><i class="awe-chevron-left"></i></a>
									
										<div class="caption-content">
											<p>يعتبر المشروع قفزة نوعية فى سوق العقار حيث يتجلى ذلك فى أسلوب العمارة الحديث والبيئة الأنيقة غير المسبوقة</p>
										</div> 
								  </div>
								</li>
								<li>
								  <img src="<?php echo get_bloginfo('template_directory');?>/assets/img/img2.jpg" alt="" />
								  <div class="flex-caption">
										<h2 class="primary-title">مرحبا بك في الصياد بلازا</h2>
									
										<h3 class="secondary-title">الجودة شعارنا </h3>
										
										<a class="flex-readmore " href="/%d8%b9%d9%86-%d8%a7%d9%84%d9%85%d8%b4%d8%b1%d9%88%d8%b9/" title="Read More"><i class="awe-chevron-left"></i></a>
									
										<div class="caption-content">
											<p>توفر كافة الخدمات التى يحتاج إليها الزائر والقانت</p>
										</div> 
								  </div>
								</li>
								<li>
								  <img src="<?php echo get_bloginfo('template_directory');?>/assets/img/img3.jpg" alt="" />
								  <div class="flex-caption">
										<h2 class="primary-title">مرحبا بك في الصياد بلازا</h2>
									
										<h3 class="secondary-title">أفضل إستغلال للمساحات </h3>
										
										<a class="flex-readmore " href="/%d8%b9%d9%86-%d8%a7%d9%84%d9%85%d8%b4%d8%b1%d9%88%d8%b9/" title="Read More"><i class="awe-chevron-left"></i></a>
									
										<div class="caption-content">
											<p>شقق سكنية تصميم راقى يناسب متطلباتك – أفضل استغلال للمساحات – خدمات عالية المستوى
												و
																								مساحات جديدة تبدأمن 140م2 وحتى 220م2
												</p>
										</div> 
								  </div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /slider-container -->
				<!-- body-container -->
				<div class="body-container row">
					<!-- border -->
					<div class="border"></div>
					<!-- /border -->
					<!-- main-content-->
					<div class="main-content col-lg-12">
						<!-- units -->
						<div class="listings row">
							<!-- col1 -->
							<div class="col-lg-4 badge-green ">
								<div class="article">
									<!-- entry-header -->
									<div class="entry-header">
										<a class="property-type" href="#"><i class="awe-laptop"></i>وحدات إدارية</a>
										<a href="#" title="#"><img src="<?php echo get_bloginfo('template_directory');?>/assets/img/unit3.jpg" alt="" class=""></a>
										<div class="badge badge-green"><span>للبيع</span></div>
									</div>
									<!-- /entry-header -->
									<!-- entry-summary -->
									<div class="entry-summary">
										<h3 class="entry-title">
											<a href="#" title="">30 وحدة إدارية للبيع</a>
										</h3>
										<div class="entry-meta">
											مساحات تتراوح من 40م2 إلى 140 م2
											<br/>
											قسط شهرى يبدأمن 6500جنيه
										</div>
									</div>
									<!-- /entry-summary -->
									<!-- entry-footer -->
									<div class="entry-footer ">
										<div class="property-price">
											<a href="#" title=""><span>سعر المتر يبدأ من 5500 جنيه</span></a>
										</div>
									</div>
									<!-- /entry-footer -->
								</div>
							</div>
							<!-- /col1 -->
							<!-- col2 -->
							<div class="col-lg-4 badge-purple">
								<div class="article">
									<!-- entry-header -->
									<div class="entry-header">
										<a class="property-type" href="#"><i class="awe-tags"></i>وحدات تجارية</a>
										<a href="#" title="#"><img src="<?php echo get_bloginfo('template_directory');?>/assets/img/unit2.jpg" alt="" class=""></a>
										<div class="badge badge-purple"><span>للبيع</span></div>
									</div>
									<!-- /entry-header -->
									<!-- entry-summary -->
									<div class="entry-summary">
										<h3 class="entry-title">
											<a href="#" title="">140 وحدة تجارية للبيع</a>
										</h3>
										<div class="entry-meta">
											مساحات تترواح من 10م2 إلى 340م2
											<br/>
											قسط شهرى يبدأمن 5000 جنيه
										</div>
									</div>
									<!-- /entry-summary -->
									<!-- entry-footer -->
									<div class="entry-footer ">
										<div class="property-price">
											<a href="#" title=""><span>سعر المتر يبدأ من 20.000 جنيه </span></a>
										</div>
									</div>
									<!-- /entry-footer -->
								</div>
							</div>
							<!-- /col2 -->
							<!-- col3 -->
							<div class="col-lg-4 badge-orange">
								<div class="article">
									<!-- entry-header -->
									<div class="entry-header">
										<a class="property-type" href="#"><i class="awe-home"></i>وحدات سكنية</a>
										<a href="#" title="#"><img src="<?php echo get_bloginfo('template_directory');?>/assets/img/unit1.jpg" alt="" ></a>
										<div class="badge badge-orange"><span>للبيع</span></div>
									</div>
									<!-- /entry-header -->
									<!-- entry-summary -->
									<div class="entry-summary">
										<h3 class="entry-title">
											<a href="#" title="">160 وحدة سكنية للبيع</a>
										</h3>
										<div class="entry-meta">
											مساحات تتراوح من 140م2 إلى 220م2
											<br/>
											قسط شهرى يبدأمن 14000جنيه
										</div>
									</div>
									<!-- /entry-summary -->
									<!-- entry-footer -->
									<div class="entry-footer ">
										<div class="property-price">
											<a href="#" title=""><span>سعر المتر يبدأ من 4500 جنيه </span></a>
										</div>
									</div>
									<!-- /entry-footer -->
								</div>
							</div>
							<!-- /col3 -->
						</div>
						<!-- /units -->
						<div class="row entry-row"><hr class="divider"></div>
						<!-- about-data row -->
						<div class="about-data row entry-row">
							<div class="col-lg-4">
								<div class="service-column">
									<div class="hexagon-icon icon-wrapper"><i class="awe-group icon-anim-bottom-top"></i></div>
									<div class="service-content">
										<h2>لماذا الصياد بلازا ؟</h2>
										<div class="servce-summary">الصياد بلازا يجمع بين الإطلالة و الموقع المتميز لتحقيق المتعة لرواده في التسوق و قضاء الاوقات الممتعة
										 الصياد بلازا الأكثر رقيا و تميزا داخل مدينة دمياط
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="service-column">
									<div class="hexagon-icon icon-wrapper"><i class="awe-cogs icon-anim-left-right"></i></div>
									<div class="service-content">
										<h2>ماذا نعمل ؟</h2>
										<div class="servce-summary">
										العديد من النشاطات الإستثمارية الصناعية والتجارية
										و الاستيراد و البيع بالجملة و المقاولات
										و فى مجال الصناعة مثل الأسمدة وغيرها 
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="service-column">
									<div class="hexagon-icon icon-wrapper"><i class="awe-briefcase icon-anim-bottom-top"></i></div>
									<div class="service-content">
										<h2>من نحن ؟</h2>
										<div class="servce-summary">
											 "الصياد للتجارة والصناعة"
											<br/>
											بالمشاركة مع
											<br/>
											 "النور للتشييد والبناء"
								
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /about-data row -->
						<!-- posts row -->
						<div class="row entry-row">
							<div class="posts col-lg-12">
								<div class="posts-header">
									<i class="awe-pencil"></i>
									<h3 class="posts-title">أخر الأخبار</h3>
									<div class="posts-divider"></div>
									<div class="clear"></div>
								</div>
								<div class="posts-body">
									<?php
										query_posts(array(
											'category_name' => 'أخبار-الموقف-التسويقي', // get posts by category name
											'posts_per_page' => 1, // all posts
											'orderby' => 'date',
											'order' => 'DESC' 
										));
									?>
											
									<?php while(have_posts()): the_post(); ?>
									<!--left post-->
									<div class=" post col-lg-6 clear left">
										<div class="post-block">
											<div class="post-txt">
												<h2><?php the_title(); ?></h2>
												<div class="post-summary">
													<?php the_excerpt(); ?> 
												</div>
											</div>
											<a href="<?php the_permalink(); ?>" class=" button green" title="">أقرأ المزيد</a>
										</div>
										<div class="image-block">
											<a href="<?php the_permalink(); ?> " title="">
												
												<?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
											</a>
										</div>
									</div>
									<!--/left post-->
									<?php endwhile ?>
									
									
									<?php
										query_posts(array(
											'category_name' => 'أخبار-الموقف-التنفيذي', // get posts by category name
											'posts_per_page' => 1, // all posts
											'orderby' => 'date',
											'order' => 'DESC' 
										));
									?>
											
									<?php while(have_posts()): the_post(); ?>
									<!--left post-->
									<div class=" post col-lg-6 clear right">
										<div class="post-block">
											<div class="post-txt">
												<h2><?php the_title(); ?></h2>
												<div class="post-summary">
													<?php the_excerpt(); ?> 
												</div>
											</div>
											<a href="<?php the_permalink(); ?>" class=" button green" title="">أقرأ المزيد</a>
										</div>
										<div class="image-block">
											<a href="<?php the_permalink(); ?> " title="">
												
												<?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
											</a>
										</div>
									</div>
									<!--/left post-->
									<?php endwhile ?>
								</div>
							</div>
						</div>
						<!-- /posts row -->
						<!-- hr row -->
						
						<!-- /hr row -->
						<!-- Ads row -->
						
						<?php dynamic_sidebar('ads-row'); ?>
							
						<!-- /Ads row -->
						
					</div>
					<!-- /main-content-->
				</div>
				<!-- /body-container -->
					
			</div>
			<!-- /inner-wrap -->

