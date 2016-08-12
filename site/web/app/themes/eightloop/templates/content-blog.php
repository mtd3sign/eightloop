<div class="container-blog-home">

  <div class="blog-home">

  <?php

  $args = array(
    'post_type' => 'writing',
  );

  $query = new WP_Query($args);

  ?>

    <?php
        // The Loop
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                echo '<div class="blog-item">';
                echo '<h2><a href="'.get_the_permalink().'">'.get_the_title().'</a></h2>';
                echo '<p>'.get_the_content().'</p>';
                echo '<p class="writing-blog-date">'.get_the_date('F Y').'</p>';
                echo '<span class="blog-items"><h4><a href="'.get_the_permalink().'">See the full article</a></h4></span>';
                echo '<hr class="header">';
                // $image = get_field('image');
                $image = 'https://unsplash.it/200/300/?random';
                $size = 'full'; // (thumbnail, medium, large, full or custom size)

            if ($image) {
                echo wp_get_attachment_image($image, $size);
            }
                echo '</div>';
            }
        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();

        ?>

</div>
</div>
