<?php
$brands_list = get_sub_field('brands');
?>

<section class="brands">
    <div class="brands__container">
        <?php if ($brands_list) { ?>
            <ul class="brands__block">
                <?php foreach ($brands_list as $brand) { ?>
                    <li class="brands__item">
                        <?php echo wp_get_attachment_image($brand['image'], 'full', false, ['class' => 'brands__img']); ?>
                        <!-- <img src="./assets/img/brands/brand1.svg" alt="brand-icon" class="brands__img"> -->
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
</section>