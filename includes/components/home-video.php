<?php 
        $type = get_field('loại_video','8');
        $thumbnail = get_field('thumbnail','8');
        $iframe = get_field('link_video_youtube',8);
        $nav_link= get_field('link_diều_huớng',8);
        $link= get_field('file_video_tự_tải_len',8);
        $description= get_field('mo_tả',8);

        ?>
<div class="section_general video ">

    <h2 class="title">TRAO TRI THỨC BẰNG CẢ TRÁI TIM</h2>
    <div class="separator"></div>

    <div class="VOVeduContainer video_section">
        <?php get_template_part(
        'includes/components/video',
        'item',
        array(
            'type'=> $type,
            'thumbnail'=> $thumbnail,
            'iframe' => $iframe,
            'link' => $link,
            )
        ); 
    ?>
    <div class="col2">
        <div class="normal-text description"><?php echo $description;   ?></div>
        <?php echo do_shortcode('[button state="single" link="'.$nav_link.'"]')  ?>
    </div>
    
    </div>
</div>