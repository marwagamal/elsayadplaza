<?php
/**
 * Register sidebars and widgets
 */
function roots_widgets_init() {
  // Sidebars
  register_sidebar(array(
    'name'          => __('Primary', 'roots'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<div class="widget clear %1$s %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));
  register_sidebar(array(
    'name'          => __('ads', 'roots'),
    'id'            => 'ads-row',
    'before_widget' => '<div class="row entry-row ads"><div class="col-lg-12">',
    'after_widget'  => '</div></div>',
    'before_title'  => '<div class="row entry-row"><div class="col-lg-12 hr hr-text"><div class="custom-hr-text">',
    'after_title'   => '</div></div></div>',
  ));

  register_sidebar(array(
    'name'          => __('Footer', 'roots'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<div class="col-lg-4 "><div class="widget %1$s %2$s">',
    'after_widget'  => '</div></div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));
  
  
 

  // Widgets
  register_widget('Roots_Vcard_Widget');
  
}
add_action('widgets_init', 'roots_widgets_init');


/**
 * Example vCard widget
 */
class Roots_Vcard_Widget extends WP_Widget {
  private $fields = array(
    'title'          => 'Title (optional)',
    'comname'          => 'Name',
    'street_address' => 'Street Address',
    'locality'       => 'City/Locality',
    'region'         => 'State/Region',
    'tel'            => 'Telephone',
    'mob'            => 'Mobile',
    'mail'           => 'EMail',
    'email'          => 'Alt Email'
  );


  function __construct() {
    $widget_ops = array('classname' => 'widget_roots_vcard', 'description' => __('Use this widget to add a vCard', 'roots'));

    $this->WP_Widget('widget_roots_vcard', __('Roots: vCard', 'roots'), $widget_ops);
    $this->alt_option_name = 'widget_roots_vcard';
	
	
    add_action('save_post', array(&$this, 'flush_widget_cache'));
    add_action('deleted_post', array(&$this, 'flush_widget_cache'));
    add_action('switch_theme', array(&$this, 'flush_widget_cache'));
  }

  function widget($args, $instance) {
    $cache = wp_cache_get('widget_roots_vcard', 'widget');

    if (!is_array($cache)) {
      $cache = array();
    }

    if (!isset($args['widget_id'])) {
      $args['widget_id'] = null;
    }

    if (isset($cache[$args['widget_id']])) {
      echo $cache[$args['widget_id']];
      return;
    }

    ob_start();
    extract($args, EXTR_SKIP);

    $title = apply_filters('widget_title', empty($instance['title']) ? __('vCard', 'roots') : $instance['title'], $instance, $this->id_base);

    foreach($this->fields as $name => $label) {
      if (!isset($instance[$name])) { $instance[$name] = ''; }
    }

    echo $before_widget;

    if ($title) {
      echo $before_title, $title, $after_title;
    }
  ?>
    <p class="vcard">
      <h3><span class="comname"><?php echo $instance['comname']; ?></span></h3>
      <span class="adr awe-home">
        <span class="street-address">&nbsp;&nbsp;<?php echo $instance['street_address']; ?></span><br>
        
      </span>
      <span class="email awe-envelope">&nbsp;&nbsp;<?php echo $instance['email']; ?></span><br>
      <span class="email awe-envelope">&nbsp;&nbsp;<?php echo $instance['mail']; ?></span><br>
      <span class="tel awe-mobile-phone awe-large"><span class="value">&nbsp;&nbsp;<?php echo $instance['tel']; ?></span></span><br>
      <span class="tel awe-mobile-phone awe-large"><span class="value">&nbsp;&nbsp;<?php echo $instance['mob']; ?></span></span>
    </p>
  <?php
    echo $after_widget;

    $cache[$args['widget_id']] = ob_get_flush();
    wp_cache_set('widget_roots_vcard', $cache, 'widget');
  }

  function update($new_instance, $old_instance) {
    $instance = array_map('strip_tags', $new_instance);

    $this->flush_widget_cache();

    $alloptions = wp_cache_get('alloptions', 'options');

    if (isset($alloptions['widget_roots_vcard'])) {
      delete_option('widget_roots_vcard');
    }

    return $instance;
  }

  function flush_widget_cache() {
    wp_cache_delete('widget_roots_vcard', 'widget');
  }

  function form($instance) {
    foreach($this->fields as $name => $label) {
      ${$name} = isset($instance[$name]) ? esc_attr($instance[$name]) : '';
    ?>
    <p>
      <label for="<?php echo esc_attr($this->get_field_id($name)); ?>"><?php _e("{$label}:", 'roots'); ?></label>
      <input class="widefat" id="<?php echo esc_attr($this->get_field_id($name)); ?>" name="<?php echo esc_attr($this->get_field_name($name)); ?>" type="text" value="<?php echo ${$name}; ?>">
    </p>
    <?php
    }
  }
}
