<?php
/**
 * Pricing Card Component Part
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$title       = ! empty( $args['title'] ) ? $args['title'] : 'Premium Package';
$price       = ! empty( $args['price'] ) ? $args['price'] : '$299';
$unit        = ! empty( $args['unit'] ) ? $args['unit'] : '/ vehicle';
$is_featured = ! empty( $args['featured'] ) ? true : false;
$features    = ! empty( $args['features'] ) ? $args['features'] : array(
	__( '99% UV Ray Rejection', 'tintora' ),
	__( 'High Heat Reduction (IR-Rejection)', 'tintora' ),
	__( 'Lifetime Nationwide Warranty', 'tintora' ),
	__( 'No Signal Interference', 'tintora' ),
);
$cta_text    = ! empty( $args['cta_text'] ) ? $args['cta_text'] : __( 'Choose Plan', 'tintora' );
$cta_url     = ! empty( $args['cta_url'] ) ? $args['cta_url'] : '#contact';
?>

<div class="card pricing-card <?php echo $is_featured ? 'featured' : ''; ?>">
	<?php if ( $is_featured ) : ?>
		<span class="popular-badge"><?php esc_html_e( 'Most Popular', 'tintora' ); ?></span>
	<?php endif; ?>

	<h3 class="plan-name"><?php echo esc_html( $title ); ?></h3>
	
	<div class="plan-price">
		<?php echo esc_html( $price ); ?>
		<span><?php echo esc_html( $unit ); ?></span>
	</div>

	<ul class="plan-features">
		<?php foreach ( $features as $feature ) : ?>
			<li>
				<?php echo tintora_get_svg_icon( 'check' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				<span><?php echo esc_html( $feature ); ?></span>
			</li>
		<?php endforeach; ?>
	</ul>

	<a href="<?php echo esc_url( $cta_url ); ?>" class="btn <?php echo $is_featured ? 'btn-primary' : 'btn-outline'; ?>" style="width: 100%;">
		<?php echo esc_html( $cta_text ); ?>
	</a>
</div>
