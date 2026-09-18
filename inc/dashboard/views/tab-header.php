<?php
/**
 * Dashboard View: Header Builder & Controls
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
		<h3><?php esc_html_e( 'Header Layout & Topbar Settings', 'tintora' ); ?></h3>
		
		<table class="form-table">
			<tr>
				<th scope="row"><?php esc_html_e( 'Sticky Header', 'tintora' ); ?></th>
				<td>
					<label class="tintora-switch">
						<input type="checkbox" name="tintora_theme_options[enable_sticky_header]" value="1" <?php checked( 1, isset( $options['enable_sticky_header'] ) ? $options['enable_sticky_header'] : 1 ); ?> />
						<span class="slider round"></span>
					</label>
					<p class="description"><?php esc_html_e( 'Fix navigation bar to top during scroll.', 'tintora' ); ?></p>
				</td>
			</tr>
			<tr>
				<th scope="row"><?php esc_html_e( 'Transparent Hero Header', 'tintora' ); ?></th>
				<td>
					<label class="tintora-switch">
						<input type="checkbox" name="tintora_theme_options[enable_transparent_header]" value="1" <?php checked( 1, isset( $options['enable_transparent_header'] ) ? $options['enable_transparent_header'] : 1 ); ?> />
						<span class="slider round"></span>
					</label>
					<p class="description"><?php esc_html_e( 'Blend navigation background over homepage hero.', 'tintora' ); ?></p>
				</td>
			</tr>
			<tr>
				<th scope="row"><?php esc_html_e( 'Phone Number', 'tintora' ); ?></th>
				<td>
					<input type="text" name="tintora_theme_options[phone]" value="<?php echo esc_attr( isset( $options['phone'] ) ? $options['phone'] : '+1 (800) 555-TINT' ); ?>" class="regular-text" />
				</td>
			</tr>
			<tr>
				<th scope="row"><?php esc_html_e( 'Email Address', 'tintora' ); ?></th>
				<td>
					<input type="email" name="tintora_theme_options[email]" value="<?php echo esc_attr( isset( $options['email'] ) ? $options['email'] : 'info@tintorafilm.com' ); ?>" class="regular-text" />
				</td>
			</tr>
			<tr>
				<th scope="row"><?php esc_html_e( 'Header Button Text', 'tintora' ); ?></th>
				<td>
					<input type="text" name="tintora_theme_options[header_cta_text]" value="<?php echo esc_attr( isset( $options['header_cta_text'] ) ? $options['header_cta_text'] : 'Get a Free Quote' ); ?>" class="regular-text" />
				</td>
			</tr>
			<tr>
				<th scope="row"><?php esc_html_e( 'Header Button URL', 'tintora' ); ?></th>
				<td>
					<input type="text" name="tintora_theme_options[header_cta_link]" value="<?php echo esc_attr( isset( $options['header_cta_link'] ) ? $options['header_cta_link'] : '#contact' ); ?>" class="regular-text" />
				</td>
			</tr>
		</table>

		<?php submit_button( __( 'Save Header Settings', 'tintora' ) ); ?>
	</div>
</div>
