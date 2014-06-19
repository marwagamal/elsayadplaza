<?php
/**
 * Roots includes
 */
require_once locate_template('/lib/utils.php');           // Utility functions
require_once locate_template('/lib/init.php');            // Initial theme setup and constants
require_once locate_template('/lib/wrapper.php');         // Theme wrapper class
require_once locate_template('/lib/sidebar.php');         // Sidebar class
require_once locate_template('/lib/config.php');          // Configuration
require_once locate_template('/lib/activation.php');      // Theme activation
require_once locate_template('/lib/titles.php');          // Page titles
require_once locate_template('/lib/cleanup.php');         // Cleanup
require_once locate_template('/lib/nav.php');             // Custom nav modifications
require_once locate_template('/lib/gallery.php');         // Custom [gallery] modifications
require_once locate_template('/lib/comments.php');        // Custom comments modifications
require_once locate_template('/lib/relative-urls.php');   // Root relative URLs
require_once locate_template('/lib/widgets.php');         // Sidebars and widgets
require_once locate_template('/lib/scripts.php');         // Scripts and stylesheets
require_once locate_template('/lib/custom.php');          // Custom functions
add_filter( 'body_class' , 'custom_body_class' );
if ( !function_exists( 'custom_body_class' ) ) {

  function custom_body_class ( $classes ) {
    if(  is_home() || is_front_page() ) {
        $classes[] = 'slider-full';
    }
    return $classes;
  }

}
function my_scripts_method() {
	wp_enqueue_script(
		'custom-script',
		get_bloginfo('template_directory') . '/assets/js/jquery.flexslider.js',
		array( 'jquery' )
	);
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );


/** 
 * Un used functions
 * 
 * function the_titlesmall($before = '', $after = '', $echo = true, $length = false) { $title = get_the_title();

	if ( $length && is_numeric($length) ) {
		$title = substr( $title, 0, $length );
	}

	if ( strlen($title)> 0 ) {
		$title = apply_filters('the_titlesmall', $before . $title . $after, $before, $after);
		if ( $echo )
			echo $title;
		else
			return $title;
	}
}
function custom_excerpt_length( $length ) {
	return 12;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
*/
