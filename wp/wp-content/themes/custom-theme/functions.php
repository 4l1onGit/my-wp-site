<?php

function custom_theme_assets() {
    wp_enqueue_style(
        'custom-theme-style',
        get_template_directory_uri() . '/dist/main.css',
        array(),
        filemtime(get_template_directory() . '/dist/main.css')
    );
}
add_action('wp_enqueue_scripts', 'custom_theme_assets');