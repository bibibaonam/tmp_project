<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

include( TEMPLATEPATH . '/header-list.php' );
$arr_cat_2 = array(
	'list-staff' => array('スタッフおすすめ', 'staff_recommendation', 'a:1:{i:0;s:20:"staff_recommendation";}'),
	'list-star'  => array('5つ星', 'baligirl_rank', '5'),
	'list-villa' => array('ヴィラ', 'villa_or_hotel', 'villa'),
	'list-hotel' => array('ホテル', 'villa_or_hotel', 'hotel')
);

?>

<div id="container">
<div id="contents">
<ul id="breadcrumb"><li><a href="http://www.plbali.com">バリ旅行HOME</a></li><li>&nbsp;＞&nbsp;<a href="http://www.plbali.com/villa/">ヴィラ・ホテル</a>&nbsp;＞&nbsp;<?php echo $arr_cat_2[$cat->slug][0] ?></li></ul>

<div id="detaile_h"></div>
<div id="detail">

<?php
$arr_categories = array(
	array(
		'category_name'    => 'list-kuta',
		'class_color'      => 'kl',
		'class_villa_list' => 'kuta',
		'name_villa_list'  => 'クタ／レギャン',
		'link'             => '/kuta-legian/',
		'link_alt'         => 'クタ/レギャンの基本情報はこちら',
	),
	array(
		'category_name'    => 'list-semi',
		'class_color'      => 'sm',
		'class_villa_list' => 'semi',
		'name_villa_list'  => 'スミニャック／クロボカン',
		'link'             => '/seminyak-kerobokan/',
		'link_alt'         => 'スミニャック/クロボカンの基本情報はこちら',
	),
	array(
		'category_name'    => 'list-nusa',
		'class_color'      => 'ns',
		'class_villa_list' => 'nusa',
		'name_villa_list'  => 'ヌサドゥア',
		'link'             => '/nusadua/',
		'link_alt'         => 'ヌサドゥアの基本情報はこちら',
	),
	array(
		'category_name'    => 'list-jim',
		'class_color'      => 'jm',
		'class_villa_list' => 'jim',
		'name_villa_list'  => 'ジンバラン/ウルワツ',
		'link'             => '/jimbaran-uluwatu/',
		'link_alt'         => 'ジンバラン/ウルワツの基本情報はこちら',
	),
	array(
		'category_name'    => 'list-ubud',
		'class_color'      => 'ud',
		'class_villa_list' => 'ubud',
		'name_villa_list'  => 'ウブド',
		'link'             => '/ubud/',
		'link_alt'         => 'ウブドの基本情報はこちら',
	),
	array(
		'category_name'    => 'list-sanur',
		'class_color'      => 'sn',
		'class_villa_list' => 'sanur',
		'name_villa_list'  => 'サヌール',
		'link'             => '/sanur/',
		'link_alt'         => 'サヌールの基本情報はこちら',
	),
	array(
		'category_name'    => 'list-canggu',
		'class_color'      => 'cng',
		'class_villa_list' => 'canggu',
		'name_villa_list'  => 'チャングー',
		'link'             => '/canggu/',
		'link_alt'         => 'チャングーの基本情報はこちら',
	),
	array(
		'category_name'    => 'list-candidasa',
		'class_color'      => 'cnd',
		'class_villa_list' => 'candidasa',
		'name_villa_list'  => 'チャンディダサ（マンギス）',
		'name_villa_tag'   => 'チャンディダサ',
		'link'             => '/candidasa/',
		'link_alt'         => 'チャンディダサ（マンギス）の基本情報はこちら',
	),
	array(
		'category_name'    => 'list-tanahlot',
		'class_color'      => 'tnl',
		'class_villa_list' => 'tanahlot',
		'name_villa_list'  => 'タナロット（タバナン）',
		'name_villa_tag'   => 'タナロット',
		'link'             => '/tanahlot/',
		'link_alt'         => 'タナロット（タバナン）の基本情報はこちら',
	),
	array(
		'category_name'    => 'list-menjangan',
		'class_color'      => 'mj',
		'class_villa_list' => 'menjangan',
		'name_villa_list'  => 'ムンジャンガン',
		'link'             => '/menjangan/',
		'link_alt'         => 'ムンジャンガンの基本情報はこちら',
	),
	array(
		'category_name'    => 'list-lovina',
		'class_color'      => 'lb',
		'class_villa_list' => 'lovina',
		'name_villa_list'  => 'ロビナ',
		'link'             => '/lovina/',
		'link_alt'         => 'ロビナの基本情報はこちら',
	),
	array(
		'category_name'    => 'list-yogyakarta',
		'class_color'      => 'yg',
		'class_villa_list' => 'yogyakarta',
		'name_villa_list'  => 'ジョグジャカルタ',
		'link'             => '/yogyakarta/',
		'link_alt'         => 'ジョグジャカルタの基本情報はこちら',
	),
	array(
		'category_name'    => 'list-lombok',
		'class_color'      => 'lmb',
		'class_villa_list' => 'lombok',
		'name_villa_list'  => 'ロンボク島',
		'link'             => '/lombok/',
		'link_alt'         => 'ロンボク島の基本情報はこちら',
	),
	array(
		'category_name'    => 'list-lembongan',
		'class_color'      => 'lem',
		'class_villa_list' => 'lembongan',
		'name_villa_list'  => 'レンボンガン島',
		'link'             => '/lembongan/',
		'link_alt'         => 'レンボンガン島の基本情報はこちら',
	)
);


