<?php get_header(); ?>

<div id='particle-layer'></div>

<div class="container text-white">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>