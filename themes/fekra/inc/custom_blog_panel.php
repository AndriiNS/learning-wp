<?php
function fekra_register_blog_cpt()
{
    $labels = [
        'name'               => 'Blogs',
        'singular_name'      => 'Blog',
        'menu_name'          => 'Blogs',
        'name_admin_bar'     => 'Blog',
        'add_new'            => 'Add Blog',
        'add_new_item'       => 'Add New Blog',
        'new_item'           => 'New Blog',
        'edit_item'          => 'Edit Blog',
        'view_item'          => 'View Blog',
        'all_items'          => 'All Blogs',
        'search_items'       => 'Search Blogs',
        'not_found'          => 'No Blogs found.',
        'not_found_in_trash' => 'No Blogs found in Trash',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'rewrite'            => ['slug' => 'blog'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-welcome-write-blog',
        'supports'           => ['title', 'editor', 'excerpt', 'thumbnail'],
        'show_in_rest'       => true,
    ];

    register_post_type('blog', $args);
}
add_action('init', 'fekra_register_blog_cpt');
