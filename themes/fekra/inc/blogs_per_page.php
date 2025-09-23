<?php
function fekra_blog_posts_per_page($query)
{
    // перевіряємо, що це головний query на фронтенді і архів блогу
    if (! is_admin() && $query->is_main_query() && is_post_type_archive('blog')) {
        $query->set('posts_per_page', 4);
    }
}
add_action('pre_get_posts', 'fekra_blog_posts_per_page');
