<?php
    $humans = get_field('cảm_nhận',8);
    $overlay = get_field('ảnh_nền',8);
?>

<div class="testimonial">
    
    <div class="VOVeduContainer">
        <div class="title-section">
            <div class="separator mobileOnly"></div>
            <h2 class="title">HUMANS OF VOVEDU</h2>
            <div class="separator"></div>
        </div>

        <div class="testimonial_navigation">
            <div class="navigation-item prev-button"><img src="/wp-content/uploads/2023/10/arrow-prev.svg" alt=""></div>
            <div class="navigation-item next-button"><img src="/wp-content/uploads/2023/10/arrow-next.svg" alt=""></div>
        </div>

        <div class="white-v">
            <img src="/wp-content/uploads/2023/10/white-v.svg" alt="">
        </div>
        
    
        <div class="testimonial_wrapper">
            <div class="slide1_wrapper">
                <div class="swiper image_slide">
                    <div class="swiper-wrapper">
                        <?php
                            foreach ($humans as $value){?>
                                <div class="swiper-slide image-item">
                                    <img src="<?php echo $value['ảnh_chan_dung']; ?>" alt="" srcset="">
                                </div>
                           <?php };
                        
                        ?>
                        
                    </div>
                </div>

            </div>
            <div class="slide2_wrapper">
                <div class="swiper text_slide">
                    <div class="swiper-wrapper">
                    <?php
                            foreach ($humans as $value){?>
                               <div class="swiper-slide text_item">
                                    <div class="name"><?php echo $value['ten']; ?></div>
                                    <div class="title"><?php echo $value['chức_vụ_hoặc_dịa_chỉ_cong_tac']; ?></div>
                                    <div class="description"><?php echo $value['cảm_nhận']; ?></div>

                                </div>
                           <?php };
                        
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="red-v">
        <img src="/wp-content/uploads/2023/10/red-v.svg" alt="">
    </div>
        
    <div class="image-overlay">
        <img src="<?php echo $overlay; ?>" alt="">
    </div>
</div>