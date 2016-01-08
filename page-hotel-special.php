<?php
/**
 * Template Name: HotelSpecial
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

include( TEMPLATEPATH . '/header-hotel-special.php' ); ?>


<?php the_post(); ?>

<?php get_template_part( 'content', 'page' ); ?>

<?php include( TEMPLATEPATH . '/footer-hotel-special.php' ); ?>
