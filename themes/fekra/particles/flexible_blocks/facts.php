<?php
$title = get_sub_field('title');
$description = get_sub_field('descr');
$image = get_sub_field('image');
$facts_list = get_sub_field('facts_list');
?>

<section class="facts">
    <div class="facts__container">
        <div class="facts__block">
            <div class="facts__left">
                <div class="facts__head">
                    <div class="facts__headline">
                        <h2 class="facts__title title">
                            <?php echo esc_html($title); ?>
                        </h2>
                        <p class="facts__text">
                            <?php echo esc_html($description); ?>
                        </p>
                    </div>
                    <div class="facts__pic">
                        <?php echo wp_get_attachment_image($image, 'full', false); ?>
                    </div>
                </div>
                <?php if ($facts_list) { ?>
                    <ul class="facts__list">
                        <?php foreach ($facts_list as $fact) { ?>
                            <li class="facts__item">
                                <div class="facts__img">
                                    <?php echo wp_get_attachment_image($fact['icon'], 'full', false, ['class' => 'facts__icon']); ?>
                                    <!-- <img src="./assets/img/facts/arrow-icon.svg" alt="icon" class="facts__icon"> -->
                                </div>
                                <div class="facts__info">
                                    <p class="facts__number">
                                        <span class="counter"><?php echo esc_html($fact['count']); ?></span>
                                    </p>
                                    <p class="facts__name">
                                        <?php echo esc_html($fact['completed']); ?>
                                    </p>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
            <div class="facts__right">
                <?php echo wp_get_attachment_image($image, 'full', false, ['class' => 'facts__bg']); ?>
            </div>
        </div>
    </div>
</section>