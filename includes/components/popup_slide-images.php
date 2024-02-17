<?php

$images=$args['gallery'];


$id = generateRandomString(13);
$close_icon ='<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="1.63037" width="20.7506" height="2.30562" transform="rotate(45 1.63037 0)" fill="white"/>
<rect x="16.3032" y="1.63034" width="20.7506" height="2.30562" transform="rotate(135 16.3032 1.63034)" fill="white"/>
</svg>
';

?>

<div id="popup_<?php echo $id; ?>" class="slider_image_popup">
    <div class="top_area">
        <div class="close_icon"><?php echo $close_icon; ?></div>
        <div class="swiper top_slider">

            <div class="swiper-wrapper">
            <?php 
                
                foreach ($images as $key => $value){?>

                        <div class="swiper-slide image_item ">
                            <img src="<?php echo $value['sizes']['large'] ?>" alt="">                            </div>
                    <?php
                }
                
                ?>
            </div>
        </div>
    </div>
    <div class="VOVeduContainer">
        <div class="bottom_area">
            <div class="bottom_slider">

                <div class="bottom_slider-wrapper">
                <?php 
                    
                    foreach ($images as $key => $value){?>

                            <div class="image_item ">
                                <img src="<?php echo $value['sizes']['large'] ?>" alt="">                            
                            </div>
                            
                        <?php }
                            
                    ?>
                </div>
            </div>
        </div>
        <div class="link">

            <?php echo do_shortcode('[button state="single" color="red" content="Tìm hiểu thêm" icon_visible="true" button="true"]') ?>
            <div class="trans_V">
                <img src="/wp-content/uploads/2023/10/trans-V.png" alt="">
            </div>
        </div>
    </div>
</div>

<script src="<?php echo get_stylesheet_directory_uri().'/js/swiper/swiper-bundle.min.js' ?>" ></script>
<script>

    (function($){
        
        var homeGallery3<?php echo $id ?> = new Swiper("#popup_<?php echo $id; ?>.slider_image_popup .top_area .top_slider", {
            
            // loop:true,   
            speed: 1000,
            spaceBetween: 0,
            slidesPerView: 1,
    
        
        grabCursor: true,
    
        });
        var offsetScroll=200;
        
        homeGallery3<?php echo $id ?>.on('slideChangeTransitionEnd',function(){
            $('#popup_<?php echo $id; ?>.slider_image_popup .bottom_area .bottom_slider-wrapper .image_item').eq(homeGallery3<?php echo $id ?>.realIndex).click()
        })
        $('#popup_<?php echo $id; ?>.slider_image_popup .bottom_area .bottom_slider-wrapper .image_item').each(function(index,element){
            $(element).click(function(){
                if(screen.width<768){
                    offsetScroll=100;
                }
                $('#popup_<?php echo $id; ?>.slider_image_popup .bottom_area .bottom_slider-wrapper .image_item').removeClass('active');
                $(element).addClass('active');
                homeGallery3<?php echo $id ?>.slideTo(index)
                gsap.to($('#popup_<?php echo $id; ?>.slider_image_popup .bottom_area'),{
                    scrollTo:{
                        x: $(element),
                        offsetX: offsetScroll
                    },
                    duration:1
                })
            })
        })
    
    
    
        $('<?php echo $args['selector'] ?>').each(function(index, element){
            $(element).click(function(){
                var indexSlide = parseInt($(element).attr('imageID'))
                homeGallery3<?php echo $id ?>.slideTo(indexSlide);
                $('#popup_<?php echo $id; ?>.slider_image_popup ').addClass('open')
            })
        })
        
    })(jQuery)
</script>