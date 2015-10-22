<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div id="container">
<div id="contents">

<?php if ( have_posts() ) : ?>
<ul id="breadcrumb"><li><a href="http://www.plbali.com">バリ旅行の【バリ・ガール】トップ</a></li><li>&nbsp;＞&nbsp;<a href="http://www.plbali.com/villa/" title="ヴィラ・ホテル の投稿をすべて表示">ヴィラ・ホテル</a>&nbsp;＞&nbsp;ウブド</li></ul>

<?php /*-----------------------*/?>
<?php /*----------spa----------*/?>
<?php /*-----------------------*/?>
<?php if(in_category('villa-ubud')): ?>

<div id="h1_title"><h1>エリアから選ぶ、ヴィラ・ホテル＆スパ。</h1></div>
<div id="detail">
<div id="villa_title" class="box">
<div class="h2_title left"><h2>ホテルで決める旅 ヴィラ・ホテル villa &amp; hotel</h2></div>
<div class="read left">
<strong>エリアで選ぶ、くつろぎのヴィラ＆ホテル。</strong>
<p>6つのエリアに6つの個性。海と自然、神秘のバリ島。プルメリア・バリおすすめのヴィラ＆ホテル。</p></div>
</div>
<div class="box">
<div class="villa_list box">
<div id="sub_list">
<div class="ubdo">
<div class="h3_title"><h3>1ウブド UBUD</h3></div>
    <div class="box">
<?php $myposts = get_posts('category_name=villa-ubud&posts_per_page=999');/*VILLA記事リスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top"><?php $title= get_the_title(); the_post_thumbnail(array( 157,157 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
	<p class="area"><?php echo post_custom('area'); ?></p>
    </div>
<?php endforeach; ?>
    </div>
</div><!--class=ubdo -->
</div><!--class=sub_list -->
</div>
</div>
<?php endif; ?>

<?php endif; ?>

</div><!-- id=detaile -->
<div id="detaile_f"></div>

</div><!-- #contents -->
<?php get_sidebar(); ?>
</div><!-- #container -->
<?php get_footer(); ?>
