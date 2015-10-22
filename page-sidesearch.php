<?php
/**
 * Template Name: SideSearch
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

include( TEMPLATEPATH . '/header-search.php' ); ?>

<div id="container">
<div id="contents">
				<?php get_breadcrumbs(); ?>
                <div id="detaile_h"></div>
                
                <div id="detail">
				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>
                
                </div><!-- id=detaile -->
                <div id="detaile_f"></div>
                
</div><!-- #contents -->

  <?php include( TEMPLATEPATH . '/sidebar-search.php' ); ?>
</div><!-- #container -->

<?php get_footer(); ?>