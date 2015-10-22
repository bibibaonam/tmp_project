<?php
/**
 * Template Name: Semi
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

<div id="semi">

<div id="h1_title"><h1>スミニャック/クロボカン地区　お洒落なヴィラが続々登場、今最も注目すべきエリア</h1></div>
<div id="detail">

<div id="detail1">
<div class="h2_title"><h2>スミニャック/クロボカンのこんなところ</h2></div>
<p>スミニャック・クロボカンエリアは、クタ・レギャンエリアの北に広がるエリア。おしゃれなレストランやブティックが並び、特に夜になるとのんびりとショッピングを楽しむ現地在住　欧米人で賑わってます。まるで欧米のリゾート地。また、スミニャックエリアにはバリらしい田園風景も残っていて、美しい田園を眺め永ながら食事をとれるカフェやレストランも人気です。
ゆったりと滞在できる高級ホテルやヴィラが多く、一日中ホテルにいても飽きないように、スパや各種アクティビティも充実しています。プライベートプールがあるようなヴィラも多いので、非日常のホテルライフを楽しむのもおススメ。
クタ・レギャン等のバリ島中心部から程近く、でも街の喧騒からは離れてのんびり過ごしたい…そんな大人の滞在にぴったりのエリアです。</p>
</div>
<div id="detail2">
<div class="h2_title"><h2>スミニャック/クロボカンでおすすめの過ごし方</h2></div>

<div id="plan1">
<h3>プラン１　ここはバリ？インターナショナル料理を楽しむ</h3>
<p><strong>ホテル：フェイブ</strong><br>
ホテルは綺麗で価格重視　アストングループのかわいいフェイブホテル！<br />
スミナックにはインターナショナルな料理が沢山。ドイツワルン・ワルンイタリアン料理をカジュアルに食べるワルン。<br />
本格的にシェフが挨拶にくる、メティス（フランス）・トラットリア（イタリアン）・チューリップ（トルコ）料理と、グルメ三昧。<br />
最終日には、やっぱり、綺麗になって帰りたい女子にお勧め。<br />
ホテルを12時チェックアウトして、向かうは、アヤナリゾート！<br />
穴場のランチ　スパカフェで、野菜ジュースとビールラップで腹ごしらえ、<br />
そして、インド洋からくみ上げたアクアトニックプールへ。<br />
ただのプールではありません、ここで、バリで食べた分運動し、その後は、<br />
スパでまったり。気持ちよく帰国の地へ。</p>
</div>

<div id="plan2">
<h3>プラン２　バリといえばヴィラ（カップルにお勧め）</h3>
<p><strong>ホテル：ディシニヴィラ</strong><br>
憧れのプライベートプール＋天蓋付ヴィラ。<br />
お部屋での朝食。前日に注文しておけば、朝、バドラーさんがお部屋に持ってきてくれるので、ノーメイクでも、ゆっくり食べても問題なし。
ヴィラでのんびり過ごしたら、バリ観光名所のタナロット寺院へ。<br />
知る人ぞ知る、タナロット寺院でみるケッチャックダンス。<br />
ヴィラに戻ったら、プールに浮輪を浮かべて星空を見てみては。</p>
</div>

<div id="osusume">
<div class="h2_title2"><h2>おすすめオプショナルツアー</h2></div>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="http://www.plbali.com/optional/balihalfday01/">・タナロット＆シーフードＢＢＱ</a></td>
    <td><a href="http://www.plbali.com/optional/finalday02/">・テタスパ　バイ　ザ　シーの帰国日プラン</a></td>
  </tr>
  <tr>
    <td colspan="2"><a href="http://www.plbali.com/optional/ubudkanko02/">・テガララン＆芸能鑑賞（夕食付）</a></td>
  </tr>
  <tr>
  <td colspan="3"><br>
  <img src="http://wp.tabikobo.com/wp-content/uploads/2013/08/semi_report.jpg" width="450" height="30">
<p>
<a href="http://www.tabikobo.com/bali/report/hotel/samaya/" target="blank">・ザ サマヤ バリ（ホテル）</a><br>
<a href="http://www.tabikobo.com/bali/report/spa/disini/" target="blank">・ディシニ ラグジュアリー スパ ヴィラス（スパ）</a><br>
<a href="http://www.tabikobo.com/bali/report/restaurant/kudeta/" target="blank">・クーデター（レストラン）</a><br>
<a href="http://www.tabikobo.com/bali/report/restaurant/grocergrind/" target="blank">・グローシャー＆グラインド（レストラン）</a><br>
<a href="http://www.tabikobo.com/bali/report/spot/gula/" target="blank">・グラ（雑貨屋）</a>
</p>
　</td></tr>  
</table>
</div>

</div>

<div id="list_box">

<div id="villa">
<div class="h3_title"><h3>ホテルで決める旅 ヴィラ・ホテル villa &amp; hotel</h3></div>

    <div class="box">
<?php $myposts = get_posts('category_name=villa-seminyak-kerobokan-pickup&posts_per_page=999');/*VILLA記事ピックアップリスティング*/ ?>
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
<?php $myposts = get_posts('category_name=villa-seminyak-kerobokan&posts_per_page=999');/*VILLA記事ピックアップ以外リスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <?php if( in_category('villa-seminyak-kerobokan-pickup')): ?>
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
<?php $myposts = get_posts('category_name=spa-seminyak-kerobokan-pickup&posts_per_page=999');/*SPA記事ピックアップリスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top"><?php echo post_custom('cityThumb'); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    </div>
<?php endforeach; ?>

<div class="list">
<ul>
<?php $myposts = get_posts('category_name=spa-seminyak-kerobokan&posts_per_page=999');/*SPA記事ピックアップ以外リスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <?php if( in_category('spa-seminyak-kerobokan-pickup')): ?>
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
