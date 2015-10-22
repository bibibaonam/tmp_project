<?php



/**



 * The Header for our theme.



 *



 * Displays all of the <head> section and everything up till <div id="main">



 *



 * @package WordPress



 * @subpackage Twenty_Eleven



 * @since Twenty Eleven 1.0



 */



?>
<!DOCTYPE html>

<!--[if IE 6]>



<html id="ie6" <?php language_attributes(); ?>>



<![endif]-->

<!--[if IE 7]>



<html id="ie7" <?php language_attributes(); ?>>



<![endif]-->

<!--[if IE 8]>



<html id="ie8" <?php language_attributes(); ?>>



<![endif]-->

<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->

<html <?php language_attributes(); ?>>

<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php if(is_home() || is_front_page() || in_category('villa')): ?>
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<?php else : ?>
<meta name="viewport" content="width=device-width" />
<?php endif; ?>
<title>
<?php



	/*



	 * Print the <title> tag based on what is being viewed.



	 */



	global $page, $paged;







	wp_title( '|', true, 'right' );







	// Add the blog name.



	bloginfo( 'name' );







	// Add the blog description for the home/front page.



	$site_description = get_bloginfo( 'description', 'display' );



	if ( $site_description && ( is_home() || is_front_page() ) )



		echo " | バリ島へのご旅行はバリ・ガール";







	// Add a page number if necessary:



	if ( $paged >= 2 || $page >= 2 )



		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );







	?>
</title>
<?php

/* OGP設定 */

?>
<meta property="og:image" content="http://www.plbali.com/img/ogp_icon.gif" />
<meta property="og:title" content="バリ島旅行・ツアー情報 | バリ島へのご旅行はバリ・ガール">
<?php if( is_home() || is_front_page()): ?>
<meta name="description" content="一人一人のご旅行を大切に。バリ渡航歴がある専門スタッフがお客様のご旅行をお手配させて頂きます。バリでは、現地支店のスタッフがお客様のご旅行をサポート致します。特別なバリ島旅行は、バリガールへご相談ください。" />
<?php elseif(is_category('villa')): ?>
<meta name="description" content="海、山、自然、エリアごとに個性あふれるバリ・ガールおすすめのヴィラ＆ホテルを紹介。" />
<?php elseif(is_category('spa')): ?>
<meta name="description" content="至福の癒しスパ。憧れの花びらいっぱいのバスタブも、毎日スパ三昧も、バリ島だから、プチプライス。" />
<?php elseif(is_category('optional')): ?>
<meta name="description" content="バリで何する？バリの魅力をより満喫するための、とっておきなオプショナルツアーをご用意。" />
<?php elseif(is_page('order')): ?>
<meta name="description" content="バリ島を知り尽くしたコンシェルジェが、オンリーワンのこだわり旅をお手伝い。あなたのわがままお聞かせください。" />
<?php elseif(is_page('select')): ?>
<meta name="description" content="ウブド＆ビーチ、オリジナル特典付、お勧めホテルなど、バリ・ガールにしかない、お得に旅する特集をご紹介。" />
<?php else : ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール<?php the_title(); ?>ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php endif; ?>
<META NAME="ROBOTS" CONTENT="NOODP">
<?php if( is_home() || is_front_page()): ?>
<meta name="keywords" content="バリ,旅行,ツアー,バリガール,旅工房" />
<?php elseif(is_category('villa')): ?>
<meta name="keywords" content="バリ 旅行,ヴィラ・ホテル,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール" />
<?php elseif(is_category('spa')): ?>
<meta name="keywords" content="バリ 旅行,スパ,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール" />
<?php elseif(is_category('optional')): ?>
<meta name="keywords" content="バリ 旅行,オプショナル,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール" />
<?php else : ?>
<meta name="keywords" content="バリ 旅行,<?php the_title(); ?>,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール" />
<?php endif; ?>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php if(in_category('villa')): ?>
<?php if(is_single('padma-resort-bali-at-legian')): ?>
<link href="/css/global-res.css" rel="stylesheet" type="text/css" />
<?php elseif(is_category('villa')): ?>
<link href="/css/global-res.css" rel="stylesheet" type="text/css" />
<?php else : ?>
<link href="/css/global.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<?php elseif( is_home() || is_front_page()): ?>
<link href="/css/global-res.css" rel="stylesheet" type="text/css" />
<?php else : ?>
<link href="/css/global.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<link href="/css/slide_order.css" rel="stylesheet" type="text/css" />
<?php if(is_page('bali_100') || is_page('ubud_beach') || is_page('gw') || is_page('sq')): ?>
<?php else : ?>
<link href="/css/sidebar.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<?php if( is_home() || is_front_page()): ?>
<link href="/css/top.css" rel="stylesheet" type="text/css" />
<?php elseif(is_page('order')): ?>
<link href="/css/order.css" rel="stylesheet" type="text/css" />
<?php elseif(is_page('select') || is_page('select_test')): ?>
<link href="/css/select.css" rel="stylesheet" type="text/css" />
<?php elseif(is_page('ubud') || is_page('seminyak-kerobokan') || is_page('kuta-legian') || is_page('jimbaran-uluwatu') || is_page('nusadua') || is_page('sanur') || is_page('canggu') || is_page('candidasa') || is_page('tanahlot') || is_page('menjangan') || is_page('lovina') || is_page('yogyakarta') || is_page('lombok') || is_page('lembongan')): ?>
<link href="/css/city.css" rel="stylesheet" type="text/css" />
<?php elseif(in_category('villa')): ?>
<?php if(is_single()): ?>
<?php if ( $paged >= 2 || $page >= 2 ): ?>
<link href="/css/villa-single.css" rel="stylesheet" type="text/css" />
<?php else : ?>
<?php if(is_single('padma-resort-bali-at-legian')): ?>
<link href="/css/villa-single.css" rel="stylesheet" type="text/css" />
<?php else : ?>
<link href="/css/villa.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<?php endif; ?>
<?php elseif(is_category('villa')): ?>
<link href="/css/villa-cat.css" rel="stylesheet" type="text/css" />
<?php else : ?>
<link href="/css/villa.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<link href="/css/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" />
<?php elseif(in_category('spa')): ?>
<link href="/css/spa.css" rel="stylesheet" type="text/css" />
<link href="/css/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" />
<?php elseif(in_category('optional')): ?>
<link href="/css/optional.css" rel="stylesheet" type="text/css" />
<link href="/css/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" />
<?php elseif(is_page('wedding')): ?>
<link href="/css/wedding.css" rel="stylesheet" type="text/css" />
<link href="/js/fancybox/jquery.fancybox-1.3.1.css" rel="stylesheet" type="text/css" />
<?php elseif(is_page('search') || is_page('search_detail')): ?>
<link href="/css/search.css" rel="stylesheet" type="text/css" />
<?php elseif(is_page('sitemap')): ?>
<link href="/css/sitemap.css" rel="stylesheet" type="text/css" />
<?php elseif(is_page('faq')): ?>
<link href="/css/faq.css" rel="stylesheet" type="text/css" />

