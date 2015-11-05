<?php
/**
 * Template Name: Lembongan
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

<div id="lembongan">

<div id="h1_title"><h1>レンボンガン島地区　大物に会える確率も高い人気のダイビングスポット</h1></div>
<div id="detail">

<div id="detail1">
<div class="h2_title"><h2>レンボンガン島のこんなところ</h2></div>
<p>バリ島周辺でも特に海の透明度が高いことで知られる島、「レンボンガン」。<br>
島の周りの海では、豊かなサンゴ礁やたくさんの魚たちをみることができます。中でもダイバーに人気のスポットが、高い確率でマンボウが出現する「クリスタルベイ」や、ナポレオンやエイなど大物に出会える「ブルーコーナー」。レンボンガン島にはバリ島から多くの人々が訪れ、ダイビングやシュノーケリングを楽しんでいます。また、リゾートとして開発がされておらず、のどかな雰囲気のなか過ごすことができるのもレンボンガン島の魅力です。島には飛行場がないため、バリ島のサヌールからスピードボートを利用します。30分ほど船の旅を楽しめば、透き通る海に囲まれた島に到着。昔ながらのバリ島が垣間見える素朴な島で、ゆったりとした時間を感じることができるでしょう。しかし、島自体には旅行者が利用できる設備が少ないため、初めて訪れる方はレンボンガン島でのマリンアクティビティが付いた日帰りツアーに参加するのもおすすめです。<br>バリ旅行でもっと海を楽しみたい、喧騒から離れてのんびりと過ごしたい、と感じたら、レンボンガン島へショートトリップに出掛けてみては。</p>
</div>
<div id="detail2">
<div class="h2_title"><h2>レンボンガン島でおすすめの過ごし方</h2></div>
<div id="plan1">
<h3>プラン１　レンボンガン島でマリンアクティビティを満喫</h3>
<p><strong>ホテル：サヌール　プリサントリアン</strong><br>
サーファーやダイバーに人気のレンボンガン島。<br>サヌールからはスピードボートでわずか30分から40分でアクセス可能。バリでもっときれいな海を見たい！と思ったなら、レンボンガン島まで足を延ばしてみては。<br>
レンボンガン島には透明度が高く青い海が広がる。ここでは是非、マングローブ林とシュノーケリングの1日ツアーに参加しよう。まずは小舟に乗ってマングローブの林を探検。その後は、カラフルな魚や美しいサンゴ礁が生息する海をシュノーケリングする。
存分に遊んだら、ビーチクラブのプールでのんびりしたり、ビール片手にランチしたり、1DAYショートトリップを堪能したい。日焼け止めと水着をお忘れなく。<br>
レンボンガン島でよりゆったりと過ごしたいなら、島内のリゾートに滞在するのもお勧め。バリ島とはまた異なるのどかな雰囲気が漂うレンボンガン島では、不思議と懐かしさを感じるかもしれません。</p>
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
    <td><a href="http://www.plbali.com/optional/marineactivity08/">・レンボンガン島 DE マングローブ&amp;シュノーケリング</a></td>
  </tr>
  <tr>
    <td><a href="http://www.plbali.com/optional/marineactivity12/">・レンボンガン島 DE マングローブ&amp;シュノーケリング～パドルボートバージョン～</a></td>
  </tr>
  <tr>
    <td><a href="http://www.plbali.com/optional/marineactivity11/">・マリンウォーク at レンボンガン島</a></td>
  </tr>
  <tr>
    <td><a href="http://www.plbali.com/optional/marineactivity14/">・マンタの海でスノーケリング&amp;癒しの森でマングローブツアー</a></td>
  </tr>
  <tr>
    <td><a href="http://www.plbali.com/optional/diving06/">・レンボンガン島で体験ダイビング&amp;レンボンガン島で体験ダイビング</a></td>
  </tr>
</table>

</div>

</div>

<div id="list_box">

<div id="villa">
<div class="h3_title"><h3>ホテルで決める旅 ヴィラ・ホテル villa &amp; hotel</h3></div>
    <div class="box">
      <?php $category_slug = 'list-lembongan'; html_hotel_villa($category_slug); ?>
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
