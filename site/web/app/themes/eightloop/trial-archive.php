<?php get_template_part('templates/page', 'archive-header'); ?>

<?php $args = array(
     'post_type' =>  array('portfolio', 'design'),
     );

$query = new WP_Query($args);

?>

<?php if ($query->!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while ($query->have_posts()) : $query->the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