<?php elseif(is_page('t-faq')): ?>
<link href="/css/t-faq.css" rel="stylesheet" type="text/css" />

<?php elseif(is_404()): ?>
<link href="/css/notfound.css" rel="stylesheet" type="text/css" />
<?php elseif(is_page('bali_100')): ?>
<link href="/css/bali_100.css" rel="stylesheet" type="text/css" />
<?php elseif(is_page('ubud_beach')): ?>
<link href="/css/ubud_beach.css" rel="stylesheet" type="text/css" />
<?php elseif(is_page('gw')): ?>
<link href="/css/gw.css" rel="stylesheet" type="text/css" />
<?php elseif(is_page('sq')): ?>
<link href="/css/sq.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/humanity/jquery-ui.css" />
<script language="javascript" type="text/javascript" src="/js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="/js/jquery.ah-placeholder.js"></script>
<script>
$(function(){
<?php if(strstr($_SERVER['REQUEST_URI'], '/order/')): ?>
  $('textarea#message').ahPlaceholder({
    placeholderColor : 'gray',
    placeholderAttr : 'placeholder',
    likeApple : false
  });
<?php endif; ?>
  $('textarea#side_message').ahPlaceholder({
    placeholderColor : 'gray',
    placeholderAttr : 'placeholder',
    likeApple : false
  });
});
</script>

<?php if( is_home() || is_front_page()): ?>
<script language="javascript" type="text/javascript" src="/js/top.js"></script>
<?php endif; ?>

