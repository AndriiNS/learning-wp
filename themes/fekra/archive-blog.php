<?php get_header(); ?>


<main style="min-height: 100vh; background-color: #444; text-align: center; padding: 40px 0;">

    <section class="blog" style="background-color: #444;">
        <div class="blog__container">

            <?php
            if (have_posts()) {
            ?>
                <div class="blog__grid">
                    <?php
                    while (have_posts()) {
                        the_post();

                        $blog_id = get_the_ID();
                        $blog_thumb = get_the_post_thumbnail_url($blog_id, 'full');
                        $blog_icon = get_field('custom_icon', $blog_id);
                        $blog_date_day = get_the_date('d', $blog_id);
                        $blog_date_month = get_the_date('M', $blog_id);
                    ?>
                        <div class="blog__card">
                            <div class="blog__img-slide">
                                <img src="<?php echo esc_url($blog_thumb); ?>" alt="<?php the_title_attribute(); ?>" class="blog__pic-slide">
                            </div>
                            <div class="blog__info">
                                <h3 class="blog__title-info">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <p class="blog__subtitle-info"><?php echo get_the_excerpt(); ?></p>
                                <div class="blog__calendar-info">
                                    <div class="blog__img-calendar">
                                        <?php
                                        if ($blog_icon) {
                                            echo wp_get_attachment_image($blog_icon, 'full', false, ['class' => 'blog__pic-calendar', 'alt' => 'calendar']);
                                        }
                                        ?>
                                    </div>
                                    <div class="blog__date-calendar">
                                        <span><?php echo esc_html($blog_date_day); ?><br><?php echo esc_html($blog_date_month); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>


                <div class="blog__pagination" style="margin-top:30px;">
                    <?php
                    global $wp_query;
                    echo paginate_links([
                        'total' => $wp_query->max_num_pages,
                        'current' => max(1, get_query_var('paged')),
                    ]);
                    ?>
                </div>
            <?php
            }
            ?>

        </div>
    </section>


</main>

<?php get_footer(); ?>