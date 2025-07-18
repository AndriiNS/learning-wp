//functions.php
//========================================================================================================================================================

<?php

function custom_welcome_message()
{
    if (is_user_logged_in()) {
        $current_user = wp_get_current_user();
        echo "<p> Привіт! '$current_user->display_name' </p>";
    } else {
        echo "<p> Вітаємо! </p>";
    }
}

function custom_heading($text)
{
    $save_text = esc_html($text);
    echo "<h2 class='section-title' title='" . esc_attr($save_text) . "' > $save_text </h2>";
}

//========================================================================================================================================================
//front-page.php

<h1> <?php the_title(); ?> </h1>
    <h1 style="color: green"> <?php custom_welcome_message(); ?> </h1>
    <div> <?php custom_heading('My text'); ?> </div>


