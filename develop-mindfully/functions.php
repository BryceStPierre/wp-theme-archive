<?php
/*
 * Functions file.
 */

function develop_mindfully_scripts () {
  // Enqueue CSS stylesheets.
  wp_enqueue_style( 'bootstrap', get_theme_file_uri( '/assets/css/bootstrap.min.css' ) );
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  // Enqueue JavaScript libraries and scripts.
  wp_enqueue_script( 'bootstrap-bundle', get_theme_file_uri( '/assets/js/bootstrap.bundle.min.js' ), array( 'jquery' ) );
}

add_action( 'wp_enqueue_scripts', 'develop_mindfully_scripts' );