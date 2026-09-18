<?php
/**
 * Template Name: Full Width Page
 * Template Post Type: page, post
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="section full-width-section">
	<div class="container" style="max-width: 100%;">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content/content-page' );
		endwhile;
		?>
	</div>
</div>

<?php
get_footer();
