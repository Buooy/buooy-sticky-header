<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that
 * also follow WordPress Coding Standards and PHP best practices.
 *
 * @package   Buooy_Sticky_Header
 * @author    Buooy <ahoy@buooy.com>
 * @license   GPL-2.0+
 * @link      http://buooy.com
 * @copyright 2014 Buooy
 *
 * @wordpress-plugin
 * Plugin Name:       Buooy Sticky Header
 * Plugin URI:       http://aaronstevensonlee.me/buooy-sticky-header/
 * Description:       This plugin provides you with an sticky header that contains your post title and share buttons!
 * Version:           0.5.2
 * Author:       	Buooy
 * Author URI:       http://buooy.com
 * Text Domain:       buooy-sticky-header
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/<owner>/<repo>
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-buooy-sticky-header.php` with the name of the plugin's class file
 *
 */
require_once( plugin_dir_path( __FILE__ ) . 'public/class-buooy-sticky-header.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 * @TODO:
 *
 * - replace Buooy_Sticky_Header with the name of the class defined in
 *   `class-buooy-sticky-header.php`
 */
register_activation_hook( __FILE__, array( 'Buooy_Sticky_Header', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Buooy_Sticky_Header', 'deactivate' ) );

/*
 * @TODO:
 *
 * - replace Buooy_Sticky_Header with the name of the class defined in
 *   `class-buooy-sticky-header.php`
 */
add_action( 'plugins_loaded', array( 'Buooy_Sticky_Header', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-buooy-sticky-header-admin.php` with the name of the plugin's admin file
 * - replace Buooy_Sticky_Header_Admin with the name of the class defined in
 *   `class-buooy-sticky-header-admin.php`
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-buooy-sticky-header-admin.php' );
	add_action( 'plugins_loaded', array( 'Buooy_Sticky_Header_Admin', 'get_instance' ) );

}
