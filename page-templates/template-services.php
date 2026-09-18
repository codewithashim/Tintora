<?php
/**
 * Template Name: Services Showcase
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

<?php get_template_part( 'template-parts/sections/services' ); ?>
<?php get_template_part( 'template-parts/sections/why-choose-us' ); ?>
<?php get_template_part( 'template-parts/sections/process' ); ?>
<?php get_template_part( 'template-parts/sections/cta' ); ?>

<?php
get_footer();
