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



<meta name="description" content="バリ島へのご旅行ならバリ・ガール【公式サイト】<?php the_title(); ?>ページ。バリ島を知り尽くしたトラベルコンシェルジュが、お客様一人一人のご希望に沿うよう、ご旅行を提案させていただきます。" />



<meta name="keywords" content="バリ 旅行,<?php the_title(); ?>,プルメリア・バリ,バリ島,海外旅行,ヴィラ,ホテル,スパ,ウェディング,バリ・ガール,株式会社旅工房" />








<link rel="profile" href="http://gmpg.org/xfn/11" />



<link href="/css/hotel_special.css" rel="stylesheet" type="text/css" />






<script language="javascript" type="text/javascript" src="/js/jquery.js"></script>


<script language="javascript" type="text/javascript" src="/js/fade.js"></script>


<script type="text/javascript" src="/js/jquery.carouFredSel-5.3.0-packed.js"></script>


<script type="text/javascript">


$(function () {
	
	
  $(".images").carouFredSel({
	  
	  
    items: 1,
	
	
    scroll: {
		
		
      fx: "crossfade",
	  
	  
      duration: 1000,
	  
	  
      pauseOnHover: "onMouseOverr",
	  
	  
    },
	
	
    auto: {
		
		
      pauseDuration: 5000,
	  
	  
    }
	
	
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










<body>


<div id="wrap">


<div id="header">


<div id="header_detail">


