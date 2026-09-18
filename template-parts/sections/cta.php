<?php
/**
 * CTA Conversion Banner Template Part
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$cta_title = __( 'Ready to Upgrade Your Vehicle or Building Glass?', 'tintora' );
$cta_text  = __( 'Get a free, no-obligation quote from our certified window film specialists today.', 'tintora' );
$phone     = get_theme_mod( 'tintora_phone', '+1 (800) 555-TINT' );
?>

<section class="section cta-section">
	<div class="container">
		
		<div class="tintora-cta-box">
			<div class="tintora-cta-box__content">
				<h2 class="tintora-cta-box__title"><?php echo esc_html( $cta_title ); ?></h2>
				<p class="tintora-cta-box__text"><?php echo esc_html( $cta_text ); ?></p>
			</div>
			
			<div class="tintora-cta-box__action" style="display: flex; gap: 1rem; flex-wrap: wrap;">
				<a href="#contact" class="btn btn-primary btn-lg">
					<?php esc_html_e( 'Get a Free Quote', 'tintora' ); ?>
					<?php echo tintora_get_svg_icon( 'arrow-right' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</a>
				<?php if ( ! empty( $phone ) ) : ?>
					<a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>" class="btn btn-outline-white btn-lg">
						<?php echo tintora_get_svg_icon( 'phone' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						<span><?php echo esc_html( $phone ); ?></span>
					</a>
				<?php endif; ?>
			</div>
		</div>

	</div>
</section>
