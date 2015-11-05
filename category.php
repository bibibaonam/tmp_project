<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

// print_r(get_post_meta(235));
// die;

get_header() ?>

<?php

// echo "<pre>";
// print_r(wp_get_post_categories( 235 ));
// $cat = get_category(get_query_var('cat'));
// print_r($cat);
// die;

?>

<div id="container">
<div id="contents">

<?php if ( have_posts() ) : ?>
<?php get_breadcrumbs() ?>

<?php /*-----------------------*/?>
<?php /*----------spa----------*/?>
<?php /*-----------------------*/?>
<?php if(in_category('spa')): ?>
<div id="spa_map">
<div id="h1_title"><h1>エリアから選ぶ、ヴィラ・ホテル＆スパ。</h1></div>


<div id="mBtn1"><a href="/ubud/"></a></div>
<div id="mBtn2"><a href="/seminyak-kerobokan/"></a></div>
<div id="mBtn3"><a href="/kuta-legian/"></a></div>
<div id="mBtn4"><a href="/jimbaran-uluwatu/"></a></div>
<div id="mBtn5"><a href="/nusadua/"></a></div>
<div id="mBtn6"><a href="/sanur/"></a></div>
</div>

<div id="detail">
<div id="spa_title" class="box">
<div class="h2_title left"><h2>至福のバリ島スパ スパ SPA</h2></div>
<div class="read left">
<strong>エリアで選ぶ、至福の癒しスパ。</strong>
<p>花びらいっぱいのバスタブも、貸し切りヴィラも、バリ島だから、プチプライス。</p></div>
</div>
<div class="spa_list box">
<div class="ubdo left">
<div class="h3_title"><h3><a href="/ubud/"><img src="/img/villa_title05.gif" width="320" height="21" alt="1ウブド UBUD"></a></h3></div>
<div class="box">
<div class="spa_img">
<img src="/img/spa_img01.jpg" width="320" height="80" />
</div>
<div class="list">
<ul>
<?php $myposts = get_posts('post_type=hotels&category_name=spa-ubud&posts_per_page=999');/*SPA記事リスティング*/ ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<li><a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a></li>
<?php } ?>
</ul>
</div>
</div>
</div><!--class=ubdo -->
<div class="semi right">
<div class="h3_title"><h3><a href="/seminyak-kerobokan/"><img src="/img/villa_title02.gif" width="320" height="21" alt="2スミニャック／クロボカン SEMINYAK/KEROBOKAN"></a></h3></div>
<div class="box">
<div class="spa_img">
<img src="/img/spa_img02.jpg" width="320" height="80" />
</div>
<div class="list">
<ul>
<?php $myposts = get_posts('post_type=hotels&category_name=spa-seminyak-kerobokan&posts_per_page=999');/*SPA記事リスティング*/ ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<li><a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a></li>
<?php } ?>
</ul>
</div>
</div>
</div><!-- class=semi -->
</div>
<div class="spa_list box">
<div class="kuta left">
<div class="h3_title"><h3><a href="/kuta-legian/"><img src="/img/villa_title01.gif" width="320" height="21" alt="3クタ／レギャン KUTA/LEGIAN"></a></h3></div>
<div class="box">
<div class="spa_img">
<img src="/img/spa_img03.jpg" width="320" height="80" />
</div>
<div class="list">
<ul>
<?php $myposts = get_posts('post_type=hotels&category_name=spa-kuta-legian&posts_per_page=999');/*SPA記事リスティング*/ ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<li><a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a></li>
<?php } ?>
</ul>
</div>
</div>
</div><!--class=kuta -->
<div class="jim right">
<div class="h3_title"><h3><a href="/jimbaran-uluwatu/"><img src="/img/villa_title04.gif" width="320" height="21" alt="4ジンバラン／ウルワツ JIMBARAN/ULUWATU"></a></h3></div>
<div class="box">
<div class="spa_img">
<img src="/img/spa_img04.jpg" width="320" height="80" />
</div>
<div class="list">
<ul>
<?php $myposts = get_posts('post_type=hotels&category_name=spa-jimbaran-uluwatu&posts_per_page=999');/*SPA記事リスティング*/ ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<li><a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a></li>
<?php } ?>
</ul>
</div>
</div>
</div><!-- class=jim -->
</div>
<div class="spa_list box">
<div class="nusa left">
<div class="h3_title"><h3><a href="/nusadua/"><img src="/img/villa_title03.gif" width="320" height="21" alt="5ヌサドゥア NUSA DUA"></a></h3></div>
<div class="box">
<div class="spa_img">
<img src="/img/spa_img05.jpg" width="320" height="80" />
</div>
<div class="list">
<ul>
<?php $myposts = get_posts('post_type=hotels&category_name=spa-nusadua&posts_per_page=999');/*SPA記事リスティング*/ ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<li><a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a></li>
<?php } ?>
</ul>
</div>
</div>
</div><!--class=nusa -->
<div class="sanu right">
<div class="h3_title"><h3><a href="/sanur/"><img src="/img/villa_title06.gif" width="320" height="21" alt="6サヌール SANUR"></a></h3></div>
<div class="box">
<div class="spa_img">
<img src="/img/spa_img06.jpg" width="320" height="80" />
</div>
<div class="list">
<ul>
<?php $myposts = get_posts('post_type=hotels&category_name=spa-sanur&posts_per_page=999');/*SPA記事リスティング*/ ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<li><a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a></li>
<?php } ?>
</ul>
</div>
</div>
</div><!-- class=sanu -->

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td width="10" height="30" align="right" valign="top">&nbsp;</td>
		<td height="30">&nbsp;</td>
	</tr>
	<tr>
		<td align="right" valign="top">＜</td>
		<td>注意事項＞</td>
	</tr>
	<tr>
		<td align="right" valign="top">・</td>
		<td>メールでのお申し込みは、日本ご出発３日前までにお願いいたします。（日曜・祝日を除く）<br />
			それ以降の直前のお申し込みは、旅工房までお電話にてご連絡ください。</td>
	</tr>
	<tr>
		<td align="right" valign="top">・</td>
		<td>海外支店から直接のご返信となるため、メールが届かないケースが稀にございます。<br />
			48時間以内にメール返信がない場合は、お手数ですが旅工房までご連絡お願いいたします。<br />
			（日曜・祝日を除く → 翌営業日以降の返信となります。）</td>
	</tr>
	<tr>
		<td align="right" valign="top">・</td>
		<td>こちらに記載のないオプショナル・スパでも手配可能な場合がございますので、是非お気軽にお問い合わせくださいませ。</td>
	</tr>
	<tr>
		<td align="right" valign="top">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align="right" valign="top">※</td>
		<td>現地支店（プルメリアバリ）営業時間</td>
	</tr>
	<tr>
		<td align="right" valign="top">&nbsp;</td>
		<td>[平日]9:00-17:00 <br />
			[土曜]9:00-14:00 日休<br />
			[祝日] ニュピ 2015年3月21日  ※また前日3月20日は12時までの営業となります。</td>
	</tr>
	<tr>
		<td align="right" valign="top">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	</table>

