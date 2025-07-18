//========================================================================================================================================================
<!-- functions.php -->

<?php
function custom_call_info(): void
{ ?>
    <h1> <?php echo get_bloginfo("name"); ?> </h1>
    <h1> <?php get_the_title(); ?> </h1>
    <h1> <?php the_content(); ?> </h1>
    <a href=" <?php echo get_home_url(); ?>">Home url</a>
<?php
}

//  page.php
custom_call_info();

