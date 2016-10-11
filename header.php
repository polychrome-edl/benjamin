<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php wp_title(); ?></title>
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

        <!-- Menu -->
        <nav>
          <?php
          wp_nav_menu(array(
            'menu' => 'header-menu',
            'menu_class' => 'menu',
            'container' => null,
            'depth' => 1
          ));
          ?>
        </nav>

        <!-- Carousel -->
        <?php if(is_front_page()): ?>
        <div class="carousel">

          <?php
          $query = new WP_Query(
            array(
              'post_type' => 'events',
              'posts_per_page' => 10,
              'meta_key' => 'events_frontpage_slider_enable',
              'meta_value' => 'on',
            )
          );

          if($query->have_posts()) {
            while($query->have_posts()) : $query->the_post(); ?>

          <div class="carousel__cell feature">
            <a href="<?php echo get_permalink(); ?>">
              <img alt="" class="feature__background"
                src="<?php the_post_thumbnail_url(); ?>"
                alt="">
            </a>
          </div>

          <?php
            endwhile;
          } else {
          ?>

          <div class="carousel__cell">...</div>

          <?php
          }
          ?>
        </div>
        <?php endif; ?>
      </header>
      <main>