?>

<style type="text/css">
	#detail .list_villa_list_navi{
		color:#333333;
		font-size:0;
		margin-bottom:10px;
		width:auto;
		margin-left:30px;
		margin-right:30px;
	}
	#detail .list_villa_list_navi li{
		width:178px;
		font-size:12px;
		line-height:1.2em;
		display:inline-block;
		*display : inline;
		*zoom : 1;
		margin:1px;
		vertical-align:top;
	}
	#detail .list_villa_list_navi a{
		color:#FFF;
		display:block;
		padding:10px 5px 10px 5px;
		text-decoration:none;
		border-radius: 6px;
		-moz-border-radius: 6px;
		-webkit-border-radius: 6px;
		background-color:#F3A04A;
		background-image:url(/img/villa/bg_anchor.png);
		background-repeat:no-repeat;
		background-position:right center;
	}
	#detail .list_villa_list_navi #ac_kuta a{
		background-color:#D28D47;
	}
	#detail .list_villa_list_navi #ac_semi a{
		background-color:#f03f46;
	}
	#detail .list_villa_list_navi #ac_nusa a{
		background-color:#d766b3;
	}
	#detail .list_villa_list_navi #ac_jim a{
		background-color:#009999;
	}
	#detail .list_villa_list_navi #ac_ubud a{
		background-color:#5a7937;
	}
	#detail .list_villa_list_navi #ac_sanur a{
		background-color:#34548e;
	}
	#detail .list_villa_list_navi #ac_canggu a{
		background-color:#ffcb51;
	}
	#detail .list_villa_list_navi #ac_candidasa a{
		background-color:#8d7077;
	}
	#detail .list_villa_list_navi #ac_tanahlot a{
		background-color:#ee734b;
	}
	#detail .list_villa_list_navi #ac_menjangan a{
		background-color:#64d13a;
	}
	#detail .list_villa_list_navi #ac_lovina a{
		background-color:#4b3b5f;
	}
	#detail .list_villa_list_navi #ac_yogyakarta a{
		background-color:#83d0f7;
	}
	#detail .list_villa_list_navi #ac_lombok a{
		background-color:#b271ea;
	}
	#detail .list_villa_list_navi #ac_lembongan a{
		background-color:#3fefdb;
	}
	#detail .list_villa_list_navi #ac_kuta a:hover{
		background-color:#E8C6A3;
	}
	#detail .list_villa_list_navi #ac_semi a:hover{
		background-color:#F79FA2;
	}
	#detail .list_villa_list_navi #ac_nusa a:hover{
		background-color:#EBB2D9;
	}
	#detail .list_villa_list_navi #ac_jim a:hover{
		background-color:#7FCCCC;
	}
	#detail .list_villa_list_navi #ac_ubud a:hover{
		background-color:#ADBD9B;
	}
	#detail .list_villa_list_navi #ac_sanur a:hover{
		background-color:#99A9C6
	}
	#detail .list_villa_list_navi #ac_canggu a:hover{
		background-color:#FFE5A8;
	}
	#detail .list_villa_list_navi #ac_candidasa a:hover{
		background-color:#C6B7BB;
	}
	#detail .list_villa_list_navi #ac_tanahlot a:hover{
		background-color:#F6B9A5;
	}
	#detail .list_villa_list_navi #ac_menjangan a:hover{
		background-color:#B1E89C;
	}
	#detail .list_villa_list_navi #ac_lovina a:hover{
		background-color:#A59DAF;
	}
	#detail .list_villa_list_navi #ac_yogyakarta a:hover{
		background-color:#C1E7FB;
	}
	#detail .list_villa_list_navi #ac_lombok a:hover{
		background-color:#D8B8F4;
	}
	#detail .list_villa_list_navi #ac_lembongan a:hover{
		background-color:#9FF7ED;
	}
	#detail, #detaile_f {
		width: 730px !important;
		background-image: url(/img/detail_y_bg.jpg) !important;
	}
	#contents {
		width: 742px !important;
	}

	#detail .list_villa_list_navi,
	#staff_link{
		margin-left:20px;
		margin-right:20px;
	}
	#detail .list_villa_list_navi li{
		width:19.7%;
		margin-left:0.15%;
		margin-right:0.15%;
	}
	@media screen and (max-width: 820px) {
		#detail .list_villa_list_navi li a{
			height:2.2em;
		}
		#detail .list_villa_list_navi li a span{
			display:table-cell;
			vertical-align:middle;
			height:2.2em;
		}
	}
	#detail .list_villa_list_navi{
		margin-left:22px;
		margin-right:15px;
		padding-bottom: 15px;
	}
	#detail .list_villa_list_navi li{
		font-size:10px;
	}
	#detail .list_villa_list_navi li a{
		background-image:url(/img/villa/bg_anchor_sp.png);
		background-size:20px 11px;
		background-position: 102% 50%;
	}
	#villa_list_navi {margin-bottom: 8px !important;}
	@media screen and (max-width: 580px) {
		#detail .list_villa_list_navi li{
			width:49.2%;
			margin-left:0.4%;
			margin-right:0.4%;
		}
	}
