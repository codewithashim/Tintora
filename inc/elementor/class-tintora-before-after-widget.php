<?php
/**
 * Elementor Widget: Before / After Slider
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Tintora_Elementor_Before_After_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'tintora_before_after';
	}

	public function get_title() {
		return esc_html__( 'Tintora Before/After Slider', 'tintora' );
	}

	public function get_icon() {
		return 'eicon-image-before-after';
	}

	public function get_categories() {
		return array( 'tintora-category' );
	}

	protected function register_controls() {
		$this->start_controls_section(
			'content_section',
			array(
				'label' => esc_html__( 'Comparison Images', 'tintora' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			)
		);

		$this->add_control(
			'before_image',
			array(
				'label'   => esc_html__( 'Before Image (Untinted)', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
			)
		);

		$this->add_control(
			'after_image',
			array(
				'label'   => esc_html__( 'After Image (Tinted)', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
			)
		);

		$this->add_control(
			'label_before',
			array(
				'label'   => esc_html__( 'Before Label', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => 'Before (Factory Glass)',
			)
		);

		$this->add_control(
			'label_after',
			array(
				'label'   => esc_html__( 'After Label', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => 'After (5% Ceramic Tint)',
			)
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings     = $this->get_settings_for_display();
		$before_url   = ! empty( $settings['before_image']['url'] ) ? $settings['before_image']['url'] : 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1200&q=80';
		$after_url    = ! empty( $settings['after_image']['url'] ) ? $settings['after_image']['url'] : 'https://images.unsplash.com/photo-1617814076367-b759c7d7e738?auto=format&fit=crop&w=1200&q=80';
		$label_before = ! empty( $settings['label_before'] ) ? $settings['label_before'] : __( 'Before', 'tintora' );
		$label_after  = ! empty( $settings['label_after'] ) ? $settings['label_after'] : __( 'After', 'tintora' );

		echo do_shortcode(
			sprintf(
				'[tintora_before_after before_img="%s" after_img="%s" label_before="%s" label_after="%s"]',
				esc_url( $before_url ),
				esc_url( $after_url ),
				esc_attr( $label_before ),
				esc_attr( $label_after )
			)
		);
	}
}
