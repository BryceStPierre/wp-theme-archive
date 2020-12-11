<?php
add_theme_support('menus');
add_theme_support('post-thumbnails');

function wpdocs_theme_name_scripts () {
  wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
  wp_enqueue_style('all.min', get_template_directory_uri() . '/assets/css/all.min.css');
  wp_enqueue_style('prism', get_template_directory_uri() . '/assets/css/prism.css');
  wp_enqueue_style('style', get_stylesheet_uri() );

  wp_enqueue_script('bootstrap.bundle.min', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
  wp_enqueue_script('particles.min', get_template_directory_uri() . '/assets/js/particles.min.js');
  wp_enqueue_script('prism', get_template_directory_uri() . '/assets/js/prism.js');
  wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js');
}
add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');

function wpdocs_custom_excerpt_length( $length ) {
  return 38;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

?>