<?php
/**
 * Pricing Section Template Part
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$packages = array(
	array(
		'title'    => __( 'Standard Carbon', 'tintora' ),
		'price'    => '$199',
		'unit'     => '/ sedan',
		'featured' => false,
		'features' => array(
			__( 'Color-Stable Carbon Film', 'tintora' ),
			__( '99% UV Ray Rejection', 'tintora' ),
			__( '45% Solar Heat Rejection', 'tintora' ),
			__( 'Computer Plot Pattern Cut', 'tintora' ),
			__( '5 Year Limited Warranty', 'tintora' ),
		),
		'cta_text' => __( 'Select Package', 'tintora' ),
	),
	array(
		'title'    => __( 'IR Nano-Ceramic', 'tintora' ),
		'price'    => '$349',
		'unit'     => '/ sedan',
		'featured' => true,
		'features' => array(
			__( 'High IR Rejection Ceramic', 'tintora' ),
			__( '99% UV Ray Rejection', 'tintora' ),
			__( '84% Solar Heat Rejection', 'tintora' ),
			__( 'No Signal Interference', 'tintora' ),
			__( 'Lifetime Nationwide Warranty', 'tintora' ),
		),
		'cta_text' => __( 'Get Ceramic Tint', 'tintora' ),
	),
	array(
		'title'    => __( 'Ultimate Shield Package', 'tintora' ),
		'price'    => '$499',
		'unit'     => '/ sedan',
		'featured' => false,
		'features' => array(
			__( 'Full Vehicle Ceramic Tint (All Glass)', 'tintora' ),
			__( 'Ceramic Windshield Sunstrip Included', 'tintora' ),
			__( '88% Infrared Heat Rejection', 'tintora' ),
			__( '99.9% UV Skin Protection', 'tintora' ),
			__( 'Lifetime Transferable Warranty', 'tintora' ),
		),
		'cta_text' => __( 'Select Ultimate', 'tintora' ),
	),
);
?>

<section id="pricing" class="section pricing-section">
	<div class="container">
		
		<div class="section-header">
			<div class="eyebrow"><?php esc_html_e( 'Transparent Pricing', 'tintora' ); ?></div>
			<h2 class="section-title"><?php esc_html_e( 'Automotive Window Tinting Packages', 'tintora' ); ?></h2>
			<p class="section-description">
				<?php esc_html_e( 'Choose the perfect film tier for your vehicle. Contact us for custom residential and commercial glass estimates.', 'tintora' ); ?>
			</p>
		</div>

		<div class="pricing-grid">
			<?php foreach ( $packages as $pkg ) : ?>
				<?php
				get_template_part(
					'template-parts/components/pricing-card',
					null,
					$pkg
				);
				?>
			<?php endforeach; ?>
		</div>

	</div>
</section>