</div>

<?php /*-----------------------*/?>
<?php /*--------villa----------*/?>
<?php /*-----------------------*/?>
<?php elseif(in_category('hotels')): ?>

	<?php

	$link = 'hotels';

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
<div id="h1_title">
<h1>Bali Hotel Selection バリ島ホテル・ヴィラ情報</h1>
</div>
<div id="villa_map">
	<table border="0" cellspacing="0" cellpadding="0" id="areamap">
		<tr>
			<th>
				<h2><img src="/img/villa_areamap_title.gif" alt="エリアから選ぶ、ヴィラ・ホテル" width="185" height="63" /></h2>
				<p>何度訪れてもまた行きたい、<br class="sp">と思わせてくれるバリ島には、<br>
				エリアごとに異なる魅力を持つ<br class="sp">リゾートが存在します。<br>
				お気に入りのリゾートで至極の時を<br class="sp">お過ごしください。</p>
			</th>
			<td>
				<h2>地図から都市の情報・ツアーを探す</h2>
				<div id="map">
					<div id="mBtn1"><a href="/kuta-legian/">クタ・レギャン</a></div>
					<div id="mBtn2"><a href="/seminyak-kerobokan/">スミニャック／クロボカン</a></div>
					<div id="mBtn3"><a href="/nusadua/">ヌサドゥア／ベノア</a></div>
					<div id="mBtn4"><a href="/jimbaran-uluwatu/">ジンバラン</a></div>
					<div id="mBtn5"><a href="/ubud/">ウブド</a></div>
					<div id="mBtn6"><a href="/sanur/">サヌール</a></div>
					<div id="mBtn7"><a href="/canggu/">チャングー</a></div>
					<div id="mBtn8"><a href="/candidasa/">チャンディダサ</a></div>
					<div id="mBtn9"><a href="/tanahlot/">タナロット</a></div>
					<div id="mBtn10"><a href="/menjangan/">ムンジャンガン</a></div>
					<div id="mBtn11"><a href="/lovina/">ロビナ</a></div>
					<div id="mBtn12"><a href="/yogyakarta/">ジョグジャカルタ</a></div>
				 <!-- <div id="mBtn13"><a href="/lombok/">ロンボク島</a></div> -->
					<div id="mBtn14"><a href="/lembongan/">レンボンガン島</a></div>
				</div>
			</td>
		</tr>
	</table>
