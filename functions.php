

<?php
function oddlycreative_menus() {
    register_nav_menus(array(
        'primary' => 'Primær menu',
    ));
}
add_action('init', 'oddlycreative_menus');
function oddlycreative_enqueue_styles() {
    wp_enqueue_style(
        'oddlycreative-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_template_directory() . '/style.css')
    );
}
add_action('wp_enqueue_scripts', 'oddlycreative_enqueue_styles');

