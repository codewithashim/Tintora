<?php
/**
 * Dashboard View: Theme Colors & Tokens
 *
 * @package Tintora
 * @subpackage Dashboard
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$options = get_option( 'tintora_theme_options', array() );
?>

<div class="tintora-tab-content">
	<div class="tintora-card">
		<h3><?php esc_html_e( 'Global Brand Colors', 'tintora' ); ?></h3>

		<table class="form-table">
			<tr>
				<th scope="row"><?php esc_html_e( 'Primary Dark Color', 'tintora' ); ?></th>
				<td>
					<input type="color" name="tintora_theme_options[color_primary]" value="<?php echo esc_attr( isset( $options['color_primary'] ) ? $options['color_primary'] : '#111111' ); ?>" />
				</td>
			</tr>
			<tr>
				<th scope="row"><?php esc_html_e( 'Accent / Gold Color', 'tintora' ); ?></th>
				<td>
					<input type="color" name="tintora_theme_options[color_accent]" value="<?php echo esc_attr( isset( $options['color_accent'] ) ? $options['color_accent'] : '#D09A40' ); ?>" />
				</td>
			</tr>
			<tr>
				<th scope="row"><?php esc_html_e( 'Body Background Color', 'tintora' ); ?></th>
				<td>
					<input type="color" name="tintora_theme_options[color_background]" value="<?php echo esc_attr( isset( $options['color_background'] ) ? $options['color_background'] : '#F7F7F5' ); ?>" />
				</td>
			</tr>
		</table>

		<?php submit_button( __( 'Save Color Settings', 'tintora' ) ); ?>
	</div>
</div>
