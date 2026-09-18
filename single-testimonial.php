<?php
/**
 * Single Testimonial CPT Template File
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="section single-testimonial-section">
	<div class="container" style="max-width: 800px;">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article class="card" style="text-align: center; padding: 3rem;">
				<h1 style="margin-bottom: 1.5rem;"><?php the_title(); ?></h1>
				<div class="entry-content" style="font-size: 1.15rem; font-style: italic; color: var(--tintora-text);">
					<?php the_content(); ?>
				</div>
			</article>
			<?php
		endwhile;
		?>
	</div>
</div>

<?php
get_footer();
