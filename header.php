<?php
/**
 * Header Template
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>

<a class="skip-link" href="#primary"><?php esc_html_e( 'Skip to content', 'tintora' ); ?></a>

<div id="page" class="site">
	
	<?php get_template_part( 'template-parts/header/header-main' ); ?>
	<?php get_template_part( 'template-parts/header/header-mobile' ); ?>

	<main id="primary" class="site-main">
