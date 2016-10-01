<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href=""
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php
    if(is_singular() && get_option('thread_comments'))
      wp_enqueue_script('comment-reply');
    ?>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="wrapper">
      <header>
        <!-- Banner -->
        <img alt="" src="<?php header_image(); ?>" class="banner">

        <!-- Carousel -->

        <!-- Menu -->
        <nav>
          <?php
          wp_nav_menu(array(
            'menu_class' => 'menu',
            'container' => null,
            'depth' => 1
          ));
          ?>
        </nav>
      </header>
      <main>