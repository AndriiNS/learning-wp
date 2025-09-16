<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$team_list = get_sub_field('team_list');
?>

<section class="team">
    <div class="team__container">
        <div class="team__headline">
            <h2 class="team__title title">
                <?php echo esc_html($title); ?>
            </h2>
            <p class="team__subtitle">
                <?php echo esc_html($text); ?>
            </p>
        </div>
        <?php if ($team_list) { ?>
            <div class="team__body">
                <?php foreach ($team_list as $item) { ?>
                    <article class="team__card card-team">
                        <div class="card-team__img">
                            <?php echo wp_get_attachment_image($item['image'], 'full', false, ['class' => 'card-team__pic']); ?>
                        </div>
                        <h3 class="card-team__name">
                            <?php echo esc_html($item['name']); ?>
                        </h3>
                        <h4 class="card-team__position">
                            <?php echo esc_html($item['people_role']); ?>
                        </h4>
                        <?php if ($team_list) {
                            foreach ($team_list as $item) {
                                $team_social_list = $item['social_links'];
                            }
                        ?>
                            <div class="card-team__bg">
                                <div class="card-team__socials">
                                    <?php foreach ($team_social_list as $item) { ?>
                                        <a href="<?php echo esc_url($item['social_link']); ?>" class="card-team__social-item">
                                            <?php echo wp_get_attachment_image($item['social_icon'], 'full', false, ['class' => 'card-team__social-icon']); ?>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </article>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>