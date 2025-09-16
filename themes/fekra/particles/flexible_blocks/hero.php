<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$bgImage = get_sub_field('background');
?>

<section class="hero">
    <img src="<?php echo $bgImage['url']; ?>" alt="bg" class="hero__bg">
    <div class="hero__container">
        <div class="hero__body">
            <h1 class="hero__title">
                <?php echo esc_html($title); ?>
            </h1>
            <h3 class="hero__subtitle">
                <?php echo esc_html($text); ?>
            </h3>
            <div class="hero__cta cta">
                <a href="#" class="cta__learn">
                    LEARN MORE
                </a>
                <a href="#" class="cta__buy">
                    BUY THEME
                </a>
            </div>
        </div>
    </div>

</section>