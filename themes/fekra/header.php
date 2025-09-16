<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
    <title>Fekra</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__container">
                <div class="header__logo"> <?php the_custom_logo(); ?> </div>
                <div class="header__menu menu-header">
                    <?php wp_nav_menu([
                        "theme_location" => "header-menu",
                        "menu_class"     => "menu-header__list",
                        "container"      => "nav",
                        "container_class" => "menu-header__nav",
                    ]) ?>
                </div>
                <button class="header__burger">
                    <span></span>
                </button>
                <?php if (is_user_logged_in()) :
                    $current_user = wp_get_current_user();
                    $profile_url = um_user_profile_url($current_user->ID);
                ?>
                    <a class="registration-btn" href="<?php echo esc_url($profile_url); ?>">
                        Hi <?php echo esc_html($current_user->user_login); ?>
                    </a>
                <?php else : ?>
                    <a href="<?php echo esc_url(site_url('/login/')); ?>" class="registration-btn">
                        Sign In
                    </a>
                <?php endif; ?>
            </div>


        </header>