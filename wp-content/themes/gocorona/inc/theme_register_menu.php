<?php
function gocorona_register_menus()
{
    register_nav_menus([
        "header-menu" => esc_html__("Header menu", "gocorona"),
    ]);
}

add_action("after_setup_theme", "gocorona_register_menus");
