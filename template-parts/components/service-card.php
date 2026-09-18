<?php
/**
 * Service Card Component Part
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$icon        = ! empty( $args['icon'] ) ? $args['icon'] : 'car';
$title       = ! empty( $args['title'] ) ? $args['title'] : __( 'Automotive Window Tint', 'tintora' );
$description = ! empty( $args['description'] ) ? $args['description'] : __( 'High-performance ceramic & carbon film for heat rejection, privacy, and UV protection.', 'tintora' );
$link        = ! empty( $args['link'] ) ? $args['link'] : '#contact';
$badge       = ! empty( $args['badge'] ) ? $args['badge'] : '';
?>

<div class="card service-card">
	<?php if ( ! empty( $badge ) ) : ?>
		<span class="badge" style="position: absolute; top: 1rem; right: 1rem; background: var(--tintora-accent); color: var(--tintora-primary); font-size: 0.75rem; font-weight: 700; padding: 2px 10px; border-radius: 50px;">
			<?php echo esc_html( $badge ); ?>
		</span>
	<?php endif; ?>

	<div class="card-icon">
		<?php echo tintora_get_svg_icon( $icon ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	</div>

	<h3 class="card-title"><?php echo esc_html( $title ); ?></h3>
	
	<p class="card-description"><?php echo esc_html( $description ); ?></p>
	
	<a href="<?php echo esc_url( $link ); ?>" class="card-link">
		<?php esc_html_e( 'Learn More', 'tintora' ); ?>
		<?php echo tintora_get_svg_icon( 'arrow-right' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	</a>
</div>
