<?php
    $thumbnail=$args['thumbnail'];
    $iframe=$args['iframe'];
    $type= $args['type'];
    $link= $args['link'];
    $height= $args['height'];

?>

<div class="video_item">
            <div class="thumbnail">
                <div class="icon"><img src="/wp-content/uploads/2023/10/video.svg" alt=""></div>
                <img src="<?php echo $thumbnail; ?>" alt="">
            </div>
            
           <?php
        if (str_contains($type,"Youtube")){
            echo($iframe);
            
        } else{ ?>
            <video width="100%" height="100%" controls>
            <source src="<?php echo $link ?>" type="video/mp4">

            </video>
        <?php }
        ?>
    </div>