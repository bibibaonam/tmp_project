<?php
$query = array(
	'post_type'     => 'hotels',
	'category_name' => $category_slug,
	'meta_query'    => array(
		'pick_up_key' => array(
			'key'   => 'pick_up',
			'value' => 'a:1:{i:0;s:7:"pick_up";}'
		)
	),
	'orderby' => array(
		'post_modified' => 'DESC'
	),
	'posts_per_page' => 9999
);
$posts = get_posts($query);
foreach($posts as $post):
	setup_postdata($post);

	$title            = get_the_title($post->ID);
	$image_attributes = wp_get_attachment_image_src(get_post_meta($post->ID, 'thumbnail', true), 'full');
	$thumbnail        = $image_attributes ? $image_attributes[0] : '';
?>
	<div class="left">
		<a href="<?php echo get_permalink($post->ID) ?>" target="_top"><img style="width:320px;height:173px" src="<?php echo $thumbnail ?>"></a>
		<span><?php echo get_post_meta($post->ID, 'catch_copy', true) ?></span>
		<a href="<?php echo get_permalink($post->ID) ?>" target="_top"><?php echo $title ?></a>
	</div>
<?php endforeach; ?>