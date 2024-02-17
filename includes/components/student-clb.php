<?php
    $clubs= get_field('cau_lạc_bộ',10270);

?>

<div class="student_clb">
    <div class="VOVeduContainer" style="background-image: url(<?php echo get_field('background_overlay',10270); ?>)">
        <div class="col1">
            <div class="col1_wrapper">
                <h2 class="title">CÂU LẠC BỘ</h2>
                <div class="description"><?php echo get_field('description',10270); ?></div>
                <?php echo do_shortcode('[button state="single" link="/cau-lac-bo" ]') ?>

            </div>
        </div>
        <div class="col2">
            <div class="clb_wrapper">
                <?php 
                    foreach($clubs as $key => $item){ ?>
                        <div class="clb_item">
                            <div class="thumb_area">
                                <div class="index"><?php echo ($key + 1) ?></div>
                                <img src="<?php echo $item['ảnh_thumbnail_clb']; ?>" alt="" class="image">
                                <?php  echo do_shortcode('[button icon_visible="false" link="'.$item['link'].'"]')?>
                            </div>
                            <a href="<?php echo $item['link'] ?>" class="clb_name"><?php echo $item['ten_clb']; ?></a>
                        </div>
                <?php    }
                ?>
            </div>
        </div>

    </div>
</div>