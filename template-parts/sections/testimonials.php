<?php
/**
 * Testimonials Section Template Part
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$testimonials = array(
	array(
		'name'    => 'Marcus Vance',
		'company' => 'Porsche 911 GT3 Owner',
		'quote'   => __( 'The ceramic window film installation on my GT3 RS was 100% flawless. Zero dust under the film, clean micro-edge cut, and the cabin stays cool even under 100°F sun!', 'tintora' ),
		'rating'  => 5,
	),
	array(
		'name'    => 'Sarah Jenkins',
		'company' => 'Homeowner in Sunset Hills',
		'quote'   => __( 'Our living room windows faced east and baked our hardwood floors every morning. Tintora installed residential dual-reflective solar film and cut heat by at least 80%!', 'tintora' ),
		'rating'  => 5,
	),
	array(
		'name'    => 'Robert Sterling',
		'company' => 'Commercial Facility Manager',
		'quote'   => __( 'Tintora retrofitted our 4-story glass office building with safety & security film. Professional crew, on-time delivery, and noticeable HVAC energy savings.', 'tintora' ),
		'rating'  => 5,
	),
);
?>

<section class="section testimonials-section" style="background: var(--tintora-surface);">
	<div class="container">
		
		<div class="section-header">
			<div class="eyebrow"><?php esc_html_e( 'Client Reviews', 'tintora' ); ?></div>
			<h2 class="section-title"><?php esc_html_e( 'What Our Customers Say', 'tintora' ); ?></h2>
		</div>

		<div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
			<?php foreach ( $testimonials as $item ) : ?>
				<?php
				get_template_part(
					'template-parts/components/testimonial-card',
					null,
					$item
				);
				?>
			<?php endforeach; ?>
		</div>

	</div>
</section>
