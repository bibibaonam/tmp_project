<?php
/**
 * Twenty Eleven functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, twentyeleven_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * We can remove the parent theme's hook only after it is attached, which means we need to
 * wait until setting up the child theme:
 *
 * <code>
 * add_action( 'after_setup_theme', 'my_child_theme_setup' );
 * function my_child_theme_setup() {
 *     // We are providing our own filter for excerpt_length (or using the unfiltered value)
 *     remove_filter( 'excerpt_length', 'twentyeleven_excerpt_length' );
 *     ...
 * }
 * </code>
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 584;

/**
 * Tell WordPress to run twentyeleven_setup() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'twentyeleven_setup' );

if ( ! function_exists( 'twentyeleven_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override twentyeleven_setup() in a child theme, add your own twentyeleven_setup to your child theme's
 * functions.php file.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To style the visual editor.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links, and Post Formats.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses add_custom_background() To add support for a custom background.
 * @uses add_custom_image_header() To add support for a custom header.
 * @uses register_default_headers() To register the default custom header images provided with the theme.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_setup() {

	/* Make Twenty Eleven available for translation.
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Eleven, use a find and replace
	 * to change 'twentyeleven' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'twentyeleven', TEMPLATEPATH . '/languages' );

	$locale = get_locale();
	$locale_file = TEMPLATEPATH . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Load up our theme options page and related code.
	require( dirname( __FILE__ ) . '/inc/theme-options.php' );

	// Grab Twenty Eleven's Ephemera widget.
	require( dirname( __FILE__ ) . '/inc/widgets.php' );

	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'twentyeleven' ) );

	// Add support for a variety of post formats
	add_theme_support( 'post-formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image' ) );

	// Add support for custom backgrounds
	add_custom_background();

	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
	add_theme_support( 'post-thumbnails' );

	// The next four constants set how Twenty Eleven supports custom headers.

	// The default header text color
	define( 'HEADER_TEXTCOLOR', '000' );

	// By leaving empty, we allow for random image rotation.
	define( 'HEADER_IMAGE', '' );

	// The height and width of your custom header.
	// Add a filter to twentyeleven_header_image_width and twentyeleven_header_image_height to change these values.
	define( 'HEADER_IMAGE_WIDTH', apply_filters( 'twentyeleven_header_image_width', 1000 ) );
	define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'twentyeleven_header_image_height', 288 ) );

	// We'll be using post thumbnails for custom header images on posts and pages.
	// We want them to be the size of the header image that we just defined
	// Larger images will be auto-cropped to fit, smaller ones will be ignored. See header.php.
	set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true );

	// Add Twenty Eleven's custom image sizes
	add_image_size( 'large-feature', HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true ); // Used for large feature (header) images
	add_image_size( 'small-feature', 500, 300 ); // Used for featured posts if a large-feature doesn't exist
	add_image_size( 'size_958_x395', 958, 395, true );

	// Turn on random header image rotation by default.
	add_theme_support( 'custom-header', array( 'random-default' => true ) );

	// Add a way for the custom header to be styled in the admin panel that controls
	// custom headers. See twentyeleven_admin_header_style(), below.
	add_custom_image_header( 'twentyeleven_header_style', 'twentyeleven_admin_header_style', 'twentyeleven_admin_header_image' );

	// ... and thus ends the changeable header business.

	// Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
	register_default_headers( array(
		'wheel' => array(
			'url' => '%s/images/headers/wheel.jpg',
			'thumbnail_url' => '%s/images/headers/wheel-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Wheel', 'twentyeleven' )
		),
		'shore' => array(
			'url' => '%s/images/headers/shore.jpg',
			'thumbnail_url' => '%s/images/headers/shore-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Shore', 'twentyeleven' )
		),
		'trolley' => array(
			'url' => '%s/images/headers/trolley.jpg',
			'thumbnail_url' => '%s/images/headers/trolley-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Trolley', 'twentyeleven' )
		),
		'pine-cone' => array(
			'url' => '%s/images/headers/pine-cone.jpg',
			'thumbnail_url' => '%s/images/headers/pine-cone-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Pine Cone', 'twentyeleven' )
		),
		'chessboard' => array(
			'url' => '%s/images/headers/chessboard.jpg',
			'thumbnail_url' => '%s/images/headers/chessboard-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Chessboard', 'twentyeleven' )
		),
		'lanterns' => array(
			'url' => '%s/images/headers/lanterns.jpg',
			'thumbnail_url' => '%s/images/headers/lanterns-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Lanterns', 'twentyeleven' )
		),
		'willow' => array(
			'url' => '%s/images/headers/willow.jpg',
			'thumbnail_url' => '%s/images/headers/willow-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Willow', 'twentyeleven' )
		),
		'hanoi' => array(
			'url' => '%s/images/headers/hanoi.jpg',
			'thumbnail_url' => '%s/images/headers/hanoi-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Hanoi Plant', 'twentyeleven' )
		)
	) );
}
endif; // twentyeleven_setup

if ( ! function_exists( 'twentyeleven_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_header_style() {

	// If no custom options for text are set, let's bail
	// get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value
	if ( HEADER_TEXTCOLOR == get_header_textcolor() )
		return;
	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( 'blank' == get_header_textcolor() ) :
	?>
		#site-title,
		#site-description {
			position: absolute !important;
			clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that
		else :
	?>
		#site-title a,
		#site-description {
			color: #<?php echo get_header_textcolor(); ?> !important;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // twentyeleven_header_style

if ( ! function_exists( 'twentyeleven_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * Referenced via add_custom_image_header() in twentyeleven_setup().
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_admin_header_style() {
?>
	<style type="text/css">
	.appearance_page_custom-header #headimg {
		border: none;
	}
	#headimg h1,
	#desc {
		font-family: "Helvetica Neue", Arial, Helvetica, "Nimbus Sans L", sans-serif;
	}
	#headimg h1 {
		margin: 0;
	}
	#headimg h1 a {
		font-size: 32px;
		line-height: 36px;
		text-decoration: none;
	}
	#desc {
		font-size: 14px;
		line-height: 23px;
		padding: 0 0 3em;
	}
	<?php
		// If the user has set a custom color for the text use that
		if ( get_header_textcolor() != HEADER_TEXTCOLOR ) :
	?>
		#site-title a,
		#site-description {
			color: #<?php echo get_header_textcolor(); ?>;
		}
	<?php endif; ?>
	#headimg img {
		max-width: 1000px;
		height: auto;
		width: 100%;
	}
	</style>
<?php
}
endif; // twentyeleven_admin_header_style

if ( ! function_exists( 'twentyeleven_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * Referenced via add_custom_image_header() in twentyeleven_setup().
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_admin_header_image() { ?>
	<div id="headimg">
		<?php
		if ( 'blank' == get_theme_mod( 'header_textcolor', HEADER_TEXTCOLOR ) || '' == get_theme_mod( 'header_textcolor', HEADER_TEXTCOLOR ) )
			$style = ' style="display:none;"';
		else
			$style = ' style="color:#' . get_theme_mod( 'header_textcolor', HEADER_TEXTCOLOR ) . ';"';
		?>
		<h1><a id="name"<?php echo $style; ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<div id="desc"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></div>
		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<img src="<?php echo esc_url( $header_image ); ?>" alt="" />
		<?php endif; ?>
	</div>
<?php }
endif; // twentyeleven_admin_header_image

/**
 * Sets the post excerpt length to 40 words.
 *
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 */
function twentyeleven_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'twentyeleven_excerpt_length' );

