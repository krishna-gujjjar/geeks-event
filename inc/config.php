<?php

function geeksEvent_Page_Main()
{
    if (!current_user_can('manage_options')) return;
    if (!is_admin()) return; ?>
    <div class="wrap">
        <h1> Geeks Event Activted. </h1>
        <h1><?php echo esc_html(get_admin_page_title()) ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields('geeksEvent');
            do_settings_sections('geeksEvent');
            submit_button('Create User');
            ?>
        </form>
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

function geeksEvent_Plugin_Settings()
{
    register_setting('geeksEvent', 'createUserName');
    add_settings_section('geeksEvent_CreateUser_Section', "Geek's Event  Create User Section", 'geeksEvent_Section_CreateUser_Show', 'geeksEvent');
    add_settings_field('geeksEvent_CreateUser_field', "Geek's Event Create User Field", 'geeksEvent_Field_CreateUser_Show', 'geeksEvent', 'geeksEvent_CreateUser_Section');
}
add_action('admin_init', 'geeksEvent_Plugin_Settings');

function geeksEvent_Section_CreateUser_Show()
{
    print('<h4>Description of Action Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum reiciendis dolor voluptas incidunt nulla reprehenderit similique odio. Nisi recusandae sunt repellat similique autem voluptatum sequi cupiditate, beatae ducimus, amet labore?</h4>');
}

function geeksEvent_Field_CreateUser_Show()
{
    $setting = get_settings('createUserName'); ?>
    <input type="text" name="createUserName" value="<?php echo isset($setting) ? esc_attr($setting) : ''; ?>">
<?php }
