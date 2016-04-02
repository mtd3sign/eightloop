<?php while (have_posts()) : the_post(); ?>
  <div class="container-single">
    <div class="single-post">
    <div class="single-content">
      <div class="single-images">
        <?php

$images = get_field('gallery');

if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <!-- <p><?php echo $image['caption']; ?></p> -->
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
      </div>
      <div class="single-text">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  </div>
<?php endwhile; ?>
