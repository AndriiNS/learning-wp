<footer class="footer">
    <div class="footer__head head-footer">
        <?php if ($footer_top = get_field('footer_heading', 'option')) { ?>
            <div class="footer__container">
                <?php echo wp_get_attachment_image($footer_top['logo'], 'full', false, ['class' => 'head-footer__logo']); ?>
                <p class="head-footer__text">
                    <?php echo esc_html($footer_top['text']); ?>
                </p>
                <?php
                $social_links = $footer_top['footer_top_social'];
                if (!empty($social_links)) { ?>
                    <div class="head-footer__socials">
                        <?php foreach ($social_links as $social) { ?>
                            <a class="head-footer__fb-socials socials" href="<?php echo esc_url($social['link']['url']); ?>">
                                <?php echo wp_get_attachment_image($social['icon'], 'full', false, ['class' => 'head-footer__icon']); ?>
                            </a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
    <div class="footer__body body-footer">
        <?php if ($footer_body = get_field('footer_body', 'option')) { ?>
            <div class="footer__container">
                <div class="body-footer__block">
                    <ul class="body-footer__list">

                        <?php if (!empty($footer_body['get_in_touch'])) {
                            $get_in_touch = $footer_body['get_in_touch'];
                        ?>
                            <li class="body-footer__item-list">
                                <h3 class="body-footer__title-item"><?php echo esc_html($get_in_touch['title']); ?></h3>
                                <p class="body-footer__text-item"><?php echo esc_html($get_in_touch['text']); ?></p>

                                <?php if (!empty($get_in_touch['get_in_touch_list'])) { ?>
                                    <?php foreach ($get_in_touch['get_in_touch_list'] as $contact) {
                                        $link = $contact['link'];
                                        $image = $contact['image'];
                                    ?>
                                        <div class="body-footer__address-item">
                                            <img src="<?php echo esc_url($image['url']); ?>" class="body-footer__icon-address">
                                            <a href="<?php echo esc_url($link['url']); ?>" class="body-footer__text-address">
                                                <?php echo esc_html($link['title']); ?>
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </li>
                        <?php } ?>

                        <?php if (!empty($footer_body['popular_tags']) && !empty($footer_body['popular_tags']['popular_tags_list'])) { ?>
                            <li class="body-footer__item-list">
                                <h3 class="body-footer__title-item"><?php echo esc_html($footer_body['popular_tags']['title']); ?></h3>
                                <ul class="body-footer__tags-list">
                                    <?php foreach ($footer_body['popular_tags']['popular_tags_list'] as $tag) { ?>
                                        <li class="body-footer__item-tags">
                                            <span class='body-footer__link-tags'><?php echo esc_html($tag['tag']); ?></span>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php if (!empty($footer_body['latest_news']) && !empty($footer_body['latest_news']['news_list'])) { ?>
                            <li class="body-footer__item-list">
                                <h3 class="body-footer__title-item">
                                    <?php echo esc_html($footer_body['latest_news']['title']); ?>
                                </h3>
                                <ul class="body-footer__news-list">
                                    <?php foreach ($footer_body['latest_news']['news_list'] as $news) { ?>
                                        <li class="body-footer__item-news">
                                            <div class="body-footer__img-news">
                                                <?php echo wp_get_attachment_image($news['image'], 'full', false, ['class' => 'body-footer__pic-news']); ?>
                                            </div>
                                            <div class="body-footer__info-news">
                                                <p class="body-footer__text-news">
                                                    <?php echo esc_html($news['text']); ?>
                                                </p>
                                                <p class="body-footer__date-news">
                                                    <?php echo esc_html($news['data']); ?>
                                                </p>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>
                        <?php if (!empty($footer_body['flickr_stream']) && !empty($footer_body['flickr_stream']['images'])) { ?>
                            <li class="body-footer__item-list">
                                <h3 class="body-footer__title-item"><?php echo esc_html($footer_body['flickr_stream']['title']); ?></h3>
                                <div class="body-footer__stream-gallery">
                                    <?php foreach ($footer_body['flickr_stream']['images'] as $image) {
                                        echo wp_get_attachment_image($image['ID'], 'full', false, ['class' => 'body-footer__img-stream']);
                                    } ?>
                                </div>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="footer__cellar cellar-footer">
        <div class="footer__container">
            <nav class="cellar-footer__menu">
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer-menu',
                    'container' => false,
                    'menu_class' => 'cellar-footer__list-menu',
                ]);
                ?>
            </nav>
            <p class="cellar-footer__copyright">
                <?php echo '&copy;' ?>
                <?php echo date('Y'); ?>
                <?php echo get_bloginfo('name') . ' corporation' ?>

            </p>
        </div>
    </div>
</footer>

</div>
</body>

</html>