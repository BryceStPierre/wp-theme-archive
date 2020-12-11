<?php
/*
 * Header template file.
 */
  $front_page_background = is_front_page() ? ' bg-dark' : '';
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
<body <?php body_class( 'd-flex flex-column h-100' . $front_page_background ); ?>>
  <header>
    <?php get_template_part( 'template-parts/header/navigation' ); ?>
  </header>

<?php if ( is_front_page() ): ?>
  <div id='particle-layer'></div>
<?php endif; ?>

  <main role='main' class='flex-shrink-0 container mb-4' style='margin-top:5rem !important'>