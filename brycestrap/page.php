<?php
/*
 * Page template file.
 */

  get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
<article id='page-<?php the_ID(); ?>' <?php post_class(); ?>>

  <header class='row'>
    <div class='col text-center'>
      <h2 class='text-break'><?php the_title(); ?></h2>
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
  
</article>
<?php endwhile; ?>

<?php get_footer(); ?>