<?php
function fekra_theme_style()
{
    wp_enqueue_style("swiper", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css", [], "11.0.0");
    wp_enqueue_style("fekra-style", get_template_directory_uri() . "/assets/css/style.css", ["swiper"], filemtime(get_template_directory() . "/assets/css/style.css"));
    wp_enqueue_script("swiper", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js");
    wp_enqueue_script("fekra-script", get_template_directory_uri() . "/assets/js/script.js");
}

add_action("wp_enqueue_scripts", "fekra_theme_style");
