<?php
/**
 * Tintora Performance & Optimization Enhancements
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Clean Header Bloat for Faster Page Load
 */
function tintora_cleanup_head() {
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
}
add_action( 'init', 'tintora_cleanup_head' );

/**
 * Add defer attribute to non-critical JavaScript files
 *
 * @param string $tag Script HTML tag.
 * @param string $handle Script registration handle.
 * @param string $src Script source URL.
 * @return string Modified script tag.
 */
function tintora_defer_scripts( $tag, $handle, $src ) {
	$defer_handles = array(
		'tintora-navigation',
		'tintora-animations',
		'tintora-gallery',
		'tintora-main',
	);

	if ( in_array( $handle, $defer_handles, true ) ) {
		if ( false === strpos( $tag, 'defer' ) ) {
			return str_replace( ' src', ' defer="defer" src', $tag );
		}
	}

	return $tag;
}
add_filter( 'script_loader_tag', 'tintora_defer_scripts', 10, 3 );
