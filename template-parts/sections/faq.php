<?php
/**
 * FAQ Accordion Section Template Part
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$faqs = array(
	array(
		'q' => __( 'How long does vehicle window tint installation take?', 'tintora' ),
		'a' => __( 'A full vehicle tint installation typically takes 2 to 3 hours depending on the vehicle model. Two-door coupes and sedans are usually completed in under 2 hours.', 'tintora' ),
	),
	array(
		'q' => __( 'How long does window tint last?', 'tintora' ),
		'a' => __( 'Our premium ceramic and carbon films are color-stable and designed to last the life of your vehicle. They come backed by a lifetime warranty against bubbling, fading, or peeling.', 'tintora' ),
	),
	array(
		'q' => __( 'Does ceramic window tint really reduce cabin heat?', 'tintora' ),
		'a' => __( 'Yes! Unlike basic dyed films, nano-ceramic technology blocks up to 88% of infrared heat (IR), drastically reducing vehicle interior temperatures and easing AC load.', 'tintora' ),
	),
	array(
		'q' => __( 'How long should I wait before rolling down my windows?', 'tintora' ),
		'a' => __( 'We recommend keeping your windows rolled up for 3 to 5 days after installation to allow the film moisture to fully cure and adhere to the glass.', 'tintora' ),
	),
	array(
		'q' => __( 'Will window tint block my GPS, cell phone, or satellite radio signal?', 'tintora' ),
		'a' => __( 'No. All Tintora ceramic and carbon films are 100% non-metallic, ensuring zero interference with GPS navigation, 5G cellular, or satellite radio signals.', 'tintora' ),
	),
);
?>

<section class="section faq-section" style="background: var(--tintora-surface);">
	<div class="container" style="max-width: 800px;">
		
		<div class="section-header">
			<div class="eyebrow"><?php esc_html_e( 'Frequently Asked Questions', 'tintora' ); ?></div>
			<h2 class="section-title"><?php esc_html_e( 'Got Questions About Window Film?', 'tintora' ); ?></h2>
		</div>

		<div class="faq-accordion">
			<?php foreach ( $faqs as $index => $faq ) : ?>
				<?php
				$faq_id  = 'faq-panel-' . $index;
				$btn_id  = 'faq-btn-' . $index;
				?>
				<div class="faq-item">
					<button id="<?php echo esc_attr( $btn_id ); ?>" class="faq-button" aria-expanded="false" aria-controls="<?php echo esc_attr( $faq_id ); ?>">
						<span><?php echo esc_html( $faq['q'] ); ?></span>
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
					</button>
					<div id="<?php echo esc_attr( $faq_id ); ?>" class="faq-panel" role="region" aria-labelledby="<?php esc_attr( $btn_id ); ?>" hidden>
						<p><?php echo esc_html( $faq['a'] ); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

	</div>
</section>
