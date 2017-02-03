<?php
/* Template Name: Event list */

get_header();

// The query var is not the same for a normal page and a static front page...
if(is_front_page())
  $paged = (get_query_var('page')) ? get_query_var('page') : 1;
else
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$wp_query = new WP_Query(array(
  'post_type' => 'events',
  'ID' => null,
  'paged' => $paged
));

get_template_part('archive', 'events'); // Get the event archive template
wp_reset_query(); // Restore the original query
get_footer();
?>
