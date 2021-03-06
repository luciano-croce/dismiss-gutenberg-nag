<?php 
/*
 *         ,gggg,                                                              
 *        d8" "8I                                                              
 *        88  ,dP                                                              
 *    88888888P"                    gg                                         
 *        88                        ""                                         
 *        88   gg     gg    ,ggg,   gg    ,ggg,gg   ,ggg,,ggg,     ,ggggg,     
 *  ,aa,_ 88   I8     8I   dP" "Yb  88   dP" "Y8I  ,8" "8P" "8,   dP"  "Y8gggg 
 * dP" "P888   I8,   ,8I  i8'       88  i8'   ,8I  I8   8I   8I  i8'    ,8I    
 * Yb,_,d888b,,d8b, ,d8b,,d8,_ _,8,,88,,d8, _,d8b,,dP   8I   Yb,,d8,_  ,d8'    
 *  "Y8P"   "Y8P'"Y8P"`Y8P""Y888PP8PY""YP"Y888P"`Y88P'  8I   `Y8P"Y8888P"      
 *
 *                                 Old Style BBS 80 Columns Art: My First Love!
 *
Plugin Name:       Dismiss Gutenberg Nag
Plugin URI:        https://github.com/luciano-croce/dismiss-gutenberg-nag/
Description:       Dismiss "<strong>try Gutenberg</strong>" nag, dashboard widget, and demo menu, when it is activated, or if it is in mu-plugins directory.
Version:           1.0.6-beta
Requires at least: 4.9
Tested up to:      5.0
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
Requires WP:       4.9-beta3
 *
 * Warning: to avoid code corruption, do not edit this file with WordPress embedded editor,
 * or with an editor not compatible UTF-8 without BOM, and Unix LF.
 *
 * GDPR-compliant: does not collect and store any user data.
 *
 * Super light and fast plugin, easy on server resources!
 *
 * This is not a replacement but just a tool for those who need it.
 *
 * Plugin approved in the repository of the plugin directory on 2017-11-05
 *
 * Copyright 2017-2018 Luciano Croce (email: luciano.croce@gmail.com)
 *
 * This dismiss-gutenberg-nag.php uses (or its parts) code derived from:
 *
 * dismiss-gutenberg-nag.php by Luciano Croce <luciano [dot] croce [at] googlemail [dot] com>
 * Copyright 2017-2018 [Luciano Croce](https://github.com/luciano-croce/) (email: <luciano [dot] croce [at] gmail [dot] com>)
 *
 * hide-try-gutenberg-callout.php by Paul V. Biron <paul [at] sparrowhawkcomputing [dot] com>
 * Copyright 2018 [Paul V. Biron](https://github.com/pbiron/) (email: <paul [at] sparrowhawkcomputing [dot] com>)
 *
 * according to the terms of the GNU General Public License GPLv2 or later.
 *
 * According to the Terms of the GNU General Public License GPLv2 or later part of Copyright
 * belongs to your own author and part belongs to their respective others authors if exists:
 *
 * Copyright 2017-2018 [Luciano Croce](https://github.com/luciano-croce/) (email: <luciano [dot] croce [at] gmail [dot] com>)
 *
 * Copyright 2018 [Paul V. Biron](https://github.com/pbiron/) (email: <paul [at] sparrowhawkcomputing [dot] com>)
 *
 * according to the terms of the GNU General Public License GPLv2 or later.
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other compatible version of the GPL, or version compatible with GPL.
 *
 * This program is distributed in the hope that it will be useful, on an "AS IS", but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * This program is written with the intent of being helpful,
 * but you are responsible for its use or actions on your own website.
 *
 * According to the terms of the Detailed Plugin Guidelines (wordpress.org) in particular:
 * - This developer(s) are responsible(s) for the contents and actions of this plugin.
 * - Stable version of this plugin is only available from the WordPress Plugin Directory page.
 * - Plugin version numbers is be incremented for each new release.
 * - Complete plugin was be available on GitHub before the time of submission.
 * - This plugin respect trademarks, copyrights, and project names.
 *
 * This plugin use Semantic Versioning number MAJOR.MINOR.PATCH - More details are available here: https://semver.org/
 *
 * Tips: a neat trick, is to put this single file dismiss-gutenberg-nag.php (not its parent directory)
 * in the /wp-content/mu-plugins/ directory (create it if not exists) so you won't even have to enable it,
 * and will be loaded by default, also, since first step installation of WordPress setup!
 *
 * Also, for translation functionality, put all files of the single languages
 * (dismiss-gutenberg-nag-en_US.mo for example)
 * that you need (not its parent directory) in the /wp-content/mu-plugins/ directory (create it if not exists)
 * and will be loaded by default, they also, since first step installation of WordPress setup!
 *
 * Translation: all readable text of this plugin are code free,
 * no HTML tags was inserted (showed) on text domain strings of GlotPress.
 *
 * The code of this plugin is not written with a php framework, but with a simple php editor, manually.
 */

	/**
	 * Dismiss Gutenberg Nag.
	 *
	 * Automatically Dismiss Dashboard Widget "try Gutenberg" Nag.
	 *
	 * History Versions:
	 *
	 * 1.0.5 releaee is available on [WordPress Plugins Directory](https://wordpress.org/plugins/dismiss-gutenberg-nag/)
	 *
	 * 1.0.5 (Build 2018-11-23) 5th Update
	 * 1.0.4 (Build 2018-08-06) 4th Update
	 * 1.0.3 (Build 2018-08-02) 3rd Update
	 * 1.0.2 (Build 2017-03-22) 2nd Update
	 * 1.0.1 (Build 2017-11-05) 1st Update
	 *
	 * PHPDocumentor:
	 *
	 * @package    WordPress\Plugin
	 * @subpackage Gutenberg\Dismiss_Gutenberg_Nag
	 * @link       https://wordpress.org/plugins/dismiss-gutenberg-nag/ - Hosted on wordpress.org repository
	 * @version    1.0.6-beta (Build 2018-11-24)  Latest Release
	 * @since      1.0.0      (Build 2017-10-30) Initial Release
	 * @author     Luciano Croce <luciano.croce@gmail.com>
	 * @copyright  2017-2018 - Luciano Croce
	 * @license    https://www.gnu.org/licenses/gpl-2.0.html - GPLv2 or later.
	 * @todo       Add some options to completely disable Gutenberg when it will be embedded in the WordPress 5.0+ core
	 *              - Standalone options page
	 *              - Transients support when possible
	 *              - Possibility to disable the integration of the Classic Editor plugin into the core of WP 4.9.8 and 4.9.9 ?
	 */

