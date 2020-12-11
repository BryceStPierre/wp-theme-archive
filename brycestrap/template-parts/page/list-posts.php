<?php
/*
 * Displays a list of posts as media objects.
 */
?>

<ul class='list-unstyled'>
<?php while ( have_posts() ) : the_post(); ?>
  <hr>
  <li class='media'>
    <?php 
      if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'thumbnail', array( 'class' => 'mr-3' ) );
      }
    ?>
    <div class='media-body'>
      <h5><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h5>
      <?php get_template_part( 'template-parts/post/meta' ); ?>
      <?php the_excerpt(); ?>
      <a href='<?php the_permalink(); ?>'><?php _e( 'Continue reading...', 'brycestrap' ); ?></a>
    </div>
  </li>
<?php endwhile; ?>
</ul>