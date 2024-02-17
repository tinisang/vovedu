<?php if ($args['button']=='true'){
    ?>

<a href="<?php echo $args['link']?>" class="button_wrapper <?php echo $args['state'].' '.$args['size'].' '.$args['color']; ?> ">
        <div class="link_text"><?php echo $args['content']; ?></div>
        <?php 
      
        if ($args['icon_visible'] != 'false'){
            ?>
        <div class="icon">
            <?php echo $args['icon']; ?>
            </div>
            <?php
        }
        
        ?>
        
</a>

    <?php
} else{

    ?>
    <div  class="button_wrapper <?php echo $args['state'].' '.$args['size'].' '.$args['color']; ?> ">
        <div class="link_text"><?php echo $args['content']; ?></div>
        <?php 
      
        if ($args['icon_visible'] != 'false'){
            ?>
        <div class="icon">
            <?php echo $args['icon']; ?>
            </div>
            <?php
        }
        
        ?>
        
    </div>
    <?php
} ?>