<?php
/**
 * Template Part for displaying single posts
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post-entry' ); ?>>
	
	<header class="single-post-header" style="margin-bottom: 2rem;">
		<?php if ( function_exists( 'tintora_breadcrumbs' ) ) tintora_breadcrumbs(); ?>
		
		<h1 class="entry-title" style="margin-top: 1rem;"><?php the_title(); ?></h1>

		<div class="entry-meta" style="display: flex; gap: 1.5rem; color: var(--tintora-muted); font-size: 0.95rem; margin-top: 1rem;">
			<?php tintora_posted_on(); ?>
			<?php tintora_posted_by(); ?>
			<span class="reading-time">&bull; <?php echo esc_html( tintora_estimated_reading_time() ); ?></span>
		</div>
	</header>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="single-featured-image" style="margin-bottom: 2.5rem; border-radius: var(--tintora-radius-md); overflow: hidden; box-shadow: var(--tintora-shadow-md);">
			<?php the_post_thumbnail( 'tintora-hero' ); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tintora' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

	<footer class="entry-footer" style="margin-top: 3rem; padding-top: 1.5rem; border-top: 1px solid var(--tintora-border);">
		<?php tintora_entry_footer(); ?>
	</footer>

</article>
