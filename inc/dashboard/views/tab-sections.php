<?php
/**
 * Dashboard View: Section Manager
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
		<h3><?php esc_html_e( 'Homepage Section Visibility Controls', 'tintora' ); ?></h3>
		<p><?php esc_html_e( 'Enable or disable any section on the homepage with a single click.', 'tintora' ); ?></p>

		<table class="form-table tintora-toggle-table">
			<?php
			$sections_list = array(
				'enable_section_hero'        => __( 'Hero Banner Section', 'tintora' ),
				'enable_section_services'    => __( 'Services Grid Section', 'tintora' ),
				'enable_section_about'       => __( 'About Us Section', 'tintora' ),
				'enable_section_why_choose'  => __( 'Why Choose Us Features', 'tintora' ),
				'enable_section_process'     => __( '4-Step Process Timeline', 'tintora' ),
				'enable_section_projects'    => __( 'Project Gallery & Before/After Slider', 'tintora' ),
				'enable_section_testimonials'=> __( 'Client Testimonials Section', 'tintora' ),
				'enable_section_pricing'     => __( 'Pricing Tiers Section', 'tintora' ),
				'enable_section_faq'         => __( 'FAQ Accordion Section', 'tintora' ),
				'enable_section_cta'         => __( 'CTA Conversion Banner', 'tintora' ),
				'enable_section_contact'     => __( 'Contact Info & Quote Form', 'tintora' ),
			);

			foreach ( $sections_list as $key => $label ) :
				$is_enabled = isset( $options[ $key ] ) ? $options[ $key ] : 1;
				?>
				<tr>
					<th scope="row"><?php echo esc_html( $label ); ?></th>
					<td>
						<label class="tintora-switch">
							<input type="checkbox" name="tintora_theme_options[<?php echo esc_attr( $key ); ?>]" value="1" <?php checked( 1, $is_enabled ); ?> />
							<span class="slider round"></span>
						</label>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>

		<?php submit_button( __( 'Save Section Visibility Settings', 'tintora' ) ); ?>
	</div>
</div>
