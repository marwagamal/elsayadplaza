<!DOCTYPE html>
<html class="no-js" lang="ar">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
	 <meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory');?>/assets/img/favicon.ico">
  <title><?php 
									if( is_404() ) { // if it's 404 page

										echo 'خطأ | '; // or Whatever you want

										bloginfo('name');

									} else if( is_single() ) { // if it's single (post)

										echo '&raquo;';   

										wp_title();            

									} else { 

										wp_title( '|', true, 'right'); 

									}
								?></title>
  

  <?php wp_head(); ?>
	
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">

	
	

</head>