</div>

<div id="detail">

<ul id="villa_list_navi">
	<?php foreach ($arr_categories as $key => $category) { ?>
	<li id="ac_<?php echo $category['class_villa_list'] ?>"><a href="#<?php echo $category['class_color'] ?>_ttl"><span><?php echo isset($category['name_villa_tag'])?$category['name_villa_tag']:str_replace('／', '/', $category['name_villa_list']) ?></span></a></li>
	<?php }	?>
</ul>

<ul id="osusume_list">
		<li><img src="/img/villa/list_osusume_icon01.png" width="35" height="35" alt="カップル"><span>カップルに<br>おすすめ</span></li>
		<li><img src="/img/villa/list_osusume_icon02.png" width="35" height="35" alt="ファミリー"><span>ファミリーに<br>おすすめ</span></li>
		<li><img src="/img/villa/list_osusume_icon03.png" width="35" height="35" alt="女子旅"><span>女子旅に<br>おすすめ</span></li>
</ul>

<div class="box">
	<?php foreach ($arr_categories as $key => $category) { ?>
	<div class="h2_title" id="<?php echo $category['class_color'] ?>_ttl">
		<?php
			$category_link = get_category_by_slug( $category['category_name'] );
			$category_link = get_category_link( $category_link->term_id );
		?>
		<h2 class="kl_h2"><a href="<?php echo esc_url( $category_link ); ?>"><?php echo $category['name_villa_list'] ?></a></h2>
		<div class="info_link"><a href="<?php echo $category['link'] ?>"><img src="/img/villa/list_link_<?php echo $category['class_villa_list'] ?>.gif" height="18" alt="<?php echo $category['link_alt'] ?>"></a></div>
		</div>
		<div class="villa_list box">
			<div class="<?php echo $category['class_villa_list'] ?>">
			<?php
			$query = array(
				'post_type' => 'hotels',
				'category_name' => $category['category_name'],
				'meta_query' => array(
					'ranking_key' => array(
						'key'  => 'ranking',
						'type' => 'NUMERIC'
					),
					'disp_sort_key' => array(
						'key'  => 'disp_sort',
						'type' => 'NUMERIC'
					)
				),
				'orderby' => array(
					'ranking_key'   => 'ASC',
					'disp_sort_key' => 'ASC',
					'post_modified' => 'DESC'
				),
				'posts_per_page' => 16
			);
			$posts = get_posts($query);
			?>
			<div class="box"><?php plbali_show_post_ranking($posts) ?></div>
			<div class="box size-m"><?php plbali_show_post_disp_sort($posts) ?></div>
			<div class="page_top_link"><a href="#top">ページの先頭へ戻る</a></div>
		</div><!--class=kuta -->
	</div>
	<?php } // end foreach ?>
