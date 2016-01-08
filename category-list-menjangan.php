<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

include( TEMPLATEPATH . '/header-list.php' ); ?>

<div id="container">
<div id="contents">
<ul id="breadcrumb"><li><a href="http://www.plbali.com">バリ旅行HOME</a></li><li>&nbsp;＞&nbsp;<a href="http://www.plbali.com/villa/">ヴィラ・ホテル</a>&nbsp;＞&nbsp;ムンジャンガン地区</li></ul>

<?php /*-----------------------*/?>
<?php /*--------villa----------*/?>
<?php /*-----------------------*/?>
<div id="detaile_h"></div>

<div id="detail">

<div id="villa_list_navi"><a href="/villa/list-staff/">スタッフおすすめ</a>｜<a href="/villa/list-star/">5つ星</a>｜<a href="/villa/list-villa/">ヴィラ</a>｜<a href="/villa/list-hotel/">ホテル</a>｜<br>
<a href="/villa/list-ubud/">ウブド</a>｜<a href="/villa/list-semi/">スミニャック/クロボカン</a>｜<a href="/villa/list-kuta/">クタ/レギャン</a>｜<a href="/villa/list-jim/">ジンバラン/ウルワツ</a>｜<a href="/villa/list-nusa/">ヌサドゥア</a>｜<a href="/villa/list-sanur/">サヌール</a>｜<a href="/villa/list-canggu/">チャングー</a>｜<a href="/villa/list-candidasa/">チャンディダサ（マンギス）</a>｜<a href="/villa/list-tanahlot/">タナロット（タバナン）</a>｜<a href="/villa/list-menjangan/">ムンジャンガン</a>｜<a href="/villa/list-lovina/">ロビナ</a>｜<a href="/villa/list-yogyakarta/">ジョグジャカルタ</a>｜<a href="/villa/list-lombok/">ロンボク島</a>｜<a href="/villa/list-lembongan/">レンボンガン島</a>
</div>

<div id="villa_list_title">
<h1 id="list_menjangan">ムンジャンガン地区</h1>
<div id="info_link"><a href="/menjangan/"><img src="/img/list_link_menjangan.gif" width="268" height="18" alt="ムンジャンガンの基本情報はこちら"></a></div>
</div>


<div class="box">
<?php $postup = get_posts( 'category_name=villa-menjangan&tag=list_villa' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title"><h2 class="menj_h2">ヴィラ一覧</h2></div>
<div class="villa_list box">
<div class="menj">
    <div class="box">
<?php $myposts = get_posts('category_name=villa-menjangan&tag=list_villa&orderby=title&order=ASC&posts_per_page=999');/*VILLA記事リスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="list">
    <div class="list_img"><a href="<?php the_permalink(); ?>" target="_top"><?php $title= get_the_title(); the_post_thumbnail(array( 100,100 ),array( 'alt' =>$title, 'title' => $title)); ?></a></div>
    <div class="list_name">
    <div class="o_icon"><?php if (has_tag('スタッフ')) { ?>
    <img src="/img/staff_osusume_icon.gif" width="122" height="17" alt="スタッフおすすめ">
    <?php } ?>
    </div>
    <span><?php echo post_custom('copy'); ?></span>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    </div>
	<p class="area"><?php echo post_custom('area'); ?></p>
	<?php if(get_post_meta($post->ID,'hotel_stars',true)): ?>
    	<?php if(get_post_meta($post->ID,'hotel_stars',true) == '1'): ?>
        <p class="rank"><img src="/img/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星"></p>
    	<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '2'): ?>
        <p class="rank"><img src="/img/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星"></p>
    	<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '3'): ?>
        <p class="rank"><img src="/img/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星"></p>
    	<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '4'): ?>
        <p class="rank"><img src="/img/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星"></p>
    	<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '5'): ?>
        <p class="rank"><img src="/img/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星"></p>
    	<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '2-3'): ?>
        <p class="rank"><img src="/img/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星"></p>
    	<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '2-4'): ?>
        <p class="rank"><img src="/img/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星"></p>
    	<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '2-5'): ?>
        <p class="rank"><img src="/img/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星"></p>
    	<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '3-4'): ?>
        <p class="rank"><img src="/img/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星"></p>
    	<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '3-5'): ?>
        <p class="rank"><img src="/img/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星"></p>
    	<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '4-5'): ?>
        <p class="rank"><img src="/img/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星"></p>
        <?php endif; ?>
	<?php endif; ?>
    </div>
<?php endforeach; ?>
    </div>
</div><!--class=ubdo -->
</div>
<?php } ?>

<?php $postup = get_posts( 'category_name=villa-menjangan&tag=list_hotel' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title"><h2 class="ubud_h2">ホテル一覧</h2></div>
<div class="villa_list box">
<div class="ubdo">
    <div class="box">
<?php $myposts = get_posts('category_name=villa-menjangan&tag=list_hotel&orderby=title&order=ASC&posts_per_page=999');/*VILLA記事リスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="list">
    <div class="list_img"><a href="<?php the_permalink(); ?>" target="_top"><?php $title= get_the_title(); the_post_thumbnail(array( 100,100 ),array( 'alt' =>$title, 'title' => $title)); ?></a></div>
    <div class="list_name">
    <div class="o_icon"><?php if (has_tag('スタッフ')) { ?>
    <img src="/img/staff_osusume_icon.gif" width="122" height="17" alt="スタッフおすすめ">
    <?php } ?>
    </div>
    <span><?php echo post_custom('copy'); ?></span>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    </div>
	<p class="area"><?php echo post_custom('area'); ?></p>
	<?php if(get_post_meta($post->ID,'hotel_stars',true)): ?>
    	<?php if(get_post_meta($post->ID,'hotel_stars',true) == '1'): ?>
        <p class="rank"><img src="/img/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星"></p>
    	<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '2'): ?>
        <p class="rank"><img src="/img/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星"></p>
    	<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '3'): ?>
        <p class="rank"><img src="/img/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星"></p>
    	<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '4'): ?>
        <p class="rank"><img src="/img/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星"></p>
    	<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '5'): ?>
        <p class="rank"><img src="/img/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星"></p>
    	<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '2-3'): ?>
        <p class="rank"><img src="/img/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星"></p>
    	<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '2-4'): ?>
        <p class="rank"><img src="/img/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星"></p>
    	<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '2-5'): ?>
        <p class="rank"><img src="/img/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星"></p>
    	<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '3-4'): ?>
        <p class="rank"><img src="/img/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星"></p>
    	<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '3-5'): ?>
        <p class="rank"><img src="/img/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星"></p>
    	<?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '4-5'): ?>
        <p class="rank"><img src="/img/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星"></p>
        <?php endif; ?>
	<?php endif; ?>
    </div>
<?php endforeach; ?>
    </div>
</div><!--class=ubdo -->
</div>
<?php } ?>
</div>

</div><!-- id=detaile -->
<div id="detaile_f"></div>

</div><!-- #contents -->
<?php get_sidebar(); ?>
</div><!-- #container -->
<?php get_footer(); ?>
