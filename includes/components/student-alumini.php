<?php 

$alumini_gallery = $args['alumini_gallery'];
$alumini_human = $args['alumini_human'];
$title= $args['title'];
?>


<div class="alumini_title_section VOVeduContainer section_general">
    <div class="title"><?php echo $title; ?></div>
</div>

<div class="alumini_human">
    <div class="VOVeduContainer" style="display:none">
        <div class="col1">
            <div class="col1_wrapper">
                <div class="title_section">
                    <div class="title">GƯƠNG MẶT TIÊU BIỂU</div>
                    <div class="icon"><img src="/wp-content/uploads/2023/10/cert.svg" alt=""></div>
                </div>
    
                <div class="description">
                <!-- Mục tiêu trong những năm tới, Nhà trường phấn đấu để trở thành cơ sở đào tạo chuyên ngành chất lượng cao, kết hợp giữa đào tạo và nghiên cứu  -->
                </div>
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
        <div class="col2">
            <div class="swiper alumini_slider">
                <div class="swiper-wrapper">
                <?php
                    foreach($alumini_human as $item){?>
                        <div class="swiper-slide alumini_item">
                            <div class="image">
                                <img src="<?php echo $item['ảnh_chan_dung']; ?>" alt="">
                            </div>
                            <div class="info">
                                <div class="position"><?php echo $item['vị_tri_cong_việc_hiện_tại']; ?></div>
                                <div class="name"><?php echo $item['ten']; ?></div>
                            </div>
                        </div>
                   <?php }

                ?>
                </div>
               
                
            </div>
        </div>
    </div>
</div>
<div class="alumini_human alumini_gallery">
    <div class="VOVeduContainer">
        <div class="col1">
            <div class="col1_wrapper">
                <div class="title_section" style="display:none">
                    <div class="title">HÌNH ẢNH</div>
                    <div class="icon"><img src="/wp-content/uploads/2023/10/cert.svg" alt=""></div>
                </div>
    
                <div class="description">
                <!-- Mục tiêu trong những năm tới, Nhà trường phấn đấu để trở thành cơ sở đào tạo chuyên ngành chất lượng cao, kết hợp giữa đào tạo và nghiên cứu  -->
                </div>

            </div>
        </div>
        <div class="col2">
        <?php get_template_part(
            'includes/components/component', 
            'gallery', 
            array(
            'gallery'=>$alumini_gallery,
            )
        ); 
        ?>
        </div>
    </div>
</div>