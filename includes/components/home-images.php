<?php
    $images = $args['images'];


?>


<div class="section_general  home_images">
    <h2 class="title"><?php echo $args['title'] ?></h2>
    <div class="separator"></div>
    <div class="VOVeduContainer slider_image_area">
        <div class="row_1">
            <div class="text_area">
                <div class="text_area_wrapper">
                    <div class="trans_V">
                        <img src="/wp-content/uploads/2023/10/trans-V.png" alt="">
                    </div>
                    <div class="title"><?php echo $args['small_title'] ?></div>
                    <div class="description"><?php echo $args['description'] ?></div>
                    <div class="navigation_area">
                        <div class="navigation_item prev">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M29 57C13.5362 57 1 44.4638 1 29C1 13.536 13.5362 1 29 1C44.464 1 57 13.536 57 29C57 44.4638 44.464 57 29 57Z" stroke="#E93933" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M27.6001 37.4001L19.2001 29.0001L27.6001 20.6001" stroke="#E93933" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M38.8 29H22" stroke="#E93933" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
    
                        </div>
                        <div class="navigation_item next">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M29 1.00001C44.4638 1.00001 57 13.5362 57 29C57 44.464 44.4638 57 29 57C13.536 57 1 44.464 1 29C1.00001 13.5362 13.536 1 29 1.00001Z" stroke="#E93933" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M30.3999 20.5999L38.7999 28.9999L30.3999 37.3999" stroke="#E93933" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19.2 29L36 29" stroke="#E93933" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
    
                        </div>
                    </div>

                </div>
            </div>

            <div class="swiper image_area">
                <div class="swiper-wrapper">
                    <?php 
                    
                    foreach ($images as $key => $value){
                        if ((fmod(($key + 1), 6)== 1) || (fmod(($key+1), 6) == 2)){ ?>

                            <div class="swiper-slide image_item " imageId="<?php echo $key; ?>">
                                <img src="<?php echo $value['sizes']['large'] ?>" alt="">
                                <?php echo do_shortcode('[button state="fill" button="false" content="Phóng to" icon_visible="false"]');  ?>
                            </div>
                        <?php };
                    }
                    
                    ?>
                </div>
            </div>
            
        </div>


        <div class="row_2">
            <div class="swiper image_area">
                    <div class="swiper-wrapper">
                        <?php 
                        
                        foreach ($images as $key => $value){
                            if ((fmod(($key + 1), 6)!= 1) && (fmod(($key+1), 6) != 2)){ ?>

                                <div class="swiper-slide image_item "  imageId="<?php echo $key; ?>">
                                    <img src="<?php echo $value['sizes']['large'] ?>" alt="">
                                    <?php echo do_shortcode('[button state="fill" button="false" content="Phóng to" icon_visible="false"]');  ?>

                                </div>
                            <?php };
                        }
                        
                        ?>
                    </div>
                </div>
    </div>

    
</div>
<?php get_template_part(
    'includes/components/popup_slide', 
    'images', 
    array(
        'gallery'=> $images,
        'selector'=>'.home_images .slider_image_area .image_item'
       
    )
); 
?>
</div>