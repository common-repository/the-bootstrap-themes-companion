<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://profiles.wordpress.org/thebootstrapthemes/
 * @since      1.0.0
 *
 * @package    The_Bootstrap_Themes_Companion
 * @subpackage The_Bootstrap_Themes_Companion/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    The_Bootstrap_Themes_Companion
 * @subpackage The_Bootstrap_Themes_Companion/admin
 * @author     thebootstrapthemes <a@gmail.com>
 */
class The_Bootstrap_Themes_Companion_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in The_Bootstrap_Themes_Companion_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The The_Bootstrap_Themes_Companion_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/tbthemes-companion-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in The_Bootstrap_Themes_Companion_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The The_Bootstrap_Themes_Companion_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/tbthemes-companion-admin.js', array( 'jquery' ), $this->version, true );
		if( is_admin() ) {

			$screen = get_current_screen();

			if( $screen->post_type === 'tbtc_testimonials' OR $screen->post_type === 'tbtc_teams' OR $screen->post_type === 'tbtc_price' ) {
				wp_register_script( 'active-submenu-js', plugin_dir_url( __FILE__ ) . 'js/active-menu.js', array('jquery-core'), false, true );
				wp_enqueue_script( 'active-submenu-js' );

			}
		}
	}

}
