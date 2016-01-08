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
<ul id="breadcrumb"><li><a href="http://www.plbali.com">バリ旅行HOME</a></li><li>&nbsp;＞&nbsp;<a href="http://www.plbali.com/villa/">ヴィラ・ホテル</a>&nbsp;＞&nbsp;五十音順</li></ul>

<?php /*-----------------------*/?>
<?php /*--------villa----------*/?>
<?php /*-----------------------*/?>
<div id="villa_map">
<div id="h1_title"><h1>エリアから選ぶ、ヴィラ・ホテル＆スパ。</h1></div>


<div id="mBtn1"><a href="/ubud/"></a></div>
<div id="mBtn2"><a href="/seminyak-kerobokan/"></a></div>
<div id="mBtn3"><a href="/kuta-legian/"></a></div>
<div id="mBtn4"><a href="/jimbaran-uluwatu/"></a></div>
<div id="mBtn5"><a href="/nusadua/"></a></div>
<div id="mBtn6"><a href="/sanur/"></a></div>
</div>


<div id="detail">
<div id="villa_title" class="box">
<div class="h2_title left"><h2>ホテルで決める旅 ヴィラ・ホテル villa &amp; hotel</h2></div>
<div class="read left"><strong>五十音順</strong></div>
</div>
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

<?php $postup = get_posts( 'category_name=villa-seminyak-kerobokan' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title"><h2 class="sk_h2">スミニャック／クロボカン</h2></div>
<div class="villa_list box">
<div class="semi">
    <div class="box">
<?php $myposts = get_posts('category_name=villa-seminyak-kerobokan&orderby=title&order=ASC&posts_per_page=999'); ?>
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
</div><!-- class=sanu -->
</div>
<?php } ?>

<?php $postup = get_posts( 'category_name=villa-other' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title"><h2 class="other_h2">その他</h2></div>
<div class="villa_list box" id="other_list">
<div class="other">
    <div class="box">
<?php $myposts = get_posts('category_name=villa-other&orderby=title&order=ASC&posts_per_page=999'); ?>
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
</div><!--class=other -->
</div>
<?php } ?>
</div>

</div><!-- id=detaile -->
<div id="detaile_f"></div>

</div><!-- #contents -->
<?php get_sidebar(); ?>
</div><!-- #container -->
<?php get_footer(); ?>
