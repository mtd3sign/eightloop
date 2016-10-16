<div class="container-fluid">
    <?php
    $args = array(
        'post_type' => 'latest-missions',
        'orderby' => 'rand',
        'order'   => 'DESC',
        'posts_per_page' => '99'

    ); ?>
    <?php $query = new WP_Query($args); ?>
    <?php if ($query->have_posts()) : ?>
        <?php $counter = 1 ?>
        <?php $post_count = $wp_query->post_count; ?>


        <div class="small-news-item-row  row seen-on-scene">
            <div class="grid">
                <div class="grid-sizer"></div>

                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <?php if (get_field('size_of_article') == "small"): ?>
                        <?php $article = 'small'; ?>
                    <?php elseif (get_field('size_of_article') == "medium"): ?>
                        <?php $article = 'medium'; ?>
                    <?php elseif (get_field('size_of_article') == "large"): ?>
                        <?php $article = 'large'; ?>
                    <?php else: ?>
                        <?php $article = 'medium'; ?>
                    <?php endif; ?>

                    <?php $articleColour = get_field('colour_of_article'); ?>
                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($page->ID), 'small-article'); ?>
                    <?php $size = "square"; // (thumbnail, medium, large, full or custom size) ?>
                    <div class="news-item <?php echo $article; ?> <?php echo $articleColour; ?> grid-item">
                            <?php the_post_thumbnail('small-article'); ?>

                        <div class="inner-content">
                            <h3>
                            <?php the_field('location'); ?>
                                <!--  <span class="date"><i class="icon-calendar"></i> --><?php //the_field('date'); ?><!--</span>-->
                                <!--<span class="address"> <i class="icon-house"></i> <?php /*the_field('location'); */?></span>-->
                            </h3>

                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php $counter++; ?>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