/**
 * Returns a "Continue Reading" link for excerpts
 */
function twentyeleven_continue_reading_link() {
	return ' <a href="'. esc_url( get_permalink() ) . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) . '</a>';
}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and twentyeleven_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 */
function twentyeleven_auto_excerpt_more( $more ) {
	return ' &hellip;' . twentyeleven_continue_reading_link();
}
add_filter( 'excerpt_more', 'twentyeleven_auto_excerpt_more' );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 */
function twentyeleven_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= twentyeleven_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'twentyeleven_custom_excerpt_more' );

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
function twentyeleven_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'twentyeleven_page_menu_args' );

/**
 * Register our sidebars and widgetized areas. Also register the default Epherma widget.
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_widgets_init() {

	register_widget( 'Twenty_Eleven_Ephemera_Widget' );

	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'twentyeleven' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Showcase Sidebar', 'twentyeleven' ),
		'id' => 'sidebar-2',
		'description' => __( 'The sidebar for the optional Showcase Template', 'twentyeleven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Area One', 'twentyeleven' ),
		'id' => 'sidebar-3',
		'description' => __( 'An optional widget area for your site footer', 'twentyeleven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Area Two', 'twentyeleven' ),
		'id' => 'sidebar-4',
		'description' => __( 'An optional widget area for your site footer', 'twentyeleven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Area Three', 'twentyeleven' ),
		'id' => 'sidebar-5',
		'description' => __( 'An optional widget area for your site footer', 'twentyeleven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'twentyeleven_widgets_init' );

/**
 * Display navigation to next/previous pages when applicable
 */
function twentyeleven_content_nav( $nav_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $nav_id; ?>">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyeleven' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></div>
		</nav><!-- #nav-above -->
	<?php endif;
}

/**
 * Return the URL for the first link found in the post content.
 *
 * @since Twenty Eleven 1.0
 * @return string|bool URL or false when no link is present.
 */
function twentyeleven_url_grabber() {
	if ( ! preg_match( '/<a\s[^>]*?href=[\'"](.+?)[\'"]/is', get_the_content(), $matches ) )
		return false;

	return esc_url_raw( $matches[1] );
}

/**
 * Count the number of footer sidebars to enable dynamic classes for the footer
 */
function twentyeleven_footer_sidebar_class() {
	$count = 0;

	if ( is_active_sidebar( 'sidebar-3' ) )
		$count++;

	if ( is_active_sidebar( 'sidebar-4' ) )
		$count++;

	if ( is_active_sidebar( 'sidebar-5' ) )
		$count++;

	$class = '';

	switch ( $count ) {
		case '1':
			$class = 'one';
			break;
		case '2':
			$class = 'two';
			break;
		case '3':
			$class = 'three';
			break;
	}

	if ( $class )
		echo 'class="' . $class . '"';
}

