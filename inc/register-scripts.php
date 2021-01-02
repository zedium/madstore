<?php

add_action('wp_enqueue_scripts', 'madstore_register_external_scripts');

function madstore_register_external_scripts(){

    wp_register_script(
        'bootstrap',
        get_template_directory_uri() . '/js/bootstrap.min.js',
        'jquery',
        false,
        true
    );

    wp_register_script(
        'bootstrap-popper',
        get_template_directory_uri() . '/js/popper.min.js',
        'jquery',
        false,
        true
    );

    wp_register_style(
        'bootstrap',
        get_template_directory_uri() . '/styles/bootstrap.min.css',
        '',
        false,
        'all'
    );

}