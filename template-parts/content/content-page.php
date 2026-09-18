<?php
/**
 * Template Part for displaying page content
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'page-entry' ); ?>>
	
	<header class="page-header" style="margin-bottom: 2.5rem;">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<?php if ( function_exists( 'tintora_breadcrumbs' ) ) tintora_breadcrumbs(); ?>
	</header>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="page-featured-image" style="margin-bottom: 2rem; border-radius: var(--tintora-radius-md); overflow: hidden;">
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

</article>
