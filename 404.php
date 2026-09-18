<?php
/**
 * 404 Error Page Template
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="section error-404-section" style="padding: 8rem 0; text-align: center;">
	<div class="container" style="max-width: 650px;">
		
		<div style="font-family: var(--tintora-font-heading); font-size: 7rem; font-weight: 800; color: var(--tintora-accent); line-height: 1;">404</div>
		<h1 class="section-title" style="margin: 1rem 0;"><?php esc_html_e( 'Page Not Found', 'tintora' ); ?></h1>
		<p class="lead" style="margin-bottom: 2.5rem;">
			<?php esc_html_e( 'The page you are looking for may have been moved, renamed, or is temporarily unavailable.', 'tintora' ); ?>
		</p>

		<div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary btn-lg">
				<?php esc_html_e( 'Return to Homepage', 'tintora' ); ?>
			</a>
			<a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-outline btn-lg">
				<?php esc_html_e( 'Contact Support', 'tintora' ); ?>
			</a>
		</div>

	</div>
</div>

<?php
get_footer();
