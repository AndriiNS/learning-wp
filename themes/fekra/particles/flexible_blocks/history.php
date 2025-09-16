<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$gallery = get_sub_field('images');
$history_list = get_sub_field('history_list');

?>

<section class="history">
    <div class="history__container">
        <div class="history__headline">
            <h2 class="history__title title">
                <?php echo esc_html($title); ?>
            </h2>
            <p class="history__subtitle">
                <?php echo esc_html($text); ?>
            </p>
        </div>
        <div class="history__body">
            <?php if ($gallery) { ?>
                <ul class="history__images images-list">
                    <?php foreach ($gallery as $index => $image_id) { ?>
                        <li class="images-list__item <?php echo ($index === 0 || $index === 2) ? 'images-list__item--small' : ''; ?>">
                            <?php echo wp_get_attachment_image($image_id, 'full', false, ['class' => 'images-list__pic']); ?>
                        </li>
                    <?php }; ?>
                </ul>
            <?php }; ?>
            <?php if ($history_list) { ?>
                <ul class="history__list list-history">
                    <?php foreach ($history_list as $item) { ?>
                        <li class="list-history__item item-history">
                            <div class="item-history__icon">
                                <?php echo wp_get_attachment_image($item['icon'], 'full', false, ['class' => 'item-history__img-icon']); ?>
                            </div>
                            <div class="item-history__block">
                                <h4 class="item-history__title">
                                    <?php echo esc_html($item['heading']); ?>
                                </h4>
                                <p class="item-history__text">
                                    <?php echo esc_html($item['description']); ?>
                                </p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
    </div>
</section>