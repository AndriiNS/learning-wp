<?php get_header(); ?>

<main>
    <?php

    if (function_exists('have_rows')) {
        if (have_rows('flexible_blocks')) {
            while (have_rows('flexible_blocks')) : the_row();

                $layout = get_row_layout();
                get_template_part("particles/flexible_blocks/{$layout}");

            endwhile;
        }
    } else {
        echo "No layouts found";
    }

    ?>
</main>

<?php get_footer(); ?>