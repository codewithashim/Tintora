<?php
/**
 * Tintora Widget Area Registrations
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register widget area.
 */
function tintora_widgets_init() {
	// Sidebar Widget Area
	register_sidebar(
		array(
			'name'          => esc_html__( 'Main Sidebar', 'tintora' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your blog sidebar.', 'tintora' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	// Footer Columns 1-4
	$footer_columns = array(
		'footer-1' => esc_html__( 'Footer Column 1', 'tintora' ),
		'footer-2' => esc_html__( 'Footer Column 2', 'tintora' ),
		'footer-3' => esc_html__( 'Footer Column 3', 'tintora' ),
		'footer-4' => esc_html__( 'Footer Column 4', 'tintora' ),
	);

	foreach ( $footer_columns as $id => $name ) {
		register_sidebar(
			array(
				'name'          => $name,
				'id'            => $id,
				'description'   => esc_html__( 'Add widgets here to appear in the theme footer.', 'tintora' ),
				'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h4 class="footer-widget-title">',
				'after_title'   => '</h4>',
			)
		);
	}
}
add_action( 'widgets_init', 'tintora_widgets_init' );
