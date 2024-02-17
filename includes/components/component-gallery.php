<?php 

    $gallery = $args['gallery'];
    $totalNum = count($gallery);
    $extra = $totalNum - 7;
    
?>

<div class="component_gallery">
    <div class="gallery_wrapper">
        <div class="gallery">
            <?php
            foreach ($gallery as $key=> $item){
                if ($key<7){
                    if ($key ==6){ ?>
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
            'selector'=>'.component_gallery .gallery .gallery_item'
            
        )
        ); 
?>
</div>