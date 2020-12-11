<?php
/*
 * Displays the links for paginated posts.
 */

  echo paginate_links( array (
    'prev_text'           => '<span class="btn btn-primary"><i class="fas fa-chevron-left"></i>&ensp;' . __( 'Previous', 'brycestrap' ) . '</span>',
    'next_text'           => '<span class="btn btn-primary">' . __( 'Next', 'brycestrap' ) . '&ensp;<i class="fas fa-chevron-right"></i></span>',
    'before_page_number'  => '<span class="btn btn-primary">',
    'after_page_number'   => '</span>'
  ) );
?>