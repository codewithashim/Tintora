<?php
/**
 * Tintora Enqueue Scripts & Styles
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue scripts and styles for the front-end.
 */
function tintora_enqueue_scripts() {
	// Google Fonts
	$font_url = get_theme_mod( 'tintora_font_url', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap' );
	if ( ! empty( $font_url ) ) {
		wp_enqueue_style( 'tintora-google-fonts', esc_url( $font_url ), array(), null );
	}

	// Main Stylesheets
	wp_enqueue_style( 'tintora-main-style', TINTORA_URI . '/assets/css/main.css', array(), TINTORA_VERSION );
	wp_enqueue_style( 'tintora-components-style', TINTORA_URI . '/assets/css/components.css', array( 'tintora-main-style' ), TINTORA_VERSION );
	wp_enqueue_style( 'tintora-responsive-style', TINTORA_URI . '/assets/css/responsive.css', array( 'tintora-components-style' ), TINTORA_VERSION );
	wp_enqueue_style( 'tintora-theme-root-style', get_stylesheet_uri(), array( 'tintora-responsive-style' ), TINTORA_VERSION );

	// Inject Dynamic Customizer CSS
	if ( function_exists( 'tintora_get_dynamic_css' ) ) {
		$dynamic_css = tintora_get_dynamic_css();
		if ( ! empty( $dynamic_css ) ) {
			wp_add_inline_style( 'tintora-main-style', $dynamic_css );
		}
	}

	// JavaScript Utilities
	wp_enqueue_script( 'tintora-navigation', TINTORA_URI . '/assets/js/navigation.js', array(), TINTORA_VERSION, true );
	wp_enqueue_script( 'tintora-animations', TINTORA_URI . '/assets/js/animations.js', array(), TINTORA_VERSION, true );
	wp_enqueue_script( 'tintora-gallery', TINTORA_URI . '/assets/js/gallery.js', array(), TINTORA_VERSION, true );
	wp_enqueue_script( 'tintora-main', TINTORA_URI . '/assets/js/main.js', array( 'tintora-navigation', 'tintora-animations', 'tintora-gallery' ), TINTORA_VERSION, true );

	// Localize script data for JS
	wp_localize_script(
		'tintora-main',
		'tintoraConfig',
		array(
			'ajaxUrl'     => admin_url( 'admin-ajax.php' ),
			'nonce'       => wp_create_nonce( 'tintora_nonce' ),
			'i18n'        => array(
				'close'    => esc_html__( 'Close', 'tintora' ),
				'next'     => esc_html__( 'Next', 'tintora' ),
				'previous' => esc_html__( 'Previous', 'tintora' ),
				'expand'   => esc_html__( 'Expand Accordion', 'tintora' ),
				'collapse' => esc_html__( 'Collapse Accordion', 'tintora' ),
			),
			'hasStickyBar' => get_theme_mod( 'tintora_enable_mobile_action_bar', true ),
		)
	);

	// Comment Reply Script
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tintora_enqueue_scripts' );

/**
 * Enqueue Block Editor Styles & Scripts
 */
function tintora_block_editor_assets() {
	wp_enqueue_style( 'tintora-editor-styles', TINTORA_URI . '/assets/css/main.css', array(), TINTORA_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'tintora_block_editor_assets' );
