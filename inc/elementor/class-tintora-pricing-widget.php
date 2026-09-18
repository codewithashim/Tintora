<?php
/**
 * Elementor Widget: Pricing Card
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Tintora_Elementor_Pricing_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'tintora_pricing';
	}

	public function get_title() {
		return esc_html__( 'Tintora Pricing Card', 'tintora' );
	}

	public function get_icon() {
		return 'eicon-price-table';
	}

	public function get_categories() {
		return array( 'tintora-category' );
	}

	protected function register_controls() {
		$this->start_controls_section(
			'content_section',
			array(
				'label' => esc_html__( 'Pricing Settings', 'tintora' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			)
		);

		$this->add_control(
			'title',
			array(
				'label'   => esc_html__( 'Plan Title', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => 'IR Nano-Ceramic',
			)
		);

		$this->add_control(
			'price',
			array(
				'label'   => esc_html__( 'Price', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => '$349',
			)
		);

		$this->add_control(
			'unit',
			array(
				'label'   => esc_html__( 'Unit Label', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => '/ sedan',
			)
		);

		$this->add_control(
			'featured',
			array(
				'label'        => esc_html__( 'Mark as Popular / Featured', 'tintora' ),
				'type'         => \Elementor\Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default'      => 'yes',
			)
		);

		$this->add_control(
			'cta_text',
			array(
				'label'   => esc_html__( 'CTA Button Label', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => 'Get Ceramic Tint',
			)
		);

		$this->add_control(
			'cta_url',
			array(
				'label'   => esc_html__( 'CTA Link URL', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::URL,
				'default' => array( 'url' => '#contact' ),
			)
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		get_template_part(
			'template-parts/components/pricing-card',
			null,
			array(
				'title'    => $settings['title'],
				'price'    => $settings['price'],
				'unit'     => $settings['unit'],
				'featured' => ( 'yes' === $settings['featured'] ),
				'cta_text' => $settings['cta_text'],
				'cta_url'  => ! empty( $settings['cta_url']['url'] ) ? $settings['cta_url']['url'] : '#contact',
			)
		);
	}
}
