<?php
/**
 * Tintora WordPress Customizer API Integrations
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Customizer Settings, Controls and Sections
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager instance.
 */
function tintora_customize_register( $wp_customize ) {

	// -------------------------------------------------------------
	// PANEL: TINTORA THEME OPTIONS
	// -------------------------------------------------------------
	$wp_customize->add_panel(
		'tintora_theme_panel',
		array(
			'priority'    => 10,
			'title'       => esc_html__( 'Tintora Theme Settings', 'tintora' ),
			'description' => esc_html__( 'Customize your window tinting theme settings, colors, header, hero, and business contact info.', 'tintora' ),
		)
	);

	// -------------------------------------------------------------
	// 1. BRANDING & CONTACT INFO
	// -------------------------------------------------------------
	$wp_customize->add_section(
		'tintora_branding_section',
		array(
			'title'    => esc_html__( 'Business & Contact Info', 'tintora' ),
			'panel'    => 'tintora_theme_panel',
			'priority' => 10,
		)
	);

	// Phone Number
	$wp_customize->add_setting(
		'tintora_phone',
		array(
			'default'           => '+1 (800) 555-TINT',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control(
		'tintora_phone',
		array(
			'label'    => esc_html__( 'Phone Number', 'tintora' ),
			'section'  => 'tintora_branding_section',
			'type'     => 'text',
		)
	);

	// Email Address
	$wp_customize->add_setting(
		'tintora_email',
		array(
			'default'           => 'info@tintorafilm.com',
			'sanitize_callback' => 'sanitize_email',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control(
		'tintora_email',
		array(
			'label'   => esc_html__( 'Email Address', 'tintora' ),
			'section' => 'tintora_branding_section',
			'type'    => 'email',
		)
	);

	// Address
	$wp_customize->add_setting(
		'tintora_address',
		array(
			'default'           => '1248 Custom Film Way, Suite 100, Tint City',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control(
		'tintora_address',
		array(
			'label'   => esc_html__( 'Business Address', 'tintora' ),
			'section' => 'tintora_branding_section',
			'type'    => 'text',
		)
	);

	// Business Hours
	$wp_customize->add_setting(
		'tintora_hours',
		array(
			'default'           => 'Mon - Sat: 8:00 AM - 6:00 PM',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control(
		'tintora_hours',
		array(
			'label'   => esc_html__( 'Business Hours', 'tintora' ),
			'section' => 'tintora_branding_section',
			'type'    => 'text',
		)
	);

	// Enable Mobile Sticky Action Bar
	$wp_customize->add_setting(
		'tintora_enable_mobile_action_bar',
		array(
			'default'           => true,
			'sanitize_callback' => 'tintora_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'tintora_enable_mobile_action_bar',
		array(
			'label'       => esc_html__( 'Enable Mobile Sticky Action Bar', 'tintora' ),
			'description' => esc_html__( 'Displays a quick Call, WhatsApp and Quote bar at the bottom of mobile screens.', 'tintora' ),
			'section'     => 'tintora_branding_section',
			'type'        => 'checkbox',
		)
	);

	// -------------------------------------------------------------
	// 2. HEADER OPTIONS
	// -------------------------------------------------------------
	$wp_customize->add_section(
		'tintora_header_section',
		array(
			'title'    => esc_html__( 'Header Settings', 'tintora' ),
			'panel'    => 'tintora_theme_panel',
			'priority' => 20,
		)
	);

	// Sticky Header
	$wp_customize->add_setting(
		'tintora_sticky_header',
		array(
			'default'           => true,
			'sanitize_callback' => 'tintora_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'tintora_sticky_header',
		array(
			'label'   => esc_html__( 'Enable Sticky Header', 'tintora' ),
			'section' => 'tintora_header_section',
			'type'    => 'checkbox',
		)
	);

	// Transparent Header on Hero
	$wp_customize->add_setting(
		'tintora_transparent_header',
		array(
			'default'           => true,
			'sanitize_callback' => 'tintora_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'tintora_transparent_header',
		array(
			'label'       => esc_html__( 'Transparent Header on Homepage Hero', 'tintora' ),
			'section'     => 'tintora_header_section',
			'type'        => 'checkbox',
		)
	);

	// Header CTA Text
	$wp_customize->add_setting(
		'tintora_header_cta_text',
		array(
			'default'           => 'Get a Free Quote',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control(
		'tintora_header_cta_text',
		array(
			'label'   => esc_html__( 'Header Button Text', 'tintora' ),
			'section' => 'tintora_header_section',
			'type'    => 'text',
		)
	);

	// Header CTA Link
	$wp_customize->add_setting(
		'tintora_header_cta_link',
		array(
			'default'           => '#contact',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'tintora_header_cta_link',
		array(
			'label'   => esc_html__( 'Header Button Link', 'tintora' ),
			'section' => 'tintora_header_section',
			'type'    => 'text',
		)
	);

	// -------------------------------------------------------------
	// 3. COLOR PALETTE (DYNAMIC CSS VARS)
	// -------------------------------------------------------------
	$wp_customize->add_section(
		'tintora_colors_section',
		array(
			'title'    => esc_html__( 'Theme Colors', 'tintora' ),
			'panel'    => 'tintora_theme_panel',
			'priority' => 30,
		)
	);

	// Primary Color
	$wp_customize->add_setting(
		'tintora_color_primary',
		array(
			'default'           => '#111111',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'tintora_color_primary',
			array(
				'label'   => esc_html__( 'Primary Dark Color', 'tintora' ),
				'section' => 'tintora_colors_section',
			)
		)
	);

	// Secondary Accent Color (Gold)
	$wp_customize->add_setting(
		'tintora_color_accent',
		array(
			'default'           => '#D09A40',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'tintora_color_accent',
			array(
				'label'   => esc_html__( 'Accent / Gold Color', 'tintora' ),
				'section' => 'tintora_colors_section',
			)
		)
	);

	// Background Color
	$wp_customize->add_setting(
		'tintora_color_background',
		array(
			'default'           => '#F7F7F5',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'tintora_color_background',
			array(
				'label'   => esc_html__( 'Body Background Color', 'tintora' ),
				'section' => 'tintora_colors_section',
			)
		)
	);

	// Text Color
	$wp_customize->add_setting(
		'tintora_color_text',
		array(
			'default'           => '#222222',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'tintora_color_text',
			array(
				'label'   => esc_html__( 'Main Text Color', 'tintora' ),
				'section' => 'tintora_colors_section',
			)
		)
	);

	// Muted Text Color
	$wp_customize->add_setting(
		'tintora_color_muted',
		array(
			'default'           => '#6B7280',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'tintora_color_muted',
			array(
				'label'   => esc_html__( 'Muted Text Color', 'tintora' ),
				'section' => 'tintora_colors_section',
			)
		)
	);

	// -------------------------------------------------------------
	// 4. HERO SECTION
	// -------------------------------------------------------------
	$wp_customize->add_section(
		'tintora_hero_section',
		array(
			'title'    => esc_html__( 'Homepage Hero Section', 'tintora' ),
			'panel'    => 'tintora_theme_panel',
			'priority' => 40,
		)
	);

	// Hero Eyebrow
	$wp_customize->add_setting(
		'tintora_hero_eyebrow',
		array(
			'default'           => '★ #1 Rated Tinting & Protection Specialist',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control(
		'tintora_hero_eyebrow',
		array(
			'label'   => esc_html__( 'Hero Eyebrow Text', 'tintora' ),
			'section' => 'tintora_hero_section',
			'type'    => 'text',
		)
	);

	// Hero Title
	$wp_customize->add_setting(
		'tintora_hero_title',
		array(
			'default'           => 'Premium Window Tinting. Built to Protect.',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control(
		'tintora_hero_title',
		array(
			'label'   => esc_html__( 'Hero Heading', 'tintora' ),
			'section' => 'tintora_hero_section',
			'type'    => 'text',
		)
	);

	// Hero Description
	$wp_customize->add_setting(
		'tintora_hero_description',
		array(
			'default'           => 'Professional window film solutions for vehicles, homes and commercial buildings. Reduce heat by up to 84%, reject 99% UV rays and elevate privacy.',
			'sanitize_callback' => 'wp_kses_post',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control(
		'tintora_hero_description',
		array(
			'label'   => esc_html__( 'Hero Description', 'tintora' ),
			'section' => 'tintora_hero_section',
			'type'    => 'textarea',
		)
	);

	// Primary CTA Text & URL
	$wp_customize->add_setting(
		'tintora_hero_btn_primary_text',
		array(
			'default'           => 'Get a Free Quote',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'tintora_hero_btn_primary_text',
		array(
			'label'   => esc_html__( 'Primary Button Label', 'tintora' ),
			'section' => 'tintora_hero_section',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'tintora_hero_btn_primary_url',
		array(
			'default'           => '#contact',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'tintora_hero_btn_primary_url',
		array(
			'label'   => esc_html__( 'Primary Button Link', 'tintora' ),
			'section' => 'tintora_hero_section',
			'type'    => 'text',
		)
	);

	// Secondary CTA Text & URL
	$wp_customize->add_setting(
		'tintora_hero_btn_secondary_text',
		array(
			'default'           => 'Explore Services',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'tintora_hero_btn_secondary_text',
		array(
			'label'   => esc_html__( 'Secondary Button Label', 'tintora' ),
			'section' => 'tintora_hero_section',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'tintora_hero_btn_secondary_url',
		array(
			'default'           => '#services',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'tintora_hero_btn_secondary_url',
		array(
			'label'   => esc_html__( 'Secondary Button Link', 'tintora' ),
			'section' => 'tintora_hero_section',
			'type'    => 'text',
		)
	);

	// Hero Background Image
	$wp_customize->add_setting(
		'tintora_hero_bg_image',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'tintora_hero_bg_image',
			array(
				'label'   => esc_html__( 'Hero Background Image', 'tintora' ),
				'section' => 'tintora_hero_section',
			)
		)
	);

	// -------------------------------------------------------------
	// 5. SOCIAL MEDIA LINKS
	// -------------------------------------------------------------
	$wp_customize->add_section(
		'tintora_social_section',
		array(
			'title'    => esc_html__( 'Social Media Links', 'tintora' ),
			'panel'    => 'tintora_theme_panel',
			'priority' => 90,
		)
	);

	$social_platforms = array(
		'facebook'  => esc_html__( 'Facebook URL', 'tintora' ),
		'instagram' => esc_html__( 'Instagram URL', 'tintora' ),
		'youtube'   => esc_html__( 'YouTube URL', 'tintora' ),
		'twitter'   => esc_html__( 'Twitter / X URL', 'tintora' ),
		'linkedin'  => esc_html__( 'LinkedIn URL', 'tintora' ),
	);

	foreach ( $social_platforms as $key => $label ) {
		$wp_customize->add_setting(
			'tintora_social_' . $key,
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);
		$wp_customize->add_control(
			'tintora_social_' . $key,
			array(
				'label'   => $label,
				'section' => 'tintora_social_section',
				'type'    => 'url',
			)
		);
	}
}
add_action( 'customize_register', 'tintora_customize_register' );

/**
 * Sanitize Checkbox Input
 *
 * @param bool $checked Input status.
 * @return bool Sanitized status.
 */
function tintora_sanitize_checkbox( $checked ) {
	return ( isset( $checked ) && true === (bool) $checked );
}

/**
 * Generate Dynamic Inline CSS based on Customizer Color settings
 *
 * @return string CSS declarations string.
 */
function tintora_get_dynamic_css() {
	$primary    = get_theme_mod( 'tintora_color_primary', '#111111' );
	$accent     = get_theme_mod( 'tintora_color_accent', '#D09A40' );
	$background = get_theme_mod( 'tintora_color_background', '#F7F7F5' );
	$text       = get_theme_mod( 'tintora_color_text', '#222222' );
	$muted      = get_theme_mod( 'tintora_color_muted', '#6B7280' );

	$css = "
	:root {
		--tintora-primary: {$primary};
		--tintora-secondary: {$accent};
		--tintora-accent: {$accent};
		--tintora-background: {$background};
		--tintora-text: {$text};
		--tintora-muted: {$muted};
	}
	";

	return wp_strip_all_tags( $css );
}
