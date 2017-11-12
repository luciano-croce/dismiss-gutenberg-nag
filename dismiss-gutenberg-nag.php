<?php 
/*
 Plugin Name:       Dismiss Gutenberg Nag
 Plugin URI:        https://github.com/luciano-croce/dismiss-gutenberg-nag/
 Description:       Dismiss "<strong>try Gutenberg</strong>" nag, dashboard widget, when is activated, or automatically, if it is in mu-plugins directory.
 Version:           1.0.1
 Requires at least: 4.8
 Tested up to:      4.9
 Requires PHP:      5.2.4
 Author:            Luciano Croce
 Author URI:        https://github.com/luciano-croce/
 License:           GPLv2 or later
 License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 Text Domain:       dismiss-gutenberg-nag
 Domain Path:       /languages
 Network:           true
 GitHub Plugin URI: https://github.com/luciano-croce/dismiss-gutenberg-nag/
 GitHub Branch:     master
 Requires WP:       4.8
 *
 * Copyright 2017 Luciano Croce (luciano.croce@gmail.com)
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, on an "AS IS", but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * This program is written with the intent of being helpful,
 * but you are responsible for its use or actions on your own website.
 *
 * Tips: a neat trick, is to put this single file dismiss-gutenberg-nag.php (not its parent directory)
 * in the /wp-content/mu-plugins/ directory (create it if not exists) so you won't even have to enable it,
 * and will be loaded by default, also, since first step installation of WordPress setup!
 */

	/**
	 * Dismiss Gutenberg Nag
	 *
	 * PHPDocumentor
	 *
	 * @package    WordPress\Plugin
	 * @subpackage Gutenberg\Dismiss Gutenberg Nag
	 * @link       https://wordpress.org/plugins/dismiss-gutenberg-nag/ - Plugin hosted on wordpress.org repository
	 *
	 * @version    1.0.1 (Build 2017-11-05) Stable
	 * @since      1.0.0 (Build 2017-10-30) 1st Release
	 *
	 * @author     Luciano Croce <luciano.croce@gmail.com>
	 * @copyright  2017 - Luciano Croce
	 * @license    https://www.gnu.org/licenses/gpl-2.0.html - GPLv2 or later
	 *
	 * @todo       Preemptive support for 5.0-alpha trunk
	 */

if ( !defined( 'ABSPATH' ) ) exit;

if ( !defined( 'WPINC' ) ) exit;

