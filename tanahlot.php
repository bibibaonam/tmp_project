<?php
/**
 * Template Name: Tanahlot
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

<div id="tanahlot">

<div id="h1_title"><h1>タナロット地区　赤く染まる夕日が美しい、タナロット寺院</h1></div>
<div id="detail">

<div id="detail1">
<div class="h2_title"><h2>タナロットのこんなところ</h2></div>
<p>バリ中西部のエリア「タバナン」は、バリの6大寺院のひとつであるタナロット寺院があることで知られています。<br>
タナロット寺院は、海を目の前にした大きな岩山の上に建てられているのが特徴です。そのため、干潮時に陸続きになっている寺院は、満潮になると海に浮かぶ孤島のようになり、神秘的な情景を見せてくれます。<br>
特に夕暮れ時のタナロット寺院は、ひときわ幻想的な風景が広がる時間帯。寺院の後ろに夕日が沈み、赤く染まった空を背景に寺院のシルエットが浮かび上がります。<br>
また、寺院へと続く参道に並ぶ多数の土産屋を見てまわるだけでも楽しいはず。黒蜜入りのお餅「クレポン」などバリ名物のおやつも売っているので、ローカルフードの食べ歩きをしてみるのもいいでしょう。<br>
加えて、タバナン近郊にはバリ島で最も美しい寺院とも称される世界遺産「タマンアユン寺院」があります。寺院中心部はヒンドゥー教徒のみ入ることができる聖域になっており、遊歩道から見る本殿や塔、美しく整えられた庭園は一見の価値あり。<br>
タバナン旅行の際には、タナロット寺院とタマンアユン寺院の両方に訪れるツアーに参加するのもおすすめです。
</p>
</div>
<div id="detail2">
<div class="h2_title"><h2>タナロットでおすすめの過ごし方</h2></div>
<div id="plan1">
<h3>ニルワナリゾートでゴルフ三昧</h3>
<p><strong>ホテル：パンパシフィック　ニルワナリゾート</strong><br>
タナロットといえば寺院とサンセットが有名だが、ゴルフ好きならプロゴルファーのグレッグノーマンがデザインした「ニルワナバリ ゴルフリゾート」も見逃せない。<br>
スをラフやハザードとして取り入れたり、海越えがあったりとユニークなコースがそろっている。夕陽が美しいタナロット寺院が見えるのも、ニルワナゴルフクラブならでは。隣接したニルワナリゾートと、バリ南部のリゾート両方に泊まる分泊プランもお勧め。</p>
</div>

<!-- <div id="plan2">
<h3>プラン２　ダミーテキストになります。</h3>
<p><strong>ホテル：ダミーテキストになります。</strong><br>
ダミーテキストになります。<br>
ダミーテキストになります。ダミーテキストになります。<br>
ダミーテキストになります。ダミーテキストになります。ダミーテキストになります。<br>
ダミーテキストになります。ダミーテキストになります。<br>
ダミーテキストになります。ダミーテキストになります。ダミーテキストになります。<br>
ダミーテキストになります。ダミーテキストになります。ダミーテキストになります。<br>
ダミーテキストになります。</p>
</div>
-->

<div id="osusume">
<div class="h2_title2"><h2>おすすめオプショナルツアー</h2></div>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="http://www.plbali.com/optional/balihalfday03/">・メングイ&amp;タナロット寺院</a></td>
  </tr>
  <tr>
    <td><a href="http://www.plbali.com/optional/balihalfday01/">・タナロット&amp;シーフードＢＢＱ</a></td>
  </tr>
  <tr>
    <td><a href="http://www.plbali.com/optional/balihalfday06/">・世界遺産半日コース（タナロット寺院散策付き）</a></td>
  </tr>
  <tr>
    <td><a href="http://www.plbali.com/optional/balikanko_05/">・世界遺産1日コース（バリ島北部ブドゥグル観光付き）</a></td>
  </tr>
  <tr>
    <td><a href="http://www.plbali.com/optional/golf02/">・ニルワナバリ　ゴルフクラブ</a></td>
  </tr>
  <tr>
    <td><a href="http://www.plbali.com/optional/balikanko01/">・朝から夜までバリ島満喫コース</a></td>
  </tr>

</table>

</div>

</div>

<div id="list_box">

<div id="villa">
<div class="h3_title"><h3>ホテルで決める旅 ヴィラ・ホテル villa &amp; hotel</h3></div>
    <div class="box">
      <?php $category_slug = 'list-tanahlot'; html_hotel_villa($category_slug); ?>
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
