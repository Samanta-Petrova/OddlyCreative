<?php

// Registrer menu
function oddlycreative_menus() {
    register_nav_menus(array(
        'primary' => 'Primær menu',
    ));
}
add_action('init', 'oddlycreative_menus');


// Enqueue CSS (KUN én version!)
function oddlycreative_enqueue_styles() {
    wp_enqueue_style(
        'oddlycreative-style',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css')
    );
}
add_action('wp_enqueue_scripts', 'oddlycreative_enqueue_styles');



// Thumbnails til dine cases
add_theme_support('post-thumbnails');

function oddlycreative_load_fontawesome() {
    wp_enqueue_style(
        'fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        array(),
        '6.5.1'
    );
}
add_action('wp_enqueue_scripts', 'oddlycreative_load_fontawesome');

function oddly_scripts() {
    wp_enqueue_script(
        'karusel-js',
        get_template_directory_uri() . '/assets/js/karusel.js',
        array(),
        false,
        true // loader i footer
    );
}

