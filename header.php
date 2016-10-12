<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
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
        <!-- Banner -->
        <img alt="" src="<?php header_image(); ?>" class="banner">

        <!-- Menu -->
        <nav>
          <?php
          wp_nav_menu(array(
            'menu' => 'header-menu',
            'menu_class' => 'nav nav--flex',
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
              'order' => 'DESC',
              'orderby' => 'meta_value_num',
              'meta_key' => 'events_date_start_epoque'
            )
          );

          if($query->have_posts()) {
            while($query->have_posts()):
              $query->the_post();
              $custom = get_post_custom();
              ?>

          <div class="carousel__cell event-feature">
            <a href="<?php echo get_permalink(); ?>">
              <img alt="" class="event-feature__background"
                src="<?php the_post_thumbnail_url(); ?>"
                alt="">
            </a>
            <div class="event-feature__info">
              <p class="event-feature__p"><b><?php the_title(); ?></b></p>
              <p class="event-feature__p event-feature__p--small"> <?php echo date_i18n(get_option('date_format'), $custom['events_date_start_epoque'][0]); ?></p>
            </div>
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