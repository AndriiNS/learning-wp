<?php
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$featuresList = get_sub_field('features_list');
$backgroundImage = get_sub_field('background_image');
?>

<section class="features">
    <div class="features__container">
        <div class="features__body">
            <div class="features__headline">
                <div class="features__head">
                    <h2 class="features__title title">
                        <?php echo esc_html($title); ?>
                    </h2>
                    <p class="features__subtitle">
                        <?php echo esc_html($subtitle); ?>
                    </p>
                </div>
                <?php echo wp_get_attachment_image($backgroundImage, 'full', false, ['class' => 'features__img-head']); ?>
            </div>
            <?php if ($featuresList) { ?>
                <ul class="features__list list-features">
                    <?php foreach ($featuresList as $item) { ?>
                        <li class="list-features__item item-features">
                            <div class="item-features__icon">
                                <?php echo wp_get_attachment_image($item['icon'], 'full', false, ['class' => 'item-features__img-icon']); ?>
                            </div>
                            <div class="item-features__block">
                                <h4 class="item-features__title">
                                    <?php echo esc_html($item['title']); ?>
                                </h4>
                                <p class="item-features__text">
                                    <?php echo esc_html($item['text']); ?>
                                </p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>

    </div>
    <?php echo wp_get_attachment_image($backgroundImage, 'full', false, ['class' => 'features__bg']); ?>
</section>