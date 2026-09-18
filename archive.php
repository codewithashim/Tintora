<?php
/**
 * General Archive Template File
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="section archive-section">
	<div class="container">
		
		<header class="section-header" style="text-align: left; margin-bottom: 3rem;">
			<?php
			the_archive_title( '<h1 class="section-title">', '</h1>' );
			the_archive_description( '<div class="section-description">', '</div>' );
			?>
		</header>

		<div class="posts-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 2rem;">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content/content' );
				endwhile;

				the_posts_navigation();
			else :
				get_template_part( 'template-parts/content/content-none' );
			endif;
			?>
		</div>

	</div>
</div>

<?php
get_footer();