if ( ! function_exists( 'twentyeleven_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentyeleven_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'twentyeleven' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer class="comment-meta">
				<div class="comment-author vcard">
					<?php
						$avatar_size = 68;
						if ( '0' != $comment->comment_parent )
							$avatar_size = 39;

						echo get_avatar( $comment, $avatar_size );

						/* translators: 1: comment author, 2: date and time */
						printf( __( '%1$s on %2$s <span class="says">said:</span>', 'twentyeleven' ),
							sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
							sprintf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
								esc_url( get_comment_link( $comment->comment_ID ) ),
								get_comment_time( 'c' ),
								/* translators: 1: date, 2: time */
								sprintf( __( '%1$s at %2$s', 'twentyeleven' ), get_comment_date(), get_comment_time() )
							)
						);
					?>

					<?php edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .comment-author .vcard -->

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentyeleven' ); ?></em>
					<br />
				<?php endif; ?>

			</footer>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'twentyeleven' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for twentyeleven_comment()

if ( ! function_exists( 'twentyeleven_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 * Create your own twentyeleven_posted_on to override in a child theme
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_posted_on() {
	printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'twentyeleven' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		sprintf( esc_attr__( 'View all posts by %s', 'twentyeleven' ), get_the_author() ),
		esc_html( get_the_author() )
	);
}
endif;

/**
 * Adds two classes to the array of body classes.
 * The first is if the site has only had one author with published posts.
 * The second is if a singular post being displayed
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_body_classes( $classes ) {

	if ( ! is_multi_author() ) {
		$classes[] = 'single-author';
	}

	if ( is_singular() && ! is_home() && ! is_page_template( 'showcase.php' ) && ! is_page_template( 'sidebar-page.php' ) )
		$classes[] = 'singular';

	return $classes;
}
add_filter( 'body_class', 'twentyeleven_body_classes' );

function get_breadcrumbs(){
	global $wp_query;

	if ( !is_home() ){

		// Start the UL
		echo '<ul id="breadcrumb">';
		// Add the Home link

	// if ( is_page() || in_category() ) {
	if ( is_page() ) {
		echo '<li><a href="http://www.plbali.com/">'. バリ旅行HOME .'</a></li>';
	} else {
		echo '<li><a href="'. get_settings('home') .'">'. バリ旅行HOME .'</a></li>';
	}

		if ( is_category() )
		{
			$catTitle = single_cat_title( "", false );
			$cat = get_cat_ID( $catTitle );
			echo "<li>&nbsp;＞&nbsp;". get_category_parents( $cat, FALSE, "" ) ."</li>";
		}
		elseif ( is_archive() && !is_category() )
		{
			echo "<li> &raquo; Archives</li>";
		}
		elseif ( is_search() ) {

			echo "<li> &raquo; Search Results</li>";
		}
		elseif ( is_404() )
		{
			echo "<li> &raquo; 404 Not Found</li>";
		}
		elseif ( is_single())
		{
			$category = get_the_category();
			if ($category) {
				$post_type = get_post_type(get_the_ID());
				if ($post_type == 'hotels') {
					$hotelsCat = get_category_by_slug($post_type);
					echo '<li>&nbsp;＞&nbsp;'. '<a href="' . esc_url( get_category_link( $hotelsCat->term_id ) ) . '">'.$hotelsCat->name.'</a>'.'&nbsp;＞&nbsp;';
					echo the_title('','', FALSE) ."</li>";
				} else if ($post_type == 'hotel_price') {
					/*$hotelsCat = get_category_by_slug('hotels');
					echo '<li>&nbsp;＞&nbsp;'. '<a href="' . esc_url( get_category_link( $hotelsCat->term_id ) ) . '">'.$hotelsCat->name.'</a>'.'&nbsp;＞&nbsp;';
					echo the_title('','', FALSE) ."&nbsp;＞&nbsp;ホテル料金</li>";*/
					$hotelsCat = get_category_by_slug('hotels');
					$hotelLink = str_replace('hotel_price', 'hotels', "//".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]);
					echo '<li>&nbsp;＞&nbsp;'. '<a href="' . esc_url( get_category_link( $hotelsCat->term_id ) ) . '">'.$hotelsCat->name.'</a>'.'&nbsp;＞&nbsp;';
					echo '<a href="'.$hotelLink.'">'.the_title('','', FALSE) ."</a>&nbsp;＞&nbsp;ホテル料金</li>";
				} else {
					$category_id = get_cat_ID( $category[0]->cat_name );
					if ( 0 === get_query_var( 'page' ) ) {
					echo '<li>&nbsp;＞&nbsp;'. get_category_parents( $category_id, TRUE, "&nbsp;＞&nbsp;" );
					echo the_title('','', FALSE) ."</li>";
					}
					else {
					echo '<li>&nbsp;＞&nbsp;'. get_category_parents( $category_id, TRUE, "&nbsp;＞&nbsp;" );
					echo the_title('','', FALSE) ."&nbsp;料金表</li>";
					}
				}
			}
		}
		elseif ( is_page() )
		{
			$post = $wp_query->get_queried_object();

			if ( $post->post_name == 'wedding' ){

				echo "<li>&nbsp;＞ウェディング&nbsp;＞&nbsp;".the_title('','', FALSE)."</li>";
			}
			elseif ( $post->post_parent == 0 ){

				echo "<li>&nbsp;＞&nbsp;".the_title('','', FALSE)."</li>";

			} else {
				echo "<li>&nbsp;＞&nbsp;".the_title('','', FALSE)."</li>";
			}
		}

		// End the UL
		echo "</ul>";
	}
}

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( $width, $height, $crop_flag );

