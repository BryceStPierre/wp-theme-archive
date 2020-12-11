<?php get_header(); ?>

<div class="container mt-5">
  <div class="row mb-4">
    <div class="col">
      <h3><?php echo $GLOBALS['wp_locale']->get_month(get_query_var('monthnum')) . ' ' . get_query_var('year'); ?></h3>
      <p>These are the past posts from this month.</p>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <ul class="list-unstyled">
      <?php while ( have_posts() ) : the_post(); ?>

        <li class="media mb-4">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('thumbnail', ['class' => 'mr-3']); ?>
          <?php endif; ?>
          <div class="media-body">
            <h5 class="mt-0 mb-1">
              <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
            </h5>
            <p class="description mb-0"><?php the_date(); ?></p>
            <p class="description"><?php the_category(', '); ?></p>
            <div class="description"><?php the_excerpt(); ?></div>
            <p class="description"><?php the_shortlink("Continue reading..."); ?></p>
          </div>
        </li>

      <?php endwhile; ?>
      </ul>
    </div>
  </div>
</div>

<?php get_footer(); ?>