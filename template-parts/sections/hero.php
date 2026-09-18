<?php
/**
 * Hero Section Template Part
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$eyebrow       = get_theme_mod( 'tintora_hero_eyebrow', '★ #1 Rated Tinting & Protection Specialist' );
$title         = get_theme_mod( 'tintora_hero_title', 'Premium Window Tinting. Built to Protect.' );
$description   = get_theme_mod( 'tintora_hero_description', 'Professional window film solutions for vehicles, homes and commercial buildings. Reduce heat by up to 84%, reject 99% UV rays and elevate privacy.' );
$btn1_text     = get_theme_mod( 'tintora_hero_btn_primary_text', 'Get a Free Quote' );
$btn1_url      = get_theme_mod( 'tintora_hero_btn_primary_url', '#contact' );
$btn2_text     = get_theme_mod( 'tintora_hero_btn_secondary_text', 'Explore Services' );
$btn2_url      = get_theme_mod( 'tintora_hero_btn_secondary_url', '#services' );
$bg_image      = get_theme_mod( 'tintora_hero_bg_image', '' );
?>

<section class="hero-section">
	<?php if ( ! empty( $bg_image ) ) : ?>
		<img src="<?php echo esc_url( $bg_image ); ?>" class="hero-bg-image" alt="Window Tinting Background" />
	<?php endif; ?>
	
	<div class="hero-bg-overlay"></div>

	<div class="hero-container">
		<div class="hero-content">
			
			<?php if ( ! empty( $eyebrow ) ) : ?>
				<div class="eyebrow"><?php echo esc_html( $eyebrow ); ?></div>
			<?php endif; ?>

			<h1 class="hero-heading"><?php echo esc_html( $title ); ?></h1>

			<p class="hero-lead"><?php echo wp_kses_post( $description ); ?></p>

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

			<!-- Statistics Counters -->
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
