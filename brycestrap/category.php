<?php
/*
 * Category template file.
 */

  get_header();
?>

<div class='row'>
  <div class='col mb-2'>
    <h2><?php single_cat_title( __( 'Category: ', 'brycestrap' ) ); ?></h2>
    <p><?php echo category_description(); ?></p>

    <?php get_template_part( 'template-parts/page/list-posts' ); ?>

    <p class='text-center'>
      <?php get_template_part( 'template-parts/page/paginate-links' ); ?>
    </p>
  </div>

  <aside class='col-md-3'>
    <?php get_template_part( 'template-parts/page/list-categories' ); ?>
  </aside>
</div>

<?php get_footer(); ?>