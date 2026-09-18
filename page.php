<?php
/**
 * Default Page Template File
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="section page-section">
	<div class="container" style="max-width: 900px;">
		
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content/content-page' );

			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile;
		?>

	</div>
</div>

<?php
get_footer();
