<main>
    <h1> <?php the_title(); ?> </h1>

    <?php the_content(); ?>
    <h1 style="font-weight: bold; text-align: center; ">HOMEWORK</h1>
    <?php
    $hours = 40;

    $unswer = $hours >= 40 ? "full time day" : "part time day";
    ?>

    <h2 style="color: red; text-align: center; font-weight: semi-bold; "> Time: <?php echo $hours; ?></h2>
    <h2 style="color: red; text-align: center; font-weight: semi-bold; "><?php echo $unswer; ?></h2>
    <div style="text-align: center; color: purple; font-size: 2em; ">
        <?php for ($i = 1; $i <= 5; $i++) {
            echo $i;
        }

        ?>
    </div>
</main>
