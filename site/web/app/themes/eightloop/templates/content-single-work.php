<?php while (have_posts()) : the_post(); ?>
  <div class="container-single">
    <div class="single-post">
    <div class="single-content">

  <?php $images = get_field('gallery'); ?>
<div class="single-images">
      <div class="grid">
        <!-- width of .grid-sizer used for columnWidth -->
        <div class="grid-sizer"></div>
        <?php foreach ($images as $image): ?>

              <div class="grid-item">
                <a class="portfolio-gallery" data-featherlight="image" href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
              </div>
                <!-- <p><?php echo $image['caption']; ?></p> -->

        <?php endforeach; ?> 

      </div>
    </div>


    <div class="single-text">
      <?php the_content(); ?>
      <div class="portfolio-item-date">
        <?php the_date('F Y'); ?>
      </div>
      <hr>

      <div class="portfolio-item-tags">
        <?php the_tags( '<p>Skills: ', ', ', '</p>'); ?>
      </div>
      <hr>
      <div> <?php
        $related_args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => 2,
            'post__not_in' => array($post->ID),
            'category__in' => wp_get_post_categories($post->ID)
        );
        $related = new WP_Query( $related_args );

        if( $related->have_posts()):
        ?>
            <div class="post-navigation">
                <h3>Like what you see? Here's some more:</h3>
                <ul>
                    <?php while( $related->have_posts() ): $related->the_post(); ?>
                          <a href="<?php the_permalink(); ?>"><li><?php the_post_thumbnail (); ?></li></a>
                    <?php endwhile; ?>
                </ul>
            </div>
        <?php
        endif;
        wp_reset_postdata();
        ?>

    </div>
  </div>








    </div>
  </div>
  </div>
<?php endwhile; ?>
