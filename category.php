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
<?php get_breadcrumbs(); ?>

<?php /*-----------------------*/?>
<?php /*----------spa----------*/?>
<?php /*-----------------------*/?>
<?php if(in_category('spa')): ?>
<div id="spa_map">
<div id="h1_title"><h1>エリアから選ぶ、ヴィラ・ホテル＆スパ。</h1></div>


<div id="mBtn1"><a href="/ubud/"></a></div>
<div id="mBtn2"><a href="/seminyak-kerobokan/"></a></div>
<div id="mBtn3"><a href="/kuta-legian/"></a></div>
<div id="mBtn4"><a href="/jimbaran-uluwatu/"></a></div>
<div id="mBtn5"><a href="/nusadua/"></a></div>
<div id="mBtn6"><a href="/sanur/"></a></div>
</div>
                
<div id="detail">
<div id="spa_title" class="box">
<div class="h2_title left"><h2>至福のバリ島スパ スパ SPA</h2></div>
<div class="read left">
<strong>エリアで選ぶ、至福の癒しスパ。</strong>
<p>花びらいっぱいのバスタブも、貸し切りヴィラも、バリ島だから、プチプライス。</p></div>
</div>
<div class="spa_list box">
<div class="ubdo left">
<div class="h3_title"><h3><a href="/ubud/"><img src="/img/villa_title05.gif" width="320" height="21" alt="1ウブド UBUD"></a></h3></div>
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
</div><!--class=ubdo -->
<div class="semi right">
<div class="h3_title"><h3><a href="/seminyak-kerobokan/"><img src="/img/villa_title02.gif" width="320" height="21" alt="2スミニャック／クロボカン SEMINYAK/KEROBOKAN"></a></h3></div>
<div class="box">
<div class="spa_img">
<img src="/img/spa_img02.jpg" width="320" height="80" />
</div>
<div class="list">
<ul>
<?php $myposts = get_posts('category_name=spa-seminyak-kerobokan&posts_per_page=999');/*SPA記事リスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <li><a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>
</div>
</div>
</div><!-- class=semi -->
</div>
<div class="spa_list box">
<div class="kuta left">
<div class="h3_title"><h3><a href="/kuta-legian/"><img src="/img/villa_title01.gif" width="320" height="21" alt="3クタ／レギャン KUTA/LEGIAN"></a></h3></div>
<div class="box">
<div class="spa_img">
<img src="/img/spa_img03.jpg" width="320" height="80" />
</div>
<div class="list">
<ul>
<?php $myposts = get_posts('category_name=spa-kuta-legian&posts_per_page=999');/*SPA記事リスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <li><a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>
</div>
</div>
</div><!--class=kuta -->
<div class="jim right">
<div class="h3_title"><h3><a href="/jimbaran-uluwatu/"><img src="/img/villa_title04.gif" width="320" height="21" alt="4ジンバラン／ウルワツ JIMBARAN/ULUWATU"></a></h3></div>
<div class="box">
<div class="spa_img">
<img src="/img/spa_img04.jpg" width="320" height="80" />
</div>
<div class="list">
<ul>
<?php $myposts = get_posts('category_name=spa-jimbaran-uluwatu&posts_per_page=999');/*SPA記事リスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <li><a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>
</div>
</div>
</div><!-- class=jim -->
</div>
<div class="spa_list box">
<div class="nusa left">
<div class="h3_title"><h3><a href="/nusadua/"><img src="/img/villa_title03.gif" width="320" height="21" alt="5ヌサドゥア NUSA DUA"></a></h3></div>
<div class="box">
<div class="spa_img">
<img src="/img/spa_img05.jpg" width="320" height="80" />
</div>
<div class="list">
<ul>
<?php $myposts = get_posts('category_name=spa-nusadua&posts_per_page=999');/*SPA記事リスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <li><a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>
</div>
</div>
</div><!--class=nusa -->
<div class="sanu right">
<div class="h3_title"><h3><a href="/sanur/"><img src="/img/villa_title06.gif" width="320" height="21" alt="6サヌール SANUR"></a></h3></div>
<div class="box">
<div class="spa_img">
<img src="/img/spa_img06.jpg" width="320" height="80" />
</div>
<div class="list">
<ul>
<?php $myposts = get_posts('category_name=spa-sanur&posts_per_page=999');/*SPA記事リスティング*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <li><a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>
</div>
</div>
</div><!-- class=sanu -->

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="10" height="30" align="right" valign="top">&nbsp;</td>
    <td height="30">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="top">＜</td>
    <td>注意事項＞</td>
  </tr>
  <tr>
    <td align="right" valign="top">・</td>
    <td>メールでのお申し込みは、日本ご出発３日前までにお願いいたします。（日曜・祝日を除く）<br />
      それ以降の直前のお申し込みは、旅工房までお電話にてご連絡ください。</td>
  </tr>
  <tr>
    <td align="right" valign="top">・</td>
    <td>海外支店から直接のご返信となるため、メールが届かないケースが稀にございます。<br />
      48時間以内にメール返信がない場合は、お手数ですが旅工房までご連絡お願いいたします。<br />
      （日曜・祝日を除く → 翌営業日以降の返信となります。）</td>
  </tr>
  <tr>
    <td align="right" valign="top">・</td>
    <td>こちらに記載のないオプショナル・スパでも手配可能な場合がございますので、是非お気軽にお問い合わせくださいませ。</td>
  </tr>
  <tr>
    <td align="right" valign="top">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="top">※</td>
    <td>現地支店（プルメリアバリ）営業時間</td>
  </tr>
  <tr>
    <td align="right" valign="top">&nbsp;</td>
    <td>[平日]9:00-17:00 <br />
      [土曜]9:00-14:00 日休<br />
      [祝日] ニュピ 2015年3月21日  ※また前日3月20日は12時までの営業となります。</td>
  </tr>
  <tr>
    <td align="right" valign="top">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </table>

</div>

<?php /*-----------------------*/?>
<?php /*--------villa----------*/?>
<?php /*-----------------------*/?>
<?php elseif(in_category('villa')): ?>
<div id="h1_title">
<h1>Bali Hotel Selection バリ島ホテル・ヴィラ情報</h1>
</div>
<div id="villa_map">
  <table border="0" cellspacing="0" cellpadding="0" id="areamap">
    <tr>
      <th>
        <h2><img src="/img/villa_areamap_title.gif" alt="エリアから選ぶ、ヴィラ・ホテル" width="185" height="63" /></h2>
        <p>何度訪れてもまた行きたい、<br class="sp">と思わせてくれるバリ島には、<br>
        エリアごとに異なる魅力を持つ<br class="sp">リゾートが存在します。<br>
        お気に入りのリゾートで至極の時を<br class="sp">お過ごしください。</p>
      </th>
      <td>
      	<h2>地図から都市の情報・ツアーを探す</h2>
      	<div id="map">
          <div id="mBtn1"><a href="/kuta-legian/">クタ・レギャン</a></div>
          <div id="mBtn2"><a href="/seminyak-kerobokan/">スミニャック／クロボカン</a></div>
          <div id="mBtn3"><a href="/nusadua/">ヌサドゥア／ベノア</a></div>
          <div id="mBtn4"><a href="/jimbaran-uluwatu/">ジンバラン</a></div>
          <div id="mBtn5"><a href="/ubud/">ウブド</a></div>
          <div id="mBtn6"><a href="/sanur/">サヌール</a></div>
          <div id="mBtn7"><a href="/canggu/">チャングー</a></div>
          <div id="mBtn8"><a href="/candidasa/">チャンディダサ</a></div>
          <div id="mBtn9"><a href="/tanahlot/">タナロット</a></div>
          <div id="mBtn10"><a href="/menjangan/">ムンジャンガン</a></div>
          <div id="mBtn11"><a href="/lovina/">ロビナ</a></div>
          <div id="mBtn12"><a href="/yogyakarta/">ジョグジャカルタ</a></div>
         <!-- <div id="mBtn13"><a href="/lombok/">ロンボク島</a></div> -->
          <div id="mBtn14"><a href="/lembongan/">レンボンガン島</a></div>
        </div>
      </td>
    </tr>
  </table>
