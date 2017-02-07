<?php

function single_page_styles() {
  // load styles
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.7' );
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0' );
  wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '3.5.1' );
  wp_enqueue_style('font-roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,700', array(), '1.0' );
  wp_enqueue_style('maincss', get_template_directory_uri() . '/css/main.css', array(), '1.0' );
  // load scripts
  wp_enqueue_script('jquery');
  wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', array(), '2.8.3', true );
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
  wp_enqueue_script('smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js', array(), '10.2.1', true );
  wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '4.0.1', true );
  wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js', array(), '1.0', true );
}
add_action('wp_enqueue_scripts', 'single_page_styles');

add_theme_support('post-thumbnails');

function single_page_menu() {
  register_nav_menus( array(
    'main_menu' => __('Main Menu'),
  ) );
}
add_action('init', 'single_page_menu');

function single_page_menu_atts($atts, $item, $args) {
  $atts['data-scroll'] = true;
  return $atts;
}
add_filter('nav_menu_link_attributes', 'single_page_menu_atts', 10, 3);
