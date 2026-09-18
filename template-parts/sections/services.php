<?php
/**
 * Services Section Template Part
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$services = array(
	array(
		'icon'        => 'car',
		'title'       => __( 'Automotive Window Tinting', 'tintora' ),
		'description' => __( 'High-performance nano-ceramic & carbon window film for extreme heat rejection, privacy, and glare reduction.', 'tintora' ),
		'link'        => '#contact',
		'badge'       => __( 'Popular', 'tintora' ),
	),
	array(
		'icon'        => 'home',
		'title'       => __( 'Residential Window Film', 'tintora' ),
		'description' => __( 'Lower energy costs, protect hardwood floors & furniture from fading, and enhance privacy without losing light.', 'tintora' ),
		'link'        => '#contact',
	),
	array(
		'icon'        => 'building',
		'title'       => __( 'Commercial Window Film', 'tintora' ),
		'description' => __( 'Solar control films for office buildings, storefronts, and architectural glass to cut HVAC costs.', 'tintora' ),
		'link'        => '#contact',
	),
	array(
		'icon'        => 'sun',
		'title'       => __( 'UV Protection Film', 'tintora' ),
		'description' => __( 'Block 99% of harmful ultraviolet rays, preventing skin damage and interior fading.', 'tintora' ),
		'link'        => '#contact',
	),
	array(
		'icon'        => 'shield',
		'title'       => __( 'Security & Safety Film', 'tintora' ),
		'description' => __( 'Heavy-duty shatter-resistant film designed to hold broken glass together during impact or forced entry.', 'tintora' ),
		'link'        => '#contact',
	),
	array(
		'icon'        => 'privacy',
		'title'       => __( 'Privacy Window Film', 'tintora' ),
		'description' => __( 'One-way dual reflective and frost films to secure your indoor privacy day and night.', 'tintora' ),
		'link'        => '#contact',
	),
	array(
		'icon'        => 'building',
		'title'       => __( 'Decorative Window Film', 'tintora' ),
		'description' => __( 'Frosted, patterned, and custom vinyl graphics for office conference rooms and glass partitions.', 'tintora' ),
		'link'        => '#contact',
	),
	array(
		'icon'        => 'sun',
		'title'       => __( 'Solar Control Film', 'tintora' ),
		'description' => __( 'Reject up to 84% of solar heat, eliminating hot spots and keeping rooms cool during summer.', 'tintora' ),
		'link'        => '#contact',
	),
);
?>

<section id="services" class="section services-section">
	<div class="container">
		
		<div class="section-header">
			<div class="eyebrow"><?php esc_html_e( 'Our Film Solutions', 'tintora' ); ?></div>
			<h2 class="section-title"><?php esc_html_e( 'Comprehensive Window Film & Protection Services', 'tintora' ); ?></h2>
			<p class="section-description">
				<?php esc_html_e( 'From luxury supercars to residential homes and commercial skyscrapers, we engineer optical perfection for every pane of glass.', 'tintora' ); ?>
			</p>
		</div>

		<div class="services-grid">
			<?php foreach ( $services as $service ) : ?>
				<?php
				get_template_part(
					'template-parts/components/service-card',
					null,
					$service
				);
				?>
			<?php endforeach; ?>
		</div>

	</div>
</section>
