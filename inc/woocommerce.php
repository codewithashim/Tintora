<?php
/**
 * Tintora WooCommerce Compatibility & Integration
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * WooCommerce setup function.
 */
function tintora_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 600,
			'single_image_width'    => 800,
			'product_grid'          => array(
				'default_rows'    => 3,
				'min_rows'        => 1,
				'default_columns' => 3,
				'min_columns'     => 1,
				'max_columns'     => 4,
			),
		)
	);

	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'tintora_woocommerce_setup' );

/**
 * Enqueue WooCommerce Specific Theme Stylesheet
 */
function tintora_woocommerce_scripts() {
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'tintora-woocommerce-style', TINTORA_URI . '/assets/css/components.css', array( 'tintora-main-style' ), TINTORA_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'tintora_woocommerce_scripts' );

/**
 * Modify Product Loop Columns Count
 *
 * @return int Number of columns.
 */
function tintora_woocommerce_loop_columns() {
	return 3;
}
add_filter( 'loop_shop_columns', 'tintora_woocommerce_loop_columns' );