</div><!--class=box -->




<?php /*-----------------------*/?>
<?php /*-------optional--------*/?>
<?php /*-----------------------*/?>
<?php elseif(in_category('optional')): ?>
<div id="detaile_h"></div>
<div id="detail">
	<div id="h1_title"><h1>バリをより楽しむオプショナルツアー。</h1></div>
	<div id="h2_title"><h2>おすすめアクティビティ オプショナル optional</h2></div>

	<div id="op_navi">
		<ul class="op_sc_navi">
			<!--<li id="op20"><a href="#20th">20周年記念 オプショナルツアー</a></li>-->
			<li><a href="#osusume">プルメリアおすすめ</a></li>
			<li><a href="#balikanko">バリ１日観光</a></li>
			<li><a href="#balihalfday">バリ半日観光</a></li>
			<li><a href="#ubudkanko">ウブド観光</a></li>
			<li><a href="#mountainandriver">山・川遊び</a></li>
			<li><a href="#cruise">クルーズ</a></li>
		</ul>
		<ul class="op_sc_navi">
			<li><a href="#marineactivity">マリンアクティビティ</a></li>
			<li><a href="#diving">ダイビング</a></li>
			<li><a href="#mealmain">お食事メイン</a></li>
			<li><a href="#themepark">テーマパーク</a></li>
			<li><a href="#golf">ゴルフ</a></li>
			<!--<li><a href="#firstday-type1">到着日プラン（お部屋利用）</a></li>-->
		</ul>
		<ul class="op_sc_navi">
			<!--<li><a href="#firstday-type2">到着日プラン（お部屋利用なし）</a></li>-->
			<li><a href="#finalday-type1">最終日の過ごし方（お部屋利用）</a></li>
			<li><a href="#finalday-type2">最終日の過ごし方（お部屋利用なし）</a></li>
			</ul>
			<ul class="op_sc_navi">
			<li><a href="#romanticdinner">ロマンティックディナー</a></li>
			<li><a href="#op-wedding">ウェディング</a></li>
			<li><a href="#otherislands">他島へ</a></li>
			<li><a href="#exercise">お稽古</a></li>
			<li><a href="#balitradition">バリ伝統芸能鑑賞</a></li>
		</ul>
	</div>

<script type="text/javascript">
function setEqualHeight(columns){
		var tallestcolumn = 0;
		columns.each(
		function(){
				currentHeight = $(this).height();
				if(currentHeight > tallestcolumn){
						tallestcolumn = currentHeight;

				}
		});
		columns.height(tallestcolumn);
 }
$(document).ready(function() {
		setEqualHeight($(".optional_list > .box  > div"));
});
</script>

<!--
<div class="optional_list" id="20th">
<h3 style="background-color:#9B1815;">20周年記念 オプショナルツアー</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=20th&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div>
-->
<div class="optional_list" id="osusume">
<h3>プルメリアおすすめ</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=osusume&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div>

<div class="optional_list" id="balikanko">
<h3>バリ１日観光</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=balikanko&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div>

<div class="optional_list" id="balihalfday">
<h3>バリ半日観光</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=balihalfday&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div>

<div class="optional_list" id="ubudkanko">
<h3>ウブド観光</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=ubudkanko&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div>

<div class="optional_list" id="mountainandriver">
<h3>山・川遊び</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=mountainandriver&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div>

<div class="optional_list" id="cruise">
<h3>クルーズ</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=cruise&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div>

<div class="optional_list" id="marineactivity">
<h3>マリンアクティビティ</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=marineactivity&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div>

<div class="optional_list" id="diving">
<h3>ダイビング</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=diving&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div>

