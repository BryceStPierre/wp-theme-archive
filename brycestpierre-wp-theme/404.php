<?php get_header(); ?>

<div class="container text-center mt-5">
  <h1 class="display-4">404</h1>
  <p class="text-center">Oops! Sorry, that link is broken or missing. <a href="<?php echo get_home_url(); ?>">Return to home page</a>.</p>
  <p class="text-center mt-5 mb-5">
    <img class="img-fluid img-rounded" src="<?php echo get_template_directory_uri(); ?>/assets/images/question-mark.jpeg" alt="Question Mark" />
  </p>
</div>

<?php get_footer(); ?>
