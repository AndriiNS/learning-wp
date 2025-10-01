<?php
function theme_styles()
{
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Rubik:regular,700&display=swap');
    wp_register_style('fonts2', 'https://fonts.googleapis.com/css?family=Raleway:700,800&display=swap');
    wp_enqueue_style('fonts');
    wp_enqueue_style('fonts2');
}
add_action('wp_enqueue_scripts', 'theme_styles');
