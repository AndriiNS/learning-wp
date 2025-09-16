<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$blogs = get_sub_field('choose_blogs');
$blog_icon = get_sub_field('custom_icon');
?>

<section class="blog">
    <div class="blog__container">
        <div class="blog__headline">
            <h2 class="blog__title title">
                <?php echo esc_html($title); ?>
            </h2>
            <p class="blog__subtitle">
                <?php echo esc_html($text); ?>
            </p>
        </div>
        <?php if ($blogs) { ?>
            <div class="blog__body swiper">
                <div class="blog__wrapper swiper-wrapper">
                    <?php foreach ($blogs as $blog) {
                        $blog_id    = $blog->ID;
                        $blog_title = get_the_title($blog_id);
                        $blog_link  = get_permalink($blog_id);
                        $blog_date_day  = get_the_date('d', $blog_id);
                        $blog_date_month  = get_the_date('M', $blog_id);
                        $blog_thumb = get_the_post_thumbnail_url($blog_id, 'full');
                        $blog_excerpt = get_the_excerpt($blog_id);
                        $blog_icon    = get_field('custom_icon', $blog_id);
                    ?>
                        <div class="blog__slide swiper-slide">
                            <div class="blog__img-slide">
                                <img src="<?php echo esc_url($blog_thumb); ?>" alt="<?php echo esc_attr($blog_title); ?>" class="blog__pic-slide">
                            </div>
                            <div class="blog__info">
                                <h3 class="blog__title-info">
                                    <a href="<?php echo esc_url($blog_link); ?>"><?php echo esc_html($blog_title); ?></a>
                                </h3>
                                <p class="blog__subtitle-info">
                                    <?php echo esc_html($blog_excerpt); ?>
                                </p>
                                <div class="blog__calendar-info">
                                    <div class="blog__img-calendar">
                                        <?php
                                        echo wp_get_attachment_image($blog_icon, 'full', false, ['class' => 'blog__pic-calendar', 'alt' => 'calendar']);
                                        ?>
                                    </div>
                                    <div class="blog__date-calendar">
                                        <span><?php echo esc_html($blog_date_day); ?><br> <?php echo esc_html($blog_date_month); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination">
                </div>
            </div>
        <?php } ?>
    </div>
</section>