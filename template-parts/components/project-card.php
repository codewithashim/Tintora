<?php
/**
 * Project Gallery Card Component Part
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$title    = ! empty( $args['title'] ) ? $args['title'] : __( 'Tesla Model S Plaid Ceramic Tint', 'tintora' );
$category = ! empty( $args['category'] ) ? $args['category'] : 'automotive';
$img_src  = ! empty( $args['img_src'] ) ? $args['img_src'] : TINTORA_URI . '/assets/images/project-placeholder.jpg';
?>

<div class="gallery-item" data-category="<?php echo esc_attr( $category ); ?>" data-lightbox-src="<?php echo esc_url( $img_src ); ?>">
	<img src="<?php echo esc_url( $img_src ); ?>" alt="<?php echo esc_attr( $title ); ?>" loading="lazy" />
	<div class="gallery-overlay">
		<span class="item-category"><?php echo esc_html( ucfirst( $category ) ); ?></span>
		<h3 class="item-title"><?php echo esc_html( $title ); ?></h3>
	</div>
</div>
