<?php
get_header();

if(have_posts()):
  while(have_posts()):
    the_post();
    include "event-feature.php";
  endwhile;
?>
<nav>
  <ul class="nav">
    <li class="nav__item"><?php previous_posts_link(); ?></li>
    <li class="nav__item"><?php next_posts_link(); ?></li>
  </ul>
</nav>
<?php
endif;

get_footer();
?>
