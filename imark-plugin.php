<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              ariel.zusman@gmail.com
 * @since             1.0.0
 * @package           Imark_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Imark Plugin
 * Plugin URI:        /
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Ariel Zusman
 * Author URI:        ariel.zusman@gmail.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       imark-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-imark-plugin-activator.php
 */
function activate_imark_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-imark-plugin-activator.php';
	Imark_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-imark-plugin-deactivator.php
 */
function deactivate_imark_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-imark-plugin-deactivator.php';
	Imark_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_imark_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_imark_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-imark-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_imark_plugin() {

	$plugin = new Imark_Plugin();
	$plugin->run();

}
run_imark_plugin();
