<?php while (have_posts()) : the_post(); ?>
  <div class="container-single">
    <div class="single-post">
    <div class="single-content">
      <div class="single-text">
        <?php the_content(); ?>
        <div class="portfolio-item-date">
          <?php the_date('F Y'); ?>
        </div>
      </div>



  <?php $images = get_field('gallery'); ?>
<div class="single-images">
      <div class="grid">
        <!-- width of .grid-sizer used for columnWidth -->
        <div class="grid-sizer">
        <?php foreach( $images as $image ): ?>

              <div class="grid-item">
                <a class="portfolio-gallery" data-featherlight="image" href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
              </div>
                <!-- <p><?php echo $image['caption']; ?></p> -->

        <?php endforeach; ?>
        </div>
        ...
      </div>
    </div>








    </div>
  </div>
  </div>
<?php endwhile; ?>
