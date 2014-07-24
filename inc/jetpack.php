<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Chef Sense
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function chef_sense_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'chef_sense_jetpack_setup' );
