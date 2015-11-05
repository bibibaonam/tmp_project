<?php
/**
 * Template Name: Lombok
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

<div id="lombok">

<div id="h1_title"><h1>ロンボク島地区　静寂な美しいビーチには鮮やかなサンゴが息づく</h1></div>
<div id="detail">

<div id="detail1">
<div class="h2_title"><h2>ロンボク島はこんなところ</h2></div>
<p>澄んだ海と深い緑、手つかずの自然を感じる楽園「ロンボク島」。<br>
この地には古くからササックと呼ばれる民族が住んでおり、島は素朴でゆったりとした時間が流れます。まだまだ旅行者が多くはないロンボク島は、とてものどかな雰囲気。静寂な美しいビーチに面したエリアではリゾートホテルもあるので、贅沢に休日をお過ごしいただけるでしょう。また、ロンボク島はダイビングやシュノーケルのスポットでもあります。島の中でも特に有名なスポットが、島北西部に位置する小さな3つの離島「ギリ・ドゥラワガン」、「ギリ・メノ」、「ギリ・アイル」。ロンボク島の海はバリ島よりもはるかに透明度が高く、サンゴ礁の周りをゆっくり泳ぐカメや色鮮やかな熱帯魚たちをはっきりと見ることができます。ロンボク島へのアクセスは、バリ島のデンパサール空港から飛行機で。約30分のフライトで到着するので日帰りツアーも可能ですが、ロンボク島のリゾートに滞在してのんびりと海を見ながら過ごすのもいいでしょう。美しい海だけでなく、島の人々の温かい笑顔が日常の疲れも癒してくれるはず。<br>
バリ旅行ではぜひ、ロンボク島に訪れてみてください。</p>
</div>
<div id="detail2">
<div class="h2_title"><h2>ロンボク島でおすすめの過ごし方</h2></div>
<div id="plan1">
<h3>プラン１　スンギギエリアの寺院巡り</h3>
<!-- <p><strong>ホテル：ダミーテキストになります。</strong><br> -->
島の西部スンギギエリアにはいくつかのリゾートホテルがあるので、そこを観光の足掛かりにしよう。<br>
メル寺院やバトゥボロン寺院など歴史ある寺院・史跡や先住民のササック族が住む素朴なサデ村を巡ったり、中心にそびえるリンジャニ山、またロンボク島の北部に浮かぶ小島「ギリ3島」に訪れたり、ロンボク島の自然の景観をゆっくり楽しんでみては。</p>
</div>

<div id="plan2">
<h3>プラン２　サーファーに人気のスポット</h3>
<!-- <p><strong>ホテル：ダミーテキストになります。</strong><br> -->
バリ島南部にはいい波が立つサーフポイントが点在するが、ロンボク島も人気のサーフポイントの1つとなっている。素朴な雰囲気が漂い、バリ島に比べ混雑していないこのエリアは世界中のサーファーを魅了している。<br>
サーファー向けにはロスメンと呼ばれる安宿もある。ノボテル・ロンボクなどリゾートホテルも建ちはじめ、さらに今後の開発が楽しみなエリアだ。</p>
</div>

<div id="osusume">
<div class="h2_title2"><h2>おすすめオプショナルツアー</h2></div>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="http://www.plbali.com/optional/otherislands02/">・ロンボク島 日帰りツアー （昼食付）</a></td>
  </tr>
</table>

</div>

</div>

<div id="list_box">

<div id="villa">
<div class="h3_title"><h3>ホテルで決める旅 ヴィラ・ホテル villa &amp; hotel</h3></div>
    <div class="box">
      <?php $category_slug = 'list-lombok'; html_hotel_villa($category_slug); ?>
      <div style="clear:both"></div>
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
