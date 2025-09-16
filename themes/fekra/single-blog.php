<?php get_header(); ?>

<main style="min-height: 100vh; background-color: #444; text-align: center; padding: 200px 0;">
    <div class="blog__container">
        <div class="blog__body">
            <div class="blog_wrapper" style="position: relative;">
                <?php if (have_posts()) : while (have_posts()) : the_post();
                        $blog_id = get_the_ID();
                        $blog_thumb = get_the_post_thumbnail_url($blog_id, 'full');
                        $blog_icon = get_field('custom_icon', $blog_id);
                        $blog_date_day = get_the_date('d', $blog_id);
                        $blog_date_month = get_the_date('M', $blog_id);
                ?>
                        <h1 class="blog__title"><?php the_title(); ?></h1>
                        <div class="blog__img">
                            <img src="<?php echo esc_url($blog_thumb); ?>" alt="<?php the_title_attribute(); ?>">
                        </div>
                        <div class="blog__content">
                            <?php the_content(); ?>
                        </div>
                        <div class="blog__calendar-info">
                            <div class="blog__img-calendar">
                                <?php
                                if ($blog_icon) {
                                    echo wp_get_attachment_image($blog_icon, 'thumbnail', false, ['class' => 'blog__pic-calendar', 'alt' => 'calendar']);
                                } else {
                                    echo '<img src="' . get_template_directory_uri() . '/assets/img/blog/calendar.svg" alt="calendar" class="blog__pic-calendar">';
                                }
                                ?>
                            </div>
                            <div class="blog__date-calendar">
                                <span><?php echo esc_html($blog_date_day); ?><br><?php echo esc_html($blog_date_month); ?></span>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>