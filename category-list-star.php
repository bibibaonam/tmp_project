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
<ul id="breadcrumb"><li><a href="http://www.plbali.com">バリ旅行HOME</a></li><li>&nbsp;＞&nbsp;<a href="http://www.plbali.com/villa/">ヴィラ・ホテル</a>&nbsp;＞&nbsp;5つ星一覧</li></ul>

<?php /*-----------------------*/?>
<?php /*--------villa----------*/?>
<?php /*-----------------------*/?>
<div id="detaile_h"></div>

<div id="detail">

<div id="villa_list_navi"><a href="/villa/list-staff/">スタッフおすすめ</a>｜<a href="/villa/list-star/">5つ星</a>｜<a href="/villa/list-villa/">ヴィラ</a>｜<a href="/villa/list-hotel/">ホテル</a>｜<br>
<a href="/villa/list-ubud/">ウブド</a>｜<a href="/villa/list-semi/">スミニャック/クロボカン</a>｜<a href="/villa/list-kuta/">クタ/レギャン</a>｜<a href="/villa/list-jim/">ジンバラン/ウルワツ</a>｜<a href="/villa/list-nusa/">ヌサドゥア</a>｜<a href="/villa/list-sanur/">サヌール</a>｜<a href="/villa/list-canggu/">チャングー</a>｜<a href="/villa/list-candidasa/">チャンディダサ（マンギス）</a>｜<a href="/villa/list-tanahlot/">タナロット（タバナン）</a>｜<a href="/villa/list-menjangan/">ムンジャンガン</a>｜<a href="/villa/list-lovina/">ロビナ</a>｜<a href="/villa/list-yogyakarta/">ジョグジャカルタ</a>｜<a href="/villa/list-lombok/">ロンボク島</a>｜<a href="/villa/list-lembongan/">レンボンガン島</a>
</div>

<div id="villa_list_title"><h1 id="list_star">5つ星一覧</h1></div>

