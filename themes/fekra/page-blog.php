<?php get_header(); ?>

<main style="min-height: 100vh; background-color: #444; text-align: center; padding: 40px 0;">

    <section class="blog" style="background-color: #444;">
        <div class="blog__container">
            <div class="blog__headline">
                <h2 class="blog__title title"><?php the_title(); ?></h2>
                <p class="blog__subtitle"><?php the_content(); ?></p>
            </div>

            <?php

            $paged = get_query_var('paged') ?? 1;

            $args = [
                'post_type' => 'blog',
                'posts_per_page' => 4,
                'paged' => $paged,
            ];

            $blog_query = new WP_Query($args);

            if ($blog_query->have_posts()) { ?>
                <div class="blog__grid" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px;">
                    <?php while ($blog_query->have_posts()) : $blog_query->the_post();
                        $blog_id = get_the_ID();
                        $blog_thumb = get_the_post_thumbnail_url($blog_id, 'full');
                        $blog_icon = get_field('custom_icon', $blog_id);
                        $blog_date_day = get_the_date('d', $blog_id);
                        $blog_date_month = get_the_date('M', $blog_id);
                    ?>
                        <div class="blog__card" style="background-color: #fff; padding: 20px;">
                            <div class="blog__img-slide">
                                <img src="<?php echo esc_url($blog_thumb); ?>" alt="<?php the_title_attribute(); ?>" class="blog__pic-slide">
                            </div>
                            <div class="blog__info" style="text-align: start;">
                                <h3 class="blog__title-info">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <p class="blog__subtitle-info"><?php echo get_the_excerpt(); ?></p>
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
                    <?php endwhile; ?>
                </div>

                <div class="blog__pagination" style="margin-top:30px;">
                    <?php
                    echo paginate_links([
                        'total' => $blog_query->max_num_pages,
                        'current' => $paged,
                    ]);
                    ?>
                </div>

            <?php } ?>

            <?php

            wp_reset_postdata();

            ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>