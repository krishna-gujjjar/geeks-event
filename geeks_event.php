<?php
/** Plugin Name: Geek's Event
 * Plugin URI:  https://geekostudio.com
 * Description: Geek's Event Plugin Create & Manage Event Related task.
 * Version:     1.0.0
 * Author:      Geek'O Studio
 * Author URI:  https://geekostudio.com
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: geeks_event
 * Domain Path: /language */

defined('WPINC') or die("Wordpress Not Installed.");

/** Plugin Path */
defined('geeksEvent_plugin_path') or define('geeksEvent_plugin_path', plugin_dir_path(__FILE__));

/** Plugin URL Path */
defined('geeksEvent_plugin_url') or define('geeksEvent_plugin_url', plugin_dir_url(__FILE__));

/** Plugin's Styles URL Path */
defined('geeksEvent_plugin_style') or define('geeksEvent_Plugin_Style', geeksEvent_plugin_url . 'assets/css/');

/** Plugin's Scripts URL Path */
defined('geeksEvent_plugin_script') or define('geeksEvent_Plugin_script', geeksEvent_plugin_url . 'assets/js/');

/** Plugin's Image URL Path */
defined('geeksEvent_plugin_img') or define('geeksEvent_Plugin_img', geeksEvent_plugin_url . 'assets/img/');

require_once geeksEvent_plugin_path . 'inc/config.php';
