<?php
/**
 * Template Part for displaying standard loop post items
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'card blog-card' ); ?>>
	
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="blog-image">
			<?php tintora_post_thumbnail( 'tintora-card' ); ?>
			<?php
			$categories = get_the_category();
			if ( ! empty( $categories ) ) :
				?>
				<span class="category-badge"><?php echo esc_html( $categories[0]->name ); ?></span>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<div class="blog-content">
		<div class="meta">
			<?php tintora_posted_on(); ?>
			<span class="reading-time">&bull; <?php echo esc_html( tintora_estimated_reading_time() ); ?></span>
		</div>

		<h2 class="blog-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>

		<div class="excerpt">
			<?php the_excerpt(); ?>
		</div>

		<a href="<?php the_permalink(); ?>" class="card-link" style="margin-top: auto;">
			<?php esc_html_e( 'Read Article', 'tintora' ); ?>
			<?php echo tintora_get_svg_icon( 'arrow-right' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</a>
	</div>

</article>
