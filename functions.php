<?php
function oddlycreative_menus() {
    register_nav_menus(array(
        'primary' => 'Primær menu',
    ));
}
add_action('init', 'oddlycreative_menus');
