<?php

function enqueue_scripts_styles() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('fonts',
    'https://brick.a.ssl.fastly.net/Fira+Sans:400,400i');

  if(is_front_page()) {
    wp_enqueue_style('flickity',
      'https://unpkg.com/flickity@2.0/dist/flickity.min.css');
    wp_enqueue_script('flickity',
      'https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js');
  }
}

add_action('wp_enqueue_scripts', 'enqueue_scripts_styles');

/*
 * THEME FEATURES
 */

add_theme_support('post-thumbnails'); // Support featured images
//add_theme_support('post-formats', array('audio'));
add_theme_support('custom-header', array(
  'width' => 960,
  //'height' => 250,
  'flex-width'  => true,
  'flex-height' => true,
  'header-text' => false
));

/*
 * MENUS
 */

function register_header_menu() {
  register_nav_menu('header-menu', __('Header Menu'));
}

add_action('init', 'register_header_menu');

?>
