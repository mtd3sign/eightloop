<div class="container-masonry">

  <div class="portfolio-home">

    <?php

  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => '2',
  );

  $query = new WP_Query($args);
?>

      <div class="portfolio-header">
        <?php echo the_field( 'home_portfolio_title' ); ?>
      </div>
      <div class="masonry-grid">

        <div class="masonry-portfolio-sizer"></div>

        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <?php $masonry_size = get_field('masonry_size'); ?>
        <div class="masonry-portfolio-item <?php echo $masonry_size; ?>">

          <?php
            $image = get_field('portfolio_featured_image');
            if( !empty($image) ):
          ?>
            <img class="portfolio-image" src="<?php echo $image['sizes']['portfolio']; ?>" alt="<?php echo $image['alt']; ?>" />
            <!-- <img class="portfolio-image" src="https://unsplash.it/900/450/?random" alt="<?php echo $image['alt']; ?>" /> -->
            <?php endif; ?>

            <!-- <div class="portfolio-item-text">
              <h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
            </div> -->
            <a href="<?php the_permalink(); ?>">
              <div class="portfolio-item-overlay">
                <h3>
                  <?php the_title(); ?>
                </h3>
              </div>
            </a>

        </div>

        <?php endwhile; endif; ?>
        <?php wp_reset_postdata(); ?>



      </div>
      <div class="portfolio-items">
        <h4><a href="/portfolio">View all portfolio items</a></h4>
      </div>
  </div>
</div>