<div class="optional_list" id="mealmain">
<h3>お食事メイン</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=mealmain&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div>

<div class="optional_list" id="themepark">
<h3>テーマパーク</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=themepark&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div>

<div class="optional_list" id="golf">
<h3>ゴルフ</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=golf&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div>

<!-- <div class="optional_list" id="firstday-type1">
<h3>到着日プラン（お部屋利用）</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=firstday-type1&posts_per_page=100') ?>

<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div> -->

<!-- <div class="optional_list" id="firstday-type2">
<h3>到着日プラン（お部屋利用なし）</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=firstday-type2&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div> -->

<div class="optional_list" id="finalday-type1">
<h3>最終日の過ごし方（お部屋利用）</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=finalday-type1&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div>

<div class="optional_list" id="finalday-type2">
<h3>最終日の過ごし方（お部屋利用なし）</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=finalday-type2&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div>

<div class="optional_list" id="romanticdinner">
<h3>ロマンティックディナー</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=romanticdinner&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div>

<div class="optional_list" id="op-wedding">
<h3>ウェディング</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=op-wedding&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div>

<div class="optional_list" id="otherislands">
<h3>他島へ</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=otherislands&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div>
<!--
<div class="optional_list">
<h3>ヨガ</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=yoga&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div>
-->
<div class="optional_list" id="exercise">
<h3>お稽古</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=exercise&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div>

<div class="optional_list mb_0" id="balitradition">
<h3>バリ伝統芸能鑑賞</h3>
<div class="box">
<?php $myposts = get_posts('post_type=hotels&category_name=balitradition&posts_per_page=100') ?>
<?php foreach($myposts as $post){ ?>
	<?php setup_postdata($post) ?>
		<div class="left">
		<a href="<?php the_permalink() ?>" target="_top"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)) ?></a>
	<a href="<?php the_permalink() ?>" target="_top"><?php the_title() ?></a>
		<span><?php echo post_custom('copy') ?></span>
		</div>
<?php } ?>
</div>
</div>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td width="50" height="30" align="right" valign="top">&nbsp;</td>
		<td height="30">&nbsp;</td>
	</tr>
	<tr>
		<td align="right" valign="top">＜</td>
		<td>注意事項＞</td>
	</tr>
	<tr>
		<td align="right" valign="top">・</td>
		<td>ストラップのプレゼントは、旅工房のバリ島ツアーをご予約いただいたお客様限定となります。予めご了承くださいませ。</td>
	</tr>
	<tr>
		<td align="right" valign="top">・</td>
		<td>メールでのお申し込みは、日本ご出発３日前までにお願いいたします。（日曜・祝日を除く）<br />
			それ以降の直前のお申し込みは、旅工房までお電話にてご連絡ください。</td>
	</tr>
	<tr>
		<td align="right" valign="top">・</td>
		<td>海外支店から直接のご返信となるため、メールが届かないケースが稀にございます。<br />
			48時間以内にメール返信がない場合は、お手数ですが旅工房までご連絡お願いいたします。<br />
			（日曜・祝日を除く → 翌営業日以降の返信となります。）</td>
	</tr>
	<tr>
		<td align="right" valign="top">・</td>
		<td>こちらに記載のないオプショナル・スパでも手配可能な場合がございますので、是非お気軽にお問い合わせくださいませ。</td>
	</tr>
	<tr>
		<td align="right" valign="top">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align="right" valign="top">※</td>
		<td>現地支店（プルメリアバリ）営業時間</td>
	</tr>
	<tr>
		<td align="right" valign="top">&nbsp;</td>
		<td>[平日]9:00-17:00 <br />
			[土曜]9:00-14:00 日休<br />
			[祝日] ニュピ 2015年3月21日  ※また前日3月20日は12時までの営業となります。</td>
	</tr>
	<tr>
		<td align="right" valign="top">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	</table>

<?php endif ?>

<?php endif ?>



</div><!-- id=detaile -->
<div id="detaile_f"></div>



