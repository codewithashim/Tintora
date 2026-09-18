<?php
/**
 * Why Choose Us Section Template Part
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$reasons = array(
	array(
		'icon'  => 'shield',
		'title' => __( 'Premium Nano-Ceramic Film', 'tintora' ),
		'desc'  => __( 'Multi-layer ceramic technology rejecting up to 99% UV radiation and up to 88% solar infrared heat.', 'tintora' ),
	),
	array(
		'icon'  => 'check',
		'title' => __( 'Master Certified Installers', 'tintora' ),
		'desc'  => __( 'Factory trained specialists with thousands of luxury vehicle & high-end architectural tint installations.', 'tintora' ),
	),
	array(
		'icon'  => 'star',
		'title' => __( 'Lifetime Warranty', 'tintora' ),
		'desc'  => __( 'Full nationwide warranty protection against bubbling, fading, peeling, or adhesive failure.', 'tintora' ),
	),
	array(
		'icon'  => 'sun',
		'title' => __( 'Maximum Heat Reduction', 'tintora' ),
		'desc'  => __( 'Drastically lower cabin and room temperatures, easing air conditioner workload.', 'tintora' ),
	),
);
?>

<section class="section why-choose-section">
	<div class="container">
		
		<div class="section-header">
			<div class="eyebrow"><?php esc_html_e( 'The Tintora Difference', 'tintora' ); ?></div>
			<h2 class="section-title"><?php esc_html_e( 'Engineered for Performance & Ultimate Comfort', 'tintora' ); ?></h2>
		</div>

		<div class="services-grid">
			<?php foreach ( $reasons as $reason ) : ?>
				<div class="card" style="text-align: center;">
					<div class="card-icon" style="margin: 0 auto 1.5rem;">
						<?php echo tintora_get_svg_icon( $reason['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</div>
					<h3 class="card-title"><?php echo esc_html( $reason['title'] ); ?></h3>
					<p class="card-description"><?php echo esc_html( $reason['desc'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>

	</div>
</section>
