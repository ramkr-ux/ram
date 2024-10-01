<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://github.com/ramkr-ux/ram
 * @since             1.0.0
 * @package           Switch_Currency
 *
 * @wordpress-plugin
 * Plugin Name:       Switch Currency
 * Plugin URI:        https://https://github.com/ramkr-ux/ram
 * Description:       switch currency according to the chose location
 * Version:           1.0.0
 * Author:            RK
 * Author URI:        https://https://github.com/ramkr-ux/ram/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       switch-currency
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SWITCH_CURRENCY_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-switch-currency-activator.php
 */
function activate_switch_currency() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-switch-currency-activator.php';
	Switch_Currency_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-switch-currency-deactivator.php
 */
function deactivate_switch_currency() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-switch-currency-deactivator.php';
	Switch_Currency_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_switch_currency' );
register_deactivation_hook( __FILE__, 'deactivate_switch_currency' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-switch-currency.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_switch_currency() {

	$plugin = new Switch_Currency();
	$plugin->run();

}
run_switch_currency();
