<?php get_header(); ?>

<div id='particle-layer'></div>

<div class="container mt-5">
  <?php while ( have_posts() ) : the_post(); ?>
    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>