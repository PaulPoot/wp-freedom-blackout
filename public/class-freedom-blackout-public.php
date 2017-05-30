<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://paulpoot.eu
 * @since      1.0.0
 *
 * @package    Freedom_Blackout
 * @subpackage Freedom_Blackout/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Freedom_Blackout
 * @subpackage Freedom_Blackout/public
 * @author     Paul Poot <development@paulpoot.eu>
 */
class Freedom_Blackout_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->freedom_blackout_options = get_option($this->plugin_name);
	}

	/**
	 * Print the black overlay
	 *
	 * @since    1.0.0
	 */
	public function print_overlay() {

		$options = $this->freedom_blackout_options;
		$cover_percentage = $options['cover_percentage'];
		$cover_message = $options['cover_message'];
		$cover_url = $options['cover_url'];
		
		?>
			<div style="width: 100vw; height: <?php echo $cover_percentage; ?>vh; background-color: #000; z-index: 99999; position: fixed; bottom: 0; display: flex; align-items: center; justify-content: center;">
				<a style="color: #fff; padding: 8px;" href="<?php echo $cover_url ?>"><?php echo $cover_message ?></a>
			</div>
		<?php

	}

}
