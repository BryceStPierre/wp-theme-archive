<?php
/*
 * Displays post metadata, including the author, date, categories, and tags.
 */
?>

<p>
<?php 
  printf( __( 'By %s %s %s' ), 
    get_the_author(),
    ( get_the_date() !== FALSE ) ? '&mdash; ' . get_the_date() : '',
    ( get_the_category_list() !== '' ) ? '&mdash; ' . get_the_category_list(', ') : ''
  );
?>

<?php if ( has_tag() ) : ?>
  <br>
  <small><?php the_tags(); ?></small>
<?php endif; ?>
</p>