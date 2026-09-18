<?php
/**
 * Front Page Orchestrator Template
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<?php get_template_part( 'template-parts/sections/hero' ); ?>
<?php get_template_part( 'template-parts/sections/services' ); ?>
<?php get_template_part( 'template-parts/sections/about' ); ?>
<?php get_template_part( 'template-parts/sections/why-choose-us' ); ?>
<?php get_template_part( 'template-parts/sections/process' ); ?>
<?php get_template_part( 'template-parts/sections/projects' ); ?>
<?php get_template_part( 'template-parts/sections/testimonials' ); ?>
<?php get_template_part( 'template-parts/sections/pricing' ); ?>
<?php get_template_part( 'template-parts/sections/faq' ); ?>
<?php get_template_part( 'template-parts/sections/cta' ); ?>
<?php get_template_part( 'template-parts/sections/contact' ); ?>

<?php
get_footer();
