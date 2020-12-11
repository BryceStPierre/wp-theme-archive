<?php
/*
 * Archive template file.
 */

  get_header();
?>

<div class='row'>
  <div class='col mb-2'>
    <?php the_archive_title( '<h2>', '</h2>' ); ?>
    <?php the_archive_description( '<p>', '</p>' ); ?>

    <?php get_template_part( 'template-parts/page/list-posts' ); ?>

    <p class='text-center'>
      <?php get_template_part( 'template-parts/page/paginate-links' ); ?>
    </p>
  </div>

  <aside class='col-md-3'>
    <?php get_template_part( 'template-parts/page/list-archives' ); ?>
  </aside>
</div>

<?php get_footer(); ?>