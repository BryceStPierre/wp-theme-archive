<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>
  <?php
    if (is_front_page())
      echo get_bloginfo( "name" );
    elseif (is_category())
      echo single_cat_title("", false) . ' | ' . get_bloginfo( "name" );
    else {
      the_title();
      echo " | " . get_bloginfo( "name" );
    }
  ?>
  </title>

  <?php wp_head(); ?>
</head>
<body>

<nav class="navbar sticky-top navbar-expand-sm navbar-expand-md navbar-expand-lg navbar-dark">
<div class="container">
  <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brycestpierre.png" alt="Bryce St. Pierre" class="branding" width="24" height="29">
    Bryce St. Pierre
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <?php foreach(wp_get_nav_menu_items('Main Menu') as $page): ?>
        <a class="nav-link" href="<?php echo $page->url; ?>"><?php echo $page->title; ?></a>
      <?php endforeach; ?>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-link">
        <a class="nav-icon" href="<?php echo get_home_url(); ?>/contact" title="Email">
          <i class="fas fa-envelope fa-lg"></i>
        </a>
        <a class="nav-icon" href="https://twitter.com/BryceStPierre" target="_blank" title="Twitter">
          <i class="fab fa-twitter fa-lg"></i>
        </a>
        <a class="nav-icon" href="https://www.youtube.com/channel/UClTmDivmNxjuH74_Y6MuJ3w" target="_blank" title="YouTube">
          <i class="fab fa-youtube fa-lg"></i>
        </a>
        <a class="nav-icon" href="https://www.linkedin.com/in/brycestpierre/" target="_blank" title="LinkedIn">
          <i class="fab fa-linkedin fa-lg"></i>
        </a>
        <a class="nav-icon-last" href="https://github.com/BryceStPierre/" target="_blank" title="GitHub">
          <i class="fab fa-github fa-lg"></i>
        </a>
      </li>
    </ul>
  </div>
</div>
</nav>
