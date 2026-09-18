<?php
/**
 * Tintora functions and definitions
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Theme Constants
 */
define( 'TINTORA_VERSION', '1.0.0' );
define( 'TINTORA_DIR', get_template_directory() );
define( 'TINTORA_URI', get_template_directory_uri() );

/**
 * Load Required Include Files
 */
$tintora_includes = array(
	'inc/setup.php',
	'inc/enqueue.php',
	'inc/customizer.php',
	'inc/template-functions.php',
	'inc/template-tags.php',
	'inc/breadcrumbs.php',
	'inc/widgets.php',
	'inc/shortcodes.php',
	'inc/performance.php',
	'inc/security.php',
	'inc/woocommerce.php',
	'inc/elementor.php',
);

foreach ( $tintora_includes as $file ) {
	$filepath = TINTORA_DIR . '/' . $file;
	if ( file_exists( $filepath ) ) {
		require_once $filepath;
	}
}
