<?php
/**
 * Blog Card Component Part
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<article class="card blog-card">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="blog-image">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'tintora-card' ); ?>
			</a>
		</div>
	<?php endif; ?>

	<div class="blog-content">
		<div class="meta">
			<?php tintora_posted_on(); ?>
		</div>

		<h3 class="blog-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h3>

		<div class="excerpt">
			<?php the_excerpt(); ?>
		</div>

		<a href="<?php the_permalink(); ?>" class="card-link" style="margin-top: auto;">
			<?php esc_html_e( 'Read Article', 'tintora' ); ?>
			<?php echo tintora_get_svg_icon( 'arrow-right' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</a>
	</div>
</article>
