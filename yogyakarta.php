<?php
/**
 * Template Name: Yogyakarta
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

<div id="yogyakarta">

<div id="h1_title"><h1>ジョグジャカルタ地区　インドネシア最大の仏教遺跡ボロブドゥール遺跡が眠る場所</h1></div>
<div id="detail">

<div id="detail1">
<div class="h2_title"><h2>ジョグジャカルタのこんなところ</h2></div>
<p>ジャカルタに次ぐインドネシア第2の都市、「ジョグジャカルタ」。<br>
賑やかで活気溢れる街から少し離れれば、ジャワ島の歴史や文化を感じられる遺産が数多く残っています。ジョグジャカルタ近郊の遺跡のなかでも特に有名なのが、インドネシア最大の仏教遺跡「ボロブドゥール」。1991年に世界遺産に登録されたボロブドゥール遺跡は200万個もの石を積んだ巨大な建造物で、密林に佇む神秘的な姿は人々を魅了してやみません。ジョグジャカルタエリアの世界遺産にはほかにも、「プランバナン遺跡群」や「ボコの丘」があります。古代インドの叙事詩「ラーマーヤナ」や「マハーバーラタ」の浮彫が施されたプランバナンの「シヴァ神殿」、8世紀頃ボコ王によって丘の上に建てられた王宮跡は必見。プランバナンとボコの丘は車で20分ほどの距離しか離れていないため、昼間プランバナンの遺跡をみた後にボコの丘でサンセットを望むルートがおすすめです。バリ島からジョグジャカルタへ行くには、デンパサール空港から1時間ほど飛行機に乗って移動します。<br>
バリ旅行で自然を満喫しながら、インドネシアが誇る歴史遺産にも足を延ばしてみてはいかがでしょうか。</p>
</div>
<div id="detail2">
<div class="h2_title"><h2>ジョグジャカルタでおすすめの過ごし方</h2></div>
<div id="plan1">
<h3>プラン１　世界遺産のボロブドゥールとプランバナン</h3>
<p><strong>ホテル：マノハラホテル</strong><br>
ボロブドゥール観光はバリ島から日帰りもいいけれど、せっかくなら1泊してサンライズトレッキングツアーに参加するのがお勧め。<br>
米CNNによる「死ぬまでに見たい27の絶景」でも、第1位にボロブドゥールのサンライズが選ばれている。ツアーではまだ暗いうちに遺跡公園内のマノハラホテルを出発。だんだん空が明るくなるにつれ霧がかかり、太陽の光によってできるストゥーパの幻想的なシルエットや赤く染まるボロブドゥールの姿は幻想的。遺跡群に関するガイドさんの丁寧な説明も、また面白い。<br><br>
また、ヒンドゥー教美術文化の象徴ともいわれる繊細で華麗なプランバナン寺院群や、寺院をバックに上演されるラーマーヤナの舞踊も見逃せない。<br>
インドネシアの京都ともいわれるジョグジャカルタの魅力をたっぷりと味わってみては。
<br>
</p>
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
    <td><a href="http://www.plbali.com/optional/otherislands01/">・ボロブドゥール遺跡 日帰りツアー</a></td>
  </tr>
</table>

</div>

</div>

<div id="list_box">

<div id="villa">
<div class="h3_title"><h3>ホテルで決める旅 ヴィラ・ホテル villa &amp; hotel</h3></div>
    <div class="box">
      <?php $category_slug = 'list-yogyakarta'; require_once 'hotel_villa.php'; ?>
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
