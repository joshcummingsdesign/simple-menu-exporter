<?php

/*****************************************
* Add admin menu
/****************************************/

function smux_add_admin_menu()
{
    $options = get_option('smux_options');

    add_menu_page(
    'Simple Menu Exporter',
    'Simple Menu Exporter',
    'manage_options',
    'simple-menu-exporter',
    'smux_display_admin_content'
  );
}
add_action('admin_menu', 'smux_add_admin_menu');

/*****************************************
* Register scripts and styles
/****************************************/

function smux_admin_scripts()
{
    wp_register_style('smux_admin_styles', plugins_url('css/smux-admin.css', __FILE__));

    wp_register_script('smux_admin_script', plugins_url('js/smux-admin-script.js', __FILE__), ['jquery']);

    wp_localize_script('smux_admin_script', 'smux_obj', ['nonce' =>  wp_create_nonce('smux-nonce')]);
}
add_action('admin_enqueue_scripts', 'smux_admin_scripts');

/*****************************************
* Data processing
/****************************************/

include('includes/smux-data-processing.php');

/*****************************************
* Display admin content
/****************************************/

function smux_display_admin_content()
{
    wp_enqueue_script('smux_admin_script');

    $options = get_option('smux_options');

    include('partials/smux-admin-content.php');
}