/**
 * Prevent direct access to plugin files.
 *
 * For security reasons, exit without any notifications:
 * - without show the details of the system
 * - without warn the existence of this plugin
 * - show the generic header 403 forbidden error
 * - close the connection header
 *
 * @author  Luciano Croce <luciano.croce@gmail.com>
 * @version 1.0.2 (Build 2018-09-10)
 * @since   1.0.0 (Build 2017-10-30)
 */
if ( ! defined( 'ABSPATH' ) ) {
	header( 'HTTP/0.9 403 Forbidden' );
	header( 'HTTP/1.0 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	header( 'HTTP/2.0 403 Forbidden' );
	header( 'Status:  403 Forbidden' );
	header( 'Connection: Close'      );
		exit;
}

if ( ! defined( 'WPINC' ) ) {
	header( 'HTTP/0.9 403 Forbidden' );
	header( 'HTTP/1.0 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	header( 'HTTP/2.0 403 Forbidden' );
	header( 'Status:  403 Forbidden' );
	header( 'Connection: Close'      );
		exit;
}

if ( ! function_exists( 'add_action' ) ) {
	header( 'HTTP/0.9 403 Forbidden' );
	header( 'HTTP/1.0 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	header( 'HTTP/2.0 403 Forbidden' );
	header( 'Status:  403 Forbidden' );
	header( 'Connection: Close'      );
		exit;
}

/**
 * Configuration of make sure that run under WP 4.9-beta3 or greater.
 *
 * @author  Luciano Croce <luciano.croce@gmail.com>
 * @version 1.0.1 (Build 2017-11-05)
 * @since   1.0.0 (Build 2017-10-30)
 */
global $wp_version;
include( ABSPATH . WPINC . '/version.php' );
$version = str_replace( '-src', '', $wp_version );

/**
 * Clean conflicting and obsolete options.
 *
 * @author  Luciano Croce <luciano.croce@gmail.com>
 * @version 1.0.3 (Build 2017-08-02)
 * @since   1.0.0 (Build 2017-10-30)
 */
delete_option( "hide_try_gutenberg_callout" );
if ( version_compare( $version, '3.0', '>=' ) ) {
	if ( is_multisite() ) {
//		delete_blog_option( "hide_try_gutenberg_callout" );
		delete_site_option( "hide_try_gutenberg_callout" );
	}
}

/**
 * Plugin Self Deactivated when PHP or WP version not meet minimum requirements requested.
 *
 * @author  Luciano Croce <luciano.croce@gmail.com>
 * @version 1.0.1 (Build 2017-11-05)
 * @since   1.0.0 (Build 2017-10-30)
 */
function ddwtgn_psd_php_wp_version_init() {
	deactivate_plugins( plugin_basename( __FILE__ ) );
}

/**
 * Make sure that run under PHP 5.2.4 or greater.
 *
 * @author  Luciano Croce <luciano.croce@gmail.com>
 * @version 1.0.1 (Build 2017-11-05)
 * @since   1.0.0 (Build 2017-10-30)
 */
if ( version_compare( PHP_VERSION, '5.2.4', '<' ) ) {

	if ( version_compare( $version, '2.0', '>=' ) ) {
		add_action( 'admin_notices', 'ddwtgn_ant_php_version_init' );
	}

	if ( version_compare( $version, '3.1', '>=' ) ) {
		add_action( 'network_admin_notices', 'ddwtgn_ant_php_version_init' );
	}

	/**
	 * Show Admin Notice when PHP version not meet minimum requirements requested.
	 *
	 * @author  Luciano Croce <luciano.croce@gmail.com>
	 * @version 1.0.2 (Build 2017-03-22)
	 * @since   1.0.0 (Build 2017-10-30)
	 */
	function ddwtgn_ant_php_version_init() {
		?>
		<div class="notice notice-error is-dismissible error">
		<p>
		<?php 
		_e( 'This plugin requires PHP 5.2.4 or greater: a good choice is PHP 5.6+ ~ 7.1+ (previous stable branch) or PHP 7.2+ (current stable branch).', 'dismiss-gutenberg-nag' )
		?>
		</p>
		</div>
		<div class="notice notice-warning is-dismissible updated">
		<p>
		<?php 
		global $wp_version;
		include( ABSPATH . WPINC . '/version.php' );
		$version = str_replace( '-src', '', $wp_version );
		if ( version_compare( $version, '2.5', '>=' ) ) {
		_e( 'Plugin "Dismiss Gutenberg Nag" <strong>deactivated</strong>.', 'dismiss-gutenberg-nag' ); }
		?>
		<?php 
		global $wp_version;
		include( ABSPATH . WPINC . '/version.php' );
		$version = str_replace( '-src', '', $wp_version );
		if ( version_compare( $version, '2.0', '>=' ) ) {
		if ( version_compare( $version, '2.5', '<' ) ) {
		_e( 'Plugin "Dismiss Gutenberg Nag" <strong>can not be deactivate automatically</strong>. It is not compatible with this installation. Deactivate it manually!', 'dismiss-gutenberg-nag' ); }
		?> <!-- Thanks to Garrett Hyder (garrett-eclipse) for this text suggestion. -->
		<?php 
		}
		?>
		<script>window.jQuery && jQuery( function( $ ) { $( 'div#message.updated' ).remove(); } );</script> <!-- This script remove update message when plugin is auto deactivated. -->
		</p>
		</div>
		<?php 
	}

	if ( version_compare( $version, '2.5', '>=' ) ) {
		add_action( 'admin_init', 'ddwtgn_psd_php_wp_version_init', 0 );
	}
}

/**
 * Make sure that run under WP 4.9-beta3 or greater.
 *
 * @author  Luciano Croce <luciano.croce@gmail.com>
 * @version 1.0.1 (Build 2017-11-05)
 * @since   1.0.0 (Build 2017-10-30)
 */
if ( version_compare( $version, '4.9-beta3', '<' ) ) {

	if ( version_compare( $version, '2.0', '>=' ) ) {
		add_action( 'admin_notices', 'ddwtgn_ant_wp_version_init' );
	}

	if ( version_compare( $version, '3.1', '>=' ) ) {
		add_action( 'network_admin_notices', 'ddwtgn_ant_wp_version_init' );
	}

	/**
	 * Show Admin Notice when WP version not meet minimum requirements requested.
	 *
	 * @author  Luciano Croce <luciano.croce@gmail.com>
	 * @version 1.0.2 (Build 2017-03-22)
	 * @since   1.0.0 (Build 2017-10-30)
	 */
	function ddwtgn_ant_wp_version_init() {
		?>
		<div class="notice notice-error is-dismissible error">
		<p>
		<?php 
		_e( 'This plugin requires WordPress 4.9-beta3 or greater: "try Gutenberg" Dashboard Widget Nag, was introduced since WordPress 4.9-beta3.', 'dismiss-gutenberg-nag' )
		?>
		</p>
		</div>
		<div class="notice notice-warning is-dismissible updated">
		<p>
		<?php 
		global $wp_version;
		include( ABSPATH . WPINC . '/version.php' );
		$version = str_replace( '-src', '', $wp_version );
		if ( version_compare( $version, '2.5', '>=' ) ) {
		_e( 'Plugin "Dismiss Gutenberg Nag" <strong>deactivated</strong>.', 'dismiss-gutenberg-nag' ); }
		?>
		<?php 
		global $wp_version;
		include( ABSPATH . WPINC . '/version.php' );
		$version = str_replace( '-src', '', $wp_version );
		if ( version_compare( $version, '2.0', '>=' ) ) {
		if ( version_compare( $version, '2.5', '<' ) ) {
		_e( 'Plugin "Dismiss Gutenberg Nag" <strong>can not be deactivate automatically</strong>. It is not compatible with this installation. Deactivate it manually!', 'dismiss-gutenberg-nag' ); }
		?> <!-- Thanks to Garrett Hyder (garrett-eclipse) for this text suggestion. -->
		<?php 
		}
		?>
		<script>window.jQuery && jQuery( function( $ ) { $( 'div#message.updated' ).remove(); } );</script> <!-- This script remove update message when plugin is auto deactivated. -->
		</p>
		</div>
		<?php 
	}

	if ( version_compare( $version, '2.5', '>=' ) ) {
		add_action( 'admin_init', 'ddwtgn_psd_php_wp_version_init', 0 );
	}
}

else {

	/**
	 * Define requested variables to meet "Detailed Plugins Guidelines".
	 *
	 * @author  Luciano Croce <luciano.croce@gmail.com>
	 * @version 1.0.3 (Build 2017-08-02)
	 * @since   1.0.0 (Build 2017-10-30)
	 */
	if ( ! defined( 'PLUGIN_DISMISS_GUTENBERG_NAG_VERSION' ) ) define( 'PLUGIN_DISMISS_GUTENBERG_NAG_VERSION', '1.0.5' );
	if ( ! defined( 'PLUGIN_DISMISS_GUTENBERG_NAG_RELEASE' ) ) define( 'PLUGIN_DISMISS_GUTENBERG_NAG_RELEASE', '2018-11-23' );

	if ( version_compare( $version, '2.7', '>=' ) ) {
		register_uninstall_hook( __FILE__, 'dismiss_gutenberg_nag_uninstall', 0 );                                              # Remove options only when plugin was deleted and not when it is deactivate to preserve configutation.
	}

	add_filter( 'plugins_loaded', 'ddwtgn_load_plugin_textdomain' );

	if ( version_compare( $version, '3.0', '>=' ) ) {
		add_filter( 'plugins_loaded', 'ddwtgn_load_muplugin_textdomain' );
	}

	add_filter( 'plugin_row_meta', 'ddwtgn_adds_row_meta_build', 10, 4 );                                                       # Comment or uncomment to enable or disable this customization.

	if ( version_compare( $version, '4.0', '>=' ) ) {
		add_filter( 'plugin_row_meta', 'ddwtgn_adds_row_meta_links', 10, 2 );                                                   # Comment or uncomment to enable or disable this customization.
	}

	if ( version_compare( $version, '3.0', '>=' ) ) {
		add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'ddwtgn_adds_action_links', 10, 4 );                  # Comment or uncomment to enable or disable this customization.
	}

	if ( version_compare( $version, '3.0', '>=' ) ) {
		add_filter( 'network_admin_plugin_action_links_' . plugin_basename( __FILE__ ), 'ddwtgn_adds_action_links', 10, 4 );    # Comment or uncomment to enable or disable this customization.
	}

//	add_filter( 'admin_init', 'dismiss_dashboard_widget_try_gutenberg_nag' );                                                   # Old method to remove callout for all capability type of users.

//	add_filter( 'admin_init', 'dismiss_gutenberg_editor' );                                                                     # Old method to disable Block Editor (a.k.a. Gutenberg) for all capability type of users.

	add_filter( 'admin_menu', 'dismiss_gutenberg_demo_menu', 999 );

	add_filter( 'admin_menu', 'dismiss_gutenberg_redirect_demo', 999 );

	/**
	 * Load Plugin Textdomain.
	 *
	 * @author  Luciano Croce <luciano.croce@gmail.com>
	 * @version 1.0.1 (Build 2017-11-05)
	 * @since   1.0.0 (Build 2017-10-30)
	 */
	function ddwtgn_load_plugin_textdomain() {
		load_plugin_textdomain( 'dismiss-gutenberg-nag', false, basename( dirname( __FILE__ ) ) . '/languages' );
	}

	/**
	 * Load MU-Plugin (dir) Textdomain.
	 *
	 * @author  Luciano Croce <luciano.croce@gmail.com>
	 * @version 1.0.1 (Build 2017-11-05)
	 * @since   1.0.0 (Build 2017-10-30)
	 */
	function ddwtgn_load_muplugin_textdomain() {
		load_muplugin_textdomain( 'dismiss-gutenberg-nag', basename( dirname( __FILE__ ) ) . '/languages' );
	}

	/**
	 * Adds Plugin Row Meta Build.
	 *
	 * @author  Luciano Croce <luciano.croce@gmail.com>
	 * @version 1.0.3 (Build 2018-08-02)
	 * @since   1.0.0 (Build 2017-10-30)
	 */
	function ddwtgn_adds_row_meta_build( $plugin_meta, $plugin_file ) {
		if ( $plugin_file == plugin_basename( __FILE__ ) )
			{
				$plugin_meta[ 0 ] .= ' | ' . __( 'Release',  'dismiss-gutenberg-nag' ) . ' ' . date_i18n( get_option( 'date_format' ), strtotime( PLUGIN_DISMISS_GUTENBERG_NAG_RELEASE ) );    # New implementation that use defined default variable.
//				$plugin_meta[ 0 ] .= ' | ' . __( 'Release',  'dismiss-gutenberg-nag' ) . ' ' . date_i18n( get_option( 'date_format' ), strtotime( '2018-08-06' ) );                            # Thanks to Garrett Hyder (garrett-eclipse) for this contribute.
//				$plugin_meta[ 0 ] .= ' | ' . __( 'Release',  'dismiss-gutenberg-nag' ) . ' ' . __( '2018-08-06', 'dismiss-gutenberg-nag' );                                                    # Uncomment it on incompatibility case but is not localised.
				$plugin_meta[ 0 ] .= ' | ' . __( 'Language', 'dismiss-gutenberg-nag' ) . ' ' . get_locale();											                                       # Thanks to Pascal Birchler (swissspidy) for this contribute.
			}
		return $plugin_meta;
	}

	/**
	 * Adds Plugin Row Meta Links.
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

	/**
	 * Adds Plugin Action Links.
	 *
	 * @author  Luciano Croce <luciano.croce@gmail.com>
	 * @version 1.0.3 (Build 2017-08-02)
	 * @since   1.0.0 (Build 2017-10-30)
	 */
	function ddwtgn_adds_action_links( $plugin_meta, $plugin_file ) {
		if ( ! current_user_can( 'update_core' ) ) {
			$plugin_meta[] .= '<a href="index.php" style="color:#3db634">' . __( 'Dashboard', 'dismiss-gutenberg-nag' ) . '</a>';
		}
		else {
			if ( current_user_can( 'update_core' ) ) {
				$plugin_meta[] .= '<a href="/wp-admin/options-writing.php#dismiss-gutenberg-nag_options" style="color:#ffa500">' . __( 'Settings', 'dismiss-gutenberg-nag' ) . '</a>';
			}
		}
			return $plugin_meta;
	}

	/**
	 * Dismiss Dashboard Widget "try Gutenberg" Nag (old method obsolete). ddwtgn
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

	/*
	 * Dismiss Gutenberg Demo Menu.
	 *
	 * @author  Luciano Croce <luciano.croce@gmail.com>
	 * @version 1.0.4 (Build 2018-09-12)
	 * @since   1.0.0 (Build 2017-10-30)
	 */
	function dismiss_gutenberg_demo_menu() {
//		remove_menu_page( 'gutenberg' );
		remove_action( 'admin_menu', 'gutenberg_menu' );
	}

	/*
	 * Dismiss Gutenberg Redirect Demo.
	 *
	 * @author  Luciano Croce <luciano.croce@gmail.com>
	 * @version 1.0.5 (Build 2018-11-20)
	 * @since   1.0.0 (Build 2017-10-30)
	 */
	function dismiss_gutenberg_redirect_demo() {
		remove_action( 'admin_init', 'gutenberg_redirect_demo' );
	}

	/*
	 * Dismiss Gutenberg Editor.
	 *
	 * @author  Luciano Croce <luciano.croce@gmail.com>
	 * @version 1.0.4 (Build 2018-09-12)
	 * @since   1.0.0 (Build 2017-10-30)
	 */
	function dismiss_gutenberg_editor() {
		add_filter( 'gutenberg_can_edit_post_type', '__return_false' );
	}

	/**
	 * Add uninstall routine (only for standalone activation).
	 *
	 * @author  Luciano Croce <luciano.croce@gmail.com>
	 * @version 1.0.4 (Build 2017-08-06)
	 * @since   1.0.0 (Build 2017-10-30)
	 */
	function dismiss_gutenberg_nag_uninstall() {
		if ( ! current_user_can( 'activate_plugins' ) )
			return;

		delete_option( 'dismiss_gutenberg_nag_options' );

		if ( version_compare( $version, '2.8', '>=' ) ) {
			delete_transient( 'dismiss_gutenberg_nag_transients' );
		}

		if ( version_compare( $version, '3.0', '>=' ) ) {
			flush_rewrite_rules();
		}

		if ( version_compare( $version, '3.0', '>=' ) ) {
			if ( is_multisite() ) {
				delete_blog_option( 'dismiss_gutenberg_nag_options' );
				delete_site_option( 'dismiss_gutenberg_nag_options' );
				delete_site_transient( 'dismiss_gutenberg_nag_transients' );

				global $wpdb;
				$blog_ids = $wpdb->get_col( "SELECT blog_id FROM $wpdb->blogs" );
				$original_blog_id = get_current_blog_id();
				foreach ( $blog_ids as $blog_id ) {
					switch_to_blog( $blog_id );
					delete_site_option( 'dismiss_gutenberg_nag_options' );
					delete_site_transient( 'dismiss_gutenberg_nag_transients' );
					flush_rewrite_rules();
				}
				switch_to_blog( $original_blog_id );
			}
		}
	}

	/**
	 * Callout Configuration Option Settings Control Panel.
	 *
	 * Part of above code (not all) is ported and forked from "Hide Try Gutenberg Callout" of Paul V. Biron.
	 *
	 * This notation is given to respect the work of original author by recognizing his rights, and for transparency,
	 * even if this code has been modified, as the freedoms of GPLv2 and the Bill of Rights of WordPress allow.
	 *
	 * @author  Luciano Croce <luciano.croce@gmail.com>
	 * @version 1.0.3 (Build 2018-08-02)
	 * @since   1.0.0 (Build 2017-10-30)
	 */
	new Dismiss_Gutenberg_Nag_Option_Settings();
}

/**
 * Conditionally dismiss the "try Gutenberg" callout.
 */
class Dismiss_Gutenberg_Nag_Option_Settings{

	/**
	 * Constructor (new method compatible with PHP 5.2.4+ to 7.2+ ~ 7.3+ or greater).
	 *
	 * Add necessary hooks.
	 */
	function __construct() {
		if ( is_admin() ) {
//			add_action( 'plugins_loaded', array( $this, 'maybe_disable_for_all_users' ) );      # New method to disable Block Editor (a.k.a. Gutenberg) for all capability type of users.
//			add_action( 'muplugins_loaded', array( $this, 'maybe_disable_for_all_users' ) );    # New method to disable Block Editor (a.k.a. Gutenberg) for all capability type of users.
			add_action( 'plugins_loaded', array( $this, 'maybe_hide_for_all_users' ) );
			add_action( 'muplugins_loaded', array( $this, 'maybe_hide_for_all_users' ) );
			add_filter( 'get_user_metadata', array( $this, 'maybe_hide_for_user' ), 10, 3 );
			add_action( 'admin_init', array( $this, 'init_option' ) );
			add_action( 'admin_init', array( $this, 'add_settings' ) );
		}
	}

	/**
	 * Conditionally dismiss the "try Gutenberg" callout for a given user.
	 *
	 * @param string $default
	 * @param int $user_id The user to maybe dismiss the callout for.
	 * @param string $meta_key The user meta key.
	 * @return string '0' if the callout should be hidden, `$default` otherwise.
	 */
	function maybe_hide_for_user( $default, $user_id, $meta_key ) {
		if ( 'show_try_gutenberg_panel' !== $meta_key ) {
			return $default;
		}

		$option = get_option( 'dismiss_gutenberg_nag_options' );

		if ( 'yes' === $option['non_edit_posts'] && ! user_can( $user_id, 'edit_posts' ) ) {    # Dismiss the callout for all users who can't edit posts.
			return '0';
	 	}

	 	if ( in_array( $user_id, $option['specific_users'] ) ) {                                # Dismiss the callout for specific users.
	 		return '0';
	 	}

	 	return $default;

	}

	/**
	 * Maybe dismiss the "Gutenberg Editor" for all users.
	 *
	 * @return void
	 */
	function maybe_disable_for_all_users() {
		$option = get_option( 'dismiss_gutenberg_nag_options' );
		if ( 'yes' === $option['all_users'] ) {
			add_filter( 'gutenberg_can_edit_post_type', '__return_false' );
		}

		return;

	}

	/**
	 * Maybe dismiss the callout "try Gutenberg" for all users.
	 *
	 * @return void
	 */
	function maybe_hide_for_all_users() {
		$option = get_option( 'dismiss_gutenberg_nag_options' );
		if ( 'yes' === $option['all_users'] ) {
			remove_filter( 'try_gutenberg_panel', 'wp_try_gutenberg_panel' );
		}

		return;

	}

	/**
	 * Can a user use "try Gutenberg" callout?
	 *
	 * If the callout is dismissed for a user by our settings then that user will not be allowed to use Gutenberg.
	 *
	 * @return bool
	 */
	function can_use_gutenberg( $default ) {
		$option = get_option( 'dismiss_gutenberg_nag_options' );
		if ( 'no' === $option['disable_gutenberg'] ) {
			return $default;
		}

		if ( 'yes' === $option['all_users'] ) {
			return false;
		}

		if ( null === $this->maybe_hide_for_user( null, get_current_user_id(), 'show_try_gutenberg_panel' ) ) {
			return true;
		}

		return false;

	}

	/**
	 * Add our settings.
	 *
	 * @return void
	 */
	function add_settings() {
		global $wp_version;
		include( ABSPATH . WPINC . '/version.php' );
		$version = str_replace( '-src', '', $wp_version );

		if ( version_compare( $version, '2.7', '>=' ) ) {
			register_setting(
				'writing',
				'dismiss_gutenberg_nag_options',
				array(
					'sanitize_callback' => array( $this, 'sanitize_option_settings' ),
				)
			);

			add_option_whitelist( array(
				'writing' => array( 'dismiss_gutenberg_nag_options' ),
			) );

			add_settings_section(
				'dismiss_gutenberg_nag_options',
				__( 'Dismiss "<strong>try Gutenberg</strong>" Nag', 'dismiss-gutenberg-nag' ) . ' -- ' . __( 'Callout Configuration Option Settings', 'dismiss-gutenberg-nag' ),
				array( $this, 'settings_section' ),
				'writing'
			);

			add_settings_field(
				'disable_gutenberg',
				__( 'Disable option settings:', 'dismiss-gutenberg-nag' ),
				array( $this, 'disable_gutenberg_setting' ),
				'writing',
				'dismiss_gutenberg_nag_options'
			);

			add_settings_field(
				'all_users',
				__( 'For all users:', 'dismiss-gutenberg-nag' ),
				array( $this, 'all_users_setting' ),
				'writing',
				'dismiss_gutenberg_nag_options'
			);

			add_settings_field(
				'non_edit_posts',
				__( 'For all users that not edit posts:', 'dismiss-gutenberg-nag' ),
				array( $this, 'non_edit_posts_setting' ),
				'writing',
				'dismiss_gutenberg_nag_options'
			);

			add_settings_field(
				'specific_users',
				__( 'For all users that edit posts:', 'dismiss-gutenberg-nag' ),
				array( $this, 'specific_users_setting' ),
				'writing',
				'dismiss_gutenberg_nag_options'
			);

			return;

		}
	}

	/**
	 * Output our settings seciton (include JavaScript).
	 *
	 * @return void
	 */
	function settings_section() {
		?>
		<a name='dismiss-gutenberg-nag_options'></a>
		<p>
		<?php 
		_e( 'These options allow to control and configure when the "<strong>try Gutenberg</strong>" is dismissed, or showed, based on capability type.', 'dismiss-gutenberg-nag' )
		?>
		</p>
		<p>
		<?php _e( 'By <u>default</u> is <u>totally dismissed</u> for all users.', 'dismiss-gutenberg-nag' )
		?>
		<?php _e( 'The options to disable Gutenberg Editor will be added in future releases.', 'dismiss-gutenberg-nag' )
		?>
		</p>
		<script>
			// Control whether the other settings are disabled depending on whether "Dismiss Always" is "Yes" a/o "No"
			jQuery( 'document' ).ready( function( $ ) {
				var yes_always = $( '#dismiss_gutenberg_nag_options_always_yes' );
//				var rows = yes_always.parents( 'table' ).find( 'tr' ).not( ':first' ).not( ':last' );
				var rows = yes_always.parents( 'table' ).find( 'tr:gt( 1 )' );

				if ( yes_always.is( ':checked' ) ) {
					rows.find( 'input' ).attr( 'disabled', 'disabled' );
				}
				else {
					rows.find( 'input' ).removeAttr( 'disabled' );
				}

				$( 'input[name="dismiss_gutenberg_nag_options[all_users]"]' ).on( 'change', function() {
					if ( 'yes' === $( this ).val() ) {
						rows.find( 'input' ).attr( 'disabled', 'disabled' );
					}
					else {
						rows.find( 'input' ).removeAttr( 'disabled' );
					}
				} );
			} );
		</script>
		<?php return;
	}

	/**
	 * Render our "For all Users" (with or without edit_posts capability) settings.
	 *
	 * Outputs "Yes" a/o "No" radio buttons.
	 *
	 * @return void
	 */
	function all_users_setting() {
		$option = get_option( 'dismiss_gutenberg_nag_options' );
		?>
		<p id="dismiss_gutenberg_nag_options_always_options" style="margin:0">
		<input type="radio" name="dismiss_gutenberg_nag_options[all_users]" id="dismiss_gutenberg_nag_options_always_yes" value="yes"<?php checked( $option['all_users'], 'yes', true )?> />
		<label for="dismiss_gutenberg_nag_options_all_users_yes">
		<?php 
		_e( 'Yes', 'dismiss-gutenberg-nag' )
		?>
		<span class='description'>
		<?php 
			echo str_repeat( '&nbsp;', 5 );
			_e( '"try Gutenberg" callout is dismissed for all user capability type. (<strong>default</strong>)', 'dismiss-gutenberg-nag' );
		?>
		</span>
		</label>
		<br />
		<input type="radio" name="dismiss_gutenberg_nag_options[all_users]" id="dismiss_gutenberg_nag_options_always_no" value="no"<?php checked( $option['all_users'], 'no', true )?> />
		<label for="dismiss_gutenberg_nag_options_all_users_yes">
		<?php 
		_e( 'No', 'dismiss-gutenberg-nag' )
		?>
		<span class='description'>
		<?php 
			echo str_repeat( '&nbsp;', 5 );
			_e( '"try Gutenberg" callout is not dismissed when the other options in this section allow it to be controlled.', 'dismiss-gutenberg-nag' );
		?>
		</span>
		</label><br />
		<br />
		<span class='description'>
		<?php 
		_e( 'When the other options in this section not allow "try Gutenberg" to be shown, this impostations not have effect, and callout is dismissed.', 'dismiss-gutenberg-nag' )
		?>
		</span>
		</p>
		<?php return;
	}

	/**
	 * Render our "For all Users Specified" (with edit_posts capability) settings.
	 *
	 * Outputs a checkbox for each user with `edit_posts` capability.
	 *
	 * @return void
	 */
	function specific_users_setting() {
		$option = get_option( 'dismiss_gutenberg_nag_options' );
		?>
		<p id="dismiss_gutenberg_nag_options_specific_users_options" style="margin:0">
		<?php 
		foreach ( get_users() as $user ) {
			if ( ! user_can( $user->ID, 'edit_posts' ) ) {
				# Insert additional or custom code here for users that not have edit_posts capability.
				continue;
			}
		?>
		<input type="checkbox" name="dismiss_gutenberg_nag_options[specific_users][]" id="dismiss_gutenberg_nag_options[specific_users][<?php echo $user->ID ?>]" value="<?php echo $user->ID ?>"<?php checked( in_array( $user->ID, $option['specific_users'] ), true )?> />
		<label for="dismiss_gutenberg_nag_options[specific_users][<?php echo $user->ID ?>]">
		<?php echo $user->display_name ?>
		</label><br />
		<?php }?>
		<br />
		<span class='description'>
		<?php 
		_e( 'When this option is enabled "try Gutenberg" callout is dismissed for selected users that have edit post (edit_post) capability.', 'dismiss-gutenberg-nag' )
		?>
		</span><br />
		<br />
		<span class='description'>
		<?php 
		_e( 'The callout can be configured simultaneously, and separately, for any user capacity types, with or without edit post (edit_post) capability. ', 'dismiss-gutenberg-nag' )
		?>
		</span>
		</p>
		<?php return;
	}

	/**
	 * Render our "For all Users that Not Edit Posts" without edit_posts capability settings.
	 *
	 * Outputs "Yes" a/o "No" radio buttons.
	 *
	 * @return void
	 */
	function non_edit_posts_setting() {
		$option = get_option( 'dismiss_gutenberg_nag_options' );
		?>
		<p id="dismiss_gutenberg_nag_options_for_non_edit_posts_options" style="margin:0">
		<input type="radio" name="dismiss_gutenberg_nag_options[non_edit_posts]" id="dismiss_gutenberg_nag_options_non_edit_posts_yes" value="yes"<?php checked( $option['non_edit_posts'], 'yes', true )?> />
		<label for="dismiss_gutenberg_nag_options_non_edit_posts_yes">
		<?php 
		_e( 'Yes', 'dismiss-gutenberg-nag' )
		?>
		<span class='description'>
		<?php 
			echo str_repeat( '&nbsp;', 5 );
			_e( '"try Gutenberg" callout is dismissed for all users who do not have edit posts (edit_post) capability.', 'dismiss-gutenberg-nag' );
		?>
		</span>
		</label><br />
		<input type="radio" name="dismiss_gutenberg_nag_options[non_edit_posts]" id="dismiss_gutenberg_nag_options_non_edit_posts_no" value="no"<?php checked( $option['non_edit_posts'], 'no', true )?> />
		<label for="dismiss_gutenberg_nag_options_non_edit_posts_yes">
		<?php 
		_e( 'No', 'dismiss-gutenberg-nag' )
		?>
		<span class='description'>
		<?php 
			echo str_repeat( '&nbsp;', 5 );
			_e( '"try Gutenberg" callout is dismissed for all user capability type. (<strong>default</strong>)', 'dismiss-gutenberg-nag' );
		?>
		</span>
		</label><br />
		<br />
		<span class='description'>
		<?php 
		_e( 'When this option is enabled "try Gutenberg" callout is dismissed for users that not have edit post (edit_post) capability.', 'dismiss-gutenberg-nag' )
		?>
		</span>
		</p>
		<?php return;
	}

	/**
	 * Render our Dismiss "try Gutenberg" Nag settings.
	 *
	 * Outputs Yes a/o No radio buttons.
	 *
	 * @return void
	 */
	function disable_gutenberg_setting() {
		$option = get_option( 'dismiss_gutenberg_nag_options' );
		?>
		<p id="dismiss_gutenberg_nag_options_disable_gutenberg_options" style="margin:0">
		<input type="radio" name="dismiss_gutenberg_nag_options[disable_gutenberg]" id="dismiss_gutenberg_nag_options_disable_gutenberg_yes" value="yes"<?php checked( $option['disable_gutenberg'], 'yes', true )?> />
		<label for="dismiss_gutenberg_nag_options_disable_gutenberg_yes">
		<?php 
		_e( 'Yes', 'dismiss-gutenberg-nag' )
		?>
		<span class='description'>
		<?php 
			echo str_repeat( '&nbsp;', 5 );
			_e( '"try Gutenberg" is dismissed if the callout is not shown by the other options in this section. (<strong>default</strong>)', 'dismiss-gutenberg-nag' );
		?>
		</span>
		</label>
		<br />
		<input type="radio" name="dismiss_gutenberg_nag_options[disable_gutenberg]" id="dismiss_gutenberg_nag_options_disable_gutenberg_no" value="no"<?php checked( $option['disable_gutenberg'], 'no', true )?> />
		<label for="dismiss_gutenberg_nag_options_disable_gutenberg_no">
		<?php 
		_e( 'No', 'dismiss-gutenberg-nag' )
		?>
		<span class='description'>
		<?php 
			echo str_repeat( '&nbsp;', 5 );
			_e( '"try Gutenberg" is not dismissed if the callout will be available by the other options in this section.', 'dismiss-gutenberg-nag' );
		?>
		</span>
		</label><br />
		<br />
		<span class='description'>
		<?php 
		_e( 'When the other options in this section allow "try Gutenberg" but the user has manually dismissed it, this impostations not have effect.', 'dismiss-gutenberg-nag' )
		?>
		</span>
		</p>
		<?php return;
	}

	/**
	 * Sanitize our options.
	 *
	 * @param array $value Our option value.
	 * @return array Sanitised option value.
	 */
	function sanitize_option_settings( $value ) {
		if ( ! is_array( $value ) ) {
			$value = array();
		}

		if ( ! in_array( $value['all_users'], array( 'yes', 'no' ) ) ) {
			$value['non_edit_posts'] = 'yes';
		}

		if ( ! in_array( $value['non_edit_posts'], array( 'yes', 'no' ) ) ) {
			$value['non_edit_posts'] = 'yes';
		}

		$value['specific_users'] = array_filter( array_map( 'intval', (array) $value['specific_users'] ) );

		return $value;

	}

	/**
	 * Initialize our options without use of register_activation_hook for mu-plugins compatibility.
	 *
	 * @return void
	 *
	 * @author  Luciano Croce <luciano.croce@gmail.com>
	 * @version 1.0.3 (Build 2017-08-02)
	 * @since   1.0.0 (Build 2017-10-30)
	 */
	function init_option() {
		if ( get_option( 'dismiss_gutenberg_nag_options' ) ) {
			return;
		}

		add_option( 'dismiss_gutenberg_nag_options', array(
			'all_users' => 'yes',
			'non_edit_posts' => 'yes', # no
			'specific_users' => array(),
			'disable_gutenberg' => 'yes'
		) );

		return;

	}
}
