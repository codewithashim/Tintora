<?php
/**
 * Template Part for displaying empty loop states / not found messages
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="no-results not-found card" style="text-align: center; padding: 4rem 2rem;">
	<h2 class="page-title"><?php esc_html_e( 'Nothing Found', 'tintora' ); ?></h2>
	
	<div class="page-content" style="max-width: 500px; margin: 1.5rem auto 0;">
		<?php if ( is_search() ) : ?>
			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'tintora' ); ?></p>
			<?php get_search_form(); ?>
		<?php else : ?>
			<p><?php esc_html_e( 'It seems we cannot find what you are looking for. Perhaps searching can help.', 'tintora' ); ?></p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div>
</section>
