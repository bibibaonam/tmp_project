<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div id="container">
<div id="contents">
				<?php get_breadcrumbs(); ?>
                <?php if(is_page('order')): ?>
                <div id="h1_title"><h1>ORDER MADE　トラベル・コンシェルジュが、こだわりの旅をお手伝い。お見積もりお問い合わせフォームあなたのわがままを、お聞かせください！</h1></div>
                <?php elseif(is_page('request')): ?>
                <div id="h1_title"><h1>バリ島パンフレット資料請求フォーム</h1></div>
                <?php elseif(is_page('faq')): ?>
                <div id="h1_title"><h1>FAQ よくあるご質問はこちら</h1></div>
                <?php else : ?>
                <div id="detaile_h"></div>
                <?php endif; ?>
                
                <div id="detail">
				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>
                
                </div><!-- id=detaile -->
                <div id="detaile_f"></div>
                
</div><!-- #contents -->
<?php
			$post = $wp_query->get_queried_object();

			if ( $post->post_name == 'wedding' || $post->post_name == 'requestXX' ){
				/* サイドバーなし */
			} else {
				get_sidebar();
			}
?>
</div><!-- #container -->

<?php get_footer(); ?>