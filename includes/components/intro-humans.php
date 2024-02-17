<?php
    $humans = get_field('nhom_giảng_vien_-_can_bộ','10264');

?>

<div class="human_introduction">


    <?php
        foreach($humans as $cat){ ?>
 <div class="human_category_section VOVeduContainer">
        <div class="title_area">
            <div class="title">
                <?php echo $cat['ten_nhom'] ?>

            </div>
        </div>
        <div class="human_area">

            <?php
                foreach($cat['giảng_vien_can_bộ'] as $value){ ?>
        <div class="human_item">
                        <div class="image">
                            <img src="<?php echo $value['ảnh'] ?>" alt="" srcset="">
                        </div>
                        <div class="text">
                            <div class="title"><?php echo $value['chức_vụ'] ?></div>
                            <div class="name"><?php echo $value['ten'] ?></div>
                        </div>
                    </div>
               <?php }
            ?>
            
            
            
        </div>
    </div>
    <div class="separator"></div>

       <?php }

    ?>

   
   
</div>