<?php 

    $clubItems= get_field('thong_tin_về_cau_lạc_bộ','11768');


?>
<div class="club_introduction_title_section VOVeduContainer section_general">
    <div class="title">GIỚI THIỆU CLB</div>
</div>
<div class="club_introduction">
    <?php 

   
    foreach ($clubItems as $key=> $item){?>
       
        <div class="club_item" id="club_<?php echo ($key + 1); ?>">
        <div class="club_wrapper VOVeduContainer">
        <div class="col1">
                <div class="nametag">
                    <div class="index"><?php echo ($key + 1); ?></div>
                    <div class="name"><?php echo $item['ten_cau_lạc_bộ']; ?></div>
                </div>
                <div class="supervisor">
                    <div class="image">
                        <img src="<?php echo $item['ảnh_cố_vấn_cau_lạc_bộ']; ?>" alt="" class="avatar">
                    </div>
                    <div class="supervisor_info">
                        <div class="position">Cố vấn CLB</div>
                        <div class="name"><?php echo $item['ten_cố_vấn_cau_lạc_bộ']; ?></div>
    
                    </div>
                </div>
            </div>
    
            <div class="col2">
                <div class="content_detail">
                    <div class="content_item">
                        <div class="title">Giới thiệu</div>
                        <div class="content"><?php echo $item['thong_tin']['thong_tin_giới_thiệu_chung'] ?></div>
                    </div>
                    <div class="content_item">
                        <div class="title">Lợi ích</div>
                        <div class="content"><?php echo $item['thong_tin']['lợi_ich'] ?></div>
                    </div>
                    <div class="content_item">
                        <div class="title">Các hoạt động chính</div>
                        <div class="content"><?php echo $item['thong_tin']['cac_hoạt_dộng_chinh'] ?></div>
                    </div>
                    <div class="content_item">
                        <div class="title">Lịch hoạt động</div>
                        <div class="content"><?php echo $item['thong_tin']['lịch_hoạt_dộng'] ?></div>
                    </div>
                </div>
            </div>
        </div>
           
        </div>
       
       
 <?php  }
    ?>
</div>