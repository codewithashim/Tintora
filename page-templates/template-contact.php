<?php
/**
 * Template Name: Contact & Location
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

<?php get_template_part( 'template-parts/sections/contact' ); ?>
<?php get_template_part( 'template-parts/sections/faq' ); ?>

<?php
get_footer();
