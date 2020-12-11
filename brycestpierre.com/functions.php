<?php

function brycestpierre_enqueue_styles() {
  $parent_style = 'brycestrap-style';
 
  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style',
      get_stylesheet_directory_uri() . '/style.css',
      array( $parent_style ),
      wp_get_theme()->get('Version')
  );
  wp_enqueue_style('prism', get_stylesheet_directory_uri() . '/assets/css/libs/prism.css');

  //wp_register_script( 'jquery-3.3.1', get_stylesheet_directory_uri() . '/assets/js/libs/jquery-3.3.1.slim.min.js', array( 'jquery' ) );
 // wp_add_inline_script( 'jquery-3.3.1', 'var jQuery3_3_1 = $.noConflict(true);' );
  wp_enqueue_script('particles.min', get_stylesheet_directory_uri() . '/assets/js/libs/particles.min.js');
  wp_enqueue_script('prism', get_stylesheet_directory_uri() . '/assets/js/libs/prism.js');
  
  //wp_enqueue_script('script', get_stylesheet_directory_uri() . '/assets/js/script.js', array( 'jquery-3.3.1' ));
}
add_action( 'wp_enqueue_scripts', 'brycestpierre_enqueue_styles' );

function brycestpierre_excerpt_length ( $length ) {
  return 55;
}
add_filter( 'excerpt_length', 'brycestpierre_excerpt_length' );