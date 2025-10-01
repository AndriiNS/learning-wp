<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$image = get_sub_field('image');
?>
<section class="stay-safe">
    <div class="stay-safe__container">
        <div class="stay-safe__media">
            <div class="media-stay-safe">
                <div class="media-stay-safe__image">
                    <?php
                    $image_src = wp_get_attachment_image_src($image, 'full');
                    if ($image_src) {
                        echo '<img src="' . esc_url($image_src[0]) . '" alt="Приложение">';
                    }
                    ?>
                </div>
                <div class="media-stay-safe__item media-stay-safe__item_1"></div>
                <div class="media-stay-safe__item media-stay-safe__item_2"></div>
                <div class="media-stay-safe__item media-stay-safe__item_3"></div>
            </div>
        </div>
        <div class="stay-safe__content">
            <div class="stay-safe__block-text block-text">
                <h2 class="block-text__title"><?php echo highlight_braces($title); ?></h2>
                <div class="block-text__text"><?php echo esc_html($text); ?></div>
                <a href="" class="block-text__button button">Features</a>
            </div>
        </div>
    </div>
</section>