<div class="container<?php if (!is_front_page()) { echo "-fluid"; } ?> mt-2 navbar-dark<?php if (is_front_page()) { echo " no-background-color"; } ?>">
  <div class="row">
    <div class="col-md-3 text-center mt-5">
      <h5 class="text-white">About</h5>
      <?php if (wp_get_nav_menu_items('Footer Menu 1')): ?>
      <?php foreach(wp_get_nav_menu_items('Footer Menu 1') as $page): ?>
          <a class="nav-icon-last" href="<?php echo $page->url; ?>"><?php echo $page->title; ?></a>
          <br />
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div class="col-md-3 text-center mt-5">
      <h5 class="text-white">Topics</h5>
      <?php if (wp_get_nav_menu_items('Footer Menu 2')): ?>
      <?php foreach(wp_get_nav_menu_items('Footer Menu 2') as $page): ?>
          <a class="nav-icon-last" href="<?php echo $page->url; ?>"><?php echo $page->title; ?></a>
          <br />
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div class="col-md-6 text-center mt-5">
      <h5 class="text-white">Mailing List</h5>
      <p class="text-center text-footer text-white">
        Subscribe to hear about new posts.
      </p>
      <form class="input-group mb-3" id="mailing-list" action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=BryceStPierre','popupwindow', 'scrollbars=yes,width=550,height=520');return true">
        <input type="text" class="form-control" name="email" placeholder="Your email address..." aria-label="Your email address" aria-describedby="button-subscribe">
        <div class="input-group-append">
          <input type="hidden" value="BryceStPierre" name="uri" />
          <input type="hidden" name="loc" value="en_US" />
          <button class="btn btn-primary" type="submit" id="button-subscribe">Subscribe</button>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col text-center mt-4 mb-4">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brycestpierre.png" alt="Bryce St. Pierre" width="40" height="50" />
      <p class="text-center text-footer text-white mt-2"> 
        Copyright &copy; 2019 Bryce St. Pierre.<br />Made with <i class="fas fa-heart text-red"></i> in Ottawa.
      </p>
    </div>
  </div>

</div>

<?php wp_footer(); ?>
</body>
</html>
