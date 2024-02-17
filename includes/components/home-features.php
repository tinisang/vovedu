<div class="section_general features ">

    <h2 class="title">TẠI SAO CHỌN VOVEDU?</h2>
    <div class="separator"></div>
    <div class=" features_holder">

    
    <div class="swiper features_list ">
        <div class="swiper-wrapper">
            <?php 
                $fields = get_field('feature_item','8');
                
                foreach ($fields as $value){?>
                <div class="swiper-slide feature-item">
                    <?php 
                        if ($value['loại_item']=="Icon"){ ?>
                            <div class="image_icon">
                                <img src="<?php echo $value['icon'] ?>" class="icon_item" alt="">
                            </div>
                        <?php }else{ ?>
                        <div class="number_area">
                            <span class="digit"><?php echo $value['chữ_lớn'] ?></span>
                            <!-- <span class="follow">+</span> -->
                        </div>
                    <?php  }
                    ?>
                    
                    <div class="feature-title"><?php echo $value['title']; ?></div>
                    <div class="description"><?php echo $value['mo_tả']; ?></div>
                    <?php echo do_shortcode('[button state="single" link="'.$value['link'].'" ]') ?>
                </div>
            <?php  }
            
            
            ?>

        </div>
        <div class="swiper-pagination"></div>
        </div>
       
    </div>

</div>