<?php
get_header();
?>
<header>
  <h1><?php post_type_archive_title(); ?></h1>
</header>
<div class="block-list -margin -alternateX">
<?php
if(have_posts()):
  while (have_posts()): the_post();
?>
<article <?php post_class('item article-card'); ?>>
  <?php if(has_post_thumbnail()): ?>
  <div class="thumbnail">
    <img alt="" class="image"
      src="<?php the_post_thumbnail_url('big'); ?>"
      alt="">
  </div>
  <?php endif; ?>
  <div class="content">
    <header class="header">
      <h2 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      <!-- Time? -->
    </header>
    <section class="body">
      <?php the_excerpt(); ?>
    </section>
  </div>
</article>

<?php
  endwhile;
endif;
?>
</div>
<nav>
  <ul class="row-nav">
    <li class="item"><?php previous_posts_link(); ?></li>
    <li class="item"><?php next_posts_link(); ?></li>
  </ul>
</nav>
<?php
get_footer();
?>
