<?php
/**
 * Project CPT Archive Template File
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<?php get_template_part( 'template-parts/sections/projects' ); ?>
<?php get_template_part( 'template-parts/sections/cta' ); ?>

<?php
get_footer();
