<?php
/*
 * Footer template file.
 */
?>

</main>

<footer class='bg-light mt-auto'>
  <div class='container'>

    <div class='row'>
      <?php get_template_part( 'template-parts/footer/widget-areas' ); ?>
    </div>

    <?php if ( has_nav_menu( 'footer-icon-menu' ) ) : ?>
    <div class='row'>
      <div class='col mt-3 mb-3'>
        <?php get_template_part( 'template-parts/footer/icon-menu' ); ?>
      </div>
    </div>
    <?php endif; ?>

    <div class='row'>
      <div class='col text-center mb-3'>
        <?php get_template_part( 'template-parts/footer/bottom' ); ?>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>