function remove_title_from_image_attributes( $attr ) {
	if ( isset( $attr['title'] ) ) {
		unset(  $attr['title'] );
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'remove_title_from_image_attributes' );

add_filter('postmeta_form_limit','meta_limit_change');
function meta_limit_change($limit){
return 100;
}

function sub_category_template()
{
	if (is_category())
	{
		$arr_cat = array( 'list-kuta', 'list-semi', 'list-nusa', 'list-jim', 'list-ubud', 'list-sanur', 'list-canggu', 'list-candidasa', 'list-tanahlot', 'list-menjangan', 'list-lovina', 'list-yogyakarta', 'list-lombok', 'list-lembongan' );

		$arr_cat_2 = array( 'list-staff', 'list-star', 'list-villa', 'list-hotel' );

		$cat = &get_category(get_query_var('cat'));

		if (in_array($cat->slug, $arr_cat)){
			if (file_exists(TEMPLATEPATH . '/category-sub.php'))
			{
				include (TEMPLATEPATH . '/category-sub.php');
				exit;
			}
		}elseif (in_array($cat->slug, $arr_cat_2)){
			if (file_exists(TEMPLATEPATH . '/category-sub-filter.php'))
			{
				include (TEMPLATEPATH . '/category-sub-filter.php');
				exit;
			}
		}
	}
}
add_action('template_redirect', 'sub_category_template');


function checkCatHotels(){
	$isHotels = false;
	$categories = get_the_category();
	if (count($categories) > 0) {
		foreach ($categories as $cat) {
			if ($cat->slug == 'hotels') {
				$isHotels = true; break;
			}
			$parrent = get_term($cat->category_parent, 'category');
			if ($parrent) {
				if ($parrent->slug == 'hotels') {
					$isHotels = true; break;
				}
			}
		}
	}

	return $isHotels;
}

function get_area($post_id){
	$areaObj = get_term(get_post_meta($post_id, 'area', true), 'area');
	/*if ($areaObj->parent > 0) {
		$areaObj = get_term($areaObj->parent, 'area');
	}*/
	return ($areaObj) ? $areaObj->name: '';
}


function is_post_type_hotels(){
	return get_post_type(get_the_ID()) == 'hotels' ? true : false;
}

function is_single_hotel() {
	return (in_category('hotels') && is_single()) || is_post_type_hotels() || checkCatHotels();
}

define('DEFAULT_NULL', 9999);
define('DEFAULT_ZEZO', 99999);
add_action( 'save_post', 'afterSavePost' );
function afterSavePost($postId)
{
	$ranking = get_post_meta($postId, 'ranking', true);
	if ($ranking === "" || $ranking == 0){
		if ($ranking === "") {
			update_post_meta($postId, 'ranking', DEFAULT_NULL);
		} else if($ranking == 0){
			update_post_meta($postId, 'ranking', DEFAULT_ZEZO);
		}
		//delete_post_meta($postId, 'ranking');
	}
	$disp_sort = get_post_meta($postId, 'disp_sort', true);
	if ($disp_sort === "" || $disp_sort == 0) {
		if ($disp_sort === "") {
			update_post_meta($postId, 'disp_sort', DEFAULT_NULL);
		} else if($disp_sort == 0){
			update_post_meta($postId, 'disp_sort', DEFAULT_ZEZO);
		}
		//delete_post_meta($postId, 'disp_sort');
	}
}

add_filter('get_post_metadata', 'custom_get_post_metadata', true, 4);
function custom_get_post_metadata($metadata, $post_id, $meta_key, $single){
	if (is_admin()) {
		if ((isset($meta_key) && $meta_key == 'ranking') || (isset($meta_key) && $meta_key == 'disp_sort')) {
			global $wpdb;
			$value = $wpdb->get_var( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = $post_id AND  meta_key = '".$meta_key."'" );
			if ($value == DEFAULT_NULL) {
				return '';
			} else if ($value == DEFAULT_ZEZO) {
				return 0;
			}
		}
	}

	return $metadata;
}

function shailan_filter_terms( $exclusions, $args ){

	// // IDs of terms to be excluded
	// $exclude = "3,39"; // CHANGE THIS TO IDs OF YOUR TERMS
	// // Generation of exclusion SQL code
	// $exterms = wp_parse_id_list( $exclude );
	// foreach ( $exterms as $exterm ) {
	// 	if ( empty($exclusions) )
	// 		$exclusions = ' AND ( t.term_id <> ' . intval($exterm) . ' ';
	// 	else
	// 		$exclusions .= ' AND t.term_id <> ' . intval($exterm) . ' ';
	// }
	// // Closing bracket
	// if ( !empty($exclusions) )
	// 	$exclusions .= ')';
	// echo "<pre>";
	// print_r($args);
	global $pagenow;
	// if (($pagenow == 'post-new.php' && $_GET['post_type'] == 'hotels') || get_post_type( get_the_ID() ) == 'hotels') {
	global $current_screen;
	if((isset($_GET['post_type']) && $_GET['post_type'] == 'hotels' && isset($args['taxonomy']) && $args['taxonomy'] == 'category') || (isset($_GET['taxonomy']) && $_GET['taxonomy'] == 'category' && isset($_GET['post_type']) && $_GET['post_type'] == 'hotels') || ($args['taxonomy'] != 'area' && 'hotels' == $current_screen->post_type && in_array($pagenow, array('post-new.php', 'post.php'))) ){
		// $exclusions = 'AND ( t.slug IN (3, 75, 79, 82, 80, 78, 212, 213, 214, 215, 81, 216, 217, 218, 219) )';
		// echo $args['taxonomy'];die;
		$exclusions .= " AND ( t.slug IN ('hotels', 'list-ubud', 'list-semi', 'list-kuta', 'list-jim', 'list-nusa', 'list-sanur', 'list-yogyakarta', 'list-tanahlot', 'list-canggu', 'list-candidasa', 'list-menjangan', 'list-lembongan', 'list-lovina', 'list-lombok') )";
	}else if((isset($_GET['post_type']) && $_GET['post_type'] == 'hotel_price' && isset($args['taxonomy']) && $args['taxonomy'] == 'category') || (isset($_GET['taxonomy']) && $_GET['taxonomy'] == 'category' && isset($_GET['post_type']) && $_GET['post_type'] == 'hotel_price') || ($args['taxonomy'] != 'area' && 'hotel_price' == $current_screen->post_type && in_array($pagenow, array('post-new.php', 'post.php'))) ){
		$exclusions .= " AND t.slug = 'hotel-price' ";
	}
	// Return our SQL statement
	return $exclusions;
}
add_filter( 'list_terms_exclusions', 'shailan_filter_terms', 10, 2 );


function wpse_72603_default_categories()
{
	global $current_screen;

	// If not our post type, do nothing
	if( 'hotels' != $current_screen->post_type || 'hotel_price' != $current_screen->post_type)
		return;

	?>
	<script language="javascript" type="text/javascript">
		jQuery(document).ready(function($)
		{
			// Hide the "Most used" tab
			$('#category-tabs .hide-if-no-js').remove();

			// Tick the checkboxes of categories 3
			//$('#in-category-3').attr('checked', true);
			
			<?php if ('hotel_price' == $current_screen->post_type):?>
				$('#categorychecklist').find('input').attr('checked', true);
			<?php endif;?>

			// Disable the clicks in categories 3
			$('#in-category-3').click(function() { return false; });

			$('#tagsdiv-post_tag, #areadiv').hide();
			
			var els = $('#categorychecklist').find('input[type=checkbox]');
			if (els.length > 0) {
				for (var i = 0; i < els.length; i++) {
					$(els[i]).attr('type', 'radio');
				}
			}
		});
	</script>
	<?php
	// }
}
add_action( 'admin_head-post-new.php', 'wpse_72603_default_categories' );
add_action( 'admin_head-post.php', 'wpse_72603_default_categories' );

function html_hotel_villa($category_slug){
	$query = array(
		'post_type'     => 'hotels',
		'category_name' => $category_slug,
		'meta_query'    => array(
			'pick_up_key' => array(
				'key'   => 'pick_up',
				'value' => 'a:1:{i:0;s:7:"pick_up";}'
			)
		),
		'orderby' => array(
			'post_modified' => 'DESC'
		),
		'posts_per_page' => 9999
	);
	$posts = get_posts($query);
	foreach($posts as $post):
		setup_postdata($post);

		$title            = get_the_title($post->ID);
		$image_attributes = wp_get_attachment_image_src(get_post_meta($post->ID, 'thumbnail', true), 'full');
		$thumbnail        = $image_attributes ? $image_attributes[0] : '';
	?>
		<div class="left">
			<a href="<?php echo get_permalink($post->ID) ?>" target="_top"><img style="width:320px;height:173px" src="<?php echo $thumbnail ?>"></a>
			<span><?php echo get_post_meta($post->ID, 'catch_copy', true) ?></span>
			<a href="<?php echo get_permalink($post->ID) ?>" target="_top"><?php echo $title ?></a>
		</div>
	<?php endforeach;
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_hotel_field_group',
		'title' => 'hotel_field_group',
		'fields' => array (
			array (
				'key' => 'field_561f5c71311a7',
				'label' => 'たびねこホテルＩＤ',
				'name' => 'hotel_id',
				'type' => 'number',
				'instructions' => 'たびねこのホテルＩＤ',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 12345,
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => 1,
			),
			array (
				'key' => 'field_563afa7d7e073',
				'label' => '地区ページのピックアップ',
				'name' => 'pick_up',
				'type' => 'checkbox',
				'instructions' => '地区ページに一覧表示',
				'choices' => array (
					'pick_up' => 'このホテルを一覧表示する',
				),
				'default_value' => '',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_565ec3e549388',
				'label' => 'トップページのピックアップ',
				'name' => 'pick_up_top',
				'type' => 'checkbox',
				'instructions' => 'トップページに表示（エリアごとに２件表示、表示順は更新日の降順）',
				'choices' => array (
					'pick_up_top' => 'このホテルを表示する',
				),
				'default_value' => '',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_566524a5ce7c3',
				'label' => 'コンシェルジュお勧めツアー',
				'name' => 'concierge_recommendation',
				'type' => 'checkbox',
				'instructions' => 'コンシェルジュお勧めツアーに一覧表示',
				'choices' => array (
					'concierge_recommendation' => 'このホテルを表示する',
				),
				'default_value' => '',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_56652621ba8db',
				'label' => 'コンシェルジュお勧めコメント',
				'name' => 'concierge_recommendation_comment',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_561f5d3a311a8',
				'label' => 'キャッチコピー',
				'name' => 'catch_copy',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '広大な敷地に建つ、夕日が美しいホテル',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_561f5da69d504',
				'label' => 'サムネイル',
				'name' => 'thumbnail',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_561f5e349d505',
				'label' => 'ホテルタイプ',
				'name' => 'hotel_type',
				'type' => 'select',
				'required' => 1,
				'choices' => array (
					'large_resort' => '大型リゾート',
					'small_luxury' => 'スモールラグジュアリー',
					'boutique_hotel' => 'ブディックホテル',
					'villa' => 'ヴィラ',
					'charter_villa' => '貸切ヴィラ',
					'wellness_resort' => 'ウェルネスリゾート',
				),
				'default_value' => 'hotel',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5620b74fd97ec',
				'label' => 'ヴィラ/ホテル区分',
				'name' => 'villa_or_hotel',
				'type' => 'select',
				'required' => 1,
				'choices' => array (
					'villa' => 'ヴィラ',
					'hotel' => 'ホテル',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_561f5ed49d506',
				'label' => '売れすじランキング',
				'name' => 'ranking',
				'type' => 'number',
				'default_value' => '',
				'placeholder' => 1,
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_561f5f129d507',
				'label' => 'エリア別ソート順',
				'name' => 'disp_sort',
				'type' => 'number',
				'default_value' => '',
				'placeholder' => 10,
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_561f5fae9d508',
				'label' => 'ホテル名（英語）',
				'name' => 'title_en',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'Padma Resort Bali at Legian',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_561f60009d509',
				'label' => 'エリア',
				'name' => 'area',
				'type' => 'taxonomy',
				'instructions' => 'ホテルの基本情報に表示',
				'required' => 1,
				'taxonomy' => 'area',
				'field_type' => 'radio',
				'allow_null' => 0,
				'load_save_terms' => 0,
				'return_format' => 'id',
				'multiple' => 0,
			),
			array (
				'key' => 'field_561f6547fbfd9',
				'label' => 'バリガールランク',
				'name' => 'baligirl_rank',
				'type' => 'select',
				'instructions' => '★の数',
				'required' => 1,
				'choices' => array (
					0 => 0,
					1 => 1,
					2 => 2,
					3 => 3,
					4 => 4,
					5 => 5,
					'' => '',
				),
				'default_value' => 0,
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_561f65a0fbfda',
				'label' => 'フリーテキストリスト',
				'name' => 'free_texts',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_561f6605fbfdb',
						'label' => 'フリーテキスト',
						'name' => 'free_text',
						'type' => 'text',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '送客数 No.1',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_561f66358a6f3',
				'label' => 'ツアー最安値リスト',
				'name' => 'tour_link_departure_id',
				'type' => 'select',
				'choices' => array (
					2 => '成田発',
					3 => '羽田発',
					5 => '関空発',
					7 => '名古屋発',
					8 => '福岡発',
					10 => '札幌発',
					11 => '仙台発',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 1,
			),
			array (
				'key' => 'field_561f698e150fe',
				'label' => 'ホテルのみ予約リンク',
				'name' => 'hotel_reserve_link',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'http://www-test2.plbali.com/villa/padma-resort-bali-at-legian/2/',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_561f69ee5f875',
				'label' => '本文見出し',
				'name' => 'content_heading',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'クタ地区を代表する大型リゾート「パドマ・バリ」では夕日の美しさも見逃せない',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_561f6a1e830b4',
				'label' => 'ホテル説明',
				'name' => 'hotel_content',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'リピーターも多い、クタ地区最大級のデラックスリゾート「パドマ・バリ・リゾート・アット・レギャン」。レギャンビーチに面した、南国の花々や蓮池などの緑が生い茂るトロピカルガーデンには45mにも及ぶ大きなプールが設置され、ホテル内の設備やアクティビティも充実しているので、申し分のないリゾートライフをお過ごし頂くことができます。	ビルディングタイプのデラックスルームは、現代的にアレンジされたバリモダンスタイルの新しいお部屋。全面ミラーのバスルームには、楕円形のバスタブとシャワーブースがそれぞれ独立して設置されています。キングタイプとツインタイプをコネクティングされることによって、ファミリールームとしてのご利用も可能です。また、2011年に新設された南国ムードたっぷりのラグーンプールを見渡せる、デラックス・ラグーンヴュールームも用意されていてお子様連れのゲストにも好評です。',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_562079786a657',
				'label' => 'トリップアドバイザーリンク',
				'name' => 'trip_adviser_link',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_561f6ab207d18',
				'label' => '基本情報',
				'name' => 'base_info',
				'type' => 'repeater',
				'required' => 1,
				'sub_fields' => array (
					array (
						'key' => 'field_561f6b3c07d19',
						'label' => '住所',
						'name' => 'address',
						'type' => 'text',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'Jl.Padma, No.1 Legian Po Box 1107TBB Bali 80361, Indonesia',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_561f6b6807d1a',
						'label' => '公式ホームページ',
						'name' => 'homepage',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'http://www.padmaresortbali.com/jpn/',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_561f6b8b07d1b',
						'label' => '日本語スタッフ',
						'name' => 'staff_japanese',
						'type' => 'text',
						'required' => 1,
						'column_width' => 20,
						'default_value' => 'なし',
						'placeholder' => '常駐',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_561f6bc807d1c',
						'label' => 'チェックイン',
						'name' => 'check_in',
						'type' => 'text',
						'required' => 1,
						'column_width' => 10,
						'default_value' => '',
						'placeholder' => '14:00',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_561f6bef07d1d',
						'label' => 'チェックアウト',
						'name' => 'check_out',
						'type' => 'text',
						'required' => 1,
						'column_width' => 10,
						'default_value' => '',
						'placeholder' => '12:00',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => 1,
				'row_limit' => 1,
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'hotels',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 1,
	));
	register_field_group(array (
		'id' => 'acf_qa',
		'title' => 'Q&A',
		'fields' => array (
			array (
				'key' => 'field_56207ad6c1703',
				'label' => '質問＆回答',
				'name' => 'Q&A',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_56207af5c1704',
						'label' => '質問',
						'name' => 'question',
						'type' => 'textarea',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => '',
						'formatting' => 'br',
					),
					array (
						'key' => 'field_56207b1dc1705',
						'label' => '回答',
						'name' => 'answer',
						'type' => 'textarea',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => '',
						'formatting' => 'br',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'hotels',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 2,
	));
	register_field_group(array (
		'id' => 'acf_service_group',
		'title' => 'service_group',
		'fields' => array (
			array (
				'key' => 'field_5667ce1dc605b',
				'label' => 'シャトルサービス',
				'name' => 'shuttle',
				'type' => 'select',
				'required' => 1,
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667ce61c605c',
				'label' => 'フィットネスジム',
				'name' => 'fitness',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667f93faae99',
				'label' => 'ルームサービス',
				'name' => 'room_service',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667f957a7c59',
				'label' => 'ランドリーサービス',
				'name' => 'laundry',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667f971e5178',
				'label' => 'パブリックプール',
				'name' => 'public_pool',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667f9855a3ed',
				'label' => 'キッズルーム',
				'name' => 'kids_room',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667f997898b0',
				'label' => 'ベビーシッター',
				'name' => 'baby_sitter',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667f9aceacf4',
				'label' => 'デパーチャーラウンジ',
				'name' => 'lounge',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667f9c2dbf47',
				'label' => 'WIFI',
				'name' => 'wifi',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667f9dc22842',
				'label' => 'アクティビティ',
				'name' => 'activity',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5669314ae17c2',
				'label' => '備考欄',
				'name' => 'service_remarks',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_5669316de17c3',
						'label' => '項目',
						'name' => 'element',
						'type' => 'select',
						'required' => 1,
						'column_width' => 20,
						'choices' => array (
							'shuttle' => '※シャトルサービス',
							'fitness' => '※フィットネスジム',
							'room_service' => '※ルームサービス',
							'laundry' => '※ランドリーサービス',
							'public_pool' => '※パブリックプール',
							'kids_room' => '※キッズルーム',
							'baby_sitter' => '※ベビーシッター',
							'lounge' => '※デパーチャーラウンジ',
							'wifi' => '※WIFI',
							'activity' => '※アクティビティ',
							'' => '',
						),
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0,
					),
					array (
						'key' => 'field_566932c5e17c4',
						'label' => '備考',
						'name' => 'note',
						'type' => 'text',
						'required' => 1,
						'column_width' => 80,
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'hotels',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 3,
	));
	register_field_group(array (
		'id' => 'acf_amenity_group',
		'title' => 'amenity_group',
		'fields' => array (
			array (
				'key' => 'field_5667fb1576ade',
				'label' => 'エアコン',
				'name' => 'air_conditioner',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667fb2e553a1',
				'label' => 'バスタブ',
				'name' => 'bathtub',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667fb3df7c98',
				'label' => '石けん・シャンプー etc.',
				'name' => 'bath_item',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667fb50459d5',
				'label' => '歯ブラシ',
				'name' => 'toothbrush',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667fb60437ad',
				'label' => 'テレビ',
				'name' => 'tv',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667fb6e0c0dc',
				'label' => 'CD/DVDプレイヤー',
				'name' => 'audio_player',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667fb7d70162',
				'label' => '冷蔵庫',
				'name' => 'fridge',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667fb8a30f77',
				'label' => 'タオル',
				'name' => 'towel',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667fb997f586',
				'label' => 'ミニバー',
				'name' => 'bar',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667fba9354f6',
				'label' => 'バスローブ（ゆかた）',
				'name' => 'bathrobe',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667fbbb63882',
				'label' => 'セーフティボックス',
				'name' => 'safety_box',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667fbcb39c07',
				'label' => 'ヘアードライヤー',
				'name' => 'hair_dryer',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5667fbda9ad85',
				'label' => '湯沸しポット',
				'name' => 'kettle_pot',
				'type' => 'select',
				'choices' => array (
					'yes' => '○',
					'no' => '×',
					'notice' => '※',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_566933cbf2b70',
				'label' => '備考欄',
				'name' => 'amenity_remarks',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_566933e8f2b71',
						'label' => '項目',
						'name' => 'element',
						'type' => 'select',
						'required' => 1,
						'column_width' => 20,
						'choices' => array (
							'air_conditioner' => '※エアコン',
							'bathtub' => '※バスタブ',
							'bath_item' => '※石けん・シャンプー etc.',
							'toothbrush' => '※歯ブラシ',
							'tv' => '※テレビ',
							'audio_player' => '※CD/DVDプレイヤー',
							'fridge' => '※冷蔵庫',
							'towel' => '※タオル',
							'bar' => '※ミニバー',
							'bathrobe' => '※バスローブ（ゆかた）',
							'safety_box' => '※セーフティボックス',
							'hair_dryer' => '※ヘアードライヤー',
							'kettle_pot' => '※湯沸しポット',
							'' => '',
						),
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0,
					),
					array (
						'key' => 'field_56693535f2b72',
						'label' => '備考',
						'name' => 'note',
						'type' => 'text',
						'required' => 1,
						'column_width' => 80,
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'hotels',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 4,
	));
	register_field_group(array (
		'id' => 'acf_icon_group',
		'title' => 'icon_group',
		'fields' => array (
			array (
				'key' => 'field_56693729b95e6',
				'label' => 'アイコン表示',
				'name' => 'icon_disp',
				'type' => 'checkbox',
				'choices' => array (
					'girls' => '女子におすすめアイコン表示',
					'alone' => '一人旅おすすめアイコン表示',
					'couple' => 'カップルにおすすめアイコン表示',
					'family' => '家族におすすめアイコン表示',
					'honeymoon' => 'ハネムーンにおすすめアイコン表示',
					'group' => 'グループにおすすめアイコン表示',
					'premium' => 'プレミアム世代におすすめアイコン表示',
				),
				'default_value' => '',
				'layout' => 'horizontal',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'hotels',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 5,
	));
	register_field_group(array (
		'id' => 'acf_hotel_detail_field_group',
		'title' => 'hotel_detail_field_group',
		'fields' => array (
			array (
				'key' => 'field_561f71058cd2b',
				'label' => 'ホテル画像',
				'name' => 'hotel_images',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_561f734d11be7',
						'label' => '画像',
						'name' => 'image',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'object',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_561f71378cd2c',
				'label' => 'ラウンジ',
				'name' => 'lounges',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_561f74271efc5',
						'label' => '名前',
						'name' => 'name',
						'type' => 'text',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'ガーデンラウンジ',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_561f7446fc632',
						'label' => '説明文',
						'name' => 'content',
						'type' => 'textarea',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'デラックスルームは、バリ島の伝統を取り入れながらも現代風にアレンジした新しいバリスタイルのカテゴリーです。 カスタマイズされた家具とユニークなアートが清潔感あふれる寄木細工の床と調和しています。 スパをも感じさせるバスルームへつづくスライドドアは全面ミラーとなっており、楕円形のバスタブと独立シャワーブースを完備。全室にプライベートバルコニーがございます。',
						'maxlength' => '',
						'rows' => '',
						'formatting' => 'br',
					),
					array (
						'key' => 'field_561f739310c1d',
						'label' => '画像',
						'name' => 'image',
						'type' => 'image',
						'required' => 1,
						'column_width' => '',
						'save_format' => 'object',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array (
						'key' => 'field_561f7460fc633',
						'label' => '営業時間',
						'name' => 'business_hours',
						'type' => 'text',
						'column_width' => 10,
						'default_value' => '',
						'placeholder' => '05:00〜22:00',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_561f74e19b3b6',
				'label' => '客室リスト',
				'name' => 'rooms',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_561f74fe9b3b7',
						'label' => '名前',
						'name' => 'name',
						'type' => 'text',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'デラックスルーム',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_561f750b9b3b8',
						'label' => '説明文',
						'name' => 'content',
						'type' => 'textarea',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'デラックスルームは、バリ島の伝統を取り入れながらも現代風にアレンジした新しいバリスタイルのカテゴリーです。 カスタマイズされた家具とユニークなアートが清潔感あふれる寄木細工の床と調和しています。 スパをも感じさせるバスルームへつづくスライドドアは全面ミラーとなっており、 楕円形のバスタブと独立シャワーブースを完備。全室にプライベートバルコニーがございます。',
						'maxlength' => '',
						'rows' => '',
						'formatting' => 'br',
					),
					array (
						'key' => 'field_561f7538926ac',
						'label' => '画像',
						'name' => 'image',
						'type' => 'image',
						'required' => 1,
						'column_width' => '',
						'save_format' => 'object',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array (
						'key' => 'field_561f75557fa89',
						'label' => '間取り図',
						'name' => 'layout_image',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'object',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array (
						'key' => 'field_561f75737fa8a',
						'label' => '広さ',
						'name' => 'size',
						'type' => 'text',
						'column_width' => 5,
						'default_value' => '',
						'placeholder' => '38㎡',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_561f75fd5aec9',
						'label' => '部屋数',
						'name' => 'count',
						'type' => 'text',
						'column_width' => 5,
						'default_value' => '',
						'placeholder' => '65室',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_561f76125aeca',
						'label' => 'ベッド',
						'name' => 'bed',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'キングサイズベッド 1台 または シングルサイズベッド 2台',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_561f7634dff53',
						'label' => '特徴',
						'name' => 'properties',
						'type' => 'textarea',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '・1室準利用：大人2名 ・1室最大利用：大人3名／大人2名＋子供1名 ・添い寝：不可 ・エキストラベッド：1台搬入可能 ・バスルーム：バスタブ＋セパレートシートシャワーブース ・WIFI：客室内利用可能（無料） ・備考：6歳未満のお子様のご利用不可',
						'maxlength' => '',
						'rows' => '',
						'formatting' => 'br',
					),
					array (
						'key' => 'field_561f764ddff54',
						'label' => '部屋のプランを見るリンク',
						'name' => 'plan_link',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'http://www-test2.plbali.com/villa/padma-resort-bali-at-legian/',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_561f76b5945f4',
				'label' => 'スパ',
				'name' => 'spas',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_561f77da945f5',
						'label' => '名前',
						'name' => 'name',
						'type' => 'text',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'パドマ マンドラ スパ',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_561f780e945f6',
						'label' => '説明文',
						'name' => 'content',
						'type' => 'textarea',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'デラックスルームは、バリ島の伝統を取り入れながらも現代風にアレンジした新しいバリスタイルのカテゴリーです。 カスタマイズされた家具とユニークなアートが清潔感あふれる寄木細工の床と調和しています。 スパをも感じさせるバスルームへつづくスライドドアは全面ミラーとなっており、楕円形のバスタブと独立シャワーブースを完備。全室にプライベートバルコニーがございます。',
						'maxlength' => '',
						'rows' => '',
						'formatting' => 'br',
					),
					array (
						'key' => 'field_561f7822945f7',
						'label' => '画像',
						'name' => 'image',
						'type' => 'image',
						'required' => 1,
						'column_width' => '',
						'save_format' => 'object',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array (
						'key' => 'field_561f7833945f8',
						'label' => '営業時間',
						'name' => 'business_hours',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '05:00〜22:00',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_561f7874945f9',
						'label' => '最終入場時間',
						'name' => 'last_admission_time',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '21:30',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_561f789c120f9',
						'label' => 'パッケージリスト',
						'name' => 'packages',
						'type' => 'repeater',
						'column_width' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_561f78dd120fa',
								'label' => '名前',
								'name' => 'name',
								'type' => 'text',
								'required' => 1,
								'column_width' => '',
								'default_value' => '',
								'placeholder' => 'ウルティメイト・インダルジェンス',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_561f78f6120fb',
								'label' => '説明文',
								'name' => 'content',
								'type' => 'textarea',
								'required' => 1,
								'column_width' => '',
								'default_value' => '',
								'placeholder' => 'エキゾチックでゴージャスな、忘れられないひとときです。 アロマテラピーフローラルフットバス〜ラベンダーボディーウォッシュ〜お好みのトランディショナルボディスクラブ〜アロマテラピーフローラルバスまたはハーバルステーム〜マンダラマッサージ〜リフレッシャーフェイシャル〜フットマッサージ。',
								'maxlength' => '',
								'rows' => '',
								'formatting' => 'br',
							),
							array (
								'key' => 'field_561f7911120fc',
								'label' => '所要時間',
								'name' => 'time',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '2時間20分',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_561f7959120fd',
								'label' => '料金',
								'name' => 'price',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '$145',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_561f796c120fe',
								'label' => '予約リンク',
								'name' => 'reserve_link',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => 'http://www-test2.plbali.com/villa/padma-resort-bali-at-legian/',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
						),
						'row_min' => '',
						'row_limit' => '',
						'layout' => 'table',
						'button_label' => 'Add Row',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_561f799f011fc',
				'label' => 'レストラン',
				'name' => 'restaurants',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_561f79d6011fd',
						'label' => '名前',
						'name' => 'name',
						'type' => 'text',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'タマン　アユンカフェ & ラウンジ1Taman Ayun caf? & Lounge',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_566939ea17373',
						'label' => '名前（英語）',
						'name' => 'name_en',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_561f79f0011fe',
						'label' => '説明文',
						'name' => 'content',
						'type' => 'textarea',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'デラックスルームは、バリ島の伝統を取り入れながらも現代風にアレンジした新しいバリスタイルのカテゴリーです。 カスタマイズされた家具とユニークなアートが清潔感あふれる寄木細工の床と調和しています。 スパをも感じさせるバスルームへつづくスライドドアは全面ミラーとなっており、楕円形のバスタブと独立シャワーブースを完備。全室にプライベートバルコニーがございます。',
						'maxlength' => '',
						'rows' => '',
						'formatting' => 'br',
					),
					array (
						'key' => 'field_561f7a16011ff',
						'label' => '画像',
						'name' => 'image',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'object',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array (
						'key' => 'field_561f7a3101200',
						'label' => 'メニューリンク',
						'name' => 'menu_link',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'http://www-test2.plbali.com/villa/padma-resort-bali-at-legian/',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_561f7a4d01201',
						'label' => 'ジャンル',
						'name' => 'genre',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'インドネシア料理　コンチネンタル料理',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_561f7a6a01202',
						'label' => '営業時間',
						'name' => 'business_hours',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '6:30 – 24:00（ラストオーダー22:30）',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_561f7abc1252b',
						'label' => '場所',
						'name' => 'place',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'ロビー隣',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_561f7ad31252c',
						'label' => '収容人数',
						'name' => 'seating_capacity',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'バー : 48席　レストラアン : 194席　合計 : 242席',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'hotels',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 6,
	));
	register_field_group(array (
		'id' => 'acf_delete_hotel_service_field_group',
		'title' => '[delete]_hotel_service_field_group',
		'fields' => array (
			array (
				'key' => 'field_561f6ccd2352d',
				'label' => '基本サービス',
				'name' => 'service',
				'type' => 'checkbox',
				'choices' => array (
					'shuttle' => 'シャトルサービス',
					'fitness' => 'フィットネスジム',
					'room_service' => 'ルームサービス',
					'laundry' => 'ランドリーサービス',
					'public_pool' => 'パブリックプール',
					'kids_room' => 'キッズルーム',
					'baby_sitter' => 'ベビーシッター',
					'lounge' => 'デパーチャーラウンジ',
					'wifi' => 'WIFI',
					'activity' => 'アクティビティ',
				),
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_561f6f92952ec',
				'label' => '基本設備',
				'name' => 'amenity',
				'type' => 'checkbox',
				'choices' => array (
					'air_conditioner' => 'エアコン',
					'bathtub' => 'バスタブ',
					'bath_item' => '石けん・シャンプー etc.',
					'toothbrush' => '歯ブラシ',
					'tv' => 'テレビ',
					'audio_player' => 'CD/DVDプレイヤー',
					'fridge' => '冷蔵庫',
					'towel' => 'タオル',
					'bar' => 'ミニバー',
					'bathrobe' => 'バスローブ（ゆかた）',
					'safety_box' => 'セーフティボックス',
					'hair_dryer' => 'ヘアードライヤー',
					'kettle_pot' => '湯沸しポット',
				),
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_561f701d76497',
				'label' => 'アイコン表示',
				'name' => 'icon',
				'type' => 'checkbox',
				'choices' => array (
					'girls' => '女子におすすめアイコン表示',
					'alone' => '一人旅おすすめアイコン表示',
					'couple' => 'カップルにおすすめアイコン表示',
					'family' => '家族におすすめアイコン表示',
					'honeymoon' => 'ハネムーンにおすすめアイコン表示',
					'group' => 'グループにおすすめアイコン表示',
					'premium' => 'プレミアム世代におすすめアイコン表示',
				),
				'default_value' => '',
				'layout' => 'horizontal',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'hotels',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 9,
	));
}
