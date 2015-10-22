<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<style type="text/css">
.page-link {
	display: none;
}
</style>
<?php
$cat = get_the_category();
$catslug = $cat[0]->slug;
?>

<div id="container">
  <div id="contents" class="<?php echo $catslug; ?>">
    <?php while ( have_posts() ) : the_post(); ?>
    <?php get_breadcrumbs(); ?>
    <?php if(in_category('villa')): ?>
    <!-- ヴィラ -->
    <?php get_template_part('content-single-villa') ?>
    <?php elseif(in_category('spa')): ?>
    <!-- スパ -->
    <?php get_template_part('content-single-spa') ?>
    <?php elseif(in_category('optional')): ?>
    <!-- オプショナル -->
    <?php get_template_part('content-single-optional') ?>
    <?php elseif(in_category('specials')): ?>
    <!-- 特集 -->
    <?php get_template_part('content-single-specials') ?>
    <?php else : ?>
    <?php get_template_part( 'content', 'single' ); ?>
    <?php endif; ?>
    <?php endwhile; // end of the loop. ?>
  </div>
  <!-- #contents -->

  <?php if(! in_category(array('specials','wedding'))): ?>
  <?php //if ( is_single('padma-resort-bali-at-legian') ) : ?>
   <?php if (in_category('hotels') && is_single()) : ?>
  <?php else : ?>
  <?php get_sidebar(); ?>
  <?php endif; ?>
  <?php endif; ?>
</div>
<!-- #container -->
<?php get_footer(); ?>
