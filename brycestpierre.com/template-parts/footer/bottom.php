<?php
/*
 * Displays copyright notice and theme credits.
 */
?>

<p>
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/brycestpierre.png" alt="Bryce St. Pierre" class="mb-3" width="40" height="50" /><br>
  <?php _e( 'Copyright', 'brycestrap' ); ?> &copy; <?php echo date( 'Y' ); ?> <a href='<?php bloginfo( 'url' ); ?>'><?php bloginfo( 'name' ); ?></a>.<br>
  Made with <i class="fas fa-heart" style='color: #dc3545'></i> in Windsor.
</p>