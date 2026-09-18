<?php
/**
 * Tintora Theme Shortcodes
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Call To Action Shortcode: [tintora_cta title="" text="" button_text="" button_url=""]
 */
function tintora_cta_shortcode( $atts ) {
	$atts = shortcode_atts(
		array(
			'title'       => __( 'Ready for Better Glass & UV Protection?', 'tintora' ),
			'text'        => __( 'Contact our certified window film specialists today for a free estimate.', 'tintora' ),
			'button_text' => __( 'Get a Free Quote', 'tintora' ),
			'button_url'  => '#contact',
			'style'       => 'dark',
		),
		$atts,
		'tintora_cta'
	);

	$style_class = ( 'light' === $atts['style'] ) ? 'tintora-cta-box--light' : 'tintora-cta-box--dark';

	ob_start();
	?>
	<div class="tintora-cta-box <?php echo esc_attr( $style_class ); ?>">
		<div class="tintora-cta-box__content">
			<h3 class="tintora-cta-box__title"><?php echo esc_html( $atts['title'] ); ?></h3>
			<p class="tintora-cta-box__text"><?php echo esc_html( $atts['text'] ); ?></p>
		</div>
		<div class="tintora-cta-box__action">
			<a href="<?php echo esc_url( $atts['button_url'] ); ?>" class="btn btn-primary btn-lg">
				<?php echo esc_html( $atts['button_text'] ); ?>
				<?php echo tintora_get_svg_icon( 'arrow-right' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			</a>
		</div>
	</div>
	<?php
	return ob_get_clean();
}
add_shortcode( 'tintora_cta', 'tintora_cta_shortcode' );

/**
 * Before / After Image Comparison Shortcode: [tintora_before_after before_img="" after_img="" label_before="Factory Glass" label_after="Tinted Glass"]
 */
function tintora_before_after_shortcode( $atts ) {
	$atts = shortcode_atts(
		array(
			'before_img'   => '',
			'after_img'    => '',
			'label_before' => __( 'Before (Factory)', 'tintora' ),
			'label_after'  => __( 'After (5% Tint)', 'tintora' ),
		),
		$atts,
		'tintora_before_after'
	);

	if ( empty( $atts['before_img'] ) || empty( $atts['after_img'] ) ) {
		return '<p class="tintora-shortcode-notice">' . esc_html__( 'Please specify both before_img and after_img URLs.', 'tintora' ) . '</p>';
	}

	ob_start();
	?>
	<div class="tintora-before-after" data-component="before-after" role="region" aria-label="<?php esc_attr_e( 'Window Tint Before and After Comparison', 'tintora' ); ?>">
		<div class="before-after-wrapper">
			<img src="<?php echo esc_url( $atts['after_img'] ); ?>" alt="<?php echo esc_attr( $atts['label_after'] ); ?>" class="after-image" loading="lazy" />
			<div class="before-image-wrapper">
				<img src="<?php echo esc_url( $atts['before_img'] ); ?>" alt="<?php echo esc_attr( $atts['label_before'] ); ?>" class="before-image" loading="lazy" />
			</div>
			<span class="badge badge-before"><?php echo esc_html( $atts['label_before'] ); ?></span>
			<span class="badge badge-after"><?php echo esc_html( $atts['label_after'] ); ?></span>
			<div class="before-after-handle" role="slider" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" tabindex="0" aria-label="<?php esc_attr_e( 'Drag to compare tinting results', 'tintora' ); ?>">
				<div class="handle-line"></div>
				<div class="handle-button">
					<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m9 18-6-6 6-6"/><path d="m15 6 6 6-6 6"/></svg>
				</div>
			</div>
		</div>
	</div>
	<?php
	return ob_get_clean();
}
add_shortcode( 'tintora_before_after', 'tintora_before_after_shortcode' );

/**
 * Quick Quote Button Shortcode: [tintora_quote_button text="Get a Free Quote" url="#contact"]
 */
function tintora_quote_button_shortcode( $atts ) {
	$atts = shortcode_atts(
		array(
			'text' => __( 'Get a Free Quote', 'tintora' ),
			'url'  => '#contact',
		),
		$atts,
		'tintora_quote_button'
	);

	return '<a href="' . esc_url( $atts['url'] ) . '" class="btn btn-primary">' . esc_html( $atts['text'] ) . '</a>';
}
add_shortcode( 'tintora_quote_button', 'tintora_quote_button_shortcode' );
