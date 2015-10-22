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
<meta name="viewport" content="width=device-width" />
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







	?>
</title>
<?php

/* OGP設定 */

?>
<meta property="og:image" content="http://www.plbali.com/img/ogp_icon.gif" />
<meta property="og:title" content="バリ旅行の【バリガール】 | バリ島へのご旅行ならバリ・ガール【公式サイト】">
<?php if(is_category('list-villa')): ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】ヴィラ一覧ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php elseif(is_category('list-hotel')): ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】ホテル一覧ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php elseif(is_category('list-syllabary')): ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】リスト-五十音順ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php elseif(is_category('list-star')): ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】5つ星一覧ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php elseif(is_category('list-ubud')): ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】ウブド地区ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php elseif(is_category('list-semi')): ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】スミニャック/クロボカン地区ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php elseif(is_category('list-kuta')): ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】クタ/レギャン地区ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php elseif(is_category('list-jim')): ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】ジンバラン/ウルワツ地区ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php elseif(is_category('list-nusa')): ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】ヌサドゥア地区ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php elseif(is_category('list-sanur')): ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】サヌール地区ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php elseif(is_category('list-canggu')): ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】チャングー地区ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php elseif(is_category('list-candidasa')): ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】チャンディダサ（マンギス）地区ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php elseif(is_category('list-tanahlot')): ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】タナロット（タバナン）地区ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php elseif(is_category('list-menjangan')): ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】ムンジャンガン地区ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php elseif(is_category('list-lovina')): ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】ロビナ地区ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php elseif(is_category('list-yogyakarta')): ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】ジョグジャカルタ地区ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php elseif(is_category('list-lombok')): ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】ロンボク島地区ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php elseif(is_category('list-lembongan')): ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】レンボンガン島地区ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php elseif(is_category('list-other')): ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】その他の地域ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php elseif(is_category('list-staff')): ?>
<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】スタッフおすすめページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />
<?php endif; ?>
<META NAME="ROBOTS" CONTENT="NOODP">
<?php if(is_category('list-villa')): ?>
<meta name="keywords" content="バリ 旅行,ヴィラ一覧,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<?php elseif(is_category('list-hotel')): ?>
<meta name="keywords" content="バリ 旅行,ホテル一覧,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<?php elseif(is_category('list-syllabary')): ?>
<meta name="keywords" content="バリ 旅行,リスト-五十音順,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<?php elseif(is_category('list-star')): ?>
<meta name="keywords" content="バリ 旅行,5つ星一覧,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<?php elseif(is_category('list-ubud')): ?>
<meta name="keywords" content="バリ 旅行,ウブド地区,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<?php elseif(is_category('list-semi')): ?>
<meta name="keywords" content="バリ 旅行,スミニャック/クロボカン地区,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<?php elseif(is_category('list-kuta')): ?>
<meta name="keywords" content="バリ 旅行,クタ/レギャン地区,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<?php elseif(is_category('list-jim')): ?>
<meta name="keywords" content="バリ 旅行,ジンバラン/ウルワツ地区,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<?php elseif(is_category('list-nusa')): ?>
<meta name="keywords" content="バリ 旅行,ヌサドゥア地区,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<?php elseif(is_category('list-sanur')): ?>
<meta name="keywords" content="バリ 旅行,サヌール地区,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<?php elseif(is_category('list-canggu')): ?>
<meta name="keywords" content="バリ 旅行,チャングー地区,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<?php elseif(is_category('list-candidasa')): ?>
<meta name="keywords" content="バリ 旅行,チャンディダサ（マンギス）地区,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<?php elseif(is_category('list-tanahlot')): ?>
<meta name="keywords" content="バリ 旅行,タナロット（タバナン）地区,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<?php elseif(is_category('list-menjangan')): ?>
<meta name="keywords" content="バリ 旅行,ムンジャンガン地区,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<?php elseif(is_category('list-lovina')): ?>
<meta name="keywords" content="バリ 旅行,ロビナ地区,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<?php elseif(is_category('list-yogyakarta')): ?>
<meta name="keywords" content="バリ 旅行,ジョグジャカルタ地区,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<?php elseif(is_category('list-lombok')): ?>
<meta name="keywords" content="バリ 旅行,ロンボク島地区,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<?php elseif(is_category('list-lembongan')): ?>
<meta name="keywords" content="バリ 旅行,レンボンガン島地区,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<?php elseif(is_category('list-other')): ?>
<meta name="keywords" content="バリ 旅行,その他の地域,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<?php elseif(is_category('list-staff')): ?>
<meta name="keywords" content="バリ 旅行,スタッフおすすめ,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />
<?php endif; ?>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href="/css/global.css" rel="stylesheet" type="text/css" />
<link href="/css/slide_order.css" rel="stylesheet" type="text/css" />
<link href="/css/sidebar.css" rel="stylesheet" type="text/css" />
<?php if(is_category('list-villa') || is_category('list-hotel') || is_category('list-syllabary') || is_category('list-star') || is_category('list-ubud') || is_category('list-semi') || is_category('list-kuta') || is_category('list-jim') || is_category('list-nusa') || is_category('list-sanur') || is_category('list-canggu') || is_category('list-candidasa') || is_category('list-tanahlot') || is_category('list-menjangan') || is_category('list-lovina') || is_category('list-yogyakarta') || is_category('list-lombok') || is_category('list-lembongan') || is_category('list-other') || is_category('list-staff')): ?>
<link href="/css/list.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
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
<div id="h_logo">
<p><a href="http://www.plbali.com/"><img src="/img/logo.jpg" width="209" height="75" alt="バリ・ガール" /></a></p>
</div>
<div id="h_right">
<div id="h_read">
<?php if(is_category('list-villa')): ?>
<p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>
ヴィラ一覧</p>
<?php elseif(is_category('list-hotel')): ?>
<p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>
ホテル一覧</p>
<?php elseif(is_category('list-syllabary')): ?>
<p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>
リスト-五十音順</p>
<?php elseif(is_category('list-star')): ?>
<p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>
5つ星一覧</p>
<?php elseif(is_category('list-ubud')): ?>
<p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>
ウブド地区</p>
<?php elseif(is_category('list-semi')): ?>
<p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>
スミニャック/クロボカン地区</p>
<?php elseif(is_category('list-kuta')): ?>
<p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>
クタ/レギャン地区</p>
<?php elseif(is_category('list-jim')): ?>
<p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>
ジンバラン/ウルワツ地区</p>
<?php elseif(is_category('list-nusa')): ?>
<p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>
ヌサドゥア地区</p>
<?php elseif(is_category('list-sanur')): ?>
<p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>
サヌール地区</p>
<?php elseif(is_category('list-canggu')): ?>
<p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>
チャングー地区</p>
<?php elseif(is_category('list-candidasa')): ?>
<p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>
チャンディダサ（マンギス）地区</p>
<?php elseif(is_category('list-tanahlot')): ?>
<p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>
タナロット（タバナン）地区</p>
<?php elseif(is_category('list-menjangan')): ?>
<p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>
ムンジャンガン地区</p>
<?php elseif(is_category('list-lovina')): ?>
<p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>
ロビナ地区</p>
<?php elseif(is_category('list-yogyakarta')): ?>
<p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>
ジョグジャカルタ地区</p>
<?php elseif(is_category('list-lombok')): ?>
<p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>
ロンボク島地区</p>
<?php elseif(is_category('list-lembongan')): ?>
<p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>
レンボンガン島地区</p>
<?php elseif(is_category('list-other')): ?>
<p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>
その他の地域</p>
<?php elseif(is_category('list-staff')): ?>
<p>バリ島を知り尽くしたトラベル・コンシェルジュが、あなただけのバリ旅行をご提案｜<br>
スタッフおすすめ</p>
<?php endif; ?>
</div>
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

<?php if(is_category('list-villa') || is_category('list-hotel') || is_category('list-syllabary') || is_category('list-star') || is_category('list-ubud') || is_category('list-semi') || is_category('list-kuta') || is_category('list-jim') || is_category('list-nusa') || is_category('list-sanur') || is_category('list-canggu') || is_category('list-candidasa') || is_category('list-') || is_category('list-tanahlot') || is_category('list-tanahlot') || is_category('list-menjangan') || is_category('list-lovina') || is_category('list-yogyakarta') || is_category('list-lombok') || is_category('list-lembongan') || is_category('list-other') || is_category('list-staff')): ?>
<div id="villa">
<?php endif; ?>
<div id="gNavi">

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
