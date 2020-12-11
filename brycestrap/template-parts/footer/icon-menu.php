<?php
/*
 * Displays icon menu.
 */

  $locations = get_nav_menu_locations();
  $menu = get_term( $locations['footer-icon-menu'], 'nav_menu' );
  $menu_items = wp_get_nav_menu_items( $menu->term_id );
?>

<ul class='nav justify-content-center' id='footer-icon-menu'>
<?php foreach( $menu_items as $menu_item ) : ?>

  <?php $icon = brycestrap_parse_menu_item_title( $menu_item->title ); ?>
  <li class='nav-item'>
    <a class='nav-link' target='_blank' href='<?php echo $menu_item->url; ?>' title='<?php echo $icon['title']; ?>'>
      <i class='<?php echo $icon['class'];  ?> fa-lg'></i>
    </a>
  </li>
  
<?php endforeach; ?>
</ul>