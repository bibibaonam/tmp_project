<?php
/**
 * Template Name: City
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

<?php if(is_page('ubud')): ?>
<ul id="breadcrumb"><li><a href="http://www.plbali.com">バリ旅行の【バリ・ガール】トップ</a></li><li>&nbsp;＞&nbsp;ウブド</li></ul>

<div id="ubud">
<?php endif; ?>

<div id="h1_title"><h1>エリアから選ぶ、ヴィラ・ホテル＆スパ。</h1></div>
<div id="detail">
<div id="list_box">

<div id="villa" class="left">
<div class="h3_title"><h3>ホテルで決める旅 ヴィラ・ホテル villa &amp; hotel</h3></div>

    <div class="box">
<?php $myposts = get_posts('category_name=villa-ubud&posts_per_page=999');/*VILLA記事リスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top"><?php $title= get_the_title(); the_post_thumbnail(array( 157,157 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    </div>
<?php endforeach; ?>
    </div>
</div><!-- id=villa -->

<div id="spa" class="right">
<div class="h3_title"><h3>至福の癒し スパ SPA</h3></div>

<div class="box">
<div class="spa_img">
<img src="/img/spa_img01.jpg" width="320" height="80" />
</div>
<div class="list">
<ul>
<?php $myposts = get_posts('category_name=spa-ubud&posts_per_page=999');/*SPA記事リスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <li><a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>
</div>
</div>
</div><!-- id=spa -->

</div>
<?php endif; ?>


</div><!-- id=detaile -->
</div>
<div id="detaile_f"></div>

</div><!-- #contents -->
<?php get_sidebar(); ?>
</div><!-- #container -->
<?php get_footer(); ?>
