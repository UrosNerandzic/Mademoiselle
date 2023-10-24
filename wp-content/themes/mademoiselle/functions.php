<?php

// Include css files
function mademoiselle_style(){
  
  wp_enqueue_style('Owl Carousel', get_template_directory_uri().'/frontend/css/owl.carousel.css', array(), '2.3.4');
  wp_enqueue_style('Owl Carousel Theme', get_template_directory_uri().'/frontend/css/owl.theme.default.css', array('Owl Carousel'), '2.3.4');
  wp_enqueue_style('theme', get_template_directory_uri().'/frontend/css/theme.css', array(), '1.3');
  wp_enqueue_style('style', get_template_directory_uri().'/style.css', array(), '1.3');
}
add_action('wp_enqueue_scripts', 'mademoiselle_style');
?>

<?php
function mademoiselle_scripts(){

  wp_enqueue_script('jQuery', get_template_directory_uri().'/frontend/js/jquery.min.js', array(), '3.4.1', true);
  wp_enqueue_script('Bootstrap Bundle', get_template_directory_uri().'/frontend/js/bootstrap.bundle.min.js', array('jQuery'), '4.3.1', true);
  wp_enqueue_script('Font Awesome', 'https://kit.fontawesome.com/dae65cf368.js', array(), '5', true);
  wp_enqueue_script('Owl Carousel js', get_template_directory_uri().'/frontend/js/owl.carousel.min.js', array('jQuery'), '2.3.4', true);
  wp_enqueue_script('main js', get_template_directory_uri().'/frontend/js/main.js', array('jQuery'), '1.1', true);
  
}
add_action('wp_enqueue_scripts', 'mademoiselle_scripts');

function mademoiselle_support(){
  // Title tag support
  add_theme_support('title-tag');

  // Custom Logo support
  add_theme_support('custom-logo',array(
    'height'               => 25,
		'width'                => 196,
		'flex-height'          => false,
		'flex-width'           => false,
  ));

  // Feature Image Support
  add_theme_support('post-thumbnails');
  
  // AD image size
  add_image_size('services-list', 570, 451, true);
  add_image_size('single-services', 573, 463, true);
  add_image_size('blog-list', 368, 292, true);
  add_image_size('single-blog', 558, 442, true);
}
add_action('after_setup_theme', 'mademoiselle_support');

function mademoiselle_menus(){

  register_nav_menus(array(
    'main-menu' => 'Main-Menu',
    'social' => 'Social Menu'
  ));

}
add_action('init', 'mademoiselle_menus');

function mademoiselle_create_post_type(){

  register_post_type('our_services', array(
    'labels' => array(
      'name' => 'Services',
      'singular_name' => 'Service',
      'plural_name' => 'Services',
      'all_items' => 'All Services',
      'add_new' => 'Add New Service',
      'add_new_item' => 'Add New Service Item',
      'new_item' => 'New Service',
      'edit' => 'Edit',
      'edit_item' => 'Edit Service Item',
      'view' => 'View Service',
      'view_item' => 'View Service Item',
      'featured_image' => 'Featured image for this Service'
    ),
    'public' => true,
    'hierarchical' => false,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-admin-generic',
    'menu_position' => 16,
    'supports' => array(
      'title',
      'thumbnail',
      'editor'
    )
  ));
}
add_action('init', 'mademoiselle_create_post_type');

function mademoiselle_sidebar(){
  register_sidebar(array(
      'id'            => 'sidebar_1',
			'name'          => __('Primary Sidebar'),
			'description'   => __('Page Sidebar.'),
			'before_widget' => '<div id="%1$s" class="widget mb-4 p-4  %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
  ));
}
add_action('widgets_init', 'mademoiselle_sidebar');

require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/options.php';
?>