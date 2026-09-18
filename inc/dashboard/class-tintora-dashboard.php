<?php
/**
 * Tintora Dashboard Master OOP Controller
 *
 * @package Tintora
 * @subpackage Dashboard
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Tintora_Dashboard {

	/**
	 * Instance
	 *
	 * @var Tintora_Dashboard
	 */
	private static $instance = null;

	/**
	 * Get Instance
	 *
	 * @return Tintora_Dashboard
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'register_menu' ) );
		add_action( 'admin_init', array( $this, 'register_settings' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_assets' ) );
	}

	/**
	 * Register Theme Dashboard Menu Item
	 */
	public function register_menu() {
		add_theme_page(
			esc_html__( 'Tintora Theme Dashboard', 'tintora' ),
			esc_html__( 'Tintora Dashboard', 'tintora' ),
			'manage_options',
			'tintora-dashboard',
			array( $this, 'render_dashboard' )
		);
	}

	/**
	 * Register Settings API
	 */
	public function register_settings() {
		register_setting(
			'tintora_options_group',
			'tintora_theme_options',
			array( $this, 'sanitize_options' )
		);
	}

	/**
	 * Enqueue Dashboard Assets
	 *
	 * @param string $hook_suffix Admin hook.
	 */
	public function enqueue_assets( $hook_suffix ) {
		if ( 'appearance_page_tintora-dashboard' !== $hook_suffix ) {
			return;
		}

		wp_enqueue_style( 'tintora-dashboard-css', TINTORA_URI . '/inc/dashboard/assets/css/dashboard.css', array(), TINTORA_VERSION );
	}

	/**
	 * Render Main Dashboard Wrapper & Dynamic Tab Views
	 */
	public function render_dashboard() {
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		$active_tab = isset( $_GET['tab'] ) ? sanitize_key( wp_unslash( $_GET['tab'] ) ) : 'overview';
		$valid_tabs = array( 'overview', 'header', 'footer', 'sections', 'colors' );
		
		if ( ! in_array( $active_tab, $valid_tabs, true ) ) {
			$active_tab = 'overview';
		}
		?>

		<div class="wrap tintora-admin-wrap">
			<div class="tintora-admin-header">
				<div class="tintora-admin-branding">
					<h1><?php esc_html_e( 'Tintora Theme Control Center', 'tintora' ); ?></h1>
					<span class="version-tag"><?php echo esc_html( 'v' . TINTORA_VERSION ); ?></span>
				</div>
				<p class="tintora-admin-subtitle">
					<?php esc_html_e( 'Manage your window tinting theme layout, header, footer, section visibility, and brand colors.', 'tintora' ); ?>
				</p>
			</div>

			<?php if ( isset( $_GET['settings-updated'] ) ) : ?>
				<div class="notice notice-success is-dismissible">
					<p><strong><?php esc_html_e( 'Tintora theme options saved successfully!', 'tintora' ); ?></strong></p>
				</div>
			<?php endif; ?>

			<!-- Feature Tab Navigation -->
			<h2 class="nav-tab-wrapper tintora-nav-tabs">
				<a href="?page=tintora-dashboard&tab=overview" class="nav-tab <?php echo 'overview' === $active_tab ? 'nav-tab-active' : ''; ?>">
					<span class="dashicons dashicons-dashboard"></span> <?php esc_html_e( 'Overview', 'tintora' ); ?>
				</a>
				<a href="?page=tintora-dashboard&tab=header" class="nav-tab <?php echo 'header' === $active_tab ? 'nav-tab-active' : ''; ?>">
					<span class="dashicons dashicons-menu-alt"></span> <?php esc_html_e( 'Header Builder', 'tintora' ); ?>
				</a>
				<a href="?page=tintora-dashboard&tab=footer" class="nav-tab <?php echo 'footer' === $active_tab ? 'nav-tab-active' : ''; ?>">
					<span class="dashicons dashicons-editor-insertmore"></span> <?php esc_html_e( 'Footer Builder', 'tintora' ); ?>
				</a>
				<a href="?page=tintora-dashboard&tab=sections" class="nav-tab <?php echo 'sections' === $active_tab ? 'nav-tab-active' : ''; ?>">
					<span class="dashicons dashicons-layout"></span> <?php esc_html_e( 'Section Manager', 'tintora' ); ?>
				</a>
				<a href="?page=tintora-dashboard&tab=colors" class="nav-tab <?php echo 'colors' === $active_tab ? 'nav-tab-active' : ''; ?>">
					<span class="dashicons dashicons-color-picker"></span> <?php esc_html_e( 'Theme Colors', 'tintora' ); ?>
				</a>
			</h2>

			<form method="post" action="options.php" class="tintora-admin-form">
				<?php
				settings_fields( 'tintora_options_group' );

				// Load Modular Feature View File
				$view_file = TINTORA_DIR . '/inc/dashboard/views/tab-' . $active_tab . '.php';
				if ( file_exists( $view_file ) ) {
					require $view_file;
				}
				?>
			</form>
		</div>
		<?php
	}

	/**
	 * Sanitize Theme Options Array
	 *
	 * @param array $input Raw input array.
	 * @return array Sanitized array.
	 */
	public function sanitize_options( $input ) {
		$output = array();

		if ( isset( $input['enable_sticky_header'] ) ) {
			$output['enable_sticky_header'] = 1;
		}
		if ( isset( $input['enable_transparent_header'] ) ) {
			$output['enable_transparent_header'] = 1;
		}

		if ( isset( $input['phone'] ) ) {
			$output['phone'] = sanitize_text_field( $input['phone'] );
		}
		if ( isset( $input['email'] ) ) {
			$output['email'] = sanitize_email( $input['email'] );
		}
		if ( isset( $input['header_cta_text'] ) ) {
			$output['header_cta_text'] = sanitize_text_field( $input['header_cta_text'] );
		}
		if ( isset( $input['header_cta_link'] ) ) {
			$output['header_cta_link'] = esc_url_raw( $input['header_cta_link'] );
		}

		if ( isset( $input['footer_columns'] ) ) {
			$output['footer_columns'] = sanitize_text_field( $input['footer_columns'] );
		}
		if ( isset( $input['copyright_text'] ) ) {
			$output['copyright_text'] = sanitize_text_field( $input['copyright_text'] );
		}
		if ( isset( $input['facebook_url'] ) ) {
			$output['facebook_url'] = esc_url_raw( $input['facebook_url'] );
		}
		if ( isset( $input['instagram_url'] ) ) {
			$output['instagram_url'] = esc_url_raw( $input['instagram_url'] );
		}

		$section_keys = array(
			'enable_section_hero',
			'enable_section_services',
			'enable_section_about',
			'enable_section_why_choose',
			'enable_section_process',
			'enable_section_projects',
			'enable_section_testimonials',
			'enable_section_pricing',
			'enable_section_faq',
			'enable_section_cta',
			'enable_section_contact',
		);

		foreach ( $section_keys as $key ) {
			if ( isset( $input[ $key ] ) ) {
				$output[ $key ] = 1;
			}
		}

		if ( isset( $input['color_primary'] ) ) {
			$output['color_primary'] = sanitize_hex_color( $input['color_primary'] );
		}
		if ( isset( $input['color_accent'] ) ) {
			$output['color_accent'] = sanitize_hex_color( $input['color_accent'] );
		}
		if ( isset( $input['color_background'] ) ) {
			$output['color_background'] = sanitize_hex_color( $input['color_background'] );
		}

		return $output;
	}
}

// Initialize Dashboard Class
Tintora_Dashboard::get_instance();