</div><!-- #contents -->
<?php if(is_category($link)): ?>
<?php else : ?>
<?php get_sidebar() ?>
<?php endif ?>
</div><!-- #container -->
<?php get_footer() ?>


<style type="text/css">
	img.ImgRanking{
		width: 288px !important;
		height: 192px !important;
	}
</style>
<?php

function plbali_show_post_ranking($posts){
	foreach($posts as $key => $post){
		setup_postdata($post);

		if ($key >= 6)
			break;

		$arr_post_id[$post->ID] = $post->ID;

		if($key === 2 || count($arr_post_id) === 5): ?>
		<div class="list mr0">
		<?php else : ?>
		<div class="list">
		<?php endif ?>

			<?php $title = get_the_title($post->ID) ?>
			<div class="list_img">
				<a href="<?php echo get_permalink($post->ID) ?>" target="_top">

					<?php $image_attributes =  wp_get_attachment_image_src(get_post_meta($post->ID, 'thumbnail', true), 'full') ?>
					<?php $thumbnail = $image_attributes ? $image_attributes[0] : ''; ?>
					<img src="<?php echo $thumbnail ?>" class="no-hover ImgRanking">

					<div class="list_name">
						<p><?php echo get_post_meta($post->ID, 'catch_copy', true) ?></p>
						<h3><?php echo $title ?></h3>
						<?php if(get_post_meta($post->ID,'ranking',true) == '1'): ?>
						<div class="icon"><img src="/img/villa/icon_point1.png" width="50" height="50" class="no-hover" alt="売れ筋No.1"></div>
						<?php elseif(get_post_meta($post->ID,'ranking',true) == '2'): ?>
						<div class="icon"><img src="/img/villa/icon_point2.png" width="50" height="50" class="no-hover" alt="売れ筋No.2"></div>
						<?php elseif(get_post_meta($post->ID,'ranking',true) == '3'): ?>
						<div class="icon"><img src="/img/villa/icon_point3.png" width="50" height="50" class="no-hover" alt="売れ筋No.3"></div>
						<?php endif ?>
					</div>
				</a>
			</div>
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<th>タイプ</th>
					<td><?php
						$tmp = array(
							'large_resort'    => '大型リゾート',
							'small_luxury'    => 'スモールラグジュアリー',
							'boutique_hotel'  => 'ブディックホテル',
							'villa'           => 'ヴィラ',
							'charter_villa'   => '貸切ヴィラ',
							'wellness_resort' => 'ウェルネスリゾート'
						);
						echo $tmp[get_post_meta($post->ID, 'hotel_type', true)] ?></td>
				</tr>
				<tr>
					<th>バリガールランク</th>
					<td>
						<?php $baligirl_rank = get_post_meta($post->ID,'baligirl_rank',true) ?>
						<?php if($baligirl_rank == '1'): ?>
						<img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
						<?php elseif($baligirl_rank == '2'): ?>
						<img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
						<?php elseif($baligirl_rank == '3'): ?>
						<img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
						<?php elseif($baligirl_rank == '4'): ?>
						<img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
						<?php elseif($baligirl_rank == '5'): ?>
						<img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
						<?php elseif($baligirl_rank == '2-3'): ?>
						<img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
						<?php elseif($baligirl_rank == '2-4'): ?>
						<img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
						<?php elseif($baligirl_rank == '2-5'): ?>
						<img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
						<?php elseif($baligirl_rank == '3-4'): ?>
						<img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
						<?php elseif($baligirl_rank == '3-5'): ?>
						<img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
						<?php elseif($baligirl_rank == '4-5'): ?>
						<img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
						<?php endif ?>
					</td>
				</tr>
			</table>
			<?php

			$icon = get_post_meta($post->ID,'icon',true);
			$arr_icon = array(
				'couple'     => array('01', '女子旅'),
				// 'alone'     => array('02', 'ひとり旅'),
				'family'    => array('02', 'カップル'),
				'girls'    => array('03', 'ファミリー'),
				// 'honeymoon' => array('05', 'グループ'),
				// 'group'     => array('06', 'ハネムーン'),
				// 'premium'   => array('07', 'プレミアム世代'),
			) ?>
			<ul class="icon_list">
				<?php
				if (is_array($icon) && in_array('couple', $icon) && in_array('family', $icon) && in_array('girls', $icon)) {
					if (in_array('couple', $icon))
						echo '<li><img src="/img/villa/list_osusume_icon01.png" width="46" height="46" alt="女子旅"></li>';
					if (in_array('family', $icon))
						echo '<li><img src="/img/villa/list_osusume_icon02.png" width="46" height="46" alt="カップル"></li>';
					if (in_array('girls', $icon))
						echo '<li><img src="/img/villa/list_osusume_icon03.png" width="46" height="46" alt="ファミリー"></li>';
				}else{
					echo '<li style="height:35px">&nbsp;</li>';
				}
				?>
			</ul>
		</div>
	<?php } ?>
<?php
}
?>

