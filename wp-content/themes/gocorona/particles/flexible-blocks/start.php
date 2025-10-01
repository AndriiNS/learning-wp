 <?php
  $title = get_sub_field('title');
  $text = get_sub_field('text');
  $image = get_sub_field('image');
  $play_icon_group = get_sub_field('play_icon');
  ?>

 <section class="get-started">
   <div class="get-started__container">
     <div class="get-started__content">
       <div class="get-started__block-text block-text">
         <h1 class="block-text__title block-text__title_blue">
           <?php
            if (function_exists('highlight_braces')) {
              echo highlight_braces(get_the_title($title));
            } else {
              echo get_the_title($title);
            }
            echo highlight_braces($title); ?>
         </h1>
         <div class="block-text__text"><?php echo esc_html($text); ?></div>
         <a href="" class="block-text__button button">GET STARTED</a>
       </div>
     </div>
     <div class="get-started__image">
       <?php
        $image_src = wp_get_attachment_image_src($image, 'full');
        if ($image_src) {
          echo '<img src="' . esc_url($image_src[0]) . '" alt="Врач с ребенком">';
        }
        ?>
     </div>
     <div class="get-started__video">
       <?php if ($play_icon_group) { ?>
         <a href="<?php echo esc_url($play_icon_group['play_icon_link']); ?>" class="video-get-started">
           <div class="video-get-started__icon">
             <?php echo wp_get_attachment_image($play_icon_group['play_icon_image'], 'full'); ?>
           </div>
           <div class="video-get-started__body">
             <div class="video-get-started__title"><?php echo esc_html($play_icon_group['play_icon_title']); ?></div>
             <div class="video-get-started__text"><?php echo esc_html($play_icon_group['play_icon_text']); ?></div>
           </div>
         </a>
       <?php } ?>
     </div>
   </div>
 </section>