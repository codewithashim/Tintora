<?php
/**
 * Template Name: About Us
 * Template Post Type: page
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<?php get_template_part( 'template-parts/sections/about' ); ?>
<?php get_template_part( 'template-parts/sections/testimonials' ); ?>
<?php get_template_part( 'template-parts/sections/cta' ); ?>

<?php
get_footer();
