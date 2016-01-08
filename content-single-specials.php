<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 *
 * content-single-specials.php
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="detaile_h"></div>
  <?php the_content(); ?>
<div id="detaile_f"></div>
</article>
<!-- #post-<?php the_ID(); ?> -->
