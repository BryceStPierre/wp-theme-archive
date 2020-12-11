<?php
/*
 * Header template file.
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class='h-100'>
<head>
  <meta charset='<?php bloginfo( 'charset' ); ?>'>
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
  <link rel='profile' href='http://gmpg.org/xfn/11'>
  <!--[if lt IE 9]>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/html5shiv.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>
<body <?php body_class( 'd-flex flex-column h-100' ); ?>>
  <header>
    <?php get_template_part( 'template-parts/header/navigation' ); ?>
  </header>
  <main role='main' class='flex-shrink-0 container mt-4 mb-4'>
