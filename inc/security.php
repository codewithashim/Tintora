<?php
/**
 * Tintora Security & Sanitization Helpers
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Verify Nonce safely for custom endpoints or form submissions
 *
 * @param string $nonce_name Nonce value passed.
 * @param string $action Action key.
 * @return bool True if valid, false otherwise.
 */
function tintora_verify_nonce( $nonce_name, $action = 'tintora_nonce' ) {
	if ( ! isset( $_REQUEST[ $nonce_name ] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_REQUEST[ $nonce_name ] ) ), $action ) ) {
		return false;
	}
	return true;
}

/**
 * Sanitize Multiline HTML text safely for Customizer and dynamic areas
 *
 * @param string $input Raw text/html input.
 * @return string Sanitized HTML.
 */
function tintora_sanitize_html( $input ) {
	$allowed_html = array(
		'a'      => array(
			'href'  => array(),
			'title' => array(),
			'class' => array(),
			'target' => array(),
		),
		'br'     => array(),
		'em'     => array(),
		'strong' => array(),
		'span'   => array(
			'class' => array(),
			'style' => array(),
		),
		'p'      => array(
			'class' => array(),
		),
	);

	return wp_kses( $input, $allowed_html );
}