<div class="box">
<?php $postup = get_posts( 'category_name=villa-ubud' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title"><h2 class="ubud_h2">ウブド</h2></div>
<div class="villa_list box">
<div class="ubdo">
    <div class="box">
<?php $myposts = get_posts('category_name=villa-ubud&orderby=title&order=ASC&posts_per_page=999');/*VILLA記事リスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'hotel_stars',true) == '5'): ?>
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
        <p class="rank"><img src="/img/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星"></p>
    </div>
	<?php endif; ?>
<?php endforeach; ?>
    </div>
</div><!--class=ubdo -->
</div>
<?php } ?>

<?php $postup = get_posts( 'category_name=villa-seminyak-kerobokan' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title"><h2 class="sk_h2">スミニャック／クロボカン</h2></div>
<div class="villa_list box">
<div class="semi">
    <div class="box">
<?php $myposts = get_posts('category_name=villa-seminyak-kerobokan&orderby=title&order=ASC&posts_per_page=999'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'hotel_stars',true) == '5'): ?>
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
        <p class="rank"><img src="/img/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星"></p>
    </div>
	<?php endif; ?>
<?php endforeach; ?>
    </div>
</div><!-- class=semi -->
</div>
<?php } ?>

<?php $postup = get_posts( 'category_name=villa-kuta-legian' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title"><h2 class="kl_h2">クタ／レギャン</h2></div>
<div class="villa_list box">
<div class="kuta">
    <div class="box">
<?php $myposts = get_posts('category_name=villa-kuta-legian&orderby=title&order=ASC&posts_per_page=999'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'hotel_stars',true) == '5'): ?>
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
        <p class="rank"><img src="/img/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星"></p>
    </div>
	<?php endif; ?>
<?php endforeach; ?>
    </div>
</div><!--class=kuta -->
</div>
<?php } ?>

<?php $postup = get_posts( 'category_name=villa-jimbaran-uluwatu' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title"><h2 class="ju_h2">ジンバラン／ウルワツ</h2></div>
<div class="villa_list box">
<div class="jim">
    <div class="box">
<?php $myposts = get_posts('category_name=villa-jimbaran-uluwatu&orderby=title&order=ASC&posts_per_page=999'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'hotel_stars',true) == '5'): ?>
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
        <p class="rank"><img src="/img/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星"></p>
    </div>
	<?php endif; ?>
<?php endforeach; ?>
    </div>
</div><!-- class=jim -->
</div>
<?php } ?>

<?php $postup = get_posts( 'category_name=villa-nusadua' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title"><h2 class="nusadua_h2">ヌサドゥア</h2></div>
<div class="villa_list box">
<div class="nusa">
    <div class="box">
<?php $myposts = get_posts('category_name=villa-nusadua&orderby=title&order=ASC&posts_per_page=999'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'hotel_stars',true) == '5'): ?>
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
        <p class="rank"><img src="/img/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星"></p>
    </div>
	<?php endif; ?>
<?php endforeach; ?>
    </div>
</div><!--class=nusa -->
</div>
<?php } ?>

<?php $postup = get_posts( 'category_name=villa-sanur' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title"><h2 class="sanur_h2">サヌール</h2></div>
<div class="villa_list box">
<div class="sanu">
    <div class="box">
<?php $myposts = get_posts('category_name=villa-sanur&orderby=title&order=ASC&posts_per_page=999'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'hotel_stars',true) == '5'): ?>
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
        <p class="rank"><img src="/img/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星"></p>
    </div>
	<?php endif; ?>
<?php endforeach; ?>
    </div>
</div><!-- class=sanu -->
</div>
<?php } ?>

<?php $postup = get_posts( 'category_name=villa-canggu&meta_key=hotel_stars&meta_value=5' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title"><h2 class="cang_h2">チャングー</h2></div>
<div class="villa_list box">
<div class="cang">
    <div class="box">
<?php $myposts = get_posts('category_name=villa-canggu&orderby=title&order=ASC&posts_per_page=999'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'hotel_stars',true) == '5'): ?>
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
        <p class="rank"><img src="/img/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星"></p>
    </div>
	<?php endif; ?>
<?php endforeach; ?>
    </div>
</div><!--class=canggu -->
</div>
<?php } ?>

<?php $postup = get_posts( 'category_name=villa-candidasa&meta_key=hotel_stars&meta_value=5' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title"><h2 class="cand_h2">チャンディダサ（マンギス）</h2></div>
<div class="villa_list box" id="candidasa_list">
<div class="cand">
    <div class="box">
<?php $myposts = get_posts('category_name=villa-candidasa&orderby=title&order=ASC&posts_per_page=999'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'hotel_stars',true) == '5'): ?>
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
        <p class="rank"><img src="/img/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星"></p>
    </div>
	<?php endif; ?>
<?php endforeach; ?>
    </div>
</div><!--class=candidasa -->
</div>
<?php } ?>

<?php $postup = get_posts( 'category_name=villa-tanahlot&meta_key=hotel_stars&meta_value=5' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title"><h2 class="tana_h2">タナロット（タバナン）</h2></div>
<div class="villa_list box" id="tanahlot_list">
<div class="tana">
    <div class="box">
<?php $myposts = get_posts('category_name=villa-tanahlot&orderby=title&order=ASC&posts_per_page=999'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'hotel_stars',true) == '5'): ?>
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
        <p class="rank"><img src="/img/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星"></p>
    </div>
	<?php endif; ?>
<?php endforeach; ?>
    </div>
</div><!--class=candidasa -->
</div>
<?php } ?>

<?php $postup = get_posts( 'category_name=villa-menjangan&meta_key=hotel_stars&meta_value=5' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title"><h2 class="menj_h2">ムンジャンガン</h2></div>
<div class="villa_list box" id="menjangan_list">
<div class="menj">
    <div class="box">
<?php $myposts = get_posts('category_name=villa-menjangan&orderby=title&order=ASC&posts_per_page=999'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'hotel_stars',true) == '5'): ?>
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
        <p class="rank"><img src="/img/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星"></p>
    </div>
	<?php endif; ?>
<?php endforeach; ?>
    </div>
</div><!--class=candidasa -->
</div>
<?php } ?>

<?php $postup = get_posts( 'category_name=villa-lovina&meta_key=hotel_stars&meta_value=5' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title"><h2 class="lovi_h2">ロビナ</h2></div>
<div class="villa_list box" id="lovina_list">
<div class="lovi">
    <div class="box">
<?php $myposts = get_posts('category_name=villa-lovina&orderby=title&order=ASC&posts_per_page=999'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'hotel_stars',true) == '5'): ?>
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
        <p class="rank"><img src="/img/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星"></p>
    </div>
	<?php endif; ?>
<?php endforeach; ?>
    </div>
</div><!--class=candidasa -->
</div>
<?php } ?>

<?php $postup = get_posts( 'category_name=villa-yogyakarta&meta_key=hotel_stars&meta_value=5' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title"><h2 class="yogy_h2">ジョグジャカルタ</h2></div>
<div class="villa_list box" id="yogyakarta_list">
<div class="yogy">
    <div class="box">
<?php $myposts = get_posts('category_name=villa-yogyakarta&orderby=title&order=ASC&posts_per_page=999'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'hotel_stars',true) == '5'): ?>
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
        <p class="rank"><img src="/img/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星"></p>
    </div>
	<?php endif; ?>
<?php endforeach; ?>
    </div>
</div><!--class=candidasa -->
</div>
<?php } ?>

<?php $postup = get_posts( 'category_name=villa-lombok&meta_key=hotel_stars&meta_value=5' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title"><h2 class="lomb_h2">ロンボク島</h2></div>
<div class="villa_list box" id="lombok_list">
<div class="lomb">
    <div class="box">
<?php $myposts = get_posts('category_name=villa-lombok&orderby=title&order=ASC&posts_per_page=999'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'hotel_stars',true) == '5'): ?>
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
        <p class="rank"><img src="/img/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星"></p>
    </div>
	<?php endif; ?>
<?php endforeach; ?>
    </div>
</div><!--class=candidasa -->
</div>
<?php } ?>

<?php $postup = get_posts( 'category_name=villa-lembongan&meta_key=hotel_stars&meta_value=5' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title"><h2 class="lemb_h2">レンボンガン島</h2></div>
<div class="villa_list box" id="lembongan_list">
<div class="lemb">
    <div class="box">
<?php $myposts = get_posts('category_name=villa-lembongan&orderby=title&order=ASC&posts_per_page=999'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'hotel_stars',true) == '5'): ?>
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
        <p class="rank"><img src="/img/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星"></p>
    </div>
	<?php endif; ?>
<?php endforeach; ?>
    </div>
</div><!--class=candidasa -->
</div>
<?php } ?>
</div>

</div><!-- id=detaile -->
<div id="detaile_f"></div>

</div><!-- #contents -->
<?php get_sidebar(); ?>
</div><!-- #container -->
<?php get_footer(); ?>
