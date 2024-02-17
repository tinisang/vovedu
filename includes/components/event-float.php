<?php

$eventArgs = array(
    'post_type' => 'su_kien',
    'post_per_page' => 3,
    'meta_key' => 'ngay_bắt_dầu_hoặc_ngay_diễn_ra_sự_kiện',
    'orderby' => 'meta_value_num',
    'order' => 'DESC'
);

$events = get_posts($eventArgs);

?>
<div class="VOVeduContainer event_float desktopOnly">

    <div class="event_float_container">


        <div class="event_float_wrapper swiper">
            <div class="swiper-wrapper">


                <?php

                foreach ($events as $item) { 
                    $time1=strtotime(get_field('ngay_bắt_dầu_hoặc_ngay_diễn_ra_sự_kiện',$item->ID));
                  
                    ?>
                    <div class="event_item swiper-slide">
                        <div class="time_section">
                            <div class="date_section">
                                <img src="/wp-content/uploads/2023/11/calendar-smal.svg" alt="">
                                <div class="date_data">
                                    <?php echo date("d",$time1); ?>
                                </div>
                            </div>
                            <div class="month_year">
                                <?php echo date('m',$time1).'/'.date("Y",$time1); ?>
                            </div>

                        </div>
                        <div class="info_section">
                            <a href="<?php echo get_permalink($item->ID) ?>" class="title">
                                <?php echo $item->post_title; ?>
                            </a>

                        </div>
                    </div>
                <? }

                ?>
            </div>
        </div>
    </div>
</div>