<style type="text/css">
	img.ImgDispSort{
		max-width: 240px;
		max-height: 160px;
	}
</style>
<?php
function plbali_show_post_disp_sort($posts, &$arr_post_id){
	foreach($posts as $key => $post){
		setup_postdata($post);
			if ($key < 6)
				continue;
			if($key === 10 || $key === 15){ ?>
			<div class="list mr0">
			<?php }else{ ?>
			<div class="list">
			<?php } ?>

				<?php $title = get_the_title($post->ID) ?>
				<div class="list_img">
					<a href="<?php echo get_permalink($post->ID) ?>" target="_top">

						<?php $image_attributes =  wp_get_attachment_image_src(get_post_meta($post->ID, 'thumbnail', true), 'full') ?>
						<?php $thumbnail = $image_attributes ? $image_attributes[0] : ''; ?>
						<?php //$thumbnail = get_post_meta($post->ID, 'thumbnail', true) ?>
						<img src="<?php echo $thumbnail ?>" class="no-hover ImgDispSort">

						<div class="list_name">
								<p><?php echo get_post_meta($post->ID, 'catch_copy', true) ?></p>
								<h3><?php echo $title ?></h3>
						</div>
					</a>
				</div>
				<table border="0" cellspacing="0" cellpadding="0">
					<tr>
						<th>タイプ</th>
						<td><?php
						$tmp = array(
							'large_resort'    => '大型リゾート',
							'small_luxury'    => 'スモールラグジュアリー',
							'boutique_hotel'  => 'ブディックホテル',
							'villa'           => 'ヴィラ',
							'charter_villa'   => '貸切ヴィラ',
							'wellness_resort' => 'ウェルネスリゾート'
						);
						echo $tmp[get_post_meta($post->ID, 'hotel_type', true)] ?></td>
					</tr>
					<tr>
						<th>バリガールランク</th>
						<td>
							<?php $baligirl_rank = get_post_meta($post->ID,'baligirl_rank',true) ?>
							<?php if($baligirl_rank == '1'): ?>
							<img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
							<?php elseif($baligirl_rank == '2'): ?>
							<img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
							<?php elseif($baligirl_rank == '3'): ?>
							<img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
							<?php elseif($baligirl_rank == '4'): ?>
							<img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
							<?php elseif($baligirl_rank == '5'): ?>
							<img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
							<?php elseif($baligirl_rank == '2-3'): ?>
							<img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
							<?php elseif($baligirl_rank == '2-4'): ?>
							<img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
							<?php elseif($baligirl_rank == '2-5'): ?>
							<img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
							<?php elseif($baligirl_rank == '3-4'): ?>
							<img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
							<?php elseif($baligirl_rank == '3-5'): ?>
							<img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
							<?php elseif($baligirl_rank == '4-5'): ?>
							<img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
							<?php endif ?>
						</td>
					</tr>
				</table>
			</div>
	<?php } ?>
<?php
	}
?>