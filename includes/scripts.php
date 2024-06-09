<?php

function mobilis_scripts() {
    wp_enqueue_script(
        'mobilis',
        plugin_dir_url(__FILE__) . '../dist/main.js',
        [],
        filemtime(plugin_dir_path(__FILE__) . '../dist/main.js'),
        true
    );

    wp_enqueue_style(
        'mobilis',
        plugin_dir_url(__FILE__) . '../dist/main.css',
        [],
        filemtime(plugin_dir_path(__FILE__) . '../dist/main.css')
    );
}

add_action('wp_enqueue_scripts', 'mobilis_scripts');