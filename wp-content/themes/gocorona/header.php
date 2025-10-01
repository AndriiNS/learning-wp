<?php
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">
        <header id="open" class="header">
            <div id="close" class="header__container">
                <?php
                if ($custom_logo_id) :
                ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo">
                        <?php echo wp_get_attachment_image($custom_logo_id, 'full', false); ?>
                    </a>
                <?php endif; ?>
                <div class="header__menu menu">
                    <!-- <nav class="menu__body">
                        <ul class="menu__list">
                            <li class="menu__item"><a href="" class="menu__link">HOME</a></li>
                            <li class="menu__item"><a href="" class="menu__link">FEATURES</a></li>
                            <li class="menu__item"><a href="" class="menu__link">SUPPORT</a></li>
                            <li class="menu__item"><a href="" class="menu__link">CONTACT US</a></li>
                        </ul>
                    </nav> -->
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'header-menu',
                        'menu_class' => 'menu__list',
                        'container' => 'nav',
                        'container_class' => 'menu__body'
                    ])
                    ?>
                </div>
                <div class="header__button">
                    <a href="" class="button button_blue">DOWNLOAD</a>
                    <a href="#open" class="icon-menu"><span></span></a>
                    <a href="#close" class="close-icon-menu"></a>
                </div>
            </div>
        </header>