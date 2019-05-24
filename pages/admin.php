<?php


function geeksEvent_Page_Main()
{
    if (!current_user_can('manage_options')) return; ?>
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
            geeksEvent_Plugin_img . 'beautiful_flower.svg',
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
