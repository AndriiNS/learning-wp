<?php
$title = get_sub_field('title');
$background = get_sub_field('background');
?>

<section class="advertizing">
    <img src="<?php echo $background['url']; ?>" alt="bg" class="advertizing__bg">
    <div class="advertizing__black-bg"></div>
    <div class="advertizing__headline">
        <div class="advertizing__title title">
            <?php echo esc_html($title); ?>
        </div>
        <a href="#" class="advertizing__button">
            GET STARTED NOW
        </a>
    </div>

</section>