</style>
<!-- <link href="/css/villa-cat.css" rel="stylesheet" type="text/css"> -->

<div id="villa_list_navi">
	<?php $arr = array(); foreach ($arr_cat_2 as $key => $value) {
		$arr[] = '<a href="/hotels/'.$key.'/">'.$value[0].'</a>';
	}
	echo implode('｜', $arr);
	?>
</div>

<ul id="villa_list_navi" class="list_villa_list_navi">
	<?php foreach ($arr_categories as $key => $category) { ?>
	<li id="ac_<?php echo $category['class_villa_list'] ?>"><a href="#<?php echo $category['class_color'] ?>_ttl"><span><?php echo isset($category['name_villa_tag'])?$category['name_villa_tag']:str_replace('／', '/', $category['name_villa_list']) ?></span></a></li>
	<?php }	?>
</ul>

<div id="villa_list_title"><h1 id="list_staff"><?php echo $arr_cat_2[$cat->slug][0] ?></h1></div>
<?php foreach ($arr_categories as $category) { ?>
<div class="box" id="<?php echo $category['class_color'] ?>_ttl">
	<?php
		$query = array(
			'post_type'     => 'hotels',
			'category_name' => $category['category_name'],
			'meta_query'    => array(
				'ranking_key' => array(
					'key'  => $arr_cat_2[$cat->slug][1],
					'value' => $arr_cat_2[$cat->slug][2]
				)
			),
			'orderby' => array(
				'post_modified' => 'DESC'
			),
			'posts_per_page' => 999
		);
		$posts = get_posts($query);
	?>
	<?php if ($posts){ ?>

	<?php
		$short_cat = $category['class_villa_list'];
		if ($short_cat == 'ubud') {
			$short_cat = 'ubdo';
		}elseif ($short_cat == 'sanur') {
			$short_cat = 'sanu';
		}elseif ($short_cat == 'candidasa') {
			$short_cat = 'cand';
		}elseif ($short_cat == 'canggu') {
			$short_cat = 'cang';
		}elseif ($short_cat == 'tanahlot') {
			$short_cat = 'tana';
		}elseif ($short_cat == 'menjangan') {
			$short_cat = 'menj';
		}elseif ($short_cat == 'lovina') {
			$short_cat = 'lovi';
		}elseif ($short_cat == 'yogyakarta') {
			$short_cat = 'yogy';
		}elseif ($short_cat == 'lombok') {
			$short_cat = 'lomb';
		}elseif ($short_cat == 'lembongan') {
			$short_cat = 'lemb';
		}
	?>
	<div class="h2_title"><h2 class="<?php echo $category['class_villa_list'] ?>_h2"><?php echo $category['name_villa_list'] ?></h2></div>
	<div class="villa_list box">

		<div class="<?php echo $short_cat ?>">
			<div class="box">
				<?php foreach ($posts as $post) { ?>
				<?php setup_postdata($post); ?>
				<div class="list">
					<div class="list_img"><a href="<?php echo get_permalink($post->ID) ?>" target="_top"><?php
						$title = get_the_title($post->ID);
						$image_attributes = wp_get_attachment_image_src(get_post_meta($post->ID, 'thumbnail', true), 'full');
						$thumbnail = $image_attributes ? $image_attributes[0] : ''; ?>
						<img src="<?php echo $thumbnail ?>" title="<?php echo $title ?>" alt="<?php echo $title ?>" style="max-width:100px"></a></div>
					<div class="list_name">
						<span><?php echo get_post_meta($post->ID, 'catch_copy', true) ?></span>
						<a href="<?php echo get_permalink($post->ID) ?>" target="_top"><?php echo $title ?></a></div>
					<p class="area"><?php echo get_area($post->ID) ?></p>
					<?php $hotel_stars = get_post_meta($post->ID,'baligirl_rank',true) ?>
					<?php if($hotel_stars == '1'): ?>
					<p class="rank"><img src="/img/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星"></p>
					<?php elseif($hotel_stars == '2'): ?>
					<p class="rank"><img src="/img/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星"></p>
					<?php elseif($hotel_stars == '3'): ?>
					<p class="rank"><img src="/img/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星"></p>
					<?php elseif($hotel_stars == '4'): ?>
					<p class="rank"><img src="/img/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星"></p>
					<?php elseif($hotel_stars == '5'): ?>
					<p class="rank"><img src="/img/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星"></p>
					<?php elseif($hotel_stars == '2-3'): ?>
					<p class="rank"><img src="/img/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星"></p>
					<?php elseif($hotel_stars == '2-4'): ?>
					<p class="rank"><img src="/img/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星"></p>
					<?php elseif($hotel_stars == '2-5'): ?>
					<p class="rank"><img src="/img/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星"></p>
					<?php elseif($hotel_stars == '3-4'): ?>
					<p class="rank"><img src="/img/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星"></p>
					<?php elseif($hotel_stars == '3-5'): ?>
					<p class="rank"><img src="/img/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星"></p>
					<?php elseif($hotel_stars == '4-5'): ?>
					<p class="rank"><img src="/img/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星"></p>
					<?php endif; ?>
				</div>
				<?php } ?>
			</div>
		</div><!--class=ubdo -->
	</div>
	<?php } ?>
</div>
<?php } ?>

</div><!-- id=detaile -->
<div id="detaile_f"></div>

</div><!-- #contents -->
<?php get_sidebar(); ?>
</div><!-- #container -->
<?php get_footer(); ?>
