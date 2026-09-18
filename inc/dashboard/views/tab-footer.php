<?php
/**
 * Dashboard View: Footer Builder & Controls
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
		<h3><?php esc_html_e( 'Footer Layout & Copyright', 'tintora' ); ?></h3>

		<table class="form-table">
			<tr>
				<th scope="row"><?php esc_html_e( 'Footer Grid Columns', 'tintora' ); ?></th>
				<td>
					<select name="tintora_theme_options[footer_columns]">
						<option value="4" <?php selected( '4', isset( $options['footer_columns'] ) ? $options['footer_columns'] : '4' ); ?>><?php esc_html_e( '4 Columns (Default)', 'tintora' ); ?></option>
						<option value="3" <?php selected( '3', isset( $options['footer_columns'] ) ? $options['footer_columns'] : '4' ); ?>><?php esc_html_e( '3 Columns', 'tintora' ); ?></option>
						<option value="2" <?php selected( '2', isset( $options['footer_columns'] ) ? $options['footer_columns'] : '4' ); ?>><?php esc_html_e( '2 Columns', 'tintora' ); ?></option>
						<option value="1" <?php selected( '1', isset( $options['footer_columns'] ) ? $options['footer_columns'] : '4' ); ?>><?php esc_html_e( '1 Column', 'tintora' ); ?></option>
					</select>
				</td>
			</tr>
			<tr>
				<th scope="row"><?php esc_html_e( 'Copyright Notice', 'tintora' ); ?></th>
				<td>
					<input type="text" name="tintora_theme_options[copyright_text]" value="<?php echo esc_attr( isset( $options['copyright_text'] ) ? $options['copyright_text'] : 'All rights reserved.' ); ?>" class="large-text" />
				</td>
			</tr>
			<tr>
				<th scope="row"><?php esc_html_e( 'Facebook URL', 'tintora' ); ?></th>
				<td>
					<input type="url" name="tintora_theme_options[facebook_url]" value="<?php echo esc_attr( isset( $options['facebook_url'] ) ? $options['facebook_url'] : '#' ); ?>" class="regular-text" />
				</td>
			</tr>
			<tr>
				<th scope="row"><?php esc_html_e( 'Instagram URL', 'tintora' ); ?></th>
				<td>
					<input type="url" name="tintora_theme_options[instagram_url]" value="<?php echo esc_attr( isset( $options['instagram_url'] ) ? $options['instagram_url'] : '#' ); ?>" class="regular-text" />
				</td>
			</tr>
		</table>

		<?php submit_button( __( 'Save Footer Settings', 'tintora' ) ); ?>
	</div>
</div>
