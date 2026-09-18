<?php
/**
 * Main Blog Template File
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="section blog-archive-section">
	<div class="container">
		
		<header class="section-header" style="text-align: left; margin-bottom: 3rem;">
			<h1 class="section-title"><?php single_post_title(); ?></h1>
			<p class="section-description">
				<?php esc_html_e( 'Articles, window tinting guides, UV protection advice, and industry news.', 'tintora' ); ?>
			</p>
		</header>

		<div class="archive-layout" style="display: grid; grid-template-columns: 1fr; gap: 3rem; align-items: start;">
			<div class="posts-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 2rem;">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content/content' );
					endwhile;

					the_posts_navigation(
						array(
							'prev_text' => __( '&larr; Older Posts', 'tintora' ),
							'next_text' => __( 'Newer Posts &rarr;', 'tintora' ),
						)
					);
				else :
					get_template_part( 'template-parts/content/content-none' );
				endif;
				?>
			</div>
		</div>

	</div>
</div>

<?php
get_footer();
