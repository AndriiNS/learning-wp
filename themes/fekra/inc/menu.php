<?php
function fekra_register_menus()
{
    register_nav_menus([
        "header-menu" => esc_html__("Header menu", "fekra"),
        "footer-menu" => esc_html__("Footer menu", "fekra"),
    ]);
}
add_action("after_setup_theme", "fekra_register_menus");
