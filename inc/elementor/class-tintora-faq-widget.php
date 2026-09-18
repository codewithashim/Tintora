<?php
/**
 * Elementor Widget: FAQ Accordion
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Tintora_Elementor_FAQ_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'tintora_faq';
	}

	public function get_title() {
		return esc_html__( 'Tintora FAQ Accordion', 'tintora' );
	}

	public function get_icon() {
		return 'eicon-accordion';
	}

	public function get_categories() {
		return array( 'tintora-category' );
	}

	protected function register_controls() {
		$this->start_controls_section(
			'content_section',
			array(
				'label' => esc_html__( 'FAQ Accordion Items', 'tintora' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			)
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'question',
			array(
				'label'   => esc_html__( 'Question', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => 'How long does window tint installation take?',
			)
		);

		$repeater->add_control(
			'answer',
			array(
				'label'   => esc_html__( 'Answer', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::TEXTAREA,
				'default' => 'A full vehicle installation takes about 2 to 3 hours.',
			)
		);

		$this->add_control(
			'faq_list',
			array(
				'label'       => esc_html__( 'FAQ Items', 'tintora' ),
				'type'        => \Elementor\Controls_Manager::REPEATER,
				'fields'      => $repeater->get_controls(),
				'default'     => array(
					array(
						'question' => 'How long does vehicle window tint installation take?',
						'answer'   => 'A full vehicle tint installation typically takes 2 to 3 hours.',
					),
					array(
						'question' => 'Does ceramic window tint really reduce cabin heat?',
						'answer'   => 'Yes! Nano-ceramic film rejects up to 88% of solar infrared heat.',
					),
				),
				'title_field' => '{{{ question }}}',
			)
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$faq_list = $settings['faq_list'];

		if ( empty( $faq_list ) ) return;
		?>
		<div class="faq-accordion">
			<?php foreach ( $faq_list as $index => $item ) : ?>
				<?php
				$faq_id = 'el-faq-panel-' . $index;
				$btn_id = 'el-faq-btn-' . $index;
				?>
				<div class="faq-item">
					<button id="<?php echo esc_attr( $btn_id ); ?>" class="faq-button" aria-expanded="false" aria-controls="<?php echo esc_attr( $faq_id ); ?>">
						<span><?php echo esc_html( $item['question'] ); ?></span>
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
					</button>
					<div id="<?php echo esc_attr( $faq_id ); ?>" class="faq-panel" role="region" aria-labelledby="<?php esc_attr( $btn_id ); ?>" hidden>
						<p><?php echo esc_html( $item['answer'] ); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<?php
	}
}
