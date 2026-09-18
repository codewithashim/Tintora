<?php
/**
 * Elementor Widget: Hero Section
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Tintora_Elementor_Hero_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'tintora_hero';
	}

	public function get_title() {
		return esc_html__( 'Tintora Hero Section', 'tintora' );
	}

	public function get_icon() {
		return 'eicon-banner';
	}

	public function get_categories() {
		return array( 'tintora-category' );
	}

	protected function register_controls() {
		$this->start_controls_section(
			'content_section',
			array(
				'label' => esc_html__( 'Hero Content', 'tintora' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			)
		);

		$this->add_control(
			'eyebrow',
			array(
				'label'       => esc_html__( 'Eyebrow Text', 'tintora' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => '★ #1 Rated Tinting & Protection Specialist',
				'placeholder' => esc_html__( 'Enter eyebrow badge text', 'tintora' ),
			)
		);

		$this->add_control(
			'title',
			array(
				'label'       => esc_html__( 'Hero Heading', 'tintora' ),
				'type'        => \Elementor\Controls_Manager::TEXTAREA,
				'default'     => 'Premium Window Tinting. Built to Protect.',
				'placeholder' => esc_html__( 'Enter main heading', 'tintora' ),
			)
		);

		$this->add_control(
			'description',
			array(
				'label'       => esc_html__( 'Description', 'tintora' ),
				'type'        => \Elementor\Controls_Manager::WYSIWYG,
				'default'     => 'Professional window film solutions for vehicles, homes and commercial buildings. Reduce heat by up to 84%, reject 99% UV rays and elevate privacy.',
			)
		);

		$this->add_control(
			'btn1_text',
			array(
				'label'   => esc_html__( 'Primary Button Label', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => 'Get a Free Quote',
			)
		);

		$this->add_control(
			'btn1_url',
			array(
				'label'   => esc_html__( 'Primary Button URL', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::URL,
				'default' => array( 'url' => '#contact' ),
			)
		);

		$this->add_control(
			'btn2_text',
			array(
				'label'   => esc_html__( 'Secondary Button Label', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => 'Explore Services',
			)
		);

		$this->add_control(
			'btn2_url',
			array(
				'label'   => esc_html__( 'Secondary Button URL', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::URL,
				'default' => array( 'url' => '#services' ),
			)
		);

		$this->add_control(
			'bg_image',
			array(
				'label'   => esc_html__( 'Background Image', 'tintora' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
			)
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		$eyebrow     = $settings['eyebrow'];
		$title       = $settings['title'];
		$description = $settings['description'];
		$btn1_text   = $settings['btn1_text'];
		$btn1_url    = ! empty( $settings['btn1_url']['url'] ) ? $settings['btn1_url']['url'] : '#contact';
		$btn2_text   = $settings['btn2_text'];
		$btn2_url    = ! empty( $settings['btn2_url']['url'] ) ? $settings['btn2_url']['url'] : '#services';
		$bg_img      = ! empty( $settings['bg_image']['url'] ) ? $settings['bg_image']['url'] : '';
		?>

		<section class="hero-section">
			<?php if ( ! empty( $bg_img ) ) : ?>
				<img src="<?php echo esc_url( $bg_img ); ?>" class="hero-bg-image" alt="Hero Background" />
			<?php endif; ?>
			
			<div class="hero-bg-overlay"></div>

			<div class="hero-container">
				<div class="hero-content">
					<?php if ( ! empty( $eyebrow ) ) : ?>
						<div class="eyebrow"><?php echo esc_html( $eyebrow ); ?></div>
					<?php endif; ?>

					<h1 class="hero-heading"><?php echo esc_html( $title ); ?></h1>
					<div class="hero-lead"><?php echo wp_kses_post( $description ); ?></div>

					<div class="hero-actions">
						<?php if ( ! empty( $btn1_text ) ) : ?>
							<a href="<?php echo esc_url( $btn1_url ); ?>" class="btn btn-primary btn-lg">
								<?php echo esc_html( $btn1_text ); ?>
								<?php echo tintora_get_svg_icon( 'arrow-right' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</a>
						<?php endif; ?>

						<?php if ( ! empty( $btn2_text ) ) : ?>
							<a href="<?php echo esc_url( $btn2_url ); ?>" class="btn btn-outline-white btn-lg">
								<?php echo esc_html( $btn2_text ); ?>
							</a>
						<?php endif; ?>
					</div>

					<div class="hero-stats-grid">
						<div class="stat-item">
							<div class="stat-number" data-count="10+">10+</div>
							<div class="stat-label"><?php esc_html_e( 'Years Experience', 'tintora' ); ?></div>
						</div>
						<div class="stat-item">
							<div class="stat-number" data-count="5000+">5000+</div>
							<div class="stat-label"><?php esc_html_e( 'Vehicles Tinted', 'tintora' ); ?></div>
						</div>
						<div class="stat-item">
							<div class="stat-number" data-count="99%">99%</div>
							<div class="stat-label"><?php esc_html_e( 'UV Rejection', 'tintora' ); ?></div>
						</div>
						<div class="stat-item">
							<div class="stat-number" data-count="100%">100%</div>
							<div class="stat-label"><?php esc_html_e( 'Lifetime Warranty', 'tintora' ); ?></div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<?php
	}
}
