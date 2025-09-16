<?php
$title = get_sub_field('title');
$background = get_sub_field('background');
$slides = get_sub_field('slides');
?>


<section class="testimonials">
    <?php echo wp_get_attachment_image($background, 'full', false, ['class' => 'testimonials__bg']); ?>
    <h2 class="testimonials__title title">
        <?php echo esc_html($title); ?>
    </h2>
    <div class="testimonials__container swiper">

        <?php if ($slides) { ?>
            <div class="testimonials__wrapper swiper-wrapper">
                <?php foreach ($slides as $item) { ?>
                    <div class="testimonials__item swiper-slide item-testimonial">
                        <div class="item-testimonial__img">
                            <?php echo wp_get_attachment_image($item['image'], 'full', false, ['class' => 'item-testimonial__pic']); ?>
                        </div>
                        <p class="item-testimonial__text">
                            <?php echo esc_html($item['text']); ?>
                        </p>
                        <h3 class="item-testimonial__name">
                            <?php echo esc_html($item['name']); ?>
                        </h3>
                        <h4 class="item-testimonial__position">
                            <?php echo esc_html($item['role']); ?>
                        </h4>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="swiper-pagination">
        </div>
    </div>
</section>