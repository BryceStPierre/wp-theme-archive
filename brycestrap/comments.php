<?php
/*
 * Comments template file.
 */

  if ( post_password_required() ) {
    return;
  }
?>

<section class='row'>
  <div class='col'>
    <hr>

  <?php if ( have_comments() ): ?>
    <h4><?php _e( 'Comments', 'brycestrap' ); ?></h4>
    <ul class='list-unstyled comment-list'>
      <?php wp_list_comments(); ?>
    </ul>

    <p class='text-center'>
      <?php 
        echo paginate_comments_links( array (
          'prev_text'           => '<span class="btn btn-primary"><i class="fas fa-chevron-left"></i>&ensp;' . __( 'Older', 'brycestrap' ) . '</span>',
          'next_text'           => '<span class="btn btn-primary">' . __( 'Newer', 'brycestrap' ) . '&ensp;<i class="fas fa-chevron-right"></i></span>',
          'before_page_number'  => '<span class="btn btn-primary">',
          'after_page_number'   => '</span>'
        ) );
      ?>
    </p>
  <?php endif; ?>
  
  </div>
</section>

<footer class='row'>
  <div class='col'>
    <?php
      comment_form( array(
        'comment_field'       => '<textarea class="form-control mb-3" id="comment" name="comment" cols="45" rows="2" maxlength="1000" required="required"></textarea>',
        'class_submit'        => 'btn btn-primary',
        'title_reply_before'  => '<hr><h4>',
        'title_reply_after'   => '</h4>'
      ) );
    ?>
  </div>
</footer>