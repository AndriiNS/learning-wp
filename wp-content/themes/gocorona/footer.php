<?php if (have_rows('footer_list', 'option')) { ?>
    <footer class="footer">
        <div class="footer__container">
            <div class="footer__items">
                <?php while (have_rows('footer_list', 'option')) {
                    the_row();
                    $link = get_sub_field('link');
                    $icon = get_sub_field('icon');
                ?>
                    <a href="<?php echo esc_url($link['url']); ?>"
                        class="footer__item">
                        <?php if ($icon): ?>
                            <?php echo wp_get_attachment_image($icon, 'full'); ?>
                        <?php endif; ?>
                    </a>
                <?php } ?>
            </div>
        </div>
    </footer>
<?php } ?>