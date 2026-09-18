<?php
/**
 * Contact Section Template Part
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$phone   = get_theme_mod( 'tintora_phone', '+1 (800) 555-TINT' );
$email   = get_theme_mod( 'tintora_email', 'info@tintorafilm.com' );
$address = get_theme_mod( 'tintora_address', '1248 Custom Film Way, Suite 100, Tint City' );
$hours   = get_theme_mod( 'tintora_hours', 'Mon - Sat: 8:00 AM - 6:00 PM' );
?>

<section id="contact" class="section contact-section" style="background: var(--tintora-surface);">
	<div class="container">
		
		<div class="about-grid">
			
			<!-- Left: Contact Details & Business Hours -->
			<div class="contact-info-col">
				<div class="eyebrow"><?php esc_html_e( 'Get In Touch', 'tintora' ); ?></div>
				<h2 class="section-title"><?php esc_html_e( 'Request a Free Tint Estimate', 'tintora' ); ?></h2>
				<p class="lead" style="margin-bottom: 2rem;">
					<?php esc_html_e( 'Send us a message with your vehicle make/model or architectural glass square footage for a fast quote.', 'tintora' ); ?>
				</p>

				<div style="display: flex; flex-direction: column; gap: 1.5rem; margin-bottom: 2.5rem;">
					<div style="display: flex; gap: 1rem; align-items: flex-start;">
						<div class="card-icon" style="width: 44px; height: 44px; flex-shrink: 0; margin: 0;">
							<?php echo tintora_get_svg_icon( 'phone' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</div>
						<div>
							<h4 style="margin-bottom: 0.2rem;"><?php esc_html_e( 'Phone Number', 'tintora' ); ?></h4>
							<p style="margin: 0; color: var(--tintora-muted);"><?php echo esc_html( $phone ); ?></p>
						</div>
					</div>

					<div style="display: flex; gap: 1rem; align-items: flex-start;">
						<div class="card-icon" style="width: 44px; height: 44px; flex-shrink: 0; margin: 0;">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
						</div>
						<div>
							<h4 style="margin-bottom: 0.2rem;"><?php esc_html_e( 'Email Address', 'tintora' ); ?></h4>
							<p style="margin: 0; color: var(--tintora-muted);"><?php echo esc_html( $email ); ?></p>
						</div>
					</div>

					<div style="display: flex; gap: 1rem; align-items: flex-start;">
						<div class="card-icon" style="width: 44px; height: 44px; flex-shrink: 0; margin: 0;">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
						</div>
						<div>
							<h4 style="margin-bottom: 0.2rem;"><?php esc_html_e( 'Shop Address', 'tintora' ); ?></h4>
							<p style="margin: 0; color: var(--tintora-muted);"><?php echo esc_html( $address ); ?></p>
						</div>
					</div>

					<div style="display: flex; gap: 1rem; align-items: flex-start;">
						<div class="card-icon" style="width: 44px; height: 44px; flex-shrink: 0; margin: 0;">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
						</div>
						<div>
							<h4 style="margin-bottom: 0.2rem;"><?php esc_html_e( 'Operating Hours', 'tintora' ); ?></h4>
							<p style="margin: 0; color: var(--tintora-muted);"><?php echo esc_html( $hours ); ?></p>
						</div>
					</div>
				</div>
			</div>

			<!-- Right: Form Plugin / Native Fallback Form -->
			<div class="contact-form-col card" style="box-shadow: var(--tintora-shadow-md);">
				<h3 style="margin-bottom: 1.5rem; font-size: 1.5rem;"><?php esc_html_e( 'Send a Quote Request', 'tintora' ); ?></h3>

				<form action="#" method="post" class="tintora-contact-form" onsubmit="event.preventDefault(); alert('<?php echo esc_js( __( 'Thank you! Your quote request has been received.', 'tintora' ) ); ?>');">
					<div style="margin-bottom: 1rem;">
						<label for="tintora-name"><?php esc_html_e( 'Your Name', 'tintora' ); ?> *</label>
						<input type="text" id="tintora-name" name="name" required placeholder="John Doe" />
					</div>

					<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem;">
						<div>
							<label for="tintora-email"><?php esc_html_e( 'Email Address', 'tintora' ); ?> *</label>
							<input type="email" id="tintora-email" name="email" required placeholder="john@example.com" />
						</div>
						<div>
							<label for="tintora-phone-field"><?php esc_html_e( 'Phone Number', 'tintora' ); ?> *</label>
							<input type="tel" id="tintora-phone-field" name="phone" required placeholder="(555) 000-0000" />
						</div>
					</div>

					<div style="margin-bottom: 1rem;">
						<label for="tintora-service-type"><?php esc_html_e( 'Service Type Required', 'tintora' ); ?></label>
						<select id="tintora-service-type" name="service">
							<option value="automotive"><?php esc_html_e( 'Automotive Window Tinting', 'tintora' ); ?></option>
							<option value="residential"><?php esc_html_e( 'Residential Window Film', 'tintora' ); ?></option>
							<option value="commercial"><?php esc_html_e( 'Commercial Window Film', 'tintora' ); ?></option>
							<option value="security"><?php esc_html_e( 'Security & Safety Film', 'tintora' ); ?></option>
						</select>
					</div>

					<div style="margin-bottom: 1.5rem;">
						<label for="tintora-message"><?php esc_html_e( 'Vehicle / Property Details', 'tintora' ); ?></label>
						<textarea id="tintora-message" name="message" rows="4" placeholder="<?php esc_attr_e( 'e.g., 2024 Tesla Model Y, all side windows + rear glass in 15% Ceramic', 'tintora' ); ?>"></textarea>
					</div>

					<button type="submit" class="btn btn-primary" style="width: 100%;">
						<?php esc_html_e( 'Submit Quote Request', 'tintora' ); ?>
						<?php echo tintora_get_svg_icon( 'arrow-right' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</button>
				</form>
			</div>

		</div>

	</div>
</section>
