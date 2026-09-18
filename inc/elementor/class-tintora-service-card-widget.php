<?php
/**
 * Elementor Widget: Service Card
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Tintora_Elementor_Service_Card_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'tintora_service_card';
	}

	public function get_title() {
		return esc_html__( 'Tintora Service Card', 'tintora' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return array( 'tintora-category' );
	}

	protected function register_controls() {
		$this->start_controls_section(
			'content_section',
			array(
				'label' => esc_html__( 'Card Settings', 'tintora' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			)
		);

		$this->add_control(
			'icon',
			array(
				'label'   => esc_html__( 'Icon Type', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::SELECT,
				'default' => 'car',
				'options' => array(
					'car'        => esc_html__( 'Automotive Car', 'tintora' ),
					'home'       => esc_html__( 'Residential Home', 'tintora' ),
					'building'   => esc_html__( 'Commercial Building', 'tintora' ),
					'sun'        => esc_html__( 'Solar / UV', 'tintora' ),
					'shield'     => esc_html__( 'Security Shield', 'tintora' ),
					'privacy'    => esc_html__( 'Privacy Eye', 'tintora' ),
				),
			)
		);

		$this->add_control(
			'title',
			array(
				'label'   => esc_html__( 'Title', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => 'Automotive Window Tint',
			)
		);

		$this->add_control(
			'description',
			array(
				'label'   => esc_html__( 'Description', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::TEXTAREA,
				'default' => 'High-performance ceramic & carbon film for heat rejection, privacy, and UV protection.',
			)
		);

		$this->add_control(
			'badge',
			array(
				'label'   => esc_html__( 'Badge (Optional)', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => '',
			)
		);

		$this->add_control(
			'link',
			array(
				'label'   => esc_html__( 'Link URL', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::URL,
				'default' => array( 'url' => '#contact' ),
			)
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		get_template_part(
			'template-parts/components/service-card',
			null,
			array(
				'icon'        => $settings['icon'],
				'title'       => $settings['title'],
				'description' => $settings['description'],
				'badge'       => $settings['badge'],
				'link'        => ! empty( $settings['link']['url'] ) ? $settings['link']['url'] : '#contact',
			)
		);
	}
}
