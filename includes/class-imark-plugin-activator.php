<?php

/**
 * Fired during plugin activation
 *
 * @link       ariel.zusman@gmail.com
 * @since      1.0.0
 *
 * @package    Imark_Plugin
 * @subpackage Imark_Plugin/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Imark_Plugin
 * @subpackage Imark_Plugin/includes
 * @author     Ariel Zusman <ariel.zusman@gmail.com>
 */
class Imark_Plugin_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-imark-plugin-admin.php';

		Imark_Plugin_Admin::new_cpt_product();

		flush_rewrite_rules();
	}

}
