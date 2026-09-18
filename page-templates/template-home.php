<?php
/**
 * Template Name: Homepage Builder
 * Template Post Type: page
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

if ( tintora_get_option( 'enable_section_hero', 1 ) ) {
	get_template_part( 'template-parts/sections/hero' );
}

if ( tintora_get_option( 'enable_section_services', 1 ) ) {
	get_template_part( 'template-parts/sections/services' );
}

if ( tintora_get_option( 'enable_section_about', 1 ) ) {
	get_template_part( 'template-parts/sections/about' );
}

if ( tintora_get_option( 'enable_section_why_choose', 1 ) ) {
	get_template_part( 'template-parts/sections/why-choose-us' );
}

if ( tintora_get_option( 'enable_section_process', 1 ) ) {
	get_template_part( 'template-parts/sections/process' );
}

if ( tintora_get_option( 'enable_section_projects', 1 ) ) {
	get_template_part( 'template-parts/sections/projects' );
}

if ( tintora_get_option( 'enable_section_testimonials', 1 ) ) {
	get_template_part( 'template-parts/sections/testimonials' );
}

if ( tintora_get_option( 'enable_section_pricing', 1 ) ) {
	get_template_part( 'template-parts/sections/pricing' );
}

if ( tintora_get_option( 'enable_section_faq', 1 ) ) {
	get_template_part( 'template-parts/sections/faq' );
}

if ( tintora_get_option( 'enable_section_cta', 1 ) ) {
	get_template_part( 'template-parts/sections/cta' );
}

if ( tintora_get_option( 'enable_section_contact', 1 ) ) {
	get_template_part( 'template-parts/sections/contact' );
}

get_footer();
