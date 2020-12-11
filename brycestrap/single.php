<?php
/*
 * Single post template file.
 */

  get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
<article id='post-<?php the_ID(); ?>' <?php post_class(); ?>>

  <header class='row'>
    <div class='col text-center'>
      <h2 class='text-break'><?php the_title(); ?></h2>
      <?php get_template_part( 'template-parts/post/meta' ); ?>
    </div>
  </header>

  <section class='row justify-content-center'>
    <div class='col-md-8 mb-3'>
      <?php get_template_part( 'template-parts/post/featured-image' ); ?>
    </div>
  </section>
  
  <section class='row'>
    <div class='col'>
      <?php the_content(); ?>
    </div>
  </section>
  
  <section class='row'>
    <div class='col mt-4'>
      <div class='float-left'><?php previous_post_link( '<i class="fas fa-chevron-left text-primary"></i>&ensp;%link' ); ?></div>
      <div class='float-right'><?php next_post_link( '%link&ensp;<i class="fas fa-chevron-right text-primary"></i>' ); ?></div>
    </div>
  </section>

  <?php
    if ( comments_open() || get_comments_number() ) {
      comments_template();
    }
  ?>
</article>
<?php endwhile; ?>

<?php get_footer(); ?>