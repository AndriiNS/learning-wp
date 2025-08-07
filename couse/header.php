<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="container">
            <?php
            wp_nav_menu(
                [
                    "theme_location" => "header_menu",
                    "menu_class" => "header_menu",
                    "container" => "nav",
                ]
            )
            ?>
        </div>
    </header>