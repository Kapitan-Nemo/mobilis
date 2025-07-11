<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function mobilis_admin_scripts($hook_suffix) {
    if ('toplevel_page_mobilis' !== $hook_suffix) {
        // Not our page, bail out
        return;
    }

    $dist_dir = plugin_dir_path(__FILE__) . '../dist/assets/';

    // Find JavaScript and CSS files in dist directory
    $files = glob($dist_dir . '*.{js,css}', GLOB_BRACE);

    foreach ($files as $file) {
        $file_url = plugin_dir_url(__FILE__) . str_replace(plugin_dir_path(__FILE__), '', $file);
        $filemtime = filemtime($file);

        if (substr($file, -3) === '.js') {
            wp_enqueue_script('mobilis-js', $file_url, [], $filemtime, true);
        } elseif (substr($file, -4) === '.css') {
            wp_enqueue_style('mobilis-css', $file_url, [], $filemtime);
        }
    }
}

add_action('admin_enqueue_scripts', 'mobilis_admin_scripts');