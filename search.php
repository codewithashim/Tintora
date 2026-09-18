<?php
/**
 * Search Results Template File
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="section search-results-section">
	<div class="container">
		
		<header class="section-header" style="text-align: left; margin-bottom: 3rem;">
			<h1 class="section-title">
				<?php
				/* translators: %s: search query */
				printf( esc_html__( 'Search Results for: %s', 'tintora' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h1>
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
