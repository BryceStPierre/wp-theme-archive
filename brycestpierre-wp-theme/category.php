<?php get_header(); ?>

<div class="container mt-5">
  <div class="row mb-4">
    <div class="col">
      <h3><?php echo single_cat_title("", false); ?></h3>
      <p><?php echo category_description(get_cat_ID(single_cat_title("", false))); ?></p>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8 col-lg-9">
      <ul class="list-unstyled">
      <?php while ( have_posts() ) : the_post(); ?>

        <li class="media mb-4">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('thumbnail', ['class' => 'mr-3 category-thumbnail']); ?>
          <?php endif; ?>
          <div class="media-body">
            <h5 class="mt-0 mb-1">
              <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
            </h5>
            <p class="description"><?php the_date(); ?> &mdash; <?php the_category(', '); ?></p>
            <div class="description"><?php the_excerpt(); ?></div>
            <p class="description"><?php the_shortlink("Continue reading..."); ?></p>
          </div>
        </li>

      <?php endwhile; ?>
      </ul>
    </div>

    <div class="col-md-4 col-lg-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>