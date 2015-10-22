<?php
/**
 * Template Name: Canggu
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div id="container">
<div id="contents">

<?php get_breadcrumbs(); ?>

<div id="canggu">

<div id="h1_title"><h1>チャングー地区　プライベートリゾートが続々登場。近年開発が著しい、注目のニュースポット。</h1></div>
<div id="detail">

<div id="detail1">
<div class="h2_title"><h2>チャングーはこんなところ</h2></div>
<p>クタ、スミニャックをさらに北へ、未だ田舎らしい光景が色濃く残る町チャングー。<br>
海辺に位置している事もあり、サーファーたちの隠れスポットである一方、近年開発が進み、観光客向けのヴィラやレストランが続々とオープンしているという、注目のスポットです。<br>
このチャングーエリアのメインビーチと言えば、「エコ・ビーチ」。サーファーが集まるスポットだけあり、近辺には、スミニャックで人気のインドネシア料理のお店やスパがあり、1日滞在しても飽きることは無いでしょう。さらに、エコ・ビーチというだけあり、町の至る所にはごみ箱やクリーンをイメージさせる標識がある等エコを掲げた町であることも分かります。<br>
ビーチでしっかり遊んだら、プライベート・リゾートへ移動。<br>
チャングーには、プライベートヴィラといわれるリゾートが点在しており、各グループでヴィラを一棟まるまる貸切るスタイルが人気となっています。いくつかの部屋を振り分け、メインダイニングでパーティやプールでのんびり寛げる、完全にプライベートな空間が人気です。<br>
家族や親しい友人との特別な旅行に、今注目のチャングーがお勧めです。</p>
</div>
<div id="detail2">
<div class="h2_title"><h2>チャングーでおすすめの過ごし方</h2></div>
<div id="plan1">
<h3>プラン１　グループみんなで楽しく！「貸しきりヴィラ」</h3>
<p><strong>ホテル：ザ・ジュノ・ヴィラ</strong><br>
一生に一度の卒業旅行。せっかくなら憧れの別荘ステイはいかが？<br>
プライベートプール付きの大豪邸も、グループで泊まればとっても安い！<br>
1日カーチャーターなら朝から観光地を巡ったり、パーティーに備えて買い出しをしたりと何かと便利。ばらまき用土産を気軽に買えるビンタン・スーパーマーケットに立ち寄るのもお勧め。夕方はタナロット寺院に出かけて夕陽をバックにみんなで記念撮影、なんてことも。<br>
ヴィラに帰ったら人目を気にせず朝までワイワイ騒いじゃいましょう。お酒が入ってプールで溺れないように気を付けて・・！</p>
</div>

<div id="plan2">
<h3>プラン２　大切な人と二人だけで「ラグジュアリーヴィラ」</h3>
<p><strong>ホテル：アメティス・ヴィラ</strong><br>
のどかな田園風景が残るチャングー地区。<br>日本人の大人気の高級ヴィラで2人だけの大切な時間を過ごしてみては。<br>
朝はゆっくり目覚めてから、24時間対応のバトラーに頼んで朝食を。食事を済ませたら歩いて5分のビーチまで散歩をして、お洒落なレストランやカフェを見つけて入ってみよう。午後は無料のアフタヌーンティーやサンセットカクテル、併設している「ルビー スパ」でのマッサージなど、ヴィラの敷地内だけでも十分楽しめる。<br>
アメティス・ヴィラにはスミニャックへの無料送迎もあり、アクティブなカップルにもお勧め。</p>
</div>

<!--<div id="osusume">
<div class="h2_title2"><h2>おすすめオプショナルツアー</h2></div>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="">・ツアー名が入ります</a></td>
    <td><a href="">・ツアー名が入ります</a></td>
  </tr>
  <tr>
    <td><a href="">・ツアー名が入ります</a></td>
    <td><a href="">・ツアー名が入ります</a></td>
  </tr>
</table>

</div>-->

</div>

<div id="list_box">

<div id="villa">
<div class="h3_title"><h3>ホテルで決める旅 ヴィラ・ホテル villa &amp; hotel</h3></div>

    <div class="box">
<?php $myposts = get_posts('category_name=villa-canggu-pickup&posts_per_page=999');/*VILLA記事ピックアップリスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top"><?php echo post_custom('cityThumb'); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    </div>
<?php endforeach; ?>

<div class="list">
<ul>
<?php $myposts = get_posts('category_name=villa-canggu&posts_per_page=999');/*VILLA記事ピックアップ以外リスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <?php if( in_category('villa-canggu-pickup')): ?>
    <?php else : ?>
    <li><a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a></li>
    <?php endif; ?>
<?php endforeach; ?>
</ul>
</div>
    </div>
</div><!-- id=villa -->

<?php /*?><div id="spa">
<div class="h3_title"><h3>至福の癒し スパ SPA</h3></div>

<div class="box">
<?php $myposts = get_posts('category_name=spa-ubud-pickup&posts_per_page=999'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top"><?php echo post_custom('cityThumb'); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    </div>
<?php endforeach; ?>

<div class="list">
<ul>
<?php $myposts = get_posts('category_name=spa-ubud&posts_per_page=999'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <?php if( in_category('spa-ubud-pickup')): ?>
    <?php else : ?>
    <li><a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a></li>
    <?php endif; ?>
<?php endforeach; ?>
</ul>
</div>
</div>
</div><?php */?><!-- id=spa -->

</div>

</div><!-- id=detaile -->
</div>
<div id="detaile_f"></div>


</div><!-- #contents -->
<?php get_sidebar(); ?>
</div><!-- #container -->
<?php get_footer(); ?>
