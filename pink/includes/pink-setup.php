<?php
//hämta bootstrap navmalker
require_once("wp-bootstrap-navwalker.php");

function pink_setup(){
// storlek på bilderna
	add_image_size('page-freatured-image', 2580, 450, array('center', 'center'));

	add_image_size('page-freatured-image', 760, 999, false);
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(150,150, false);

}


add_action('after_setup_theme','pink_setup');

//sidebar
function themename_widgets_init(){
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action('widgets_init','themename_widgets_init');

// registera meny
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

wp_nav_menu(
  array(
    'menu' => 'primary',
    
    'theme_location' => '__no_such_location',
    
    'fallback_cb' => false
  )
);

 

 // stoppa den gamla jquery
wp_deregister_script('jquery');


//koppla in scripts och styles
function add_theme_scripts(){

  wp_enqueue_style( 'bootstrap4','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', array(), '1.4.0.0-alpha.6', 'all');
 
  wp_enqueue_style( 'pink', get_template_directory_uri(). '/css/pink.css', array('bootstrap4'), '1.1', 'all');
 
  wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.1.1.slim.min.js', array (), '3.1.1', true);
 
 wp_enqueue_script( 'tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array ('jquery'), '1.4.0', true);
 wp_enqueue_script( 'script', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array ( 'jquery','tether' ), '1.4.0.0-alpha.6', true);
 

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
