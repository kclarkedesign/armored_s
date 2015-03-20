<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Armored
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function a_bootstraped_theme_with_flexibility_and_simplicity_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'a_bootstraped_theme_with_flexibility_and_simplicity_jetpack_setup' );
