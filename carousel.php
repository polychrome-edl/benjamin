<div class="carousel">
  <?php
  $query = new WP_Query(
    array(
      'post_type' => 'events',
      'posts_per_page' => 5,
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
    <img alt="" class="event-feature__image"
      src="<?php the_post_thumbnail_url('large'); ?>"
      alt="">
    <div class="event-feature__overlay">
      <h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
      <p class="event-feature__p event-feature__p--small"><?php
      the_terms($post->id, 'event_type');
      ?> — <?php
      if(isset($custom['events_date_string']) &&
        $custom['events_date_string'][0] != '')
        echo $custom['events_date_string'][0];
      else {
        if(isset($custom['events_display_time']) &&
          $custom['events_display_time'][0] == 'true')
          $format = 'j F G\hi';
        else
          $format = 'j F';

        echo date_i18n($format, $custom['events_date_start_epoque'][0]);
        if(!isset($custom['events_display_end'])) {
          echo ' - ';
          echo date_i18n($format, $custom['events_date_end_epoque'][0]);
        }
      }
      ?></p>
    </div>
    <?php /*<div class="event-feature__info">
      <div class-"event-feature__date">
        <span class="event-feature__month">
        </span>
        <span class="event-feature__day"></span>
      </div>
      <p class="event-feature__p"><b><?php the_title(); ?></b></p>
      <p class="event-feature__p event-feature__p--small"><?php
      the_terms($post->id, 'event_type');
      ?> — <?php
      if(isset($custom['events_date_string']) &&
        $custom['events_date_string'][0] != '')
        echo $custom['events_date_string'][0];
      else {
        if(isset($custom['events_display_time']) &&
          $custom['events_display_time'][0] == 'true')
          $format = 'j F G\hi';
        else
          $format = 'j F';

        echo date_i18n($format, $custom['events_date_start_epoque'][0]);
        if(!isset($custom['events_display_end'])) {
          echo ' - ';
          echo date_i18n($format, $custom['events_date_end_epoque'][0]);
        }
      }
      ?></p>
    </div> */ ?>
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
