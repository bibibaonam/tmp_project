<?php
/**
 * Template Name: Lovina
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

<div id="lovina">

<div id="h1_title"><h1>ロビナ地区　野生動物の聖地 自然豊かな南の楽園</h1></div>
<div id="detail">

<div id="detail1">
<div class="h2_title"><h2>ロビナのこんなところ</h2></div>
<p>バリ北部の海に面する素朴なビーチエリア、ロビナ。<br>
空港からはタクシーで約3時間、バリの主要都市からは本数は少ないながら毎日運行するシャトルバスでアクセス可能です。バリの主要な観光地から少し離れていますが、ロビナ沖合に現れるイルカの群れを見るため多くの旅行者が訪れています。ロビナのドルフィンウォッチングツアーが行われるのは早朝。アメンボのような安定用の浮材が付いたバリの船「ジュクン」に乗り込み、沖合の出現ポイントでイルカを待ちます。ジャンプをしながら勢いよく泳ぐイルカの姿は迫力満点。ドルフィンウォッチングは1人旅からお子様連れの家族旅行まで、あらゆる旅行者に人気です。ロビナの中心部にはシーフードが美味しいレストラン、手ごろな宿が集まっており短い滞在に便利でおすすめですが、ロビナでゆったり過ごすなら中心の街から少し離れたリゾートに宿泊するのもいいでしょう。<br>
喧騒から離れて自然の音だけを感じ、スパや大きなパブリックプール、プライベートプールで贅沢に過ごせばいつのまにか日常を忘れてしまいます。イルカの海と豊かなバリの自然に癒されるロビナ旅行に是非お出かけください。</p>
</div>
<div id="detail2">
<div class="h2_title"><h2>ロビナでおすすめの過ごし方</h2></div>
<div id="plan1">
<h3>プラン１　のんびり、まったり、気ままに</h3>
<p><strong>ホテル：プリバグース ロビナ</strong><br>
ロビナには昔ながらのバリの風景が残っていて、片田舎のゆったりとした雰囲気が魅力的。そのためか、長期滞在のヨーロピアンは少なくない。<br>
メインロードが2本のみある小さな町なので、短い滞在でもローカルの顔を覚えてしまう。街中の行く先々で「アパカバール（元気）？」や「クディマナ（どこ行くの）？」なんて会話を楽しむのもいい。メインロード沿いのレストランでは夜に生演奏が聴けるなど、雰囲気満点だ。<br><br>
「プリバグース ロビナ」は街中からは少し離れたビーチ沿いにあるリゾート。敷地内は緑豊かで、静けさが広がる。ときにはスタッフがココナッツの木に登って、とれたての新鮮なジュースもつくってくれる。波の音を聞きながら、ジュース片手に木陰で読書をするのも気持ちが良い。<br>
ロビナで忘れてはならないのが、ドルフィンウォッチング。早朝に出発し、バリの船「ジュクン」に乗ってイルカを追いかけるのはエキサイティングで楽しい。夜は天気が良ければ、満点の星空も見られる。<br><br>バリ南部の喧騒から離れたのだから、「何もしない」を愉しむヨーロピアンスタイルで過ごしてみては。
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

<!--<div id="osusume">
<div class="h2_title2"><h2>おすすめオプショナルツアー</h2></div>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="">・ツアー名が入ります</a></td>
    <td><a href="">・ツアー名が入ります</a></td>
  </tr>
  <tr>
    <td><a href="">・ツアー名が入ります</a></td>
    <td><a href="">・ツアー名が入ります</a></td>
  </tr>
</table>

</div>-->

</div>

<div id="list_box">

<div id="villa">
<div class="h3_title"><h3>ホテルで決める旅 ヴィラ・ホテル villa &amp; hotel</h3></div>

    <div class="box">
<?php $myposts = get_posts('category_name=villa-lovina-pickup&posts_per_page=999');/*VILLA記事ピックアップリスティング*/ ?>
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
<?php $myposts = get_posts('category_name=villa-lovina&posts_per_page=999');/*VILLA記事ピックアップ以外リスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <?php if( in_category('villa-lovina-pickup')): ?>
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
