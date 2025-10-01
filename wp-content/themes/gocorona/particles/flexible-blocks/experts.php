<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$statistics = get_sub_field('statistics');
$video = get_sub_field('video');
?>

<section class="experts">
    <div class="experts__container">
        <div class="experts__statistics statistics-experts">
            <?php if ($statistics) { ?>
                <div class="statistics-experts__body body-statistics-experts">
                    <?php foreach ($statistics as $statistic) { ?>
                        <div class="body-statistics-experts__item">
                            <div class="body-statistics-experts__value"><?php echo esc_html($statistic['value']); ?></div>
                            <div class="body-statistics-experts__text"><?php echo esc_html($statistic['text']); ?></div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <div class="statistics-experts__decor statistics-experts__decor_1"></div>
            <div class="statistics-experts__decor statistics-experts__decor_2"></div>
            <div class="statistics-experts__decor statistics-experts__decor_3"></div>
        </div>
        <div class="experts__body">
            <div class="experts__content">
                <div class="experts__block-text block-text">
                    <h2 class="block-text__title block-text__title_blue"><?php echo highlight_braces($title); ?></h2>
                    <div class="block-text__text"><?php echo esc_html($text); ?></div>
                    <a href="" class="block-text__button button">Features</a>
                </div>
            </div>
            <div class="experts__video">
                <?php echo $video; ?>
            </div>
        </div>
    </div>
</section>