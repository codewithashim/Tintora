<?php
/**
 * About Section Template Part
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section id="about" class="section about-section" style="background: var(--tintora-surface);">
	<div class="container">
		<div class="about-grid">
			
			<!-- Left: Experience Card & Feature Highlight -->
			<div class="about-images">
				<div style="background: var(--tintora-primary); border-radius: var(--tintora-radius-md); padding: 3rem 2rem; color: #FFFFFF; position: relative;">
					<h3 style="color: var(--tintora-accent); font-size: 2rem; margin-bottom: 1rem;"><?php esc_html_e( 'Trusted Glass & Film Craftsmen', 'tintora' ); ?></h3>
					<p style="color: rgba(255, 255, 255, 0.85); font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">
						<?php esc_html_e( 'With over a decade of dedicated specialization in nano-ceramic window films, paint protection film, and architectural glass solutions, Tintora delivers clean plot-cut precision with zero razor blade contact on vehicle glass.', 'tintora' ); ?>
					</p>
					
					<div class="experience-badge">
						<div class="badge-years">10+</div>
						<div class="badge-label"><?php esc_html_e( 'Years Experience', 'tintora' ); ?></div>
					</div>
				</div>
			</div>

			<!-- Right: Features List & CTA -->
			<div class="about-content">
				<div class="eyebrow"><?php esc_html_e( 'Why Work With Us', 'tintora' ); ?></div>
				<h2 class="section-title"><?php esc_html_e( 'Precision Installation. Premium Materials. Unmatched Clarity.', 'tintora' ); ?></h2>
				<p class="lead">
					<?php esc_html_e( 'We only utilize top-tier, color-stable ceramic & infrared rejection films that never turn purple, bubble, or peel.', 'tintora' ); ?>
				</p>

				<ul class="features-list">
					<li>
						<?php echo tintora_get_svg_icon( 'check' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						<span><?php esc_html_e( 'Computer Cut Precision Patterns', 'tintora' ); ?></span>
					</li>
					<li>
						<?php echo tintora_get_svg_icon( 'check' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						<span><?php esc_html_e( 'Lifetime Manufacturer Warranty', 'tintora' ); ?></span>
					</li>
					<li>
						<?php echo tintora_get_svg_icon( 'check' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						<span><?php esc_html_e( 'Dust-Free Climate Controlled Bay', 'tintora' ); ?></span>
					</li>
					<li>
						<?php echo tintora_get_svg_icon( 'check' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						<span><?php esc_html_e( '100% Signal Friendly Ceramic', 'tintora' ); ?></span>
					</li>
				</ul>

				<a href="#contact" class="btn btn-primary btn-lg">
					<?php esc_html_e( 'Schedule Your Consultation', 'tintora' ); ?>
					<?php echo tintora_get_svg_icon( 'arrow-right' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</a>
			</div>

		</div>
	</div>
</section>
