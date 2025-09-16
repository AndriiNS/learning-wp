<?php
function fekra_register_footer_widgets()
{
    register_sidebar([
        'name' => 'Latest News Footer',
        'id' => 'latest_news_footer',
        'before_widget' => '<div class="body-footer__item-list">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="body-footer__title-item">',
        'after_title' => '</h3>',
    ]);
}
add_action('widgets_init', 'fekra_register_footer_widgets');
