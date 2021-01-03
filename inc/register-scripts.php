<?php

add_action('wp_enqueue_scripts', 'madstore_register_external_scripts');

function madstore_register_external_scripts(){

    wp_enqueue_script(
        'jquery'
    );
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
    wp_register_style(
        'custom',
        get_template_directory_uri() . '/styles/customstyle.css',
        '',
        false,
        'all'
    );

    wp_register_style(
        'fontawesome',
        get_template_directory_uri() . '/styles/fontawesome/css/all.min.css',
        '',
        false,
        'all'
    );
    wp_register_style(
        'simplelineicon',
        get_template_directory_uri() . '/styles/sli/css/simple-line-icons.css',
        '',
        false,
        'all'
    ); 
    wp_register_style(
        'gfont-preconnect',
        'https://fonts.gstatic.com',
        '',
        false,
        'all'
    ); 
    wp_register_style(
        'gfont1',
        'https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap',
        array('gfont-preconnect'),
        false,
        'all'
    ); 
    
}