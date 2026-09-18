<?php
/**
 * Dashboard View: Overview & System Status
 *
 * @package Tintora
 * @subpackage Dashboard
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="tintora-tab-content">
	<div class="tintora-card-grid">
		
		<div class="tintora-card">
			<h3><span class="dashicons dashicons-welcome-widgets-menus"></span> <?php esc_html_e( 'Quick Configuration Launchers', 'tintora' ); ?></h3>
			<p><?php esc_html_e( 'Use standard WordPress Customizer or Elementor to edit content in real time.', 'tintora' ); ?></p>
			<div class="tintora-btn-group" style="display: flex; gap: 0.75rem; flex-wrap: wrap;">
				<a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary button-hero">
					<?php esc_html_e( 'Launch Customizer', 'tintora' ); ?>
				</a>
				<a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>" class="button button-secondary">
					<?php esc_html_e( 'Configure Menus', 'tintora' ); ?>
				</a>
				<a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>" class="button button-secondary">
					<?php esc_html_e( 'Footer Widgets', 'tintora' ); ?>
				</a>
			</div>
		</div>

		<div class="tintora-card">
			<h3><span class="dashicons dashicons-info"></span> <?php esc_html_e( 'System & Theme Status', 'tintora' ); ?></h3>
			<ul class="status-list">
				<li><strong><?php esc_html_e( 'Theme Version:', 'tintora' ); ?></strong> Tintora v<?php echo esc_html( TINTORA_VERSION ); ?></li>
				<li><strong><?php esc_html_e( 'PHP Version:', 'tintora' ); ?></strong> <?php echo esc_html( PHP_VERSION ); ?> (PHP 8.1+ Recommended)</li>
				<li><strong><?php esc_html_e( 'WordPress Version:', 'tintora' ); ?></strong> <?php echo esc_html( get_bloginfo( 'version' ) ); ?></li>
				<li><strong><?php esc_html_e( 'Elementor Builder:', 'tintora' ); ?></strong> <?php echo did_action( 'elementor/loaded' ) ? '<span class="badge-active">Active & Custom Widgets Loaded</span>' : '<span class="badge-inactive">Not Active (Optional)</span>'; ?></li>
				<li><strong><?php esc_html_e( 'WooCommerce:', 'tintora' ); ?></strong> <?php echo class_exists( 'WooCommerce' ) ? '<span class="badge-active">Active</span>' : '<span class="badge-inactive">Not Active (Optional)</span>'; ?></li>
			</ul>
		</div>

	</div>
</div>
