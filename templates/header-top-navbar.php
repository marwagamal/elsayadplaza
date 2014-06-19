
		<!-- header -->
            <div class="header container" role="banner">
				<!-- topbar-navigation -->
				<div class="topbar-navigation row">
					<ul class="right social-icons col-lg-12">
						<li><a href="http://elsayadplaza.com/feed/" title="rss"><span class="awe-rss"></span></a></li>
						<li><a href="https://plus.google.com/u/0/103081832805241133876/posts" title="google-plus" target="_blank"><span class="awe-google-plus"></span></a></li>
						<li><a href="https://twitter.com/elsayad_plaza" title="twitter" target="_blank"><span class="awe-twitter"></span></a></li>
						<li><a href="https://www.facebook.com/ElsayadPlaza" title="facebook" target="_blank"><span class="awe-facebook"></span></a></li>
					</ul>
				</div>
				<!-- /topbar-navigation -->
				<!-- main-header -->
				<div class="main-header row">
					<div id="logo" class="col-lg-3 right">
						<a href="<?php echo home_url('/') ?>">
							<img src="<?php echo get_bloginfo('template_directory');?>/assets/img/logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" />
						</a>
					</div>
					<div id="info" class="col-lg-6 left">
						<div class="icon right">
							<span class="awe-map-marker"></span>
						</div>
						<div class="info-data text-right">
							<span class="info-title">موقع المشروع
								<br/>
								كورنيش النيل بجانب أبراج الصفوة
							</span>
							<div class="address">
								<p><span class="awe-home right"></span>إدارة التسويق : مكتب النور ميدان سرور أمام الشهر العقاري القديم</p>
								<p><span class="awe-phone right"></span>057-2235365 || 01027999566</p>
							</div>
						</div>

					</div>
				</div>
				<!-- /main-header -->
				<!-- main-navigation -->
				<div class="nav row"  role="navigation">
					<?php
					  if (has_nav_menu('primary_navigation')) :
						wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
					  endif;
					?>
				</div>
				<!-- /main-navigation -->
			</div>
			<!-- /header -->
