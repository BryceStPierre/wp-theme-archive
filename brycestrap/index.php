<?php
/*
 * Main template file.
 */

  get_header();
?>

<div class='row'>
  <div class='col mb-2'>
    <h2><?php _e( 'Posts', 'brycestrap' ); ?></h2>
    <?php get_template_part( 'template-parts/page/list-posts' ); ?>

    <p class='text-center'>
      <?php get_template_part( 'template-parts/page/paginate-links' ); ?>
    </p>
  </div>

  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>