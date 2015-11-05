<?php
/**
 * Template Name: Candidasa
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

<div id="candidasa">

<div id="h1_title"><h1>チャンディダサ地区　プライベートリゾートが続々登場。近年開発が著しい、注目のニュースポット。</h1></div>
<div id="detail">

<div id="detail1">
<div class="h2_title"><h2>チャンディダサはこんなところ</h2></div>
<p>のんびりとしたローカルなバリの雰囲気を感じる、バリ東部のリゾート「チャンディダサ（マンギス）」。<br>
デンパサールの空港から少し離れたこのエリアは、メジャーなスポットが集まるバリ南部に比べて旅行者が少なく比較的静かなエリアと言えます。そのため、自分のペースで心行くまでバリの自然を堪能できるのがチャンディダサの魅力。ホテルでは海が見えるお部屋でのんびり過ごしたり、涼やかな風を感じながらスパトリートメントを満喫したり、ビーチではマリンアクティビティを体験したりと、楽しみ方は様々。また、バリの数あるビーチの中でも美しいと評判で是非訪れていただきたいのが、チャンディダサの北に位置するホワイトサンドビーチです。こちらのビーチにはバリの大衆食堂「ワルン」とビーチチェア、パラソルが並び、高級なレストランが並ぶ海岸線とはまた違った雰囲気が漂います。透き通る海を眺めながらできたての地元グルメを食べれば、最高の癒しの時間になるはず。<br>
いつものバリ旅行とはちょっと違った過ごし方がしたい、バリの生活を感じたい、そんなときにはチャンディダサに訪れてみてはいかがでしょうか。
</p>
</div>
<div id="detail2">
<div class="h2_title"><h2>チャンディダサでおすすめの過ごし方</h2></div>
<div id="plan1">
<h3>プラン１　喧騒から逃れて長期滞在</h3>
<p><strong>ホテル：アリラマンギス</strong><br>
繁華街から離れた場所に滞在するのだから、するべきことはもちろん「何もしないこと」。おこもり派なら、ホテルから1歩も出ずにのんびり過ごしたい。高級リゾートとして知られる「アリラ」ですが、マンリスはリーズナブルな価格で長期滞在にはもってこい。
<br>
アラカルトの美味しい朝食でお腹を満たし、ココナッツ林に囲まれたプールサイドでお昼寝。ヨガやトレッキングなどのアクティビティに参加して汗を流し、疲れたら「スパ・アリラ」で極上のトリートメントを体験してみては。</p>
</div>

<div id="plan2">
<h3>プラン２　アクティブに！バリ島の大自然を満喫</h3>
<p><strong>ホテル：プリ・バグース・チャンディダサ</strong><br>
チャンディダサのメインストリート近くに滞在すれば、地元グルメや街スパに加えて海や山も存分に楽しめる。<br>
プリ・バグース・チャンディダサの敷地内にはダイビングショップが併設されているので、まずは透き通ったチャンディの海に潜りたい。チャンディのダイビングでは海の人気者、マンボウにも出会えるかも？<br>
バリ島随一のパワースポット「アグン山」を望むサンライズ・トレッキングもお勧め。天空の寺院「ランプヤン」からの絶景も目に焼き付けて。<br>
たくさん観光した後は、ホテルのプールサイドで寛ぎながらチャンディ・ビーチのサンセットを眺めてみては。
</p>
</div>

<div id="osusume">
<div class="h2_title2"><h2>おすすめオプショナルツアー</h2></div>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="http://www.plbali.com/optional/mountain_river12/">・ランプヤン寺院＆トレッキング&amp;リラックス</a></td>
    <td><a href="http://www.plbali.com/optional/mountain_river10/">・天空の寺院ランプヤン パワースポットトレッキング～瞑想体験～</a></td>
  </tr>
  <tr>
    <td><a href="http://www.plbali.com/optional/mountain_river09/">・ランプヤン寺院ＤＥサンライズ&amp;ヨガ</a></td>
  </tr>
</table>

</div>

</div>

<div id="list_box">

<div id="villa">
<div class="h3_title"><h3>ホテルで決める旅 ヴィラ・ホテル villa &amp; hotel</h3></div>
    <div class="box">
      <?php $category_slug = 'list-candidasa'; require_once 'hotel_villa.php'; ?>
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
