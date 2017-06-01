<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.paulpoot.eu
 * @since             1.0.0
 * @package           Freedom_Blackout
 *
 * @wordpress-plugin
 * Plugin Name:       Freedom Blackout
 * Plugin URI:        https://github.com/PaulPoot/freedom-blackout
 * Description:       Plugin that (partially) hides your website based on a variable.
 * Version:           1.2.0
 * Author:            Paul Poot
 * Author URI:        https://www.paulpoot.eu
 * License:           GPL-3.0
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       freedom-blackout
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-freedom-blackout-activator.php
 */
function activate_freedom_blackout() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-freedom-blackout-activator.php';
	Freedom_Blackout_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-freedom-blackout-deactivator.php
 */
function deactivate_freedom_blackout() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-freedom-blackout-deactivator.php';
	Freedom_Blackout_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_freedom_blackout' );
register_deactivation_hook( __FILE__, 'deactivate_freedom_blackout' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-freedom-blackout.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_freedom_blackout() {

	$plugin = new Freedom_Blackout();
	$plugin->run();

}
run_freedom_blackout();
