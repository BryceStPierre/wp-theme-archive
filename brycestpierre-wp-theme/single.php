<?php get_header(); ?>

<div class="container mt-5">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="row">
    <div class="col mb-4">
      <h2 class="text-center"><?php the_title(); ?></h2>
      <p class="text-center text-footer">
        By Bryce St. Pierre &mdash; <?php the_date(); ?> &mdash; <?php the_category(', '); ?>
      </p>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-8 mb-5">
      <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <?php the_content(); ?>
    </div>
  </div>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>