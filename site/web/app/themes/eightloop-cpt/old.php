<?php get_template_part('templates/page', 'archive-header'); ?>

<?php






// declare array to hold tags
$current_tags =  array();
// get the tags on the current post
$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
  // add to tags array
  $current_tags[] = $tag->name;
  }
}

// convert the array to comma-delimited string
$tags = implode(',', $current_tags);

$related_posts = new WP_Query( $related_posts_args );


















// declare array to hold tags
      $current_tags =  array();
      // get the tags on the current post
      $posttags = get_the_tags();
      if ($posttags) {
        foreach($posttags as $tag) {
          // add to tags array
          $current_tags[] = $tag->name;
        }
      }
      // convert the array to comma-delimited string
      $tags = implode(',', $current_tags);

$args = array(
  'post_type' => array('portfolio', 'design'),
  'tag' => $tags,
);

$query = new WP_Query($args);

?>

<?php if (!$query->have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<div class="container-portfolio-home">

  <div class="portfolio-home">

<div class="page-portfolio">

  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

  <?php $image = get_field('portfolio_featured_image'); ?>

  <div class="portfolio-item">

    <?php
                  $image = get_field('portfolio_featured_image');
                  if( !empty($image) ):
                ?>
      <!-- <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> -->
      <img class="portfolio-image" src="https://unsplash.it/600/300/?random" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      <!-- <div class="portfolio-item-text">
        <h3>
                  <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
                </h3>
      </div> -->
      <a href="<?php the_permalink(); ?>">
        <div class="portfolio-item-overlay">
          <h3>
            <?php the_title(); ?>
          </h3>
            <div class="post-excerpt"><?php the_excerpt(); ?></div>
          <div class="portfolio-item-date">
            <?php the_date('F Y'); ?>
          </div>
        </div>
      </a>

  </div>


  <?php endwhile; endif; ?>
  <?php wp_reset_postdata(); ?>



</div>