<?php if(is_page('bali_100')): ?>
<script language="javascript" type="text/javascript" src="/js/fade_bali100.js"></script>
<?php else : ?>
<script language="javascript" type="text/javascript" src="/js/fade.js"></script>
<?php endif; ?>

<script language="javascript" type="text/javascript" src="/js/jquery.blend.js"></script>

<?php if(is_page('bali_100')): ?>
<script type="text/javascript">



$(document).ready(function(){



$("#gNavi a,.tablist li a").blend({



speed: 1000, //エフェクト速度



pulse: false //エフェクト選択



});



});


<?php else : ?>



<script type="text/javascript">



$(document).ready(function(){



$("#gNavi a").blend({



speed: 1000, //エフェクト速度



pulse: false //エフェクト選択



});



});

<?php endif; ?>




</script>
<?php if( is_home() || is_front_page()): ?>
<script type="text/javascript" src="/js/jquery.carouFredSel-5.3.0-packed.js"></script>
<script type="text/javascript">



$(function () {



  $("#images").carouFredSel({



    items: 1,



    scroll: {



      fx: "crossfade",



      duration: 1200,



      pauseOnHover: "onMouseOverr",



    },



    auto: {



      pauseDuration: 8500,



    },



    pagination: {



      container: "#keyViewThumbs",



      anchorBuilder: function (nr, item) {



        var src = $("img", item).attr("src");



        src = src.replace("/large/", "/small/");



        return '<img src="' + src + '" width="70" />';



      }



    }



  });



});



</script>
<?php elseif(in_category('villa') || in_category('spa')): ?>
<script language="javascript" type="text/javascript" src="/js/tab.js"></script>
<script type="text/javascript" src="/js/jquery.lightbox-0.5.js"></script>
<?php if(is_single('padma-resort-bali-at-legian')): ?>
<script type="text/javascript">



$(function() {



  $('#rooms .photo a').lightBox();



});



</script>
<?php else : ?>
<script type="text/javascript">



$(function() {



  $('#photo a,#room_list a,#restaurant .left a').lightBox();



});



</script>
<?php endif; ?>

<script type="text/javascript">


<!--


function disp(url){


	window.open(url, "window_name", "width=530,height=375,scrollbars=yes");


}


// -->


</script>
<?php elseif(in_category('optional')): ?>
<script type="text/javascript" src="/js/jquery.lightbox-0.5.js"></script>
<script type="text/javascript">



$(function() {



  $('#photo_list a').lightBox();



});



</script>
<?php elseif(is_page('wedding')): ?>
<script type="text/javascript">



$("div.galleryBox div.btnThmb a").live('click', function(){



	var getImgId,



		getThmbId = $(this).attr('href').replace('#', '');



	$(this).parent().parent().parent().parent().find('div.imgBig ul li').hide().each(function(){



		getImgId = $(this).attr('id');



		if(getImgId == getThmbId) $(this).fadeIn();



	});



	return false;



});



</script>
<script language="javascript" type="text/javascript" src="/js/fancybox/jquery.fancybox-1.3.1.js"></script>
<script language="javascript" type="text/javascript">



jQuery(function($) {



	$("a[href=#inquiry]")



		.live("click", function(event) {



			return false;



		})



		.fancybox({



			modal: true,



			titleShow: false,



			transitionIn: "fade",



			transitionOut: "fade",



			autoScale: false,



			onStart: function() {



				$("#inquiry").css({ display: "inline-block" });



			},



			onCleanup: function() {



				$("#inquiry").css({ display: "none" });



			}



		});



});



</script>
<script language="javascript" type="text/javascript">



$(".lightBoxClose")



.live("click", function(event) {



	$.fancybox.close();



	return false;



});



</script>
<?php elseif(is_page('sq')): ?>
<script language="javascript" type="text/javascript" src="/js/tab.js"></script>
<?php endif; ?>

<?php if(is_tag()): ?>
<script type="text/javascript">
location.replace('/');
</script>
<meta http-equiv="Refresh" content="0; URL=/" />
<?php elseif(is_category('bali-news') || is_category('hotel-news')): ?>
<script type="text/javascript">
location.replace('/');
</script>
<meta http-equiv="Refresh" content="0; URL=/" />
<?php elseif(in_category('bali-news') || in_category('hotel-news')): ?>
<?php if(is_single()): ?>
<script type="text/javascript">
location.replace('/');
</script>
<meta http-equiv="Refresh" content="0; URL=/" />
<?php endif; ?>
<?php endif; ?>

