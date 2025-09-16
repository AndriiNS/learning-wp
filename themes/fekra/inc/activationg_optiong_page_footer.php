<?php
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Footer settings',
        'menu_title' => 'Footer',
        'menu_slug'  => 'theme-footer-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ]);
}