</div>


<div id="detail">

<ul id="villa_list_navi">
<li id="ac_kuta"><a href="/villa/list-kuta/"><span>クタ/レギャン</span></a></li>
<li id="ac_semi"><a href="/villa/list-semi/"><span>スミニャック/クロボカン</span></a></li>
<li id="ac_nusa"><a href="/villa/list-nusa/"><span>ヌサドゥア</span></a></li>
<li id="ac_jim"><a href="/villa/list-jim/"><span>ジンバラン/ウルワツ</span></a></li>
<li id="ac_ubud"><a href="/villa/list-ubud/"><span>ウブド</span></a></li>
<li id="ac_sanur"><a href="/villa/list-sanur/"><span>サヌール</span></a></li>
<li id="ac_canggu"><a href="/villa/list-canggu/"><span>チャングー</span></a></li>
<li id="ac_candidasa"><a href="/villa/list-candidasa/"><span>チャンディダサ</span></a></li>
<li id="ac_tanahlot"><a href="/villa/list-candidasa/"><span>タナロット</span></a></li>
<li id="ac_menjangan"><a href="/villa/list-menjangan/"><span>ムンジャンガン</span></a></li>
<li id="ac_lovina"><a href="/villa/list-lovina/"><span>ロビナ</span></a></li>
<li id="ac_yogyakarta"><a href="/villa/list-yogyakarta/"><span>ジョグジャカルタ</span></a></li>
<li id="ac_lombok"><a href="/villa/list-lombok/"><span>ロンボク島</span></a></li>
<li id="ac_lembongan"><a href="/villa/list-lembongan/"><span>レンボンガン島</span></a></li>
</ul>

<ul id="osusume_list">
    <li><img src="/img/villa/list_osusume_icon01.png" width="35" height="35" alt="カップル"><span>カップルに<br>おすすめ</span></li>
    <li><img src="/img/villa/list_osusume_icon02.png" width="35" height="35" alt="ファミリー"><span>ファミリーに<br>おすすめ</span></li>
    <li><img src="/img/villa/list_osusume_icon03.png" width="35" height="35" alt="女子旅"><span>女子旅に<br>おすすめ</span></li>
</ul>

