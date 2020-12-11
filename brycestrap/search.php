<?php
/*
 * Search results page template file.
 */

  get_header();
?>

<div class='row'>
  <div class='col-md-8'>
    <h2><?php printf( 'Search: "%s"', 'brycestrap', get_search_query() ); ?></h2>
  </div>
  <div class='col-md-4'>
    <?php get_search_form(); ?>
  </div>
</div>

<div class='row'>
  <div class='col'>

  <?php if ( !have_posts() ) : ?>
    <hr>
    <p><?php _e( 'Oops! Nothing was found. Try a different search.', 'brycestrap' ); ?></p>
    <a class='btn btn-primary' href='<?php bloginfo( 'url' ); ?>'><?php _e( 'Home', 'brycestrap' ); ?></a>
  <?php else : ?>
    <?php get_template_part( 'template-parts/page/list-posts' ); ?>
    <p class='text-center'>
      <?php get_template_part( 'template-parts/page/paginate-links' ); ?>
    </p>
  <?php endif; ?>

  </div>
</div>

<?php get_footer(); ?>