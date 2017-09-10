<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package robledo-presidente
 */

if ( ! is_active_sidebar( 'el-termometro' ) && ! is_active_sidebar( 'suscribase' ) && ! is_active_sidebar( 'eventos' )  ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'el-termometro' ); ?>
</aside><!-- #secondary -->

