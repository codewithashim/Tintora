<?php
/**
 * Main Header Template Part
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
?>

<header id="masthead" class="site-header">
	<div class="header-container">
		
		<!-- Site Branding & Logo -->
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</h1>
			<?php endif; ?>
		</div>

		<!-- Desktop Navigation Menu -->
		<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'tintora' ); ?>">
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'nav-menu',
						'container'      => false,
					)
				);
			} else {
				// Default Fallback Menu
				echo '<ul class="nav-menu">';
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

		<!-- Header Actions (Phone & CTA) -->
		<div class="header-actions">
			<?php if ( ! empty( $phone ) ) : ?>
				<a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>" class="header-phone">
					<?php echo tintora_get_svg_icon( 'phone' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					<span><?php echo esc_html( $phone ); ?></span>
				</a>
			<?php endif; ?>

			<?php if ( ! empty( $header_cta_text ) ) : ?>
				<a href="<?php echo esc_url( $header_cta_link ); ?>" class="btn btn-primary">
					<?php echo esc_html( $header_cta_text ); ?>
				</a>
			<?php endif; ?>

			<!-- Hamburger Toggle Button -->
			<button class="menu-toggle" aria-controls="mobile-drawer" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle Navigation Menu', 'tintora' ); ?>">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>

	</div>
</header>
