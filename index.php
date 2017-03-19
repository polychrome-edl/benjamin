<?php
get_header();
?>
<header>
  <h1><?php post_type_archive_title(); ?></h1>
</header>
<div class="block-list -margin -alternateX -w720">
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
<?php
get_template_part('navigation');
get_footer();
?>
