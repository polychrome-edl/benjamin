<?php
get_header();
?>
<?php
if(have_posts()):
  while(have_posts()): the_post();
?>

<article class="full-article">
  <header class="header -wide">
    <?php get_template_part('event-feature'); ?>
  </header>
  <section class="body text-body">
    <?php the_content(); ?>
  </section>
</article>

<?php
  endwhile;
endif;
?>
</section>
<?php
get_footer();
?>
