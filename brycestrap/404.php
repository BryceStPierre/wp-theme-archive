<?php
/*
 * Page not found (or 404) template file.
 */

  get_header();
?>

<div class='row'>
  <div class='col text-center'>
    <h1><?php _e( 'Page Not Found', 'brycestrap' ); ?></h1>
    <p><?php _e( "Oops! We're sorry, that link is broken or missing.", 'brycestrap' ); ?></p>
  </div>
</div>

<div class='row justify-content-center'>
  <div class='col-sm-12 col-md-8 col-lg-6'>
    <?php get_search_form(); ?>
  </div>
</div>

<div class='row'>
  <div class='col text-center mt-4'>
    <a class='btn btn-primary' href='<?php bloginfo( 'url' ); ?>'><?php _e( 'Home', 'brycestrap' ); ?></a>
  </div>
</div>

<?php get_footer(); ?>