<?php if(is_single('padma-resort-bali-at-legian')): ?>
<?php if ( $paged >= 2 || $page >= 2 ): ?>
<?php else : ?>
<script type="text/javascript" src="/js/villa-single.js"></script>
<?php endif; ?>
<?php endif; ?>

<script language="javascript" type="text/javascript" src="/js/jquery.page-scroller.js"></script>
<script type="text/javascript">



	virtualTop  = 0;



</script>
<script type="text/javascript">



  window.___gcfg = {lang: 'ja'};







  (function() {



    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;



    po.src = 'https://apis.google.com/js/plusone.js';



    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);



  })();



</script>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>



<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>



<![endif]-->

<?php



	/* We add some JavaScript to pages with the comment form



	 * to support sites with threaded comments (when in use).



	 */



	if ( is_singular() && get_option( 'thread_comments' ) )



		wp_enqueue_script( 'comment-reply' );







	/* Always have wp_head() just before the closing </head>



	 * tag of your theme, or you will break many plugins, which



	 * generally use this hook to add elements to <head> such



	 * as styles, scripts, and meta tags.



	 */



	wp_head();



?>
<?php if( is_home() || is_front_page()): ?>
<?php endif; ?>

</head>

<body <?php body_class(); ?>>
<?php if( is_home() || is_front_page()): ?>


<?php endif; ?>
<?php /*-------facebook*/ ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {



  var js, fjs = d.getElementsByTagName(s)[0];



  if (d.getElementById(id)) return;



  js = d.createElement(s); js.id = id;



  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=367717319905508";



  fjs.parentNode.insertBefore(js, fjs);



}(document, 'script', 'facebook-jssdk'));</script>
<div id="wrap">
<div id="header">
<div id="header_detail">
<div style="position: absolute; left: 300px;" id="nn_banner"><a target="_blank" href="/request/"><img width="210" height="70" title="旅工房オリジナル「バリ島パンフレット」" alt="旅工房オリジナル「バリ島パンフレット」＜資料請求はこちらから＞" src="http://www.plbali.com/wp-content/uploads/2013/08/bnr_pdf_210x70B.jpg"></a></div>
<?php if( is_home() || is_front_page()): ?>
<div id="h_logo">
<h2><a href="http://www.plbali.com/"><img src="/img/logo.jpg" width="209" height="75" alt="バリ・ガール" /></a></h2>
</div>
<div id="h_right">
<div id="h_read">
<h1>バリ島を知り尽くしたコンシェルジュがご対応。バリ島ツアーの専門店「バリ・ガール」</h1>
</div>
<?php elseif(is_category('villa')): ?>
<div id="h_logo">
<p><a href="http://www.plbali.com/"><img src="/img/logo.jpg" width="209" height="75" alt="バリ・ガール" /></a></p>
</div>
<div id="h_right">
<div id="h_read">
<p>バリ島を知り尽くしたコンシェルジュがご対応。バリ島ツアーの専門店「バリ・ガール」｜<br>
ヴィラ・ホテル</p>
</div>
<?php elseif(is_category('spa')): ?>
<div id="h_logo">
<p><a href="http://www.plbali.com/"><img src="/img/logo.jpg" width="209" height="75" alt="バリ・ガール" /></a></p>
</div>
<div id="h_right">
<div id="h_read">
<p>バリ島を知り尽くしたコンシェルジュがご対応。バリ島ツアーの専門店「バリ・ガール」｜<br>
スパ</p>
</div>
<?php elseif(is_category('optional')): ?>
<div id="h_logo">
<p><a href="http://www.plbali.com/"><img src="/img/logo.jpg" width="209" height="75" alt="バリ・ガール" /></a></p>
</div>
<div id="h_right">
<div id="h_read">
<p>バリ島を知り尽くしたコンシェルジュがご対応。バリ島ツアーの専門店「バリ・ガール」｜<br>
オプショナル</p>
</div>
<?php else : ?>
<div id="h_logo">
<p><a href="http://www.plbali.com/"><img src="/img/logo.jpg" width="209" height="75" alt="バリ・ガール" /></a></p>
</div>
<div id="h_right">
<div id="h_read">
<p>バリ島を知り尽くしたコンシェルジュがご対応。バリ島ツアーの専門店「バリ・ガール」｜<br>
<?php the_title(); ?>
</p>
</div>
<?php endif; ?>
<div id="h_dial"><img src="/img/h_dial.gif" alt="ナビダイヤル 03-5956-4170　06-4861-7263 営業時間 月〜金（10:00〜18:30）土（10:00〜15:00）日・祝（休み） bali@tabikobo.com" width="448" height="42" border="0" usemap="#Map2" />
<map name="Map2" id="Map2">
<area shape="rect" coords="43,0,222,24" href="tel:0359564170">
<area shape="rect" coords="283,0,462,24" href="tel:0648617263">
<area shape="rect" coords="318,29,449,42" href="mailto:bali@tabikobo.com" />
</map>
</div>
</div>
</div>
<div id="sitemapLink"><a href="/sitemap/"><img src="/img/h_site_map.gif" width="85" height="12" alt="サイトマップ"></a></div>
</div>

