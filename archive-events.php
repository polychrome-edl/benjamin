<?php
get_header();
?>
<div class="block-list -alternateX -w720">
<?php
if(have_posts()):
  $eventFeatureClass = "item"; // Cf. event-feature.php
  while(have_posts()):
    the_post();
    include "event-feature.php";
  endwhile;
?>
</div>
<?php
get_template_part('navigation');
endif;

get_footer();
?>
