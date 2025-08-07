<?php

/** Theme support 
 * 
 */
function john_theme_support()
{
    add_theme_support('title_tag');
    add_theme_support('custom-logo');
    register_nav_menus(
        [
            "header_menu" => "Header menu",
        ]
    );
}
add_action('after_setup_theme', 'john_theme_support');

/** Enqueue styles  
 * 
 */
function john_connect_support()
{
    wp_enqueue_style('theme-style', 'https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&display=swap');
    wp_enqueue_style('google-font', get_stylesheet_uri());
    wp_enqueue_style('theme-style-main',  get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'john_connect_support');
