<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$healthcare_list = get_sub_field('healthcare_items');
?>
<section class="healthcare">
    <div class="healthcare__container">
        <div class="healthcare__block-text block-text block-text_center">
            <h2 class="block-text__title"><?php echo highlight_braces($title); ?></h2>
            <div class="block-text__text block-text__text_mw">
                <?php echo esc_html($text); ?>
            </div>
        </div>
        <?php if ($healthcare_list) { ?>
            <div class="healthcare__items">
                <?php foreach ($healthcare_list as $item) { ?>
                    <div class="healthcare__column healthcare__column_1">
                        <div class="healthcare__item item-healthcare">
                            <div class="item-healthcare__icon">
                                <?php
                                $image_src = wp_get_attachment_image_src($item['icon'], 'full');
                                if ($image_src) {
                                    echo '<img src="' . esc_url($image_src[0]) . '" alt="Врач с ребенком">';
                                }
                                ?>
                            </div>
                            <div class="item-healthcare__title"><?php echo esc_html($item['title']); ?></div>
                            <div class="item-healthcare__text"><?php echo esc_html($item['text']); ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>