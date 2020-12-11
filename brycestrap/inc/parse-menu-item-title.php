<?php
/*
 * Parse a menu item title into an icon array.
 */

if ( !function_exists( 'brycestrap_parse_menu_item_title' ) ) :

function brycestrap_parse_menu_item_title ( $menu_item_title = '' ) {
  
  $string = strtolower( trim( $menu_item_title ) );

  $icon_set = 'fab';
  $icon_name = 'fa-' . $string;
  $title = ucfirst( $string );

  // Special conditions for email and phone icons.
  if ( $string === 'email' || $string === 'e-mail' ) {
    return array(
      'title' => $title,
      'class' => 'fas fa-envelope'
    );
  }

  if ( $string === 'phone' || $string === 'telephone' ) {
    return array(
      'title' => $title,
      'class' => 'fas fa-phone'
    );
  }

  $parts = explode( ' ', $string );

  if ( count( $parts ) > 1 ) {
    $icon_set = $parts[0];
    $icon_name = $parts[1];

    $icon_name_no_fa = explode( 'fa-', $icon_name );
    if ( count( $icon_name_no_fa ) > 1 ) 
      $title = ucfirst( $icon_name_no_fa[1] );
  }

  return array(
    'title' => $title,
    'class' => $icon_set . ' ' . $icon_name
  );
}

endif; 

?>