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



?><!DOCTYPE html>



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



<meta name="viewport" content="width=device-width" />



<title><?php



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



		echo " | $site_description";







	// Add a page number if necessary:



	if ( $paged >= 2 || $page >= 2 )



		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );







	?></title>





<?php

/* OGP設定 */

?>

<meta property="og:image" content="http://www.plbali.com/img/ogp_icon.gif" />



<?php if( is_page('top_search')): ?>



<meta name="description" content="一人一人のご旅行を大切に。バリ渡航歴がある専門スタッフがお客様のご旅行をお手配させて頂きます。バリでは、現地支店のスタッフがお客様のご旅行をサポート致します。特別なバリ旅行は、バリガールへご相談ください。" />



<?php elseif(is_page('side_search')): ?>



<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】<?php the_title(); ?>ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />



<?php endif; ?>

<META NAME="ROBOTS" CONTENT="NOODP">


<?php if( is_page('top_search')): ?>



<meta name="keywords" content="バリ 旅行,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />



<?php elseif(is_page('side_search')): ?>



<meta name="keywords" content="バリ 旅行,<?php the_title(); ?>,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />



<?php endif; ?>







<link rel="profile" href="http://gmpg.org/xfn/11" />



<link href="/css/global.css" rel="stylesheet" type="text/css" />




<link href="/css/sidebar2.css" rel="stylesheet" type="text/css" />





<?php if( is_page('top_search')): ?>



<link href="/css/top2.css" rel="stylesheet" type="text/css" />



<?php endif; ?>



<script language="javascript" type="text/javascript" src="/js/jquery.js"></script>


<script language="javascript" type="text/javascript" src="/js/fade.js"></script>



</script>



<?php if( is_page('top_search')): ?>



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






</head>







<body <?php body_class(); ?>>




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



<?php if( is_page('top_search')): ?>



<div id="h_logo"><h2><a href="http://www.plbali.com/"><img src="/img/logo.jpg" width="209" height="75" alt="バリ・ガール" /></a></h2></div>



<div id="h_right">



<div id="h_read"><h1>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案。</h1></div>


<?php else : ?>



<div id="h_logo"><p><a href="http://www.plbali.com/"><img src="/img/logo.jpg" width="209" height="75" alt="バリ・ガール" /></a></p></div>



<div id="h_right">



<div id="h_read"><p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>



<?php the_title(); ?></p></div>



<?php endif; ?>



<div id="h_dial"><img src="/img/h_dial.gif" alt="ナビダイヤル 03-5956-4170　06-4861-7263 営業時間 月〜金（10:00〜18:30）土（10:00〜15:00）日・祝（休み） bali@tabikobo.com" width="448" height="42" border="0" usemap="#Map2" />



<map name="Map2" id="Map2">



<area shape="rect" coords="318,29,449,42" href="mailto:bali@tabikobo.com" />



</map>



</div>



</div>



</div>



</div>







<!--個別ID設定-->







<?php if( is_page('top_search')): ?>



<div id="toppage">



<?php elseif(is_page('sq')): ?>



<div id="side_search">



<?php endif; ?>











<div id="gNavi">



<?php /*?><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?><?php */?>



<ul>



<li id="gNavi00"><a href="/order/">オーダーメイド ordermade</a></li>



<li id="gNavi01"><a href="/select/">セレクト select</a></li>



<li id="gNavi02"><a href="/villa/">ヴィラ・ホテル villa &amp; hotel</a></li>



<li id="gNavi03"><a href="/spa/">スパ SPA</a></li>



<li id="gNavi04"><a href="/optional/">オプショナル optional</a></li>



<li id="gNavi05"><a href="/wedding">ウェディング wedding</a></li>



</ul>



</div>



