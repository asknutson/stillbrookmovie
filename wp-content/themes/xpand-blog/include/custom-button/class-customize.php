<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class xpandblog_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require_once( trailingslashit( get_template_directory() ) . '/include/custom-button/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'xpandblog_Customize_Section_Pro' );

		// Recommend sections.
		$manager->add_section(
			new xpandblog_Customize_Section_Pro(
				$manager,
				'xpand-recommend',
				array(
					'title'    => esc_html__( 'Recommended Plugins', 'xpand-blog' ),
					'pro_text' => esc_html__( 'Install Now', 'xpand-blog' ),
					'pro_url'  => 'themes.php?page=tgmpa-install-plugins',
					'priority'  => 1
				)
			)
		);
		// Demo Section 
		$manager->add_section(
			new xpandblog_Customize_Section_Pro(
				$manager,
				'xpand-demo',
				array(
					'title'    => esc_html__( 'Theme Deomo', 'xpand-blog' ),
					'pro_text' => esc_html__( 'Click Here', 'xpand-blog' ),
					'pro_url'  => 'http://blogwpthemes.com/demo/xpand-blog/',
					'priority'  => 2
				)
			)
		);
		 	}
	public function enqueue_control_scripts() {
		wp_enqueue_script( 'xpand-blog-customize-controls', trailingslashit( get_template_directory_uri() ) . '/include/custom-button/customize-controls.js', array( 'customize-controls' ) );
		wp_enqueue_style( 'xpand-blog-customize-controls', trailingslashit( get_template_directory_uri() ) . '/include/custom-button/customize-controls.css' );
	}
}
xpandblog_Customize::get_instance();