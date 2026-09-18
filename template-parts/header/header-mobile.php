<?php
/**
 * Mobile Drawer & Sticky Action Bar Template Part
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$phone           = get_theme_mod( 'tintora_phone', '+1 (800) 555-TINT' );
$header_cta_text = get_theme_mod( 'tintora_header_cta_text', __( 'Get a Free Quote', 'tintora' ) );
$header_cta_link = get_theme_mod( 'tintora_header_cta_link', '#contact' );
$enable_action_bar = get_theme_mod( 'tintora_enable_mobile_action_bar', true );
?>

<!-- Mobile Drawer Overlay -->
<div class="mobile-drawer-overlay"></div>

<!-- Mobile Drawer -->
<div id="mobile-drawer" class="mobile-drawer" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e( 'Mobile Navigation Drawer', 'tintora' ); ?>">
	<div>
		<button class="drawer-close" aria-label="<?php esc_attr_e( 'Close Menu', 'tintora' ); ?>">&times;</button>
		
		<nav class="mobile-nav" aria-label="<?php esc_attr_e( 'Mobile Navigation Menu', 'tintora' ); ?>">
			<?php
			if ( has_nav_menu( 'mobile' ) || has_nav_menu( 'primary' ) ) {
				$location = has_nav_menu( 'mobile' ) ? 'mobile' : 'primary';
				wp_nav_menu(
					array(
						'theme_location' => $location,
						'menu_class'     => 'mobile-menu',
						'container'      => false,
					)
				);
			} else {
				echo '<ul class="mobile-menu">';
				echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'tintora' ) . '</a></li>';
				echo '<li><a href="#services">' . esc_html__( 'Services', 'tintora' ) . '</a></li>';
				echo '<li><a href="#about">' . esc_html__( 'About Us', 'tintora' ) . '</a></li>';
				echo '<li><a href="#projects">' . esc_html__( 'Projects', 'tintora' ) . '</a></li>';
				echo '<li><a href="#pricing">' . esc_html__( 'Pricing', 'tintora' ) . '</a></li>';
				echo '<li><a href="#contact">' . esc_html__( 'Contact', 'tintora' ) . '</a></li>';
				echo '</ul>';
			}
			?>
		</nav>
	</div>

	<div>
		<?php if ( ! empty( $header_cta_text ) ) : ?>
			<a href="<?php echo esc_url( $header_cta_link ); ?>" class="btn btn-primary" style="width: 100%; text-align: center;">
				<?php echo esc_html( $header_cta_text ); ?>
			</a>
		<?php endif; ?>
	</div>
</div>

<!-- Mobile Sticky Bottom Action Bar -->
<?php if ( $enable_action_bar ) : ?>
<div class="mobile-action-bar">
	<?php if ( ! empty( $phone ) ) : ?>
		<a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>">
			<?php echo tintora_get_svg_icon( 'phone' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			<span><?php esc_html_e( 'Call', 'tintora' ); ?></span>
		</a>
		<a href="https://wa.me/<?php echo esc_attr( preg_replace( '/[^0-9]/', '', $phone ) ); ?>" target="_blank" rel="noopener">
			<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
			<span><?php esc_html_e( 'WhatsApp', 'tintora' ); ?></span>
		</a>
	<?php endif; ?>
	<a href="<?php echo esc_url( $header_cta_link ); ?>">
		<?php echo tintora_get_svg_icon( 'check' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		<span><?php esc_html_e( 'Get Quote', 'tintora' ); ?></span>
	</a>
</div>
<?php endif; ?>
