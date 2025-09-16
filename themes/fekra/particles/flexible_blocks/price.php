<?php
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$featuresList = get_sub_field('price_list');
$backgroundImage = get_sub_field('background_image');
?>

<section class="prices">
    <?php echo wp_get_attachment_image($backgroundImage, 'full', false, ['class' => 'prices__bg']); ?>
    <div class="prices__dark-bg"></div>
    <div class="prices__container">
        <div class="prices__block">
            <div class="prices__headline">
                <h2 class="prices__title title">
                    <?php echo esc_html($title); ?>
                </h2>
                <p class="prices__text">
                    <?php echo esc_html($subtitle); ?>
                </p>
            </div>
            <?php if ($featuresList) { ?>
                <div class="prices__body">
                    <?php foreach ($featuresList as $item) {
                        $priceName = $item['name'];
                        $extraClass = ($priceName === "PREMIUM")
                            ? 'card-prices__name card-prices__name--red'
                            : 'card-prices__name';
                    ?>
                        <article class="prices__card card-prices">
                            <p class="<?php echo esc_attr($extraClass); ?>">
                                <?php echo esc_html($priceName); ?>
                            </p>
                            <div class="card-prices__body">
                                <div class="card-prices__money">
                                    <span><?php echo esc_html($item['currency']); ?></span>
                                    <span><?php echo esc_html($item['price']); ?></span>
                                </div>
                                <p class="card-prices__period">
                                    <?php echo esc_html($item['period']); ?>
                                </p>
                                <?php if (!empty($item['price_list_info'])) { ?>
                                    <ul class="card-prices__list">
                                        <?php foreach ($item['price_list_info'] as $feature) { ?>
                                            <li class="card-prices__item-list">
                                                <span><?php echo esc_html($feature['info']); ?></span>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                                <a href="#" class="card-prices__link">PURCHASE NOW</a>
                            </div>
                        </article>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>