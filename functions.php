<?php

function themebs_enqueue_styles()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('core', get_template_directory_uri() . '/style.css');

    require_once(get_template_directory() . '/bs5navwalker.php');
}

add_action('wp_enqueue_scripts', 'themebs_enqueue_styles');

function themebs_enqueue_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script(
        'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js'
    );
    wp_enqueue_script(
        'core', get_template_directory_uri() . '/script.js'
    );
}
add_action('wp_enqueue_scripts', 'themebs_enqueue_scripts');

remove_action('wp_head', '_admin_bar_bump_cb');

add_theme_support( 'menus' );

register_nav_menu('header-menu', 'Header menu');

?>