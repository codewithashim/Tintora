<?php
/**
 * Comments Form & List Template
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area card" style="margin-top: 3.5rem; padding: 2.5rem;">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title" style="margin-bottom: 2rem;">
			<?php
			$tintora_comment_count = get_comments_number();
			if ( '1' === $tintora_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'tintora' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf(
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $tintora_comment_count, 'comments title', 'tintora' ) ),
					number_format_i18n( $tintora_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2>

		<ol class="comment-list" style="list-style: none; padding: 0;">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size' => 48,
				)
			);
			?>
		</ol>

		<?php
		the_comments_navigation();

		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'tintora' ); ?></p>
			<?php
		endif;

	endif;

	comment_form(
		array(
			'class_submit'  => 'btn btn-primary',
			'title_reply'   => esc_html__( 'Leave a Reply', 'tintora' ),
			'comment_field' => '<p class="comment-form-comment"><label for="comment">' . esc_html__( 'Comment', 'tintora' ) . '</label> <textarea id="comment" name="comment" cols="45" rows="5" required></textarea></p>',
		)
	);
	?>

</div>
