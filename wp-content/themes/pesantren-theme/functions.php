<?php
function pesantren_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'pesantren'),
    ));
}
add_action('after_setup_theme', 'pesantren_theme_setup');
?>
