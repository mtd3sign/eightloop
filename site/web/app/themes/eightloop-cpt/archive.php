<?php get_template_part('templates/page', 'archive-header'); ?>

<?php


// $related = single_tag_title();
//
// $tagSlug = single_tag_title("", false);
// echo $tagSlug;

 $args = array(
  'post_type' => array('portfolio', 'design'),
  // 'orderby' => 'rand',
  // 'post__in' => $related;
);

$query = new WP_Query($args);

if ( $query->have_posts() ) :
    ?>
    <ul>
    <?php
    while ( $query->have_posts() ) : $query->the_post();
        ?>
        <li><a href="<? the_permalink(); ?>"><? the_title(); ?></a></li>
        <?php
    endwhile;
    ?>
    </ul>
    <?php
endif;
wp_reset_postdata();

?>
