<?php
$fields = get_field('banner_item', '8');
$totalItem = count($fields);

?>
<div class="homeSlider_wraper">
<?php get_template_part('includes/components/event', 'float'); ?>

    <div class="VOVeduContainer countup_section desktopOnly">
        <span class="main_number"><span class="digit">01</span><span class="separator_number">/</span></span>
        <span class="total_num">
            <?php
            if ($totalItem < 10) {
                echo '0' . $totalItem;
            } else {
                echo $totalItem;
            }
            ;
            ?>
        </span>
    </div>
    <div class="VOVeduContainer countup_section mobileOnly">
        <span class="main_number"><span class="digit">01</span><span class="separator_number">/</span></span>
        <span class="total_num">
            <?php
            if ($totalItem < 10) {
                echo '0' . $totalItem;
            } else {
                echo $totalItem;
            }
            ;
            ?>
        </span>
    </div>
    <img class="decor" src="/wp-content/uploads/2023/11/logo-vovedu.png" alt="">
    <div class="swiper homeSlider desktopOnly">
        <div class="swiper-wrapper">

            <?php


            foreach ($fields as $value) {
                ?>
                <div class="swiper-slide slide-item  <?php if ($value['thong_tin_them'] !== "Có") {
                    echo 'single';
                } ?>">
                    <?php if ($value['thong_tin_them'] == "Có") {
                        $info = $value['thong_tin_phụ'];
                        ?>
                        <div class="VOVeduContainer call-to-action">
                            <div class="title">
                                <?php echo $info['title']; ?>
                            </div>
                            <div class="description">
                                <?php echo $info['phụ_dề']; ?>
                            </div>
                            <?php echo do_shortcode('[button state="stroke" color="white" link="' . $info['link'] . '" ]'); ?>
                        </div>
                    <?php } ?>
                    <div class="image-slider">
                        <img src="<?php echo $value['ảnh']; ?>" alt="">
                    </div>
                </div>


                <?php
            }
            ;


            ?>




        </div>
        <div class="swiper-pagination"></div>
    </div>
    
    <div class="swiper homeSlider mobileOnly">
        <div class="swiper-wrapper">

            <?php


            foreach ($fields as $value) {
                ?>
                <div class="swiper-slide slide-item  <?php if ($value['thong_tin_them'] !== "Có") {
                    echo 'single';
                } ?>">
                    <?php if ($value['thong_tin_them'] == "Có") {
                        $info = $value['thong_tin_phụ'];
                        ?>
                        <div class="VOVeduContainer call-to-action">
                            <div class="title">
                                <?php echo $info['title']; ?>
                            </div>
                            <div class="description">
                                <?php echo $info['phụ_dề']; ?>
                            </div>
                            <?php echo do_shortcode('[button state="stroke" color="white" link="' . $info['link'] . '" ]'); ?>
                        </div>
                    <?php } ?>
                    <div class="image-slider">
                        <img src="<?php echo $value['ảnh_mobile']; ?>" alt="">
                    </div>
                </div>


                <?php
            }
            ;


            ?>




        </div>
        <div class="swiper-pagination"></div>
    </div>


</div>