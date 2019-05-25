<?php

require_once geeksEvent_plugin_path . 'pages/admin.php';
require_once geeksEvent_plugin_path . 'pages/form.php';
require_once geeksEvent_plugin_path . 'pages/dashboard.php';

/** Fix WP_Redirection */
add_action('init', function () {
    ob_start();
});

/** Include Assets */
add_action('wp_enqueue_scripts', function () {
    /** BootStrap CSS */
    wp_enqueue_style('Bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css', '', '4.3.1', 'all');

    /** Jquery */
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    /** BootStrap JS */
    wp_enqueue_script('Bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js', '', '4.3.1', true);
    wp_enqueue_style('Jquery Datatable', 'https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/css/dataTables.bootstrap4.min.css',);
    wp_enqueue_script('Jquery Datatables', 'https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js', '', '', true);
    wp_enqueue_script('Bootstrap Datatables', 'https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/dataTables.bootstrap4.min.js', '', '', true);
    wp_enqueue_style('Geeks EventStyle', geeksEvent_Plugin_Style . 'main.min.css');
    wp_enqueue_script('Geeks EventScript', geeksEvent_Plugin_script . 'main.js');
});