<div class="box">
<?php $postup = get_posts( 'category_name=villa-kuta-legian' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title" id="kl_ttl">
<h2 class="kl_h2"><a href="/villa/list-kuta/">クタ／レギャン</a></h2>
<div class="info_link"><a href="/kuta-legian/"><img src="/img/villa/list_link_kuta.gif" width="258" height="18" alt="クタ/レギャンの基本情報はこちら"></a></div>
</div>
<div class="villa_list box">
<div class="kuta">
    <div class="box">

<?php $myposts = get_posts('category_name=villa-kuta-legian&meta_key=disp_sort&orderby=meta_value_num&posts_per_page=6&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'disp_sort',true) == '3' || get_post_meta($post->ID,'disp_sort',true) == '6'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                        <?php if(get_post_meta($post->ID,'ranking',true) == '1'): ?>
                        <div class="icon"><img src="/img/villa/icon_point1.png" width="50" height="50" class="no-hover" alt="売れ筋No.1"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '2'): ?>
                        <div class="icon"><img src="/img/villa/icon_point2.png" width="50" height="50" class="no-hover" alt="売れ筋No.2"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '3'): ?>
                        <div class="icon"><img src="/img/villa/icon_point3.png" width="50" height="50" class="no-hover" alt="売れ筋No.3"></div>
                        <?php endif; ?>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(post_custom('hotel_baligirl_rank')): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
            <?php if(post_custom('icon_disp_couple') || post_custom('icon_disp_family') || post_custom('icon_disp_girls')): ?>
            <ul class="icon_list">
            	<?php if(get_post_meta($post->ID,'icon_disp_couple',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon01.png" width="35" height="35" alt="カップル"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_family',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon02.png" width="35" height="35" alt="ファミリー"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_girls',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon03.png" width="35" height="35" alt="女子旅"></li>
                <?php endif; ?>
            </ul>
            <?php endif; ?>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="box size-m">

<?php $myposts = get_posts('category_name=villa-kuta-legian&meta_key=disp_sort&orderby=meta_value_num&offset=6&posts_per_page=10&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'disp_sort',true) == '11' || get_post_meta($post->ID,'disp_sort',true) == '16'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true)): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="page_top_link"><a href="#top">ページの先頭へ戻る</a></div>
</div><!--class=kuta -->
</div>
<?php } ?>


<?php $postup = get_posts( 'category_name=villa-seminyak-kerobokan' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title" id="sm_ttl">
<h2 class="sm_h2"><a href="/villa/list-semi/">スミニャック／クロボカン</a></h2>
<div class="info_link"><a href="/seminyak-kerobokan/"><img src="/img/villa/list_link_semi.gif" width="324" height="18" alt="スミニャック/クロボカンの基本情報はこちら"></a></div>
</div>
<div class="villa_list box">
<div class="semi">
    <div class="box">

<?php $myposts = get_posts('category_name=villa-seminyak-kerobokan&meta_key=disp_sort&orderby=meta_value_num&posts_per_page=6&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'ranking',true) == '3' || get_post_meta($post->ID,'ranking',true) == '6'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                        <?php if(get_post_meta($post->ID,'ranking',true) == '1'): ?>
                        <div class="icon"><img src="/img/villa/icon_point1.png" width="50" height="50" class="no-hover" alt="売れ筋No.1"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '2'): ?>
                        <div class="icon"><img src="/img/villa/icon_point2.png" width="50" height="50" class="no-hover" alt="売れ筋No.2"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '3'): ?>
                        <div class="icon"><img src="/img/villa/icon_point3.png" width="50" height="50" class="no-hover" alt="売れ筋No.3"></div>
                        <?php endif; ?>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(post_custom('hotel_baligirl_rank')): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
            <?php if(post_custom('icon_disp_couple') || post_custom('icon_disp_family') || post_custom('icon_disp_girls')): ?>
            <ul class="icon_list">
            	<?php if(get_post_meta($post->ID,'icon_disp_couple',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon01.png" width="35" height="35" alt="カップル"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_family',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon02.png" width="35" height="35" alt="ファミリー"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_girls',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon03.png" width="35" height="35" alt="女子旅"></li>
                <?php endif; ?>
            </ul>
            <?php endif; ?>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="box size-m">

<?php $myposts = get_posts('category_name=villa-seminyak-kerobokan&meta_key=small_ranking&orderby=meta_value_num&offset=6&posts_per_page=10&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'small_ranking',true) == '5' || get_post_meta($post->ID,'small_ranking',true) == '10'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true)): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="page_top_link"><a href="#top">ページの先頭へ戻る</a></div>
</div><!--class=semi -->
</div>
<?php } ?>


<?php $postup = get_posts( 'category_name=villa-nusadua' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title" id="ns_ttl">
<h2 class="ns_h2"><a href="/villa/list-nusa/">ヌサドゥア</a></h2>
<div class="info_link"><a href="/nusadua/"><img src="/img/villa/list_link_nusa.gif" width="231" height="18" alt="ヌサドゥアの基本情報はこちら"></a></div>
</div>
<div class="villa_list box">
<div class="nusa">
    <div class="box">

<?php $myposts = get_posts('category_name=villa-nusadua&meta_key=disp_sort&orderby=meta_value_num&posts_per_page=6&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'ranking',true) == '3' || get_post_meta($post->ID,'ranking',true) == '6'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                        <?php if(get_post_meta($post->ID,'ranking',true) == '1'): ?>
                        <div class="icon"><img src="/img/villa/icon_point1.png" width="50" height="50" class="no-hover" alt="売れ筋No.1"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '2'): ?>
                        <div class="icon"><img src="/img/villa/icon_point2.png" width="50" height="50" class="no-hover" alt="売れ筋No.2"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '3'): ?>
                        <div class="icon"><img src="/img/villa/icon_point3.png" width="50" height="50" class="no-hover" alt="売れ筋No.3"></div>
                        <?php endif; ?>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(post_custom('hotel_baligirl_rank')): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
            <?php if(post_custom('icon_disp_couple') || post_custom('icon_disp_family') || post_custom('icon_disp_girls')): ?>
            <ul class="icon_list">
            	<?php if(get_post_meta($post->ID,'icon_disp_couple',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon01.png" width="35" height="35" alt="カップル"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_family',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon02.png" width="35" height="35" alt="ファミリー"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_girls',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon03.png" width="35" height="35" alt="女子旅"></li>
                <?php endif; ?>
            </ul>
            <?php endif; ?>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="box size-m">

<?php $myposts = get_posts('category_name=villa-nusadua&meta_key=small_ranking&orderby=meta_value_num&offset=6&posts_per_page=10&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'small_ranking',true) == '5' || get_post_meta($post->ID,'small_ranking',true) == '10'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true)): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="page_top_link"><a href="#top">ページの先頭へ戻る</a></div>
</div><!--class=nusa -->
</div>
<?php } ?>


<?php $postup = get_posts( 'category_name=villa-jimbaran-uluwatu' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title" id="jm_ttl">
<h2 class="jm_h2"><a href="/villa/list-jim/">ジンバラン/ウルワツ</a></h2>
<div class="info_link"><a href="/jimbaran-uluwatu/"><img src="/img/villa/list_link_jim.gif" width="305" height="18" alt="ジンバラン/ウルワツの基本情報はこちら"></a></div>
</div>
<div class="villa_list box">
<div class="jim">
    <div class="box">

<?php $myposts = get_posts('category_name=villa-jimbaran-uluwatu&meta_key=disp_sort&orderby=meta_value_num&posts_per_page=6&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'ranking',true) == '3' || get_post_meta($post->ID,'ranking',true) == '6'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                        <?php if(get_post_meta($post->ID,'ranking',true) == '1'): ?>
                        <div class="icon"><img src="/img/villa/icon_point1.png" width="50" height="50" class="no-hover" alt="売れ筋No.1"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '2'): ?>
                        <div class="icon"><img src="/img/villa/icon_point2.png" width="50" height="50" class="no-hover" alt="売れ筋No.2"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '3'): ?>
                        <div class="icon"><img src="/img/villa/icon_point3.png" width="50" height="50" class="no-hover" alt="売れ筋No.3"></div>
                        <?php endif; ?>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(post_custom('hotel_baligirl_rank')): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
            <?php if(post_custom('icon_disp_couple') || post_custom('icon_disp_family') || post_custom('icon_disp_girls')): ?>
            <ul class="icon_list">
            	<?php if(get_post_meta($post->ID,'icon_disp_couple',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon01.png" width="35" height="35" alt="カップル"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_family',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon02.png" width="35" height="35" alt="ファミリー"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_girls',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon03.png" width="35" height="35" alt="女子旅"></li>
                <?php endif; ?>
            </ul>
            <?php endif; ?>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="box size-m">

<?php $myposts = get_posts('category_name=villa-jimbaran-uluwatu&meta_key=small_ranking&orderby=meta_value_num&offset=6&posts_per_page=10&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'small_ranking',true) == '5' || get_post_meta($post->ID,'small_ranking',true) == '10'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true)): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="page_top_link"><a href="#top">ページの先頭へ戻る</a></div>
</div><!--class=jim -->
</div>
<?php } ?>


<?php $postup = get_posts( 'category_name=villa-ubud' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title" id="ud_ttl">
<h2 class="ud_h2"><a href="/villa/list-ubud/">ウブド</a></h2>
<div class="info_link"><a href="/ubud/"><img src="/img/villa/list_link_ubud.gif" width="207" height="18" alt="ウブドの基本情報はこちら"></a></div>
</div>
<div class="villa_list box">
<div class="ubud">
    <div class="box">

<?php $myposts = get_posts('category_name=villa-ubud&meta_key=disp_sort&orderby=meta_value_num&posts_per_page=6&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'ranking',true) == '3' || get_post_meta($post->ID,'ranking',true) == '6'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                        <?php if(get_post_meta($post->ID,'ranking',true) == '1'): ?>
                        <div class="icon"><img src="/img/villa/icon_point1.png" width="50" height="50" class="no-hover" alt="売れ筋No.1"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '2'): ?>
                        <div class="icon"><img src="/img/villa/icon_point2.png" width="50" height="50" class="no-hover" alt="売れ筋No.2"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '3'): ?>
                        <div class="icon"><img src="/img/villa/icon_point3.png" width="50" height="50" class="no-hover" alt="売れ筋No.3"></div>
                        <?php endif; ?>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(post_custom('hotel_baligirl_rank')): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
            <?php if(post_custom('icon_disp_couple') || post_custom('icon_disp_family') || post_custom('icon_disp_girls')): ?>
            <ul class="icon_list">
            	<?php if(get_post_meta($post->ID,'icon_disp_couple',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon01.png" width="35" height="35" alt="カップル"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_family',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon02.png" width="35" height="35" alt="ファミリー"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_girls',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon03.png" width="35" height="35" alt="女子旅"></li>
                <?php endif; ?>
            </ul>
            <?php endif; ?>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="box size-m">

<?php $myposts = get_posts('category_name=villa-ubud&meta_key=small_ranking&orderby=meta_value_num&offset=6&posts_per_page=10&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'small_ranking',true) == '5' || get_post_meta($post->ID,'small_ranking',true) == '10'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true)): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="page_top_link"><a href="#top">ページの先頭へ戻る</a></div>
</div><!--class=ubdo -->
</div>
<?php } ?>


<?php $postup = get_posts( 'villa-sanur' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title" id="sn_ttl">
<h2 class="sn_h2"><a href="/villa/list-sanur/">サヌール</a></h2>
<div class="info_link"><a href="/sanur/"><img src="/img/villa/list_link_sanur.gif" width="222" height="18" alt="サヌールの基本情報はこちら"></a></div>
</div>
<div class="villa_list box">
<div class="sanur">
    <div class="box">

<?php $myposts = get_posts('category_name=villa-sanur&meta_key=disp_sort&orderby=meta_value_num&posts_per_page=6&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'ranking',true) == '3' || get_post_meta($post->ID,'ranking',true) == '6'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                        <?php if(get_post_meta($post->ID,'ranking',true) == '1'): ?>
                        <div class="icon"><img src="/img/villa/icon_point1.png" width="50" height="50" class="no-hover" alt="売れ筋No.1"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '2'): ?>
                        <div class="icon"><img src="/img/villa/icon_point2.png" width="50" height="50" class="no-hover" alt="売れ筋No.2"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '3'): ?>
                        <div class="icon"><img src="/img/villa/icon_point3.png" width="50" height="50" class="no-hover" alt="売れ筋No.3"></div>
                        <?php endif; ?>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(post_custom('hotel_baligirl_rank')): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
            <?php if(post_custom('icon_disp_couple') || post_custom('icon_disp_family') || post_custom('icon_disp_girls')): ?>
            <ul class="icon_list">
            	<?php if(get_post_meta($post->ID,'icon_disp_couple',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon01.png" width="35" height="35" alt="カップル"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_family',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon02.png" width="35" height="35" alt="ファミリー"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_girls',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon03.png" width="35" height="35" alt="女子旅"></li>
                <?php endif; ?>
            </ul>
            <?php endif; ?>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="box size-m">

<?php $myposts = get_posts('category_name=villa-sanur&meta_key=small_ranking&orderby=meta_value_num&offset=6&posts_per_page=10&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'small_ranking',true) == '5' || get_post_meta($post->ID,'small_ranking',true) == '10'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true)): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="page_top_link"><a href="#top">ページの先頭へ戻る</a></div>
</div><!--class=sanur -->
</div>
<?php } ?>


<?php $postup = get_posts( 'villa-canggu' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title" id="cng_ttl">
<h2 class="cng_h2"><a href="/villa/list-canggu/">チャングー</a></h2>
<div class="info_link"><a href="/canggu/"><img src="/img/villa/list_link_canggu.gif" width="241" height="18" alt="チャングーの基本情報はこちら"></a></div>
</div>
<div class="villa_list box">
<div class="canggu">
    <div class="box">

<?php $myposts = get_posts('category_name=villa-canggu&meta_key=disp_sort&orderby=meta_value_num&posts_per_page=6&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'ranking',true) == '3' || get_post_meta($post->ID,'ranking',true) == '6'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                        <?php if(get_post_meta($post->ID,'ranking',true) == '1'): ?>
                        <div class="icon"><img src="/img/villa/icon_point1.png" width="50" height="50" class="no-hover" alt="売れ筋No.1"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '2'): ?>
                        <div class="icon"><img src="/img/villa/icon_point2.png" width="50" height="50" class="no-hover" alt="売れ筋No.2"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '3'): ?>
                        <div class="icon"><img src="/img/villa/icon_point3.png" width="50" height="50" class="no-hover" alt="売れ筋No.3"></div>
                        <?php endif; ?>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(post_custom('hotel_baligirl_rank')): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
            <?php if(post_custom('icon_disp_couple') || post_custom('icon_disp_family') || post_custom('icon_disp_girls')): ?>
            <ul class="icon_list">
            	<?php if(get_post_meta($post->ID,'icon_disp_couple',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon01.png" width="35" height="35" alt="カップル"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_family',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon02.png" width="35" height="35" alt="ファミリー"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_girls',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon03.png" width="35" height="35" alt="女子旅"></li>
                <?php endif; ?>
            </ul>
            <?php endif; ?>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="box size-m">

<?php $myposts = get_posts('category_name=villa-canggu&meta_key=small_ranking&orderby=meta_value_num&offset=6&posts_per_page=10&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'small_ranking',true) == '5' || get_post_meta($post->ID,'small_ranking',true) == '10'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true)): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="page_top_link"><a href="#top">ページの先頭へ戻る</a></div>
</div><!--class=canggu -->
</div>
<?php } ?>


<?php $postup = get_posts( 'villa-candidasa' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title" id="cnd_ttl">
<h2 class="cnd_h2"><a href="/villa/list-candidasa/">チャンディダサ（マンギス）</a></h2>
<div class="info_link"><a href="/candidasa/"><img src="/img/villa/list_link_candidasa.gif" width="325" height="18" alt="チャンディダサ（マンギス）の基本情報はこちら"></a></div>
</div>
<div class="villa_list box">
<div class="candidasa">
    <div class="box">

<?php $myposts = get_posts('category_name=villa-candidasa&meta_key=disp_sort&orderby=meta_value_num&posts_per_page=6&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'ranking',true) == '3' || get_post_meta($post->ID,'ranking',true) == '6'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                        <?php if(get_post_meta($post->ID,'ranking',true) == '1'): ?>
                        <div class="icon"><img src="/img/villa/icon_point1.png" width="50" height="50" class="no-hover" alt="売れ筋No.1"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '2'): ?>
                        <div class="icon"><img src="/img/villa/icon_point2.png" width="50" height="50" class="no-hover" alt="売れ筋No.2"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '3'): ?>
                        <div class="icon"><img src="/img/villa/icon_point3.png" width="50" height="50" class="no-hover" alt="売れ筋No.3"></div>
                        <?php endif; ?>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(post_custom('hotel_baligirl_rank')): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
            <?php if(post_custom('icon_disp_couple') || post_custom('icon_disp_family') || post_custom('icon_disp_girls')): ?>
            <ul class="icon_list">
            	<?php if(get_post_meta($post->ID,'icon_disp_couple',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon01.png" width="35" height="35" alt="カップル"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_family',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon02.png" width="35" height="35" alt="ファミリー"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_girls',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon03.png" width="35" height="35" alt="女子旅"></li>
                <?php endif; ?>
            </ul>
            <?php endif; ?>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="box size-m">

<?php $myposts = get_posts('category_name=villa-candidasa&meta_key=small_ranking&orderby=meta_value_num&offset=6&posts_per_page=10&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'small_ranking',true) == '5' || get_post_meta($post->ID,'small_ranking',true) == '10'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true)): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="page_top_link"><a href="#top">ページの先頭へ戻る</a></div>
</div><!--class=candidasa -->
</div>
<?php } ?>


<?php $postup = get_posts( 'villa-tanahlot' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title" id="tnl_ttl">
<h2 class="tnl_h2"><a href="/villa/list-tanahlot/">タナロット（タバナン）</a></h2>
<div class="info_link"><a href="/tanahlot/"><img src="/img/villa/list_link_tanahlot.gif" width="314" height="18" alt="タナロット（タバナン）の基本情報はこちら"></a></div>
</div>
<div class="villa_list box">
<div class="tanahlot">
    <div class="box">

<?php $myposts = get_posts('category_name=villa-tanahlot&meta_key=disp_sort&orderby=meta_value_num&posts_per_page=6&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'ranking',true) == '3' || get_post_meta($post->ID,'ranking',true) == '6'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                        <?php if(get_post_meta($post->ID,'ranking',true) == '1'): ?>
                        <div class="icon"><img src="/img/villa/icon_point1.png" width="50" height="50" class="no-hover" alt="売れ筋No.1"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '2'): ?>
                        <div class="icon"><img src="/img/villa/icon_point2.png" width="50" height="50" class="no-hover" alt="売れ筋No.2"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '3'): ?>
                        <div class="icon"><img src="/img/villa/icon_point3.png" width="50" height="50" class="no-hover" alt="売れ筋No.3"></div>
                        <?php endif; ?>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(post_custom('hotel_baligirl_rank')): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
            <?php if(post_custom('icon_disp_couple') || post_custom('icon_disp_family') || post_custom('icon_disp_girls')): ?>
            <ul class="icon_list">
            	<?php if(get_post_meta($post->ID,'icon_disp_couple',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon01.png" width="35" height="35" alt="カップル"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_family',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon02.png" width="35" height="35" alt="ファミリー"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_girls',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon03.png" width="35" height="35" alt="女子旅"></li>
                <?php endif; ?>
            </ul>
            <?php endif; ?>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="box size-m">

<?php $myposts = get_posts('category_name=villa-tanahlot&meta_key=small_ranking&orderby=meta_value_num&offset=6&posts_per_page=10&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'small_ranking',true) == '5' || get_post_meta($post->ID,'small_ranking',true) == '10'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true)): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="page_top_link"><a href="#top">ページの先頭へ戻る</a></div>
</div><!--class=tanahlot -->
</div>
<?php } ?>


<?php $postup = get_posts( 'villa-menjangan' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title" id="mj_ttl">
<h2 class="mj_h2"><a href="/villa/list-menjangan/">ムンジャンガン</a></h2>
<div class="info_link"><a href="/menjangan/"><img src="/img/villa/list_link_menjangan.gif" width="268" height="18" alt="ムンジャンガンの基本情報はこちら"></a></div>
</div>
<div class="villa_list box">
<div class="menjangan">
    <div class="box">

<?php $myposts = get_posts('category_name=villa-menjangan&meta_key=disp_sort&orderby=meta_value_num&posts_per_page=6&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'ranking',true) == '3' || get_post_meta($post->ID,'ranking',true) == '6'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                        <?php if(get_post_meta($post->ID,'ranking',true) == '1'): ?>
                        <div class="icon"><img src="/img/villa/icon_point1.png" width="50" height="50" class="no-hover" alt="売れ筋No.1"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '2'): ?>
                        <div class="icon"><img src="/img/villa/icon_point2.png" width="50" height="50" class="no-hover" alt="売れ筋No.2"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '3'): ?>
                        <div class="icon"><img src="/img/villa/icon_point3.png" width="50" height="50" class="no-hover" alt="売れ筋No.3"></div>
                        <?php endif; ?>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(post_custom('hotel_baligirl_rank')): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
            <?php if(post_custom('icon_disp_couple') || post_custom('icon_disp_family') || post_custom('icon_disp_girls')): ?>
            <ul class="icon_list">
            	<?php if(get_post_meta($post->ID,'icon_disp_couple',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon01.png" width="35" height="35" alt="カップル"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_family',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon02.png" width="35" height="35" alt="ファミリー"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_girls',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon03.png" width="35" height="35" alt="女子旅"></li>
                <?php endif; ?>
            </ul>
            <?php endif; ?>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="box size-m">

<?php $myposts = get_posts('category_name=villa-menjangan&meta_key=small_ranking&orderby=meta_value_num&offset=6&posts_per_page=10&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'small_ranking',true) == '5' || get_post_meta($post->ID,'small_ranking',true) == '10'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true)): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="page_top_link"><a href="#top">ページの先頭へ戻る</a></div>
</div><!--class=menjangan -->
</div>
<?php } ?>


<?php $postup = get_posts( 'villa-lovina' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title" id="lb_ttl">
<h2 class="lb_h2"><a href="/villa/list-lovina/">ロビナ</a></h2>
<div class="info_link"><a href="/lovina/"><img src="/img/villa/list_link_lovina.gif" width="208" height="18" alt="ロビナの基本情報はこちら"></a></div>
</div>
<div class="villa_list box">
<div class="lovina">
    <div class="box">

<?php $myposts = get_posts('category_name=villa-lovina&meta_key=disp_sort&orderby=meta_value_num&posts_per_page=6&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'ranking',true) == '3' || get_post_meta($post->ID,'ranking',true) == '6'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                        <?php if(get_post_meta($post->ID,'ranking',true) == '1'): ?>
                        <div class="icon"><img src="/img/villa/icon_point1.png" width="50" height="50" class="no-hover" alt="売れ筋No.1"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '2'): ?>
                        <div class="icon"><img src="/img/villa/icon_point2.png" width="50" height="50" class="no-hover" alt="売れ筋No.2"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '3'): ?>
                        <div class="icon"><img src="/img/villa/icon_point3.png" width="50" height="50" class="no-hover" alt="売れ筋No.3"></div>
                        <?php endif; ?>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(post_custom('hotel_baligirl_rank')): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
            <?php if(post_custom('icon_disp_couple') || post_custom('icon_disp_family') || post_custom('icon_disp_girls')): ?>
            <ul class="icon_list">
            	<?php if(get_post_meta($post->ID,'icon_disp_couple',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon01.png" width="35" height="35" alt="カップル"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_family',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon02.png" width="35" height="35" alt="ファミリー"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_girls',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon03.png" width="35" height="35" alt="女子旅"></li>
                <?php endif; ?>
            </ul>
            <?php endif; ?>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="box size-m">

<?php $myposts = get_posts('category_name=villa-lovina&meta_key=small_ranking&orderby=meta_value_num&offset=6&posts_per_page=10&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'small_ranking',true) == '5' || get_post_meta($post->ID,'small_ranking',true) == '10'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true)): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="page_top_link"><a href="#top">ページの先頭へ戻る</a></div>
</div><!--class=lovina -->
</div>
<?php } ?>


<?php $postup = get_posts( 'villa-yogyakarta' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title" id="yg_ttl">
<h2 class="yg_h2"><a href="/villa/list-yogyakarta/">ジョグジャカルタ</a></h2>
<div class="info_link"><a href="/yogyakarta/"><img src="/img/villa/list_link_yogyakarta.gif" width="278" height="18" alt="ジョグジャカルタの基本情報はこちら"></a></div>
</div>
<div class="villa_list box">
<div class="yogyakarta">
    <div class="box">

<?php $myposts = get_posts('category_name=villa-yogyakarta&meta_key=disp_sort&orderby=meta_value_num&posts_per_page=6&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'ranking',true) == '3' || get_post_meta($post->ID,'ranking',true) == '6'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                        <?php if(get_post_meta($post->ID,'ranking',true) == '1'): ?>
                        <div class="icon"><img src="/img/villa/icon_point1.png" width="50" height="50" class="no-hover" alt="売れ筋No.1"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '2'): ?>
                        <div class="icon"><img src="/img/villa/icon_point2.png" width="50" height="50" class="no-hover" alt="売れ筋No.2"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '3'): ?>
                        <div class="icon"><img src="/img/villa/icon_point3.png" width="50" height="50" class="no-hover" alt="売れ筋No.3"></div>
                        <?php endif; ?>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(post_custom('hotel_baligirl_rank')): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
            <?php if(post_custom('icon_disp_couple') || post_custom('icon_disp_family') || post_custom('icon_disp_girls')): ?>
            <ul class="icon_list">
            	<?php if(get_post_meta($post->ID,'icon_disp_couple',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon01.png" width="35" height="35" alt="カップル"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_family',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon02.png" width="35" height="35" alt="ファミリー"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_girls',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon03.png" width="35" height="35" alt="女子旅"></li>
                <?php endif; ?>
            </ul>
            <?php endif; ?>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="box size-m">

<?php $myposts = get_posts('category_name=villa-yogyakarta&meta_key=small_ranking&orderby=meta_value_num&offset=6&posts_per_page=10&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'small_ranking',true) == '5' || get_post_meta($post->ID,'small_ranking',true) == '10'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true)): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="page_top_link"><a href="#top">ページの先頭へ戻る</a></div>
</div><!--class=yogyakarta -->
</div>
<?php } ?>


<?php $postup = get_posts( 'villa-lombok' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title" id="lmb_ttl">
<h2 class="lmb_h2"><a href="/villa/list-lombok/">ロンボク島</a></h2>
<div class="info_link"><a href="/lombok/"><img src="/img/villa/list_link_lombok.gif" width="236" height="18" alt="ロンボク島の基本情報はこちら"></a></div>
</div>
<div class="villa_list box">
<div class="lombok">
    <div class="box">

<?php $myposts = get_posts('category_name=villa-lombok&meta_key=disp_sort&orderby=meta_value_num&posts_per_page=6&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'ranking',true) == '3' || get_post_meta($post->ID,'ranking',true) == '6'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                        <?php if(get_post_meta($post->ID,'ranking',true) == '1'): ?>
                        <div class="icon"><img src="/img/villa/icon_point1.png" width="50" height="50" class="no-hover" alt="売れ筋No.1"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '2'): ?>
                        <div class="icon"><img src="/img/villa/icon_point2.png" width="50" height="50" class="no-hover" alt="売れ筋No.2"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '3'): ?>
                        <div class="icon"><img src="/img/villa/icon_point3.png" width="50" height="50" class="no-hover" alt="売れ筋No.3"></div>
                        <?php endif; ?>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(post_custom('hotel_baligirl_rank')): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
            <?php if(post_custom('icon_disp_couple') || post_custom('icon_disp_family') || post_custom('icon_disp_girls')): ?>
            <ul class="icon_list">
            	<?php if(get_post_meta($post->ID,'icon_disp_couple',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon01.png" width="35" height="35" alt="カップル"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_family',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon02.png" width="35" height="35" alt="ファミリー"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_girls',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon03.png" width="35" height="35" alt="女子旅"></li>
                <?php endif; ?>
            </ul>
            <?php endif; ?>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="box size-m">

<?php $myposts = get_posts('category_name=villa-lombok&meta_key=small_ranking&orderby=meta_value_num&offset=6&posts_per_page=10&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'small_ranking',true) == '5' || get_post_meta($post->ID,'small_ranking',true) == '10'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true)): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="page_top_link"><a href="#top">ページの先頭へ戻る</a></div>
</div><!--class=lombok -->
</div>
<?php } ?>


<?php $postup = get_posts( 'villa-lembongan' ); ?>
<?php if ($postup){ /*記事があれば表示*/ ?>
<div class="h2_title" id="lem_ttl">
<h2 class="lem_h2"><a href="/villa/list-lembongan/">レンボンガン島</a></h2>
<div class="info_link"><a href="/lembongan/"><img src="/img/villa/list_link_lembongan.gif" width="264" height="18" alt="レンボンガン島の基本情報はこちら"></a></div>
</div>
<div class="villa_list box">
<div class="lembongan">
    <div class="box">

<?php $myposts = get_posts('category_name=villa-lembongan&meta_key=disp_sort&orderby=meta_value_num&posts_per_page=6&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'ranking',true) == '3' || get_post_meta($post->ID,'ranking',true) == '6'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                        <?php if(get_post_meta($post->ID,'ranking',true) == '1'): ?>
                        <div class="icon"><img src="/img/villa/icon_point1.png" width="50" height="50" class="no-hover" alt="売れ筋No.1"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '2'): ?>
                        <div class="icon"><img src="/img/villa/icon_point2.png" width="50" height="50" class="no-hover" alt="売れ筋No.2"></div>
                        <?php elseif(get_post_meta($post->ID,'ranking',true) == '3'): ?>
                        <div class="icon"><img src="/img/villa/icon_point3.png" width="50" height="50" class="no-hover" alt="売れ筋No.3"></div>
                        <?php endif; ?>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(post_custom('hotel_baligirl_rank')): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
            <?php if(post_custom('icon_disp_couple') || post_custom('icon_disp_family') || post_custom('icon_disp_girls')): ?>
            <ul class="icon_list">
            	<?php if(get_post_meta($post->ID,'icon_disp_couple',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon01.png" width="35" height="35" alt="カップル"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_family',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon02.png" width="35" height="35" alt="ファミリー"></li>
                <?php endif; ?>
            	<?php if(get_post_meta($post->ID,'icon_disp_girls',true) == '表示'): ?>
            	<li><img src="/img/villa/list_osusume_icon03.png" width="35" height="35" alt="女子旅"></li>
                <?php endif; ?>
            </ul>
            <?php endif; ?>
        </div>
        
<?php endforeach; ?>
    </div>
    
    <div class="box size-m">

<?php $myposts = get_posts('category_name=villa-lembongan&meta_key=small_ranking&orderby=meta_value_num&offset=6&posts_per_page=10&order=ASC');/*VILLA記事リスティング ベスト6*/ ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    	<?php if(get_post_meta($post->ID,'small_ranking',true) == '5' || get_post_meta($post->ID,'small_ranking',true) == '10'): ?>
        <div class="list mr0">
        <?php else : ?>
        <div class="list">
        <?php endif; ?>
            <div class="list_img">
            	<a href="<?php the_permalink(); ?>" target="_top">
                	<?php if(post_custom('light_hotel_image')): ?>
                	<img width="210" height="140" src="<?php echo post_custom('light_hotel_image'); ?>" class="no-hover" alt="<?php the_title(); ?>" />
                    <?php else : ?>
					<?php the_post_thumbnail('full', array( 'class' => 'no-hover' )); ?>
                    <?php endif; ?>
                    <div class="list_name">
                        <p><?php echo post_custom('light_hotel_catch_copy'); ?></p>
                        <h3><?php the_title(); ?></h3>
                    </div>
            	</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>タイプ</th>
                <td><?php echo post_custom('light_hotel_type'); ?></td>
              </tr>
              <tr>
                <th>バリガールランク</th>
                <td><?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true)): ?>
						<?php if(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '1'): ?>
                        <img src="/img/villa/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星" class="rank1">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2'): ?>
                        <img src="/img/villa/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星" class="rank2">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3'): ?>
                        <img src="/img/villa/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星" class="rank3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4'): ?>
                        <img src="/img/villa/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星" class="rank4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '5'): ?>
                        <img src="/img/villa/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星" class="rank5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-3'): ?>
                        <img src="/img/villa/osusume_rank2-3_s.jpg" width="89" height="12" alt="2〜3つ星" class="rank2-3">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-4'): ?>
                        <img src="/img/villa/osusume_rank2-4_s.jpg" width="104" height="12" alt="2〜4つ星" class="rank2-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '2-5'): ?>
                        <img src="/img/villa/osusume_rank2-5_s.jpg" width="119" height="12" alt="2〜5つ星" class="rank2-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-4'): ?>
                        <img src="/img/villa/osusume_rank3-4_s.jpg" width="119" height="12" alt="3〜4つ星" class="rank3-4">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '3-5'): ?>
                        <img src="/img/villa/osusume_rank3-5_s.jpg" width="133" height="12" alt="3〜5つ星" class="rank3-5">
                        <?php elseif(get_post_meta($post->ID,'hotel_baligirl_rank',true) == '4-5'): ?>
                        <img src="/img/villa/osusume_rank4-5_s.jpg" width="148" height="12" alt="4〜5つ星" class="rank4-5">
                        <?php endif; ?>
                    <?php endif; ?></td>
              </tr>
            </table>
        </div>
        
<?php endforeach; ?>
    </div>
</div><!--class=lembongan -->
</div>
<?php } ?>
</div><!--class=box -->



<?php /*-----------------------*/?>
<?php /*-------optional--------*/?>
<?php /*-----------------------*/?>
<?php elseif(in_category('optional')): ?>
<div id="detaile_h"></div>
<div id="detail">
<div id="h1_title"><h1>バリをより楽しむオプショナルツアー。</h1></div>
<div id="h2_title"><h2>おすすめアクティビティ オプショナル optional</h2></div>

<div id="op_navi">
<ul class="op_sc_navi">
<!--<li id="op20"><a href="#20th">20周年記念 オプショナルツアー</a></li>-->
<li><a href="#osusume">プルメリアおすすめ</a></li>
<li><a href="#balikanko">バリ１日観光</a></li>
<li><a href="#balihalfday">バリ半日観光</a></li>
<li><a href="#ubudkanko">ウブド観光</a></li>
<li><a href="#mountainandriver">山・川遊び</a></li>
<li><a href="#cruise">クルーズ</a></li>
</ul>
<ul class="op_sc_navi">
<li><a href="#marineactivity">マリンアクティビティ</a></li>
<li><a href="#diving">ダイビング</a></li>
<li><a href="#mealmain">お食事メイン</a></li>
<li><a href="#themepark">テーマパーク</a></li>
<li><a href="#golf">ゴルフ</a></li>
<!--<li><a href="#firstday-type1">到着日プラン（お部屋利用）</a></li>-->
</ul>
<ul class="op_sc_navi">
<!--<li><a href="#firstday-type2">到着日プラン（お部屋利用なし）</a></li>-->
<li><a href="#finalday-type1">最終日の過ごし方（お部屋利用）</a></li>
<li><a href="#finalday-type2">最終日の過ごし方（お部屋利用なし）</a></li>
</ul>
<ul class="op_sc_navi">
<li><a href="#romanticdinner">ロマンティックディナー</a></li>
<li><a href="#op-wedding">ウェディング</a></li>
<li><a href="#otherislands">他島へ</a></li>
<li><a href="#exercise">お稽古</a></li>
<li><a href="#balitradition">バリ伝統芸能鑑賞</a></li>
</ul>
</div>

<script type="text/javascript">
function setEqualHeight(columns){
    var tallestcolumn = 0;
    columns.each(
    function(){
        currentHeight = $(this).height();
        if(currentHeight > tallestcolumn){
            tallestcolumn = currentHeight;

        }
    });
    columns.height(tallestcolumn);
 }
$(document).ready(function() {
    setEqualHeight($(".optional_list > .box  > div"));
});
</script>

<!--
<div class="optional_list" id="20th">
<h3 style="background-color:#9B1815;">20周年記念 オプショナルツアー</h3>
<div class="box">
<?php $myposts = get_posts('category_name=20th&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div>
-->
<div class="optional_list" id="osusume">
<h3>プルメリアおすすめ</h3>
<div class="box">
<?php $myposts = get_posts('category_name=osusume&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div>

<div class="optional_list" id="balikanko">
<h3>バリ１日観光</h3>
<div class="box">
<?php $myposts = get_posts('category_name=balikanko&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div>

<div class="optional_list" id="balihalfday">
<h3>バリ半日観光</h3>
<div class="box">
<?php $myposts = get_posts('category_name=balihalfday&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div>

<div class="optional_list" id="ubudkanko">
<h3>ウブド観光</h3>
<div class="box">
<?php $myposts = get_posts('category_name=ubudkanko&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div>

<div class="optional_list" id="mountainandriver">
<h3>山・川遊び</h3>
<div class="box">
<?php $myposts = get_posts('category_name=mountainandriver&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div>

<div class="optional_list" id="cruise">
<h3>クルーズ</h3>
<div class="box">
<?php $myposts = get_posts('category_name=cruise&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div>

<div class="optional_list" id="marineactivity">
<h3>マリンアクティビティ</h3>
<div class="box">
<?php $myposts = get_posts('category_name=marineactivity&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div>

<div class="optional_list" id="diving">
<h3>ダイビング</h3>
<div class="box">
<?php $myposts = get_posts('category_name=diving&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div>

<div class="optional_list" id="mealmain">
<h3>お食事メイン</h3>
<div class="box">
<?php $myposts = get_posts('category_name=mealmain&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div>

<div class="optional_list" id="themepark">
<h3>テーマパーク</h3>
<div class="box">
<?php $myposts = get_posts('category_name=themepark&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div>

<div class="optional_list" id="golf">
<h3>ゴルフ</h3>
<div class="box">
<?php $myposts = get_posts('category_name=golf&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div>

<!-- <div class="optional_list" id="firstday-type1">
<h3>到着日プラン（お部屋利用）</h3>
<div class="box">
<?php $myposts = get_posts('category_name=firstday-type1&posts_per_page=100'); ?>

<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div> -->

<!-- <div class="optional_list" id="firstday-type2">
<h3>到着日プラン（お部屋利用なし）</h3>
<div class="box">
<?php $myposts = get_posts('category_name=firstday-type2&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div> -->

<div class="optional_list" id="finalday-type1">
<h3>最終日の過ごし方（お部屋利用）</h3>
<div class="box">
<?php $myposts = get_posts('category_name=finalday-type1&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div>

<div class="optional_list" id="finalday-type2">
<h3>最終日の過ごし方（お部屋利用なし）</h3>
<div class="box">
<?php $myposts = get_posts('category_name=finalday-type2&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div>

<div class="optional_list" id="romanticdinner">
<h3>ロマンティックディナー</h3>
<div class="box">
<?php $myposts = get_posts('category_name=romanticdinner&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div>

<div class="optional_list" id="op-wedding">
<h3>ウェディング</h3>
<div class="box">
<?php $myposts = get_posts('category_name=op-wedding&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div>

<div class="optional_list" id="otherislands">
<h3>他島へ</h3>
<div class="box">
<?php $myposts = get_posts('category_name=otherislands&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top" style="height:100px; overflow:hidden;"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div>
<!--
<div class="optional_list">
<h3>ヨガ</h3>
<div class="box">
<?php $myposts = get_posts('category_name=yoga&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div>
-->
<div class="optional_list" id="exercise">
<h3>お稽古</h3>
<div class="box">
<?php $myposts = get_posts('category_name=exercise&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div>

<div class="optional_list mb_0" id="balitradition">
<h3>バリ伝統芸能鑑賞</h3>
<div class="box">
<?php $myposts = get_posts('category_name=balitradition&posts_per_page=100'); ?>
<?php foreach($myposts as $post): ?>
	<?php setup_postdata($post); ?>
    <div class="left">
    <a href="<?php the_permalink(); ?>" target="_top"><?php $title= get_the_title(); the_post_thumbnail(array( 222,222 ),array( 'alt' =>$title, 'title' => $title)); ?></a>
	<a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
    <span><?php echo post_custom('copy'); ?></span>
    </div>
<?php endforeach; ?>
</div>
</div>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50" height="30" align="right" valign="top">&nbsp;</td>
    <td height="30">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="top">＜</td>
    <td>注意事項＞</td>
  </tr>
  <tr>
    <td align="right" valign="top">・</td>
    <td>ストラップのプレゼントは、旅工房のバリ島ツアーをご予約いただいたお客様限定となります。予めご了承くださいませ。</td>
  </tr>
  <tr>
    <td align="right" valign="top">・</td>
    <td>メールでのお申し込みは、日本ご出発３日前までにお願いいたします。（日曜・祝日を除く）<br />
      それ以降の直前のお申し込みは、旅工房までお電話にてご連絡ください。</td>
  </tr>
  <tr>
    <td align="right" valign="top">・</td>
    <td>海外支店から直接のご返信となるため、メールが届かないケースが稀にございます。<br />
      48時間以内にメール返信がない場合は、お手数ですが旅工房までご連絡お願いいたします。<br />
      （日曜・祝日を除く → 翌営業日以降の返信となります。）</td>
  </tr>
  <tr>
    <td align="right" valign="top">・</td>
    <td>こちらに記載のないオプショナル・スパでも手配可能な場合がございますので、是非お気軽にお問い合わせくださいませ。</td>
  </tr>
  <tr>
    <td align="right" valign="top">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="top">※</td>
    <td>現地支店（プルメリアバリ）営業時間</td>
  </tr>
  <tr>
    <td align="right" valign="top">&nbsp;</td>
    <td>[平日]9:00-17:00 <br />
      [土曜]9:00-14:00 日休<br />
      [祝日] ニュピ 2015年3月21日  ※また前日3月20日は12時までの営業となります。</td>
  </tr>
  <tr>
    <td align="right" valign="top">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </table>

<?php endif; ?>

<?php endif; ?>



</div><!-- id=detaile -->
<div id="detaile_f"></div>



</div><!-- #contents -->
<?php if(is_category('villa')): ?>
<?php else : ?>
<?php get_sidebar(); ?>
<?php endif; ?>
</div><!-- #container -->
<?php get_footer(); ?>

