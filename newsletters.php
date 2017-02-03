<?php
/* Template Name: Newsletters Template */

get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$newsletter_cat_filter = get_cat_ID('newsletter');
$wp_query = new WP_Query(array(
  'cat' => $newsletter_cat_filter,
  'ID' => null,
  'paged' => $paged
));
?>
<div class="block-list -margin">
<?php
if(have_posts()):
  while(have_posts()):
    the_post();
?>
<article <?php post_class('item article-card'); ?>>
  <div class="content">
    <header class="header">
      <h2 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      <!-- Time? -->
    </header>
    <section class="body">
      <?php the_content(); ?>
    </section>
  </div>
</article>
<?php
  endwhile;
endif;
?>
</div>
<?php
wp_reset_query(); // Restore the original query
get_footer();
?>
