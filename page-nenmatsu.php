<?php
/**
 * Template Name: Nenmatsu
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

include( TEMPLATEPATH . '/header-nenmatsu.php' ); ?>

<div id="container">
<?php get_breadcrumbs(); ?>
<div id="contents">


<?php the_post(); ?>

<?php get_template_part( 'content', 'page' ); ?>

</div><!-- #contents -->
</div><!-- #container -->
<?php get_footer(); ?>
