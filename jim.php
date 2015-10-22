<?php
/**
 * Template Name: Jim
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

<div id="jim">

<div id="h1_title"><h1>ジンバラン/ウルワツ地区　バリ島随一のサンセットに出会える、穏やかなリゾートエリア</h1></div>
<div id="detail">

<div id="detail1">
<div class="h2_title"><h2>ジンバラン/ウルワツのこんなところ</h2></div>
<p>ジンバランエリアは、ングラライ空港（デンパサール国際空港）から南に広がります。
西側には、正面にインド洋に沈むサンセットが眺められるロマンティックな「ジンバランビーチ」があり、ここには数多くのイカンバカール（シーフードBBQ）屋台が並んでいます。<br />
ジンバランといえば美しい夕陽を眺めながらシーフードを楽しむ、というスタイルが有名ですが、最近は高級リゾートエリアやスパも増えて"第2のヌサドゥア"と呼ばれることも。
クタ・レギャンに負けず劣らずお手頃な街スパも揃っているので色々試してみるのもいいですね。<br />
ジンバランの南側に広がるのがウルワツエリア。クタビーチほど有名ではありませんがプロサーファーも訪れるような有名サーフポイントが数多くあります。<br />
また、最南端にはケチャダンスとサンセットで有名なウルワツ寺院も。<br />
近年高級ホテルや隠れ家的なプライヴェート・ヴィラが増えてきたことから、大人のリゾートライフを楽しみたい方にも一押しです。</p>
</div>
<div id="detail2">
<div class="h2_title"><h2>ジンバラン/ウルワツでおすすめの過ごし方</h2></div>

<div id="plan1">
<h3>プラン１　ホテルの中で過ごすバリ</h3>
<p><strong>ホテル：アヤナリゾートホテル</strong><br />
憧れのアヤナリゾートの過ごし方。<br />		
お勧めはクラブルーム。宿泊者限定のラウンジでゆったりとした空間。<br />
なんと言ってもパノラマオーシャンビュー。<br />		
ティータイムやカクテルタイムもあるので、気が向けばドリンクを飲みながらのんびり。	
ホテルの敷地内にプールやレストランが何軒もあり、さらに、バリのオシャレなショップから		
取り寄せたセレクトショップも。<br />	
断然人気は、断崖絶壁に立つホテルだからこその、オーシャンビーチプールとロックバー。波の迫力で気分が晴れるかも。</p>
</div>

<div id="plan2">
<h3>プラン２　時間を忘れ過ごす旅</h3>
<p><strong>ホテル：ブルガリ　ホテルズ＆リゾーツ　バリ</strong><br>
誰もが知るヨーロッパのブランド　ブルガリが、リゾートホテルに。<br />
中心地から離れたリゾート。<br />
こちらでは、日々の生活から離れ、時間を忘れた時を過ごすホテル。<br />
広大なインド洋を目の前に。スタイリッシュなお部屋で優雅な時間を。<br />
少し足を延ばしてウルワツ寺院へケッチャックダンスを見に。<br />
最終日は、街中近くのホテルに泊まるのもよし。</p>
</div>

<div id="osusume">
<div class="h2_title2"><h2>おすすめオプショナルツアー</h2></div>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="http://www.plbali.com/optional/%E3%83%A1%E3%83%B3%E3%82%B0%E3%82%A4%E3%82%BF%E3%83%8A%E3%83%AD%E3%83%83%E3%83%88%E5%AF%BA%E9%99%A2/">・メングイ&タナロット寺院</a></td>
    <td><a href="http://www.plbali.com/optional/ubudkanko02-2/">・ウブド＆キンタマーニ高原</a></td>
  </tr>
  <tr>
    <td colspan="2"><a href="http://www.plbali.com/optional/finalday01/">・女性に人気のスタイリッシュヴィラ「ザ　アマラ」</a></td>
  </tr>
  <tr>
  <td colspan="3"><br>
  <img src="http://wp.tabikobo.com/wp-content/uploads/2013/08/jim_report.jpg" width="400" height="30"><p>
<a href="http://www.tabikobo.com/bali/report/spa/kububali/" target="blank">・クブバリ スパ（スパ）</a><br>
</p>
　</td></tr>  
</table>
</div>

</div>

<div id="list_box">

<div id="villa">
<div class="h3_title"><h3>ホテルで決める旅 ヴィラ・ホテル villa &amp; hotel</h3></div>

    <div class="box">
<?php $myposts = get_posts('category_name=villa-jimbaran-uluwatu-pickup&posts_per_page=999');/*VILLA記事ピックアップリスティング*/ ?>
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
<?php $myposts = get_posts('category_name=villa-jimbaran-uluwatu&posts_per_page=999');/*VILLA記事ピックアップ以外リスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <?php if( in_category('villa-jimbaran-uluwatu-pickup')): ?>
    <?php else : ?>
    <li><a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a></li>
    <?php endif; ?>
<?php endforeach; ?>
</ul>
</div>
    </div>
</div><!-- id=villa -->

<div id="spa">
<div class="h3_title"><h3>至福の癒し スパ SPA</h3></div>

<div class="box">
<?php $myposts = get_posts('category_name=spa-jimbaran-uluwatu-pickup&posts_per_page=999');/*SPA記事ピックアップリスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top"><?php echo post_custom('cityThumb'); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    </div>
<?php endforeach; ?>

<div class="list">
<ul>
<?php $myposts = get_posts('category_name=spa-jimbaran-uluwatu&posts_per_page=999');/*SPA記事ピックアップ以外リスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <?php if( in_category('spa-jimbaran-uluwatu-pickup')): ?>
    <?php else : ?>
    <li><a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a></li>
    <?php endif; ?>
<?php endforeach; ?>
</ul>
</div>
</div>
</div><!-- id=spa -->

</div>

</div><!-- id=detaile -->
</div>
<div id="detaile_f"></div>


</div><!-- #contents -->
<?php get_sidebar(); ?>
</div><!-- #container -->
<?php get_footer(); ?>
