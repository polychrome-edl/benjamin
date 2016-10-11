<?php
get_header();
?>
<header>
  <h1>Articles</h1>
</header>
<?php
if (have_posts()) :
while ( have_posts() ) : the_post();
?>

<article class="article article--card">
  <div class="article__thumbnail thumbnail-image">
    <img alt="" class="thumbnail-image__image"
      src="<?php the_post_thumbnail_url('big'); ?>"
      alt="">
  </div>
  <div class="article--card__content">
    <header class="article__header">
      <h2 class="article__title"><?php the_shortlink(get_the_title()); ?></h2>
      <!-- Time? -->
    </header>
    <section class="article__body article__body--excerpt">
      <?php the_excerpt(); ?>
    </section>
  </div>
</article>

<?php
  endwhile;
endif;
?>
</section>
<?php
get_footer();
?>
