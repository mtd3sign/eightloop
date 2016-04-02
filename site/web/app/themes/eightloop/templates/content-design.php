<div class="container-design-home">

  <div class="design-home">

<?php

  $args = array(
       'post_type' => 'portfolio',
       );

  $query = new WP_Query($args);

?>

<div class="design-home">

  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

  <?php $image = get_field('portfolio_featured_image'); ?>

  <div class="design-item">

    <?php
                  $image = get_field('portfolio_featured_image');
                  if( !empty($image) ):
                ?>
      <!-- <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> -->
      <img src="https://unsplash.it/600/300/?random" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      <div class="design-item-text">
        <h3>
                  <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
                </h3>
      </div>
      <a href="<?php the_permalink(); ?>">
        <div class="design-item-overlay">
          <h3>
            <?php the_title(); ?>
          </h3>
          <div class="post-excerpt"><?php the_excerpt(); ?></div>
          <div class="design-item-date">
            <?php the_date('F Y'); ?>
          </div>
        </div>
      </a>

  </div>


  <?php endwhile; endif; ?>
  <?php wp_reset_postdata(); ?>



</div>
      </div>
    </div>
