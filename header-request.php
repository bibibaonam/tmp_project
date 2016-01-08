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
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
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
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<?php

/* OGP設定 */

?>
<meta property="og:image" content="http://www.plbali.com/img/ogp_icon.gif" />

<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】<?php the_title(); ?>ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<meta name="keywords" content="バリ 旅行,<?php the_title(); ?>,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href="/css/global.css" rel="stylesheet" type="text/css" />
<link href="/css/slide_order.css" rel="stylesheet" type="text/css" />

<!-- moved CSS start -->
<link href="/css/exvalidation.css" rel="stylesheet" type="text/css" />
<link href="/css/order.css" rel="stylesheet" type="text/css" />
<!-- moved CSS end -->

<!-- add new CSS start -->
<link href="/css/easy-responsive-tabs.css" type="text/css" rel="stylesheet">
<link href="/css/request_form.css" rel="stylesheet" type="text/css" />
<!-- add new CSS end -->



<script language="javascript" type="text/javascript" src="/js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="/js/fade.js"></script>
<script language="javascript" type="text/javascript" src="/js/jquery.blend.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#gNavi a").blend({
speed: 1000, //エフェクト速度
pulse: false //エフェクト選択
});
});
</script>
<script language="javascript" type="text/javascript" src="/js/jquery.page-scroller.js"></script>
</script>
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
<div style="position: absolute; left: 300px;" id="nn_banner"><a target="_blank" href="/request/"><img width="210" height="70" title="旅工房オリジナル「バリ島パンフレット」" alt="旅工房オリジナル「バリ島パンフレット」＜資料請求はこちらから＞" src="http://www.plbali.com/wp-content/uploads/2013/08/bnr_pdf_210x70B.jpg"></a></div>
<div id="h_logo"><p><a href="/"><img src="/img/logo.jpg" width="209" height="75" alt="バリ・ガール" /></a></p></div>
<div id="h_right">
<div id="h_read"><p>バリ島を知り尽くしたコンシェルジュがご対応。バリ島ツアーの専門店「バリ・ガール」｜<br>
<?php the_title(); ?></p></div>
<div id="h_dial"><img src="/img/h_dial.gif" alt="ナビダイヤル 03-5956-4170　06-4861-7263 営業時間 月〜金（10:00〜18:30）土（10:00〜15:00）日・祝（休み） bali@tabikobo.com" width="448" height="42" border="0" usemap="#Map2" />
<map name="Map2" id="Map2">
<area shape="rect" coords="318,29,449,42" href="mailto:bali@tabikobo.com" />
</map>
</div>
</div>
</div>
<div id="sitemapLink"><a href="/sitemap/"><img src="/img/h_site_map.gif" width="85" height="12" alt="サイトマップ"></a></div>
</div>
<!--個別ID設定-->
<div id="order">
<div id="gNavi">
<?php /*?><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?><?php */?>
<ul>
<li id="gNavi00"><a href="/order/">オーダーメイド ordermade</a></li>
<li id="gNavi01"><a href="/select/">セレクト select</a></li>
<li id="gNavi02"><a href="/villa/">ヴィラ・ホテル villa &amp; hotel</a></li>
<li id="gNavi03"><a href="/spa/">スパ SPA</a></li>
<li id="gNavi04"><a href="/optional/">オプショナル optional</a></li>
<li id="gNavi05"><a href="/wedding">ウェディング wedding</a></li>
<li id="gNavi06"><a href="http://blog.plbali.com/" target="_blank">ブログ blog</a></li>
</ul>
</div>



