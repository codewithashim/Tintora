<?php
/**
 * Main Footer Template Part
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$phone     = get_theme_mod( 'tintora_phone', '+1 (800) 555-TINT' );
$email     = get_theme_mod( 'tintora_email', 'info@tintorafilm.com' );
$address   = get_theme_mod( 'tintora_address', '1248 Custom Film Way, Suite 100, Tint City' );
$fb_url    = get_theme_mod( 'tintora_social_facebook', '#' );
$insta_url = get_theme_mod( 'tintora_social_instagram', '#' );
$yt_url    = get_theme_mod( 'tintora_social_youtube', '#' );
?>

<footer id="colophon" class="site-footer">
	<div class="container">
		
		<!-- 4 Column Widget Grid -->
		<div class="footer-grid">
			
			<!-- Column 1: Brand & Contact -->
			<div class="footer-col">
				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<?php dynamic_sidebar( 'footer-1' ); ?>
				<?php else : ?>
					<h3 class="footer-widget-title" style="color: #FFFFFF; font-size: 1.5rem; font-weight: 800;">
						<?php bloginfo( 'name' ); ?>
					</h3>
					<p style="margin-bottom: 1.5rem; color: rgba(255, 255, 255, 0.75);">
						<?php esc_html_e( 'Premium window film installation for automotive, residential, and commercial properties. High heat rejection, privacy & lifetime warranty.', 'tintora' ); ?>
					</p>
					<p style="margin-bottom: 0.5rem;">
						<strong><?php esc_html_e( 'Phone:', 'tintora' ); ?></strong> <?php echo esc_html( $phone ); ?>
					</p>
					<p style="margin-bottom: 0.5rem;">
						<strong><?php esc_html_e( 'Email:', 'tintora' ); ?></strong> <?php echo esc_html( $email ); ?>
					</p>
				<?php endif; ?>
			</div>

			<!-- Column 2: Quick Links -->
			<div class="footer-col">
				<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
					<?php dynamic_sidebar( 'footer-2' ); ?>
				<?php else : ?>
					<h4 class="footer-widget-title"><?php esc_html_e( 'Quick Links', 'tintora' ); ?></h4>
					<ul style="list-style: none; padding: 0; line-height: 2.2;">
						<li><a href="#services"><?php esc_html_e( 'Window Film Services', 'tintora' ); ?></a></li>
						<li><a href="#about"><?php esc_html_e( 'About Our Company', 'tintora' ); ?></a></li>
						<li><a href="#projects"><?php esc_html_e( 'Project Portfolio', 'tintora' ); ?></a></li>
						<li><a href="#pricing"><?php esc_html_e( 'Pricing Packages', 'tintora' ); ?></a></li>
						<li><a href="#contact"><?php esc_html_e( 'Request Estimate', 'tintora' ); ?></a></li>
					</ul>
				<?php endif; ?>
			</div>

			<!-- Column 3: Services -->
			<div class="footer-col">
				<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
					<?php dynamic_sidebar( 'footer-3' ); ?>
				<?php else : ?>
					<h4 class="footer-widget-title"><?php esc_html_e( 'Our Services', 'tintora' ); ?></h4>
					<ul style="list-style: none; padding: 0; line-height: 2.2;">
						<li><a href="#services"><?php esc_html_e( 'Automotive Window Tinting', 'tintora' ); ?></a></li>
						<li><a href="#services"><?php esc_html_e( 'Residential Window Film', 'tintora' ); ?></a></li>
						<li><a href="#services"><?php esc_html_e( 'Commercial Solar Control', 'tintora' ); ?></a></li>
						<li><a href="#services"><?php esc_html_e( 'Security & Safety Film', 'tintora' ); ?></a></li>
						<li><a href="#services"><?php esc_html_e( 'Privacy & Decorative Film', 'tintora' ); ?></a></li>
					</ul>
				<?php endif; ?>
			</div>

			<!-- Column 4: Location -->
			<div class="footer-col">
				<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
					<?php dynamic_sidebar( 'footer-4' ); ?>
				<?php else : ?>
					<h4 class="footer-widget-title"><?php esc_html_e( 'Our Location', 'tintora' ); ?></h4>
					<p style="color: rgba(255, 255, 255, 0.75); margin-bottom: 1rem;">
						<?php echo esc_html( $address ); ?>
					</p>
					<a href="#contact" class="btn btn-primary" style="font-size: 0.85rem; padding: 0.6rem 1.2rem;">
						<?php esc_html_e( 'Get Directions', 'tintora' ); ?>
					</a>
				<?php endif; ?>
			</div>

		</div>

		<!-- Footer Bottom Copyright Bar -->
		<div class="footer-bottom">
			<div class="copyright">
				&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'tintora' ); ?>
			</div>
			<div class="social-links">
				<?php if ( ! empty( $fb_url ) ) : ?>
					<a href="<?php echo esc_url( $fb_url ); ?>" aria-label="Facebook">FB</a>
				<?php endif; ?>
				<?php if ( ! empty( $insta_url ) ) : ?>
					<a href="<?php echo esc_url( $insta_url ); ?>" aria-label="Instagram">IG</a>
				<?php endif; ?>
				<?php if ( ! empty( $yt_url ) ) : ?>
					<a href="<?php echo esc_url( $yt_url ); ?>" aria-label="YouTube">YT</a>
				<?php endif; ?>
			</div>
		</div>

	</div>
</footer>
