<?php

define('B_THEME_ROOT', get_stylesheet_directory_uri());
define('CSS_DIR', B_THEME_ROOT . '/css');
define('FONTS_DIR', B_THEME_ROOT . '/fonts');
define('IMG_DIR', B_THEME_ROOT . '/img');
define('JS_DIR', B_THEME_ROOT . '/js');

function custom_wp_remove_global_css() {
    remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
    remove_action('wp_footer', 'wp_enqueue_global_styles', 1);
}
add_action('init', 'custom_wp_remove_global_css');

function register_styles() {
    wp_dequeue_style('global-styles');

    wp_register_style('style-main', CSS_DIR . '/main.css');
    wp_enqueue_style('style-main');
}

function register_scripts() {
    wp_register_script('script-main', JS_DIR . '/main.js', [], date('h:i:s'), true);
    wp_enqueue_script('script-main');
}

function enchance_scripts($tag, $handle, $src) {
    if ($handle === 'script-main') {
        return "<script type='module' defer src='" . esc_url($src) . "'></script>";
    }

    return $tag;
}
add_filter('script_loader_tag', 'enchance_scripts', 10, 3);

function theme_setup() {
    add_theme_support('menus');
    register_nav_menu('header', 'Header');

    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    add_action('wp_enqueue_scripts', 'register_styles');
    add_action('wp_enqueue_scripts', 'register_scripts');
}
add_action('after_setup_theme', 'theme_setup');

function mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'mime_types');
