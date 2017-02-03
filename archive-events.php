<?php
get_header();
?>
<div class="block-list -alternateX">
<?php
if(have_posts()):
  $eventFeatureClass = "item"; // Cf. event-feature.php
  while(have_posts()):
    the_post();
    include "event-feature.php";
  endwhile;
?>
</div>
<nav>
  <ul class="row-nav">
    <li class="item"><?php previous_posts_link(); ?></li>
    <li class="item"><?php next_posts_link(); ?></li>
  </ul>
</nav>
<?php
endif;

get_footer();
?>
