<?php get_header(); ?>


<main style="min-height: 100vh; background-color: #444; text-align: center; padding: 40px 0; display: flex; justify-content: center; align-items: center;
    height: 100%;">

    <div class='user-wrapper'>
        <div class="user-page__container">

            <?php
            $current_user = wp_get_current_user();
            if ($current_user->ID) {
            ?>
                <div class="user-profile">
                    <div class="avatar">
                        <?php echo get_avatar($current_user->ID, 120); ?>
                    </div>
                    <div class="user-info-block">
                        <h2 class="user-page__title">Привіт, <?php echo esc_html($current_user->display_name); ?>!</h2>
                        <ul class="user-info">
                            <li><strong>Email:</strong> <?php echo esc_html($current_user->user_email); ?></li>
                            <li><strong>Роль:</strong> <?php echo esc_html(implode(', ', $current_user->roles)); ?></li>
                            <li><strong>Зареєстрований:</strong> <?php echo date('d.m.Y', strtotime($current_user->user_registered)); ?></li>
                        </ul>
                        <div class="user-actions">
                            <a href="<?php echo get_edit_user_link(); ?>" class="button">Редагувати профіль</a>
                            <a href="<?php echo wp_logout_url(home_url()); ?>" class="button logout">Вийти</a>
                        </div>
                    </div>
                </div>

                <?php
                // останні пости користувача
                $args = [
                    'author' => $current_user->ID,
                    'post_type' => 'post', // або 'blog', якщо CPT блоги
                    'posts_per_page' => 5,
                ];
                $user_posts = new WP_Query($args);

                if ($user_posts->have_posts()) {
                ?>
                    <h3 class="user-page__subtitle">Ваші останні пости:</h3>
                    <ul class="user-posts">
                        <?php
                        while ($user_posts->have_posts()) {
                            $user_posts->the_post();
                        ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                <?php
                } else {
                    echo '<p>У вас ще немає постів.</p>';
                }
                wp_reset_postdata();
                ?>

            <?php
            } else {
                echo '<p>Будь ласка, увійдіть, щоб переглянути ваш профіль.</p>';
            }
            ?>

        </div>
    </div>


</main>

<?php get_footer(); ?>