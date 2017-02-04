<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="initial-scale=1">
    <title><?php wp_title('·', true, 'right'); bloginfo('name'); ?></title>
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
        <nav class="top-bar">
          <img alt="" src="<?php header_image(); ?>" class="logo">
          <?php
          wp_nav_menu(array(
            'menu' => 'header-menu',
            'menu_class' => 'menu row-nav',
            'container' => null,
            'depth' => 1
          ));
          ?>
        </nav>
      </header>
      <main>
