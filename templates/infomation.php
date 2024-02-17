<?php
/*
 Template Name: Thông tin tổng hợp
 */

 ?>


<?php get_header();?>

<?php 
  
 ?>
<?php get_template_part(
    'includes/components/page',
    'herosection',
    array(
        'title'=>'Tin tức tổng hợp',
        
        )
    ); 
?>
<div id="news_block">
    <?php get_template_part(
        'includes/components/information',
        'news'
    ); 
    ?>

</div>
<div id="events_block">

    <?php get_template_part(
            'includes/components/information',
            'events'
        ); 
        ?>
</div>

<div id="document_block">


    <?php get_template_part(
                'includes/components/information',
                'documents',
                array(
                    'post-type'=>'tai_lieu',
                    'taxanomy'=>'loai_tai_lieu',
                    'title' => "Văn bản",
                    'linkType'=>'file'
                    )
                ); 
                ?>

</div>

<div id="video_block">

    <?php get_template_part(
        'includes/components/video',
        'component',
    ); 
    ?>

</div>


<?php get_footer();?>