if ( !function_exists( 'add_action' ) )	{
	header( 'HTTP/0.9 403 Forbidden' );
	header( 'HTTP/1.0 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	header( 'HTTP/1.2 403 Forbidden' );
	header( 'HTTP/1.3 403 Forbidden' );
	header( 'Status: 403 Forbidden'  );
		exit;
}

if ( version_compare( PHP_VERSION, '5.2.4', '<' ) ) {
// wp_die( __( 'This plugin requires PHP 5.2.4 or greater: Activation Stopped! Please note that a good choice is PHP 5.6+ ~ 7.0+ (previous stable branch) or PHP 7.1+ (current stable branch).', 'dismiss-gutenberg-nag' ) ); # uncomment it if you prefer die notification

/**
 * Make sure that run under PHP 5.2.4 or greater
 *
 * @author  Luciano Croce <luciano.croce@gmail.com>
 * @version 1.0.1 (Build 2017-11-05)
 * @since   1.0.0 (Build 2017-10-30)
 */
function ddwtgn_psd_php_version_init() {
	deactivate_plugins( plugin_basename( __FILE__ ) );
}
add_action( 'admin_init', 'ddwtgn_psd_php_version_init', 0 );

/**
 * Show Admin Notice when PHP version not meet minimum requirements requested
 *
 * @author  Luciano Croce <luciano.croce@gmail.com>
 * @version 1.0.1 (Build 2017-11-05)
 * @since   1.0.0 (Build 2017-10-30)
 */
function ddwtgn_ant_php_version_init() {
?>
<div class="notice notice-info is-dismissible">
<p>
<?php _e( 'This plugin requires PHP 5.2.4 or greater: please note that a good choice is PHP 5.6+ ~ 7.0+ (previous stable branch) or PHP 7.1+ (current stable branch).', 'dismiss-gutenberg-nag' );?>
</p>
</div>
<div class="notice notice-warning is-dismissible">
<p>
<?php _e( 'Plugin Dismiss Gutenberg Nag <strong>deactivated</strong>.', 'dismiss-gutenberg-nag' );?>
<script>window.jQuery && jQuery( function( $ ) { $( 'div#message.updated' ).remove(); } );</script>                                                                                                                           <!-- This script remove update message when plugin is auto deactivated -->
</p>
</div>
<?php 
}
add_action( 'admin_notices', 'ddwtgn_ant_php_version_init' );
add_action( 'network_admin_notices',  'ddwtgn_ant_php_version_init' );
}
else {

global $wp_version;
include( ABSPATH . WPINC . '/version.php' );
$version = str_replace( '-src', '', $wp_version );

if ( version_compare( $version, '4.8', '<' ) ) {
// wp_die( __( 'This plugin requires WordPress 4.8+ or greater: Activation Stopped! Please note that the Gutenberg Dashboard Widget Nag was introduced since WordPress 4.9-beta3', 'dismiss-gutenberg-nag' ) );               # uncomment it if you prefer die notification

/**
 * Make sure that run under WP 3.8+ or greater
 *
 * @author  Luciano Croce <luciano.croce@gmail.com>
 * @version 1.0.1 (Build 2017-11-05)
 * @since   1.0.0 (Build 2017-10-30)
 */
function ddwtgn_psd_wp_version_init() {
	deactivate_plugins( plugin_basename( __FILE__ ) );
}
add_action( 'admin_init', 'ddwtgn_psd_wp_version_init', 0 );

/**
 * Show Admin Notice when WP version not meet minimum requirements requested
 *
 * @author  Luciano Croce <luciano.croce@gmail.com>
 * @version 1.0.1 (Build 2017-11-05)
 * @since   1.0.0 (Build 2017-10-30)
 */
function ddwtgn_ant_wp_version_init() {
?>
<div class="notice notice-info is-dismissible">
<p>
<?php _e( 'This plugin requires WordPress 4.8+ or greater: please note that the Gutenberg Dashboard Widget Nag was introduced since WordPress 4.9-beta3', 'dismiss-gutenberg-nag' );?>
</p>
</div>
<div class="notice notice-warning is-dismissible">
<p>
<?php _e( 'Plugin Dismiss Gutenberg Nag <strong>deactivated</strong>.', 'dismiss-gutenberg-nag' );?>
<script>window.jQuery && jQuery( function( $ ) { $( 'div#message.updated' ).remove(); } );</script>                                                                                                                           <!-- This script remove update message when plugin is auto deactivated -->
</p>
</div>
<?php 
}
add_action( 'admin_notices', 'ddwtgn_ant_wp_version_init' );
add_action( 'network_admin_notices',  'ddwtgn_ant_wp_version_init' );
}
else {

/**
 * Load Plugin Textdomain
 *
 * @author  Luciano Croce <luciano.croce@gmail.com>
 * @version 1.0.1 (Build 2017-11-05)
 * @since   1.0.0 (Build 2017-10-30)
 */
function ddwtgn_load_plugin_textdomain() {
	load_plugin_textdomain( 'dismiss-gutenberg-nag', false, basename( dirname( __FILE__ ) ) . '/languages' );
	load_muplugin_textdomain( 'dismiss-gutenberg-nag', basename( dirname( __FILE__ ) ) . '/languages' );
}
add_filter( 'plugins_loaded', 'ddwtgn_load_plugin_textdomain' );

/**
 * Adds Plugin Row Meta Build
 *
 * @author  Luciano Croce <luciano.croce@gmail.com>
 * @version 1.0.1 (Build 2017-11-05)
 * @since   1.0.0 (Build 2017-10-30)
*/
function ddwtgn_adds_row_meta_build( $plugin_meta, $plugin_file ) {
	if ( $plugin_file == plugin_basename( __FILE__ ) )
		{
			$plugin_meta[ 0 ] .= ' | ' . __( 'Build', 'dismiss-gutenberg-nag' ) . ' ' . __( '2017-11-05', 'dismiss-gutenberg-nag' );
		}
	return $plugin_meta;
}
add_filter( 'plugin_row_meta', 'ddwtgn_adds_row_meta_build', 10, 4 );                                                                                                                                                         # comment or uncomment to enable or disable this customization

/**
 * Adds Plugin Row Meta Links
 *
 * @author  Luciano Croce <luciano.croce@gmail.com>
 * @version 1.0.1 (Build 2017-11-05)
 * @since   1.0.0 (Build 2017-10-30)
*/
function ddwtgn_adds_row_meta_links( $plugin_meta, $plugin_file ) {
	if ( $plugin_file == plugin_basename( __FILE__ ) )
		{
			$plugin_meta[] .= '<a href="https://github.com/luciano-croce/dismiss-gutenberg-nag/">' . __( 'Visit plugin site', 'dismiss-gutenberg-nag' ) . '</a>';
		}
	return $plugin_meta;
}
add_filter( 'plugin_row_meta', 'ddwtgn_adds_row_meta_links', 10, 2 );                                                                                                                                                         # comment or uncomment to enable or disable this customization

/**
 * Adds Plugin Action Links
 *
 * @author  Luciano Croce <luciano.croce@gmail.com>
 * @version 1.0.1 (Build 2017-11-05)
 * @since   1.0.0 (Build 2017-10-30)
*/
function ddwtgn_adds_action_links( $plugin_meta, $plugin_file ) {
		{
			$plugin_meta[] .= '<a href="index.php" style="color:#3db634">' . __( 'Dashboard', 'dismiss-gutenberg-nag' ) . '</a>';
		}
	return $plugin_meta;
}
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'ddwtgn_adds_action_links', 10, 4 );                                                                                                                        # comment or uncomment to enable or disable this customization
add_filter( 'network_admin_plugin_action_links_' . plugin_basename( __FILE__ ), 'ddwtgn_adds_action_links', 10, 4 );                                                                                                          # comment or uncomment to enable or disable this customization

/**
 * Dismiss Dashboard Widget "try Gutenberg" Nag - ddwtgn
 *
 * This, is different from the other similar plugins, because uses the filter hook, and not the action hook.
 *
 * Filters should filter information, thus receiving information/data, applying the filter and returning information/data,
 * and then used. However, filters are still action hooks. WordPress defines add_filter/remove_filter as "hooks a function
 * to a specific filter action", and add_action/remove_action as "hooks a function on to a specific action".
 *
 * @author  Luciano Croce <luciano.croce@gmail.com>
 * @version 1.0.1 (Build 2017-11-05)
 * @since   1.0.0 (Build 2017-10-30)
 */
function dismiss_dashboard_widget_try_gutenberg_nag() {
	remove_filter( 'try_gutenberg_panel', 'wp_try_gutenberg_panel' );
}
add_filter( 'admin_init', 'dismiss_dashboard_widget_try_gutenberg_nag' );

}
}
