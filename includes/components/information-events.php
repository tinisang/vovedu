<?php 


$eventsArg = array(
    'post_type'              => 'su_kien',
    'posts_per_page'         => '4000',
    'meta_key' => 'ngay_bắt_dầu_hoặc_ngay_diễn_ra_sự_kiện',
    'orderby' => 'meta_value_num',
    'order' => 'DESC'
);

$events = get_posts($eventsArg);


?>

<div class="information_events VOVeduContainer">
    <div class="row1">
        <div class="col1">
            <h2 class="title">SỰ KIỆN</h2>
        </div>
        <div class="col2">
            <div class="switch_design">

            <div class="list_view ">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2.5" cy="2.5" r="2.5" fill="#D9D9D9"/>
                    <circle cx="2.5" cy="11.5" r="2.5" fill="#D9D9D9"/>
                    <circle cx="2.5" cy="19.5" r="2.5" fill="#D9D9D9"/>
                    <rect x="7" width="25" height="5" rx="2.5" fill="#D9D9D9"/>
                    <rect x="6.75" y="9" width="25" height="5" rx="2.5" fill="#D9D9D9"/>
                    <rect x="6.75" y="17" width="25" height="5" rx="2.5" fill="#D9D9D9"/>
                </svg>

            </div>
                
                <div class="gallery_view active">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="10.3871" height="10.3871" rx="2" fill="#D9D9D9"/>
                        <rect y="12.6129" width="10.3871" height="10.3871" rx="2" fill="#D9D9D9"/>
                        <rect x="12.6133" width="10.3871" height="10.3871" rx="2" fill="#D9D9D9"/>
                        <rect x="12.6133" y="12.6128" width="10.3871" height="10.3871" rx="2" fill="#D9D9D9"/>
                    </svg>

                </div>

            </div>
        </div>
    </div>

    <div class="row2">
        <div class="col1">
            
        </div>
        <div class="col2">
            <div class="events_list_wrapper image_view">
                <?php

                    $loopCount = ceil(count($events)/2);
                    for ($x = 0; $x < $loopCount; $x++) {

                        $time1=strtotime(get_field('ngay_bắt_dầu_hoặc_ngay_diễn_ra_sự_kiện',$events[$x*2]->ID));
                        $time2=strtotime(get_field('ngay_bắt_dầu_hoặc_ngay_diễn_ra_sự_kiện',$events[$x*2+1]->ID));
                        
                        ?>
                        <div class="event_row">

                        
                        <div class="event_item_wrapper">
                            <div class="event_item">
                                <div class="time_section">
                                    <div class="date_section">
                                        <img src="/wp-content/uploads/2023/11/calendar-smal.svg" alt="">
                                        <div class="date_data"><?php echo date('d', $time1) ?></div>
                                    </div>
                                    <div class="month_year"><?php echo date('m/Y', $time1) ?></div>
                                    
                                </div>
                                <div class="info_section">
                                    <a href="<?php echo get_permalink($events[$x*2]->ID) ?>" class="title"><?php echo $events[$x*2]->post_title; ?></a>
                                    <?php echo do_shortcode('[button state="single" link="'.get_permalink($events[$x*2]->ID).'"]'); ?>
                                </div>

                            </div>
                            <a href="<?php echo get_permalink($events[$x*2]->ID) ?>"  class="thumb">
                            <img src="<?php 
                            if (get_the_post_thumbnail_url($events[$x*2]->ID, 'full')){
                                echo get_the_post_thumbnail_url($events[$x*2]->ID, 'full');
                            } else{ echo "/wp-content/uploads/2023/11/DSC_6468-5.png"; };
                            ?>" alt="">
                            </a>
                        </div>

                        <?php 
                            if ($events[$x*2+1]){?>
                            <div class="event_item_wrapper">
                            <div class="event_item">
                                <div class="time_section">
                                    <div class="date_section">
                                        <img src="/wp-content/uploads/2023/11/calendar-smal.svg" alt="">
                                        <div class="date_data"><?php echo date('d', $time2) ?></div>
                                    </div>
                                    <div class="month_year"><?php echo date('m/Y', $time2) ?></div>
                                    
                                </div>
                                <div class="info_section">
                                    <a href="<?php echo get_permalink($events[$x*2+1]->ID) ?>" class="title"><?php echo $events[$x*2 + 1]->post_title; ?></a>
                                    <?php echo do_shortcode('[button state="single" link="'.get_permalink($events[$x*2+1]->ID).'"]'); ?>
                                </div>

                            </div>
                            <a href="<?php echo get_permalink($events[$x*2+1]->ID) ?>"  class="thumb">
                            <img src="<?php 
                            if (get_the_post_thumbnail_url($events[$x*2+1]->ID, 'full')){
                                echo get_the_post_thumbnail_url($events[$x*2+1]->ID, 'full');
                            } else{ echo "/wp-content/uploads/2023/11/DSC_6468-5.png"; };
                            ?>" alt="">
                            </a>
                        </div>
                          <?php  }
                        ?>
                </div>
                  <?php  }
                ?>
            </div>
        </div>
    </div>
</div>


<script>
    (function($){

        $('.information_events .gallery_view').click(function(){
            $('.information_events .events_list_wrapper').addClass('image_view')
            $('.information_events .gallery_view').addClass('active')
            $('.information_events .list_view').removeClass('active')
        })
        $('.information_events .list_view').click(function(){
            $('.information_events .events_list_wrapper').removeClass('image_view')
            $('.information_events .gallery_view').removeClass('active')
            $('.information_events .list_view').addClass('active')
        })
        
    })(jQuery)
</script>