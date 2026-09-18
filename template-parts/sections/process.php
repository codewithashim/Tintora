<?php
/**
 * Installation Process Section Template Part
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$steps = array(
	array(
		'number' => '01',
		'title'  => __( 'Choose Your Film Shade & Type', 'tintora' ),
		'desc'   => __( 'Select from ceramic, carbon, or solar control films across various tint shades (5%, 15%, 35%, 70%).', 'tintora' ),
	),
	array(
		'number' => '02',
		'title'  => __( 'Get an Instant Transparent Quote', 'tintora' ),
		'desc'   => __( 'Receive an all-inclusive estimate for your vehicle, home, or office building with no hidden fees.', 'tintora' ),
	),
	array(
		'number' => '03',
		'title'  => __( 'Precision Plot & Installation', 'tintora' ),
		'desc'   => __( 'Computer-cut film applied in our clean-room bay by certified tint master technicians.', 'tintora' ),
	),
	array(
		'number' => '04',
		'title'  => __( 'Enjoy Cool Comfort & Warranty', 'tintora' ),
		'desc'   => __( 'Drive or relax in immediate UV protection and heat rejection backed by a lifetime warranty.', 'tintora' ),
	),
);
?>

<section id="process" class="section process-section" style="background: var(--tintora-surface);">
	<div class="container">
		
		<div class="section-header">
			<div class="eyebrow"><?php esc_html_e( 'How It Works', 'tintora' ); ?></div>
			<h2 class="section-title"><?php esc_html_e( '4 Steps to Perfect Window Protection', 'tintora' ); ?></h2>
		</div>

		<div class="process-grid">
			<?php foreach ( $steps as $step ) : ?>
				<div class="process-card">
					<div class="step-number"><?php echo esc_html( $step['number'] ); ?></div>
					<h3 class="process-title"><?php echo esc_html( $step['title'] ); ?></h3>
					<p class="process-desc"><?php echo esc_html( $step['desc'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>

	</div>
</section>
