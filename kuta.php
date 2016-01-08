<?php
/**
 * Template Name: Kuta
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

<div id="kuta">

<div id="h1_title"><h1>クタ/レギャン地区　昼夜問わず賑わう、言わずと知れたバリ島のメインエリア</h1></div>
<div id="detail">

<div id="detail1">
<div class="h2_title"><h2>クタ/レギャンのこんなところ</h2></div>
<p>クタ・レギャンの街はバリ島一の繁華街エリアです。お手頃価格のホテル、ショッピングモールがひしめきあい、まさしくバリ島観光の中心地といえます。<br />
クタのメインストリート「ジャラン・レギャン」には小さなブティックから有名サーフブランドショップまで並び、ちょっと足を伸ばせば大型ショッピングモールやDFSギャラリアなどの免税店も揃うまさにお買い物天国。<br />
高級インドネシア料理からB級街グルメまで食も充実しています。<br />
最近の一押しは、フットリフレクソロジーや指圧など、お手軽に体験できる街スパ。観光やショッピングの疲れをリフレッシュするにはもってこいです。<br />
また、エリアの西に広がるパンタイ・クタ（クタビーチ）は世界有数のサーフポイントで、ここの波を求めて訪れる旅行者、バックパッカーも少なくありません。<br />
上級サーファーはもちろん、比較的乗りやすい波が多くビギナーにも人気があります。</p>
</div>
<div id="detail2">
<div class="h2_title"><h2>クタ/レギャンでおすすめの過ごし方</h2></div>

<div id="plan1">
<h3>プラン１　サーフトリップ（男旅＆カップル）　＊4-9月</h3>
<p><strong>ホテル：カルティカプラザ</strong><br />
  バリ＝サーフィン＋ビンタン。4-9月の乾季には、クタエリアでサーフィンを。<br />
  クタビーチでローカルチビッコサーファーと楽しめ、せっかくバリに<br />
  来たからにはリーフにトライ！ホテル前からジュゴクに乗ってポイントへ。<br />
  海から帰ったらプールへダイブ。そこで夕陽を見て、充実気分。<br />
  夜は、ポピーズ通りのワルンインドネシアでナシチャンプルとビンタンビールを。<br />
  バリ価格のリフレクソロジーはCOZYで、疲れを癒し、また、明日も楽しもう。</p>
</div>

<div id="plan2">
<h3>プラン２　初めてのバリ！オプショナル三昧！</h3>
<p><strong>ホテル：ラーマヤナホテル</strong><br>
バリ日本語ガイドさんの笑顔とホスピタリティーに包まれて、朝から夜までバリ島満喫コースへ参加。<br />
専用車にてキンタマーニ高原・寺院そしてディナー付。<br />
2日目の朝は、よくばりマリンパッケージ（パラセーリング・ジェットスキー・バナナボード・シュノーケリング）ランチがついて55ﾄﾞﾙ。<br />
身体を動かした後は、夕陽を見ながらスパができるテタスパへ。<br />
おみあげは、近くのマタハリスーパーで大人買い。<br />
心置きなく日本へ帰れるプラン。</p>
</div>

<div id="osusume">
<div class="h2_title2"><h2>おすすめオプショナルツアー</h2></div>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td><a href="http://www.plbali.com/optional/balikanko01/">・朝から夜までバリ島満喫コース</a></td>
  <td><a href="http://www.plbali.com/optional/balihalfday02/">・★バリフルコース★<br/ >　ウルワツでケチャック＆ディナー＆スパ</a></td>
  </tr>
  <tr>
  <td colspan="2"><a href="http://www.plbali.com/optional/%E3%82%B9%E3%83%9F%E3%83%8B%E3%83%A3%E3%83%83%E3%82%AF%E3%81%AE%E4%BA%BA%E6%B0%97%E3%83%B4%E3%82%A3%E3%83%A9%E3%80%8C%E3%83%B4%E3%82%A3%E3%83%A9%E3%80%80%E3%82%A2%E3%82%A4%E3%83%AB%E3%80%8D%E3%81%AE/">・スミニャックの人気ヴィラ「ヴィラ　アイル」の帰国日プラン</a></td>
  </tr>
  <tr>
  <td colspan="3"><br>
  <img src="http://wp.tabikobo.com/wp-content/uploads/2013/08/kuta_report.jpg" width="330" height="30">
<p>
<a href="http://www.tabikobo.com/bali/report/spa/thetaspa/" target="blank">・テタ スパ バイ ザ シー（スパ）</a><br>
</p>
　</td></tr>
</table>
</div>

</div>

<div id="list_box">

<div id="villa">
<div class="h3_title"><h3>ホテルで決める旅 ヴィラ・ホテル villa &amp; hotel</h3></div>
  <div class="box">
    <?php $category_slug = 'list-kuta'; html_hotel_villa($category_slug); ?>
    <div style="clear:both"></div>
  </div>
</div><!-- id=villa -->

<div id="spa">
<div class="h3_title"><h3>至福の癒し スパ SPA</h3></div>

<div class="box">
<?php $myposts = get_posts('category_name=spa-kuta-legian-pickup&posts_per_page=999');/*SPA記事ピックアップリスティング*/ ?>
<?php foreach($myposts as $post): ?>
  <?php setup_postdata($post); ?>
  <div class="left">
  <a href="<?php the_permalink(); ?>" target="_top"><?php echo post_custom('cityThumb'); ?></a>
  <a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
  </div>
<?php endforeach; ?>

<div class="list">
<ul>
<?php $myposts = get_posts('category_name=spa-kuta-legian&posts_per_page=999');/*SPA記事ピックアップ以外リスティング*/ ?>
<?php foreach($myposts as $post): ?>
  <?php setup_postdata($post); ?>
  <?php if( in_category('spa-kuta-legian-pickup')): ?>
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
