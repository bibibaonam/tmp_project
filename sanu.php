<?php
/**
 * Template Name: Sanu
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

<div id="sanu">

<div id="h1_title"><h1>サヌール地区　ローカルタウンとビーチが調和した、のんびり雰囲気の穴場エリア</h1></div>
<div id="detail">

<div id="detail1">
<div class="h2_title"><h2>サヌールのこんなところ</h2></div>
<p>サヌールエリアは、バリ島で一番最初に出来たリゾートホテル「インナ・グランド・バリビーチホテル」を中心にして広がる海沿いのエリアです。<br />
メイン通りの「タンブリンガン」沿いにはお手頃価格のレストランやスパが並びますが、クタのように大型のショッピングモールやクラブがないのでどちらかというと静かな環境を好む大人向きの街といえます。<br />
女性の独り歩きも比較的安心できる治安です。<br />
ヌサドゥアなどにある街スパとは種類は異なりますが、かなりお手頃な街マッサージ店も多く、観光やビーチで遊び疲れた時の強い味方。<br />
ビーチ沿いには遊歩道も整備されていて、散歩やランニング、日光浴など思い思いのスタイルで過ごす人が多数。海水浴もOKのビーチなので、もちろんマリンスポーツ等も楽しめます。<br />
ローカルな雰囲気が漂う中に穴場のホテルやヴィラも点在しているので、のんびり自分のペースでアジアンビーチを楽しみたい方にはおススメのエリアです。</p>
</div>
<div id="detail2">
<div class="h2_title"><h2>サヌールでおすすめの過ごし方</h2></div>
<div id="plan1">
<h3>プラン１　サーフトリップ（男旅＆カップル）　＊雨季　10-3月</h3>
<p><strong>ホテル：プリサントリアン</strong><br />
 10-3月の雨季になると、サヌール側がサーフベストシーズンに！<br />
サヌールシークレットなどビーチブレイクでならした後は、イイ波をもとめ、<br />
ジュゴグに乗って、とっておきのポイント"ハイアットリーフへ。<br />
日本ではめったにお目にかかれないパーフェクトなリーフブレイクで、毎日波に乗ってサーフィン三昧！！！サヌールのローカル「バリ最高」DVDで有名なKINAさんの最強ガイド軍団に頼めば、波に乗り放題で大満足まちがいなし！<br />
サヌールには隠れた美味しいワルンがたくさんあるので、ローカル
ガイドに連れってもらい、ナシチャンプルなどを味わい尽くす。<br />
夜は気軽に入れるミュージックバーなどで毎日楽しんじゃおう！</p>
</div>

<div id="plan2">
<h3>プラン２　毎日ジャランジャラン　まったり</h3>
<p><strong>ホテル：バリハイアット</strong><br>
初めての方もリピーターも多いバリハイアット。<br />
５ツ星高級ホテルでありながら、お手頃価格で穴場的存在！<br />
ホテル自慢のトロピカルなガーデンツアーに参加した後は、ビーチで泳いでのんびりお昼寝♪
ホテル内のスパはさすが腕も確かでとろけてしまう気持ちよさ。<br />
アビアンなど街スパもたくさんあるから、毎日がスパ三昧！スーパー　ハーディーズも近いので、おみやげ選びにも困りません。<br />
ウブドへは約１時間、クタ・レギャンへも約３０分とどこに行くにも便利でカーチャーターで観光やショッピングに出かけてもよし！<br />
サヌールの魅力にはまって、リピーターの仲間入りしよう！</p>
</div>

<div id="osusume">
<div class="h2_title2"><h2>おすすめオプショナルツアー</h2></div>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="http://www.plbali.com/optional/marineactivity01/">・シーウォーカー</a></td>
    <td><a href="http://www.plbali.com/optional/cruise01/">・バリハイクルーズ</a></td>
  </tr>
  <tr>
    <td colspan="2"><a href="http://www.plbali.com/optional/%e3%82%ab%e3%83%a6%e3%83%9e%e3%83%8b%e3%82%b9%e3%82%b0%e3%83%ab%e3%83%bc%e3%83%97%e3%81%ae%e3%82%ac%e3%83%b3%e3%82%b5%ef%bc%88%e3%82%b5%e3%83%8c%e3%83%bc%e3%83%ab%ef%bc%89%e3%81%a7/">・カユマニスグループのガンサ（サヌール）で</a></td>
  </tr>
</table>
</div>

</div>

<div id="list_box">

<div id="villa">
<div class="h3_title"><h3>ホテルで決める旅 ヴィラ・ホテル villa &amp; hotel</h3></div>
    <div class="box">
      <?php $category_slug = 'list-sanur'; html_hotel_villa($category_slug); ?>
      <div style="clear:both"></div>
    </div>
</div><!-- id=villa -->

<div id="spa">
<div class="h3_title"><h3>至福の癒し スパ SPA</h3></div>

<div class="box">
<?php $myposts = get_posts('category_name=spa-sanur-pickup&posts_per_page=999');/*SPA記事ピックアップリスティング*/ ?>
<?php foreach($myposts as $post): ?>
    <?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top"><?php echo post_custom('cityThumb'); ?></a>
    <a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    </div>
<?php endforeach; ?>

<div class="list">
<ul>
<?php $myposts = get_posts('category_name=spa-sanur&posts_per_page=999');/*SPA記事ピックアップ以外リスティング*/ ?>
<?php foreach($myposts as $post): ?>
    <?php setup_postdata($post); ?>
    <?php if( in_category('spa-sanur-pickup')): ?>
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
