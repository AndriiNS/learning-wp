<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$tabs = get_sub_field('tabs');
$worksGallery = get_sub_field('works_gallery');
?>

<section class="works">
    <div class="works__container">
        <div class="works__headline">
            <h2 class="works__title title">
                <?php echo esc_html($title); ?>
            </h2>
            <p class="works__text">
                <?php echo esc_html($text); ?>
            </p>
        </div>
        <div class="works__body">

            <div data-tabs class="works__tabs tabs">
                <?php if ($tabs) { ?>
                    <ul class="tabs__navigation">
                        <?php foreach ($tabs as $tab) { ?>

                            <li data-tabs-button class="tabs__item">
                                <button class="tabs__button" data-tab="<?php echo esc_attr($tab['tab_label']); ?>">
                                    <?php echo esc_html($tab['tab_slug']); ?>
                                </button>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
                <div class="tabs__body">
                    <div class="tabs__body-element">
                        <?php if ($worksGallery) { ?>
                            <?php foreach ($worksGallery as $work) {
                                $img = $work['image'];
                                $tags = $work['tags'];
                                $tagsAttr = is_array($tags) ? implode(' ', $tags) : '';
                            ?>
                                <div class="tabs__item-element" data-tags="<?php echo esc_attr($tagsAttr); ?>">
                                    <?php echo wp_get_attachment_image($img, 'full', false, ['class' => 'tabs__img-element']); ?>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>