<!--個別ID設定-->

<?php if( is_home() || is_front_page()): ?>
<div id="toppage">
<?php elseif(is_page('order') || is_page('request')): ?>
<div id="order">
<?php elseif(is_page('select') || is_page('select_test')): ?>
<div id="select">
<?php elseif(in_category('specials')): ?>
<div id="special">
<?php elseif(is_page('ubud') || is_page('seminyak-kerobokan') || is_page('kuta-legian') || is_page('jimbaran-uluwatu') || is_page('nusadua') || is_page('sanur') || is_page('canggu') || is_page('candidasa') || is_page('tanahlot') || is_page('menjangan') || is_page('lovina') || is_page('yogyakarta') || is_page('lombok') || is_page('lembongan')): ?>
<div id="city">
<?php elseif(in_category('villa')): ?>
<div id="villa">
<?php elseif(in_category('spa')): ?>
<div id="spa">
<?php elseif(in_category('optional')): ?>
<div id="optional">
<?php elseif(is_page('wedding')): ?>
<div id="wedding">
<?php elseif(is_page('search') || is_page('search_detail')): ?>
<div id="search">
<?php elseif(is_page('sitemap')): ?>
<div id="sitemap">
<?php elseif(is_page('faq')): ?>
<div id="faq">

<?php elseif(is_page('t-faq')): ?>
<div id="t-faq">

<?php elseif(is_404()): ?>
<div id="notfound">
<?php elseif(is_page('bali_100')): ?>
<div id="bali_100">
<?php elseif(is_page('ubud_beach')): ?>
<div id="ubud_beach">
<?php elseif(is_page('gw')): ?>
<div id="gw">
<?php elseif(is_page('sq')): ?>
<div id="sq">
<?php else : ?>
<div>
<?php endif; ?>
<div id="gNavi">
<?php /*?><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?><?php */?>
<ul>
<li id="gNavi00"><a href="https://www.tabikobo.net/form/bali-girl/order/">オーダーメイド ordermade</a></li>
<li id="gNavi01"><a href="/select/">セレクト select</a></li>
<li id="gNavi02"><a href="/villa/">ヴィラ・ホテル villa &amp; hotel</a></li>
<li id="gNavi03"><a href="/spa/">スパ SPA</a></li>
<li id="gNavi04"><a href="/optional/">オプショナル optional</a></li>
<li id="gNavi05"><a href="/wedding/">ウェディング wedding</a></li>
<li id="gNavi06"><a href="http://blog.plbali.com/" target="_blank">ブログ blog</a></li>
</ul>
</div>

<?php if( is_home() || is_front_page() || is_single('padma-resort-bali-at-legian')): ?>
<div id="gNaviSp">
<ul>
<li id="gNaviSp00"><a href="https://www.tabikobo.net/form/bali-girl/order/">オーダー<br>メイド<span>ordermade</span></a></li>
<li id="gNaviSp01"><a href="/villa/">ヴィラ・<br>ホテル<span>villa &amp; hotel</span></a></li>
<li id="gNaviSp02"><a href="/spa/">スパ<span>SPA</span></a></li>
<li id="gNaviSp03"><a href="/optional/">オプショ<br>ナル<span>optional</span></a></li>
<li id="gNaviSp04"><a href="/wedding/">ウェディ<br>ング<span>wedding</span></a></li>
<li id="gNaviSp05"><a href="http://blog.plbali.com/" target="_blank">ブログ<span>blog</span></a></li>
</ul>
</div>
<?php endif; ?>