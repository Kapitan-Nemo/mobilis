<?php

function mobilis_menu() {
    add_menu_page(
        'Mobilis', // page title
        'Mobilis', // menu title
        'manage_options', // capability
        'mobilis', // menu slug
        'mobilis_content', // function that outputs the content of the page
        'dashicons-randomize', // icon url
        20 // position
    );
}

add_action('admin_menu', 'mobilis_menu');

function mobilis_content() {
    // Output the content of your page here. For example, you can output a div that will be used as the mount point for your Vue app.
    echo '<div id="app"></div>';
}