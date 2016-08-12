<?php

function my_related_posts() {
if (is_single()) {
	global $post;
	$current_post = $post->ID;
	$categories = get_the_category();
foreach ($categories as $category) :
	?>
<div class="my-recent-posts"><h4>Additional Reading...</h4><ul>
	<?php
	$posts = get_posts('numberposts=5&category='. $category->term_id . '&exclude=' . $current_post);
foreach($posts as $post) :
	?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	<?php endforeach; ?><?php endforeach; ?>
</ul>
</div>
	<?php
		}
	wp_reset_query();
}
add_action('thesis_hook_after_post','my_related_posts');
