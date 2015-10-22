<?php
/**
 * Template Name: Menjangan
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

<div id="menjangan">

<div id="h1_title"><h1>ムンジャンガン地区　野生動物の聖地 自然豊かな南の楽園</h1></div>
<div id="detail">

<div id="detail1">
<div class="h2_title"><h2>ムンジャンガンのこんなところ</h2></div>
<p>バリ島の繁華街から離れた、自然豊かな静かな離島「ムンジャンガン」。多くの野生動物が暮らす熱帯雨林、生い茂るマングローブ、澄み切った透明の海。ムンジャンガン島は、自然と一体になってのんびり過ごすことができる南の楽園です。島はバリ西部国立公園の一部になっており、大自然のなかでカヌーやシュノーケル、バードウォッチングなど多様なアクティビティを体験できます。また、ダイビングスポットも豊富にあり、大半は流れが穏やかなため、初心者の方でも安心してダイビングをお楽しみいただけるでしょう。のんびりとドリフトダイブをしながら、タツノオトシゴやアジの群れなど、ムンジャンガンの透き通った海に息づく多彩な生物たちと存分にふれあうことができます。
そして、夜になれば空には無数の星々が輝き始めます。賑やかな街から遠く離れた静寂な大自然のなか、満点の星空を見ながら寛ぐことができるのはムンジャンガンのリゾートに滞在するゲストのみの特典です。自然のなかで只々ゆったりと流れる時に身を任せる癒しの島、ムンジャンガン。遠いからこそ、より贅沢な時間を感じられる特別な旅になることでしょう。</p>
</div>
<div id="detail2">
<div class="h2_title"><h2>ムンジャンガンでおすすめの過ごし方</h2></div>
<div id="plan1">
<h3>国立公園内にあるホテルでネイチャー体験</h3>
<p><strong>ホテル：ザ・ムンジャンガン</strong><br>
自然派のバリ島リピーターにお勧めしたいのが、ムンジャンガン。<br>
バリ島南部からは約4時間かかるが、途中「プラタン湖」観光などしながらドライブしていくのもお勧め。ムンジャンガンの国立公園には熱帯雨林が広がり、シカやサルをはじめ、バリ島だけに生息するカンモリシロムクドリなど珍しい動物が住んでいる。野生動物の宝庫を探検すれば、今までにないバリを存分に体感できるだろう。
<br><br>
この国立公園内にあるホテル「ザ・ムンジャンガン」は、南部で人気の「バレ」や「アマラ」といったお洒落なリゾートと同じ系列でホテルデザインはハイセンス。食事は種類が豊富で美味しく、中でもホテルのタワーに上って楽しむバリスタイルのお食事は雰囲気があって面白い。<br><br>
ガイドさんと一緒に早朝バードウォッチングをしたり、透明度が高い海へシュノーケリングをしに出かけたり、ほかにも乗馬やトレッキングなど様々なアクティビティが用意されている。<br>
ホテルにはもちろんスパもあるので、風が心地よい開放的なスペースでリラックスしてみては。<br>
夜は温水ジャグジープールで、満点の星空を眺めながら語り合おう。カップル、友達、またはファミリーでも、一生忘れられない思い出づくりができることは間違いない。
</p>
</div>

<!-- 
<div id="plan2">
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

<!-- 
<div id="osusume">
<div class="h2_title2"><h2>おすすめオプショナルツアー</h2></div>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="http://www.plbali.com/optional/marineactivity01/">・シュノーケリング</a></td>
    <td><a href="http://www.plbali.com/optional/diving02/">・体験ダイビング</a></td>
  </tr>
  <tr>
    <td colspan="2"><a href="http://www.plbali.com/optional/diving01/">・ファンダイビング</a></td>
  </tr>
</table>

</div>
-->

</div>


<div id="list_box">

<div id="villa">
<div class="h3_title"><h3>ホテルで決める旅 ヴィラ・ホテル villa &amp; hotel</h3></div>

    <div class="box">
<?php $myposts = get_posts('category_name=villa-menjangan-pickup&posts_per_page=999');/*VILLA記事ピックアップリスティング*/ ?>
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
<?php $myposts = get_posts('category_name=villa-menjangan&posts_per_page=999');/*VILLA記事ピックアップ以外リスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <?php if( in_category('villa-menjangan-pickup')): ?>
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
