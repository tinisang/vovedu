
<?php

$description = $args['description'];
$thumbnail=$args['thumbnail'];
$iframe=$args['iframe'];
$type= $args['type'];
$link= $args['link'];
$title = $args['title'];
$bigTitle = $args['big-title'];
?>

<div class="section_general student_video">
    <h2 class="title"><?php echo $bigTitle; ?></h2>
    <div class="separator"></div>
    <div class="VOVeduContainer">

        <h3 class="small-title"><?php echo $title; ?></h3>
        <div class="description">
            <?php echo $description; ?>
        </div>
        <?php get_template_part(
        'includes/components/video',
        'item',
        array(
            'type'=> $type,
            'thumbnail'=> $thumbnail,
            'iframe' => $iframe,
            'link' => $link,
            'height'=> '650px',
            )
        ); 
    ?>
    </div>
</div>