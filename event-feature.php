<?php
$custom = get_post_custom();
?>
<div class="event-feature">
  <img alt="" class="event-feature__image"
    src="<?php the_post_thumbnail_url('large'); ?>"
    alt="">
  <div class="event-feature__overlay">
    <h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
    <p class="event-feature__p event-feature__p--small"><?php
    the_terms($post->id, 'event_type');
    ?> • <?php
    if(isset($custom['events_date_string']) &&
      $custom['events_date_string'][0] != '')
      echo $custom['events_date_string'][0];
    else {
      if(isset($custom['events_display_time']) &&
        $custom['events_display_time'][0] == 'true')
        $format = 'j F Y G\hi';
      else
        $format = 'j F Y';

      echo date_i18n($format, $custom['events_date_start_epoque'][0]);
      if(isset($custom['events_display_end']) &&
        $custom['events_display_end'] == 'true') {
        echo ' - ';
        echo date_i18n($format, $custom['events_date_end_epoque'][0]);
      }
    }
    ?> • <?php echo $custom['events_location'][0]; ?></p>
  </div>
</div>
