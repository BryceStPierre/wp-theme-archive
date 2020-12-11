<?php
/*
 * Displays the categories list.
 */
?>

<h4><?php _e( 'Categories', 'brycestrap' ); ?></h4>
<ul class='list-unstyled'>
  <?php wp_list_categories( array(
    'title_li'    => '',
    'show_count'  => TRUE
  ) ); ?>
</ul>
