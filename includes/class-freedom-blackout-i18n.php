<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://paulpoot.eu
 * @since      1.0.0
 *
 * @package    Freedom_Blackout
 * @subpackage Freedom_Blackout/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Freedom_Blackout
 * @subpackage Freedom_Blackout/includes
 * @author     Paul Poot <development@paulpoot.eu>
 */
class Freedom_Blackout_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'freedom-blackout',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
