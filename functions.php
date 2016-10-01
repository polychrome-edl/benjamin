<?php

wp_enqueue_style('style', get_stylesheet_uri());

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

?>
