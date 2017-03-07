<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package robledo-presidente
 */

if ( ! is_active_sidebar( 'el-termometro' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'el-termometro' ); ?>
</aside><!-- #secondary -->
