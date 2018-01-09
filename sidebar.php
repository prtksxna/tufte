<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tufte
 */

if ( ! is_active_sidebar( 'left-footer' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'left-footer' ); ?>
	<?php dynamic_sidebar( 'right-footer' ); ?>
</aside><!-- #secondary -->
