<?php
/**
 * Tintora Elementor Compatibility & Custom Widgets Engine
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Tintora_Elementor_Extension
 */
class Tintora_Elementor_Extension {

	/**
	 * Instance
	 *
	 * @var Tintora_Elementor_Extension
	 */
	private static $instance = null;

	/**
	 * Get Instance
	 *
	 * @return Tintora_Elementor_Extension
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Constructor
	 */
	public function __construct() {
		// Register Elementor Category
		add_action( 'elementor/elements/categories_registered', array( $this, 'register_category' ) );

		// Register Custom Widgets
		add_action( 'elementor/widgets/register', array( $this, 'register_widgets' ) );

		// Register Theme Locations for Elementor Pro
		add_action( 'elementor/theme/register_locations', array( $this, 'register_locations' ) );
	}

	/**
	 * Register Custom Elementor Category
	 *
	 * @param \Elementor\Elements_Manager $elements_manager Elements manager instance.
	 */
	public function register_category( $elements_manager ) {
		$elements_manager->add_category(
			'tintora-category',
			array(
				'title' => esc_html__( 'Tintora Theme Widgets', 'tintora' ),
				'icon'  => 'fa fa-shield',
			)
		);
	}

	/**
	 * Register Custom Widgets
	 *
	 * @param \Elementor\Widgets_Manager $widgets_manager Widgets manager instance.
	 */
	public function register_widgets( $widgets_manager ) {
		$widgets_files = array(
			'class-tintora-hero-widget.php',
			'class-tintora-before-after-widget.php',
			'class-tintora-service-card-widget.php',
			'class-tintora-pricing-widget.php',
			'class-tintora-faq-widget.php',
		);

		foreach ( $widgets_files as $file ) {
			$filepath = TINTORA_DIR . '/inc/elementor/' . $file;
			if ( file_exists( $filepath ) ) {
				require_once $filepath;
			}
		}

		// Register Widget Classes
		if ( class_exists( '\Tintora_Elementor_Hero_Widget' ) ) {
			$widgets_manager->register( new \Tintora_Elementor_Hero_Widget() );
		}
		if ( class_exists( '\Tintora_Elementor_Before_After_Widget' ) ) {
			$widgets_manager->register( new \Tintora_Elementor_Before_After_Widget() );
		}
		if ( class_exists( '\Tintora_Elementor_Service_Card_Widget' ) ) {
			$widgets_manager->register( new \Tintora_Elementor_Service_Card_Widget() );
		}
		if ( class_exists( '\Tintora_Elementor_Pricing_Widget' ) ) {
			$widgets_manager->register( new \Tintora_Elementor_Pricing_Widget() );
		}
		if ( class_exists( '\Tintora_Elementor_FAQ_Widget' ) ) {
			$widgets_manager->register( new \Tintora_Elementor_FAQ_Widget() );
		}
	}

	/**
	 * Register Theme Locations for Elementor Pro Header & Footer
	 *
	 * @param \ElementorPro\Modules\ThemeBuilder\Classes\Locations_Manager $location_manager Locations manager.
	 */
	public function register_locations( $location_manager ) {
		$location_manager->register_all_core_location();
	}
}

// Initialize Elementor Extension if Elementor is present or on init
add_action( 'plugins_loaded', function() {
	if ( did_action( 'elementor/loaded' ) ) {
		Tintora_Elementor_Extension::get_instance();
	}
} );
