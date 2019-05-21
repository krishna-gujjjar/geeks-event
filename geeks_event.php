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

/** Include Assets */
if (!function_exists('geeksEvent_Plugin_Assets')) {
    /** Include Plugin's Assets */
    function geeksEvent_Plugin_Assets()
    {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', [], null, false);
        wp_enqueue_style('Geeks EventStyle', geeksEvent_Plugin_Style . 'main.css');
        wp_enqueue_script('Geeks EventScript', geeksEvent_Plugin_script . 'main.min.js', ['jquery'], null, true);
    }
    add_action('wp_enqueue_scripts', 'geeksEvent_Plugin_Assets');
}

function geeksEvent_Page_Main()
{
    if (!current_user_can('manage_options')) {
        return;
    }
    ?>
    <div class="wrap">
        <h1> Geeks Event Activeted. </h1>
    </div>
<?php

}

function geeksEvent_Page_Suppliers()
{ }

function geeksEvent_Page_Users()
{ }

/** Add Menu */
if (!function_exists('geeksEvent_Plugin_Menu')) {
    /** Add Top Level Menu on Dashboard's SideBar */
    function geeksEvent_Plugin_Menu()
    {
        /** Add TopMenu For Events */
        add_menu_page(
            "Geek's Events",
            "Geek's Events",
            'manage_options',
            'geeksEvent',
            'geeksEvent_Page_Main',
            // 'dashicons-buddicons-forums',
            geeksEvent_plugin_url . 'assets/img/beautiful_flower.svg',
            2
        );
        /** Add SubMenu For Suppliers */
        add_submenu_page(
            'geeksEvent',
            "Geek's Suppliers",
            "Geek's Suppliers",
            'manage_options',
            'geeksEvent_suppliers',
            'geeksEvent_Page_Suppliers'
        );
        /** Add SubMenu For Events */
        add_submenu_page(
            'geeksEvent',
            "Geek's Users",
            "Geek's Users",
            'manage_options',
            'geeksEvent_Users',
            'geeksEvent_Page_Users'
        );
    }
    add_action('admin_menu', 'geeksEvent_Plugin_Menu');
}
