<?php
get_header();

if(have_posts()):
  while(have_posts()):
    the_post();
?>
<article class="full-article">
  <header class="article-header">
    <h1 class="title"><?php single_post_title(); ?></h1>
  </header>
  <div class="thumbnail"></div>
  <section class="body text-body">
    <?php the_content(); ?>
  </section>
</article>
<?php
  endwhile;
endif;

get_footer();
?>
