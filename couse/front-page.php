<?php get_header(); ?>


<main class="main">

    <section class="john">
        <div class="container">
            <div class="john_photo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/john_photo.png" alt="John" class="john_photo_img">
            </div>
            <div class="john_info">
                <h1 class="john_title"> <?php the_field('john_title'); ?> </h1>
                <p class="john_subtitle"> <?php the_field('john_subtitle'); ?> </p>
                <a href="#" class="john_btn"> Download Resume </a>
            </div>
        </div>
    </section>
    <section class="recent">
        <div class="container">
            <h2>Recent posts</h2>
            <a href="#">View all</a>
            <div class="recent_posts">
                <article class="recent_posts_article">
                    <h3 class="article_title">Making a design system from scratch</h3>
                    <div class="article_meta">
                        <data>12 Feb 2020</data>|
                        <p>Design, Pattern</p>
                    </div>
                    <p class="article_exerpt">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                </article>
                <article class="recent_posts_article">
                    <h3 class="article_title">Creating pixel perfect icons in Figma</h3>
                    <div class="article_meta">
                        <data>12 Feb 2020</data>|
                        <p>Figma, Icon Design</p>
                    </div>
                    <p class="article_exerpt">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                </article>
            </div>
        </div>
    </section>
    <section class="works">
        <div class="container">
            <h2>Featured works</h2>
            <ul class="work_list">
                <li class="work_list_item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work_1.jpg" alt="work image">
                    <div class="work_info">
                        <h3>Designing Dashboards</h3>
                        <a href="#" class="date">2020</a>
                        <a href="#" class="category">Dashboard</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis accusantium, sed, rem neque incidunt, exercitationem eligendi officia quaerat corporis culpa sit debitis impedit magni vitae eos earum totam animi delectus!</p>
                    </div>
                </li>
                <li class="work_list_item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work_1.jpg" alt="work image">
                    <div class="work_info">
                        <h3>Designing Dashboards</h3>
                        <a href="#" class="date">2020</a>
                        <a href="#" class="category">Dashboard</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis accusantium, sed, rem neque incidunt, exercitationem eligendi officia quaerat corporis culpa sit debitis impedit magni vitae eos earum totam animi delectus!</p>
                    </div>
                </li>
                <li class="work_list_item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work_1.jpg" alt="work image">
                    <div class="work_info">
                        <h3>Designing Dashboards</h3>
                        <a href="#" class="date">2020</a>
                        <a href="#" class="category">Dashboard</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis accusantium, sed, rem neque incidunt, exercitationem eligendi officia quaerat corporis culpa sit debitis impedit magni vitae eos earum totam animi delectus!</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

</main>
<?php get_footer(); ?>