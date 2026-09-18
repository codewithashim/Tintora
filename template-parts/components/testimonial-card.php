<?php
/**
 * Testimonial Card Component Part
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$name    = ! empty( $args['name'] ) ? $args['name'] : 'Marcus Vance';
$company = ! empty( $args['company'] ) ? $args['company'] : 'Porsche Owner';
$quote   = ! empty( $args['quote'] ) ? $args['quote'] : __( 'The ceramic window film installation on my GT3 was flawless. Inside temperature dropped dramatically!', 'tintora' );
$stars   = ! empty( $args['rating'] ) ? (int) $args['rating'] : 5;
?>

<div class="card testimonial-card">
	<div class="star-rating">
		<?php for ( $i = 0; $i < $stars; $i++ ) : ?>
			<?php echo tintora_get_svg_icon( 'star' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		<?php endfor; ?>
	</div>

	<p class="quote-text">&ldquo;<?php echo esc_html( $quote ); ?>&rdquo;</p>

	<div class="client-info">
		<div>
			<div class="client-name"><?php echo esc_html( $name ); ?></div>
			<div class="client-sub"><?php echo esc_html( $company ); ?></div>
		</div>
	</div>
</div>
