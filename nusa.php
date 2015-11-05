<?php
/**
 * Template Name: Nusa
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

<div id="nusa">

<div id="h1_title"><h1>ヌサドゥア地区　世界有数の一流ホテルが立ち並ぶ、高級アジアン・リゾートエリア</h1></div>
<div id="detail">

<div id="detail1">
<div class="h2_title"><h2>ヌサドゥアのこんなところ</h2></div>
<p>ヌサドゥア・エリアは、インドネシアの政府発で開発された高級リゾートエリア。<br />
エリア内に立ち入るにはセキュリティゲートを通らなくてはならず、そのため屋台や物売りはゼロ。<br />
世界有数の高級ホテルにステイし、白砂のプライベートビーチを楽しむ…そんな贅沢なバリ島ステイが叶うのもヌサドゥアならでは。<br />
非日常のホテル滞在を楽しんだ後は、セキュリティエリア外の街スパに繰り出しても。エリア内の公式スパよりずっと価格設定はお手頃ですが、ホテル滞在のお客様向のほど良い高級感は日本人にも人気です。<br />
また、エリア内ホテルのプライベートビーチの他にも、「バリコレクション」というショッピングモールの裏に唯一自由な立ち入りがOKのビーチエリアがあります。<br />
若干の物売りはいますが、大変静かなビーチで散歩や日光浴に最適。<br />
ローカルバリも良いけど、一度は究極のアジアン・リゾートライフを味わってみたい。そんな方は、是非一度ヌサドゥアエリアへ。</p>
</div>
<div id="detail2">
<div class="h2_title"><h2>ヌサドゥアでおすすめの過ごし方</h2></div>

<div id="plan1">
<h3>プラン１　オンザビーチをお得に泊まろう！</h3>
<p><strong>ホテル：カインドヴィラビンタンリゾート</strong><br />
アジアリゾート　バリ。泊まるならオンザビーチ。<br />
しかし、なるべくお得に泊まりたい！<br />
そんな願いが叶うのがバリ。バリスタイルでかわいいホテル。<br />
近くのショッピングモール　バリコレクション。買い物魂に火がついたら、<br />
シャトルバスを利用して、クタエリアのハイパーマート。お得な夕食ならクタエリアですまし、フリーシャトルバスでヌサドゥアエリアへ。１日はスミニャックのオシャレエリアのレストラン　ビクにてアフタヌーンティー（約700円） <br>
海風にあたりながらのんびり過ごすしお得気分。</p>
</div>

<div id="plan2">
<h3>プラン２　大人のリゾートがNEW　OPEN</h3>
<p><strong>ホテル：ザ　バレ</strong><br>
シンプル・スタイリッシュ　大人のリゾート　ザ　バレ。<br />
暮らす様に過ごすそんな過ごし方ができるヌサドゥアエリア。<br />
昼は、バレ専属ドライバーとビーチクラブへ。<br />
海風を浴びながらパラソルの下でのんびり。<br />
ホテルに戻り食事をとるなら、車で５分のバリコレクションへ。<br />
専属ドライバーがあなたの旅を快適に。
４泊すると、お部屋でキャンドルディナーサービス。少し緊張している二人に笑顔で対応してくれるスタッフが心を和ませてくれる。
なんといっても旅の楽しみはブレックファースト。お金を出してでも買えない
宿泊者だけの特典。人気のフェイシスレストランでアラカルトメニュー。<br />
焼き立てのパンやパンケーキ。卵料理も充実。<br />
１年に一度の楽しみにしてみては。</p>
</div>

<div id="osusume">
<div class="h2_title2"><h2>おすすめオプショナルツアー</h2></div>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="http://www.plbali.com/optional/osusume02/">・マリンスポーツよくばりパッケージ<br />（昼食付）</a></td>
    <td><a href="http://www.plbali.com/optional/mealmain01/">・グランドハイアットの<br />❝パサールセンゴル❞ディナー</a></td>
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
      <?php $category_slug = 'list-nusa'; require_once 'hotel_villa.php'; ?>
      <div style="clear:both"></div>
    </div>
</div><!-- id=villa -->

<div id="spa">
<div class="h3_title"><h3>至福の癒し スパ SPA</h3></div>

<div class="box">
<?php $myposts = get_posts('category_name=spa-nusadua-pickup&posts_per_page=999');/*SPA記事ピックアップリスティング*/ ?>
<?php foreach($myposts as $post): ?>
    <?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top"><?php echo post_custom('cityThumb'); ?></a>
    <a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    </div>
<?php endforeach; ?>

<div class="list">
<ul>
<?php $myposts = get_posts('category_name=spa-nusadua&posts_per_page=999');/*SPA記事ピックアップ以外リスティング*/ ?>
<?php foreach($myposts as $post): ?>
    <?php setup_postdata($post); ?>
    <?php if( in_category('spa-nusadua-pickup')): ?>
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
