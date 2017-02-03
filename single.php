<?php
get_header();
?>
<?php
if(have_posts()):
  while(have_posts()): the_post();
?>

<article class="full-article">
  <header class="header article-header">
    <h1 class="title"><?php single_post_title(); ?></h1>
    <p class="meta"><?php echo get_the_date(); ?>, <?php the_time(); ?></p>
    <div class="thumbnail"></div>
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
