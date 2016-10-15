<?php /* Template Name: Newsletters Template*/ ?>

<?php 
get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$newsletter_cat_filter = get_cat_ID('newsletter');
$wp_query = new WP_Query(array(
  'cat' => $newsletter_cat_filter,
  'ID' => null,
  'paged' => $paged
));
?>



<?php while(have_posts()): the_post(); ?>

<article <?php post_class('article article--card'); ?>>
  <div class="article--card__content">
    <header class="article__header">
      <h2 class="article__title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      <!-- Time? -->
    </header>
    <section class="article__body">
      <?php the_content(); ?>
    </section>
  </div>
</article>

<?php 
endwhile;
wp_reset_query(); // Restore the original query
get_footer();
?>
