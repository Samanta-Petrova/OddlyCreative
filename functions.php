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
