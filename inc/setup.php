<?php
/**
 * Tintora Theme Setup
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'tintora_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function tintora_setup() {
		// Make theme available for translation.
		load_theme_textdomain( 'tintora', TINTORA_DIR . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Custom Image Sizes
		add_image_size( 'tintora-hero', 1920, 1080, true );
		add_image_size( 'tintora-card', 800, 600, true );
		add_image_size( 'tintora-square', 600, 600, true );
		add_image_size( 'tintora-wide', 1200, 675, true );

		// Register Navigation Menus
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'tintora' ),
				'footer'  => esc_html__( 'Footer Menu', 'tintora' ),
				'mobile'  => esc_html__( 'Mobile Navigation Menu', 'tintora' ),
			)
		);

		// HTML5 markup support
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		// Custom Background Support
		add_theme_support(
			'custom-background',
			apply_filters(
				'tintora_custom_background_args',
				array(
					'default-color' => 'F7F7F5',
					'default-image' => '',
				)
			)
		);

		// Custom Header Support
		add_theme_support(
			'custom-header',
			array(
				'default-image'      => '',
				'width'              => 1920,
				'height'             => 600,
				'flex-width'         => true,
				'flex-height'        => true,
				'header-text'        => false,
			)
		);

		// Custom Logo Support
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 90,
				'width'       => 280,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'site-title', 'site-description' ),
			)
		);

		// Gutenberg Block Features
		add_theme_support( 'align-wide' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'assets/css/main.css' );

		// Customizer Selective Refresh for Widgets
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', 'tintora_setup' );

/**
 * Set Content Width
 */
function tintora_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tintora_content_width', 1200 );
}
add_action( 'after_setup_theme', 'tintora_content_width', 0 );
