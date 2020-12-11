<?php
/*
 * Page template file.
 */
  get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
<article id='page-<?php the_ID(); ?>' <?php post_class(); ?>>

  <section class='row'>
    <div class='col'>
      <?php the_content(); ?>
    </div>
  </section>

<?php
  $query = new WP_Query( array( 'category_name' => 'essays', 'posts_per_page' => 1 ) );

  if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post();        
?>
  <section class='row'>
    <div class='col-md-3 text-center mt-4 mb-4'>
    <?php 
      if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'thumbnail', array( 'class' => 'img-circle' ) );
      }
    ?>
    </div>
    <div class='col-md-9 mt-4 mb-4'>
      <h2>Latest Essay</h2>
      <h4><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h4>
      <?php the_excerpt(); ?>
      <a class='btn btn-primary' href='<?php the_permalink(); ?>'><?php _e( 'Read', 'brycestrap' ); ?>&ensp;<i class="fas fa-book-open"></i></a>
    </div>

  </section>
<?php  
    endwhile;
    wp_reset_postdata();
  endif;
?>

<?php
  $query = new WP_Query( array( 'category_name' => 'code', 'posts_per_page' => 1 ) );

  if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post();        
?>
  <section class='row'>
    <div class='col-md-9 text-right mt-4 mb-4'>
      <h2>Latest Article</h2>
      <h4><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h4>
      <?php the_excerpt(); ?>
      <a class='btn btn-primary' href='<?php the_permalink(); ?>'><?php _e( 'Read', 'brycestrap' ); ?>&ensp;<i class="fas fa-book-open"></i></a>
    </div>
    <div class='col-md-3 text-center mt-4 mb-4'>
    <?php 
      if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'thumbnail', array( 'class' => 'align-self-center img-circle' ) );
      }
    ?>
    </div>
  </section>
<?php  
    endwhile;
    wp_reset_postdata();
  endif;
?>

</article>
<?php endwhile; ?>

<?php get_footer(); ?>