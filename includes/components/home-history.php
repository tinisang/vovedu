<?php 
        $history_timeline = get_field('lịch_sử_hinh_thanh','8');
        $vision = get_field('tầm_nhin','8');
        $mission = get_field('sứ_mệnh','8');

        ?>

<div class="section_general history ">

    <h2 class="title">LỊCH SỬ HÌNH THÀNH</h2>
    <div class="separator"></div>

    <div id="history_block" class="VOVeduContainer  history_timeline_home">
        <div class="col1">
            <?php  
                foreach ($history_timeline as $key => $item){ ?>

                    <div class="milestone_item <?php if($key ==0){echo 'active';}; ?>"><?php echo $item['mốc_thời_gian'] ?></div>
            <?php   }
            
            ?>
        </div>


        <div class="col2 up">
            <div class="wrapper_image_history">

           
            <div class="image_wrapper">
                <?php  
                    foreach ($history_timeline as $item){ ?>
                        <div class="milestone_item_image">
                            <div class="content_detail">
                                <div class="title"><?php echo $item['mốc_thời_gian']; ?></div>
                                <div class="description"><?php echo $item['mo_tả']; ?></div>

                            </div>
                            <img src="<?php echo $item['ảnh']; ?>" alt="" srcset="">
                        </div>
                <?php   }
                
                ?>
            </div>
            </div>
        </div>
        
    </div>

    <div id="vision_mission_block" class="VOVeduContainer mission_vision">
        <div class="quote_item mission">
                <div class="item_wrapper">
                    <div class="title_section">
                        <div class="icon"><img src="/wp-content/uploads/2023/10/cert.svg" alt=""></div>
                        <h3 class="title">Sứ mệnh</h3>
                    </div>
                    <div class="content_area"><?php echo $mission; ?></div>
                </div>
        </div>
        <div class="quote_item mission">
            <div class="item_wrapper">

                <div class="title_section">
                    <div class="icon"><img src="/wp-content/uploads/2023/10/cert.svg" alt=""></div>
                    <h3 class="title">Tầm nhìn</h3>
                </div>
                <div class="content_area"><?php echo $vision; ?></div>
            </div>
        </div>
        
        
    </div>

</div>