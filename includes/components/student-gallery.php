<?php 
    $gallery = $args['gallery'];
    $totalNum = count($gallery);
    $extra = $totalNum - 11;
?>

<div class="student_gallery section_general">
    <h2 class="title">KHOẢNH KHẮC VOVEDU</h2>
    <div class="separator"></div>
    <div class="VOVeduContainer">
        <div class="col1">
            <img src="/wp-content/uploads/2023/10/DSC_9651-1.png" alt="">
        </div>
        <div class="col2 gallery_student_wrapper">
        <?php
                foreach ($gallery as $key=> $item){
                    if ($key<11){
                        if ($key ==10){ ?>
                <div class="gallery_item" imageID="<?php echo $key ?>">
                     <img src="<?php echo $item['sizes']['medium_large']; ?>" alt="">
                     <div class="view_more">+<?php echo $extra ?></div>
                 </div>
    
    
                      <?php  }else{
                    ?>
    
                 <div class="gallery_item" imageID="<?php echo $key ?>">
                     <img src="<?php echo $item['sizes']['medium_large']; ?>" alt="">
                     <?php echo do_shortcode('[button icon_visible="false" button="false" content="Phóng to"]') ?>
                 </div>
                 
               <?php }}};
                ?>
        </div>

    </div>

    <?php get_template_part(
        'includes/components/popup_slide', 
        'images', 
        array(
            'gallery'=> $gallery,
            'selector'=>'.student_gallery .gallery_student_wrapper .gallery_item'
            
        )
        ); 
?>
</div>