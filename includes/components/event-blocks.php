<?php
$eventData = $args['data'];
$title = $args['title'];

?>

<div class="events_wrapper">
    <div class="VOVeduContainer">
        <div class="section_general">
            <h2 class="title">
                <?php echo $title; ?>
            </h2>
            <div class="separator"></div>
            <?php echo do_shortcode('[button state="stroke" color="red" content="Xem toàn bộ sự kiện" link="/thong-tin-tong-hop/#events_block"]') ?>

        </div>

    </div>
<?php   $time123=strtotime(get_field('ngay_bắt_dầu_hoặc_ngay_diễn_ra_sự_kiện',$eventData[0]->ID));
 ?>
    <div class="VOVeduContainer">
        <div class="events_area ">
            <div class="col1">
                <div class="event_item">
                    <div class="time_section">
                        <div class="date_section">
                            <img src="/wp-content/uploads/2023/11/calendar-smal.svg" alt="">
                            <div class="date_data">
                            <?php echo date("d",$time123); ?>
                            </div>
                        </div>
                        <div class="month_year">
                        <?php echo date('m',$time123).'/'.date("Y",$time123); ?>
                        </div>

                    </div>
                    <div class="info_section">
                        <a href="<?php echo get_permalink($eventData[0]->ID) ?>" class="title">
                            <?php echo $eventData[0]->post_title; ?>
                        </a>
                        <?php echo do_shortcode('[button state="single" link="' . get_permalink($eventData[0]->ID) . '"]'); ?>
                    </div>
                </div>

                <a href="<?php echo get_permalink($eventData[0]->ID) ?>" class="thumb">
                    <img src="<?php
                    if (get_the_post_thumbnail_url($eventData[0]->ID, 'full')) {
                        echo get_the_post_thumbnail_url($eventData[0]->ID, 'full');
                    } else {
                        echo "/wp-content/uploads/2023/11/DSC_6468-5.png";
                    }
                    ;
                    ?>" alt="">
                </a>

            </div>
            <div class="col2">
                <div class="events_container">
                    <?php

                    foreach ($eventData as $index => $item) {
                        if ($index > 0) { 
                            $time1=strtotime(get_field('ngay_bắt_dầu_hoặc_ngay_diễn_ra_sự_kiện',$item->ID));
                            ?>
                            <div class="event_item">
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
                                    <?php echo do_shortcode('[button state="single" link="' . get_permalink($item->ID) . '"]'); ?>
                                </div>
                            </div>
                        <? }
                    }

                    ?>

                </div>
            </div>

            <div class="mobileOnly">
                <?php echo do_shortcode('[button content="Xem tất cả sự kiện" link="/thong-tin-tong-hop"] ') ?>
            </div>
        </div>
    </div>

</div>