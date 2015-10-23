<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */


$cat = get_category(get_query_var('cat'));

$short_slug = str_replace('list-', '', $cat->slug);
if ($short_slug == 'ubud') {
	$short_slug = 'ubdo';
}elseif ($short_slug == 'sanur') {
	$short_slug = 'sanu';
}elseif ($short_slug == 'candidasa') {
	$short_slug = 'cand';
}elseif ($short_slug == 'cang') {
	$short_slug = 'cang';
}elseif ($short_slug == 'tanahlot') {
	$short_slug = 'tana';
}elseif ($short_slug == 'menjangan') {
	$short_slug = 'menj';
}elseif ($short_slug == 'lovina') {
	$short_slug = 'lovi';
}elseif ($short_slug == 'yogyakarta') {
	$short_slug = 'yogy';
}elseif ($short_slug == 'lombok') {
	$short_slug = 'lomb';
}elseif ($short_slug == 'lembongan') {
	$short_slug = 'lemb';
}


$link = 'hotels';

// echo "<pre>";
// print_r($cat);
// die;

include( TEMPLATEPATH . '/header-list.php' ) ?>

<div id="container">
	<div id="contents">
		<ul id="breadcrumb">
			<li><a href="http://www.plbali.com">バリ旅行HOME</a></li>
			<li>&nbsp;＞&nbsp;<a href="http://www.plbali.com/<?php echo $link ?>/">ヴィラ・ホテル</a>&nbsp;＞&nbsp;<?php echo $cat->name ?></li>
		</ul>

		<div id="detaile_h"></div>
		<div id="detail">
			<div id="villa_list_navi"><a href="/<?php echo $link ?>/list-staff/">スタッフおすすめ</a>｜<a href="/<?php echo $link ?>/list-star/">5つ星</a>｜<a href="/<?php echo $link ?>/list-villa/">ヴィラ</a>｜<a href="/<?php echo $link ?>/list-hotel/">ホテル</a>｜<br>
			<a href="/<?php echo $link ?>/list-ubud/">ウブド</a>｜<a href="/<?php echo $link ?>/list-semi/">スミニャック/クロボカン</a>｜<a href="/<?php echo $link ?>/list-kuta/">クタ/レギャン</a>｜<a href="/<?php echo $link ?>/list-jim/">ジンバラン/ウルワツ</a>｜<a href="/<?php echo $link ?>/list-nusa/">ヌサドゥア</a>｜<a href="/<?php echo $link ?>/list-sanur/">サヌール</a>｜<a href="/<?php echo $link ?>/list-canggu/">チャングー</a>｜<a href="/<?php echo $link ?>/list-candidasa/">チャンディダサ（マンギス）</a>｜<a href="/<?php echo $link ?>/list-tanahlot/">タナロット（タバナン）</a>｜<a href="/<?php echo $link ?>/list-menjangan/">ムンジャンガン</a>｜<a href="/<?php echo $link ?>/list-lovina/">ロビナ</a>｜<a href="/<?php echo $link ?>/list-yogyakarta/">ジョグジャカルタ</a>｜<a href="/<?php echo $link ?>/list-lombok/">ロンボク島</a>｜<a href="/<?php echo $link ?>/list-lembongan/">レンボンガン島</a>
			</div>

			<div id="villa_list_title">
				<h1 id="list_tanahlot"><?php echo $cat->name ?></h1>
				<div id="info_link">
					<a href="/<?php echo str_replace('list-', '', $cat->slug) ?>/"><img src="/img/list_link_<?php echo str_replace('list-', '', $cat->slug) ?>.gif" width="314" height="18" alt="タナロットの基本情報はこちら"></a>
				</div>
			</div>

			<div class="box">
				<?php

				// ---------------------------- VILLA -----------------------------
				$arr_post_id = array();

				// ranking
				$posts = get_posts(array('posts_per_page' => 999, 'post_type' => 'hotels',
					'meta_query' => array(array('key' => 'villa_or_hotel', 'value' => 'villa' )),
					'meta_key' => 'ranking', 'orderby' => 'meta_value_num', 'order' => 'ASC'));
				plbali_show_post($posts, $arr_post_id, $short_slug, 'ヴィラ一覧');
				// disp_sort
				$posts = get_posts(array('posts_per_page' => 999, 'post_type' => 'hotels',
					'meta_query' => array(array('key' => 'villa_or_hotel', 'value' => 'villa' )),
					'meta_key' => 'disp_sort', 'orderby' => 'meta_value_num', 'order' => 'ASC'));
				plbali_show_post($posts, $arr_post_id, $short_slug, 'ヴィラ一覧');
				// hotel_name_jp
				$posts = get_posts(array('posts_per_page' => 999, 'post_type' => 'hotels',
					'meta_query' => array(array('key' => 'villa_or_hotel', 'value' => 'villa' )),
					'meta_key' => 'hotel_name_jp', 'orderby' => 'meta_value_num', 'order' => 'ASC'));
				plbali_show_post($posts, $arr_post_id, $short_slug, 'ヴィラ一覧');
				?>

				<?php if(!empty($arr_post_id)){ ?>
						</div>
					</div>
				</div>
				<?php }

				// ---------------------------- HOTEL ----------------------------
				$arr_post_id = array();

				// ranking
				$posts = get_posts(array('posts_per_page' => 999, 'post_type' => 'hotels',
					'meta_query' => array(array('key' => 'villa_or_hotel', 'value' => 'hotel' )),
					'meta_key' => 'ranking', 'orderby' => 'meta_value_num', 'order' => 'ASC'));
				plbali_show_post($posts, $arr_post_id, $short_slug, 'ホテル一覧');
				// disp_sort
				$posts = get_posts(array('posts_per_page' => 999, 'post_type' => 'hotels',
					'meta_query' => array(array('key' => 'villa_or_hotel', 'value' => 'hotel' )),
					'meta_key' => 'disp_sort', 'orderby' => 'meta_value_num', 'order' => 'ASC'));
				plbali_show_post($posts, $arr_post_id, $short_slug, 'ホテル一覧');
				// hotel_name_jp
				$posts = get_posts(array('posts_per_page' => 999, 'post_type' => 'hotels',
					'meta_query' => array(array('key' => 'villa_or_hotel', 'value' => 'hotel' )),
					'meta_key' => 'hotel_name_jp', 'orderby' => 'meta_value_num', 'order' => 'ASC'));
				plbali_show_post($posts, $arr_post_id, $short_slug, 'ホテル一覧');
				?>

				<?php if(!empty($arr_post_id)){ ?>
						</div>
					</div>
				</div>
				<?php } ?>

			</div>
		</div><!-- id=detaile -->
		<div id="detaile_f"></div>
	</div><!-- #contents -->
	<?php get_sidebar() ?>
</div><!-- #container -->
<?php get_footer() ?>

 <?php function plbali_show_post($posts, &$arr_post_id, $short_slug, $h2){
	if ($posts){

		if(empty($arr_post_id)){ ?>
		<div class="h2_title"><h2 class="<?php echo $short_slug ?>_h2"><?php echo $h2 ?></h2></div>
		<div class="villa_list box">
			<div class="<?php echo $short_slug ?>">
				<div class="box">
		<?php } ?>
				<?php foreach($posts as $post):
					setup_postdata($post);
					if (isset($arr_post_id[$post->ID])) {
						continue;
					}
					$arr_post_id[$post->ID] = $post->ID;
					?>
					<div class="list">
						<div class="list_img">
							<a href="<?php echo get_permalink($post->ID) ?>" target="_top">
								<?php
									$title = get_the_title($post->ID);
									// $thumb = get_the_post_thumbnail($post->ID, array( 100,100 ), array( 'alt' =>$title, 'title' => $title));
									// echo $thumb;
								?>
								<?php $image_attributes = wp_get_attachment_image_src(get_post_meta($post->ID, 'thumbnail', true)) ?>
								<?php $thumbnail = $image_attributes ? $image_attributes[0] : ''; ?>
								<img src="<?php echo $thumbnail ?>" title="<?php echo $title ?>" style="max-width:100px;max-height:100px">
							</a>
						</div>
						<div class="list_name">
							<div class="o_icon">
							<?php
								$staff_recommendation = get_post_meta($post->ID, 'staff_recommendation', true);
								if ($staff_recommendation) { ?>
								<img src="/img/staff_osusume_icon.gif" width="122" height="17" alt="スタッフおすすめ">
								<?php } ?>
							</div>
							<span><?php echo post_custom('copy') ?></span>
							<a href="<?php echo get_permalink($post->ID) ?>" target="_top"><?php echo $title ?></a>
						</div>

						<p class="area"><?php echo get_area($post->ID) ?></p>
				<?php if(get_post_meta($post->ID,'hotel_stars',true)): ?>
					<?php if(get_post_meta($post->ID,'hotel_stars',true) == '1'): ?>
						<p class="rank"><img src="/img/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星"></p>
						<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '2'): ?>
						<p class="rank"><img src="/img/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星"></p>
						<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '3'): ?>
						<p class="rank"><img src="/img/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星"></p>
						<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '4'): ?>
						<p class="rank"><img src="/img/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星"></p>
						<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '5'): ?>
						<p class="rank"><img src="/img/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星"></p>
						<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '2-3'): ?>
						<p class="rank"><img src="/img/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星"></p>
						<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '2-4'): ?>
						<p class="rank"><img src="/img/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星"></p>
						<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '2-5'): ?>
						<p class="rank"><img src="/img/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星"></p>
						<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '3-4'): ?>
						<p class="rank"><img src="/img/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星"></p>
						<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '3-5'): ?>
						<p class="rank"><img src="/img/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星"></p>
						<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '4-5'): ?>
						<p class="rank"><img src="/img/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星"></p>
					<?php endif ?>
				<?php endif ?>
					</div>
				<?php endforeach ?>
				<!-- </div>
			</div>
		</div> -->
		<?php } ?>
	<?php } ?>