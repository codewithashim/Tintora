<?php
/**
 * Projects Gallery & Before/After Section Template Part
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$sample_projects = array(
	array(
		'title'    => __( 'Porsche 911 GT3 RS - 15% Ceramic Tint', 'tintora' ),
		'category' => 'automotive',
		'img_src'  => 'https://images.unsplash.com/photo-1614162692292-7ac56d7f7f1e?auto=format&fit=crop&w=1200&q=80',
	),
	array(
		'title'    => __( 'Modern Luxury Residence - Solar Control Film', 'tintora' ),
		'category' => 'residential',
		'img_src'  => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80',
	),
	array(
		'title'    => __( 'Corporate Office Tower - Dual Reflective Film', 'tintora' ),
		'category' => 'commercial',
		'img_src'  => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1200&q=80',
	),
	array(
		'title'    => __( 'BMW M4 Competition - Full Vehicle Ceramic', 'tintora' ),
		'category' => 'automotive',
		'img_src'  => 'https://images.unsplash.com/photo-1555215695-3004980ad54e?auto=format&fit=crop&w=1200&q=80',
	),
	array(
		'title'    => __( 'Waterfront Villa - 99% UV Floor Protection', 'tintora' ),
		'category' => 'residential',
		'img_src'  => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=1200&q=80',
	),
	array(
		'title'    => __( 'Tech Headquarters - Frosted Privacy Glass', 'tintora' ),
		'category' => 'commercial',
		'img_src'  => 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1200&q=80',
	),
);
?>

<section id="projects" class="section projects-section">
	<div class="container">
		
		<div class="section-header">
			<div class="eyebrow"><?php esc_html_e( 'Our Craftsmanship', 'tintora' ); ?></div>
			<h2 class="section-title"><?php esc_html_e( 'Recent Window Tinting Projects', 'tintora' ); ?></h2>
			<p class="section-description">
				<?php esc_html_e( 'Browse our gallery of completed automotive, residential, and commercial installations.', 'tintora' ); ?>
			</p>
		</div>

		<!-- Interactive Before / After Comparison Feature -->
		<div style="margin-bottom: 5rem;">
			<h3 style="text-align: center; font-size: 1.5rem; margin-bottom: 1.5rem;"><?php esc_html_e( 'Before & After Tint Comparison', 'tintora' ); ?></h3>
			<?php
			echo do_shortcode(
				'[tintora_before_after before_img="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1200&q=80" after_img="https://images.unsplash.com/photo-1617814076367-b759c7d7e738?auto=format&fit=crop&w=1200&q=80" label_before="Factory Untinted" label_after="5% Ceramic Dark Tint"]'
			);
			?>
		</div>

		<!-- Filterable Project Gallery -->
		<div class="gallery-filter-nav">
			<button class="filter-btn is-active" data-filter="all"><?php esc_html_e( 'All Projects', 'tintora' ); ?></button>
			<button class="filter-btn" data-filter="automotive"><?php esc_html_e( 'Automotive Tint', 'tintora' ); ?></button>
			<button class="filter-btn" data-filter="residential"><?php esc_html_e( 'Residential Film', 'tintora' ); ?></button>
			<button class="filter-btn" data-filter="commercial"><?php esc_html_e( 'Commercial Solar', 'tintora' ); ?></button>
		</div>

		<div class="gallery-grid">
			<?php foreach ( $sample_projects as $project ) : ?>
				<?php
				get_template_part(
					'template-parts/components/project-card',
					null,
					$project
				);
				?>
			<?php endforeach; ?>
		</div>

	</div>
</section>
