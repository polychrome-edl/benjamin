<?php
get_header();
?>
<header>
  <h1><?php post_type_archive_title(); ?></h1>
</header>
<?php
if(have_posts()):
  while (have_posts()): the_post();
?>

<article <?php post_class('article article--card article--card--row'); ?>>
  <?php if(has_post_thumbnail()): ?>
  <div class="article__thumbnail thumbnail-image">
    <img alt="" class="thumbnail-image__image"
      src="<?php the_post_thumbnail_url('big'); ?>"
      alt="">
  </div>
  <?php endif; ?>
  <div class="article--card__content">
    <header class="article__header">
      <h2 class="article__title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
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
<nav>
  <ul class="nav">
    <li class="nav__item"><?php previous_posts_link(); ?></li>
    <li class="nav__item"><?php next_posts_link(); ?></li>
  </ul>
</nav>
<?php
get_footer();
?>
