<?php
/*
 Template Name: Đào tạo
 */

 ?>


<?php get_header();?>
<?php get_template_part('includes/components/page','herosection',array('title'=>'Đào tạo')); ?>

<?php $id = get_the_ID(); ?>
<?php 
    $description = get_field('lời_dẫn',$id);
    $type = get_field('loại_video',$id);
    $thumbnail = get_field('thumbnail',$id);
    $iframe = get_field('link_video_youtube',$id);
    $link= get_field('file_video_tự_tải_len',$id);
    $terms = get_field('dao_tạo',$id);
  

?>

<div id="introduction_section">
    <?php get_template_part(
        'includes/components/student',
        'introduction',
        array(
            'description'=>$description,
            'big-title'=> 'HOẠT ĐỘNG ĐÀO TẠO',
            'title'=> 'Nhiệm vụ trọng tâm',
            'type'=> $type,
            'thumbnail'=> $thumbnail,
            'iframe' => $iframe,
            'link' => $link

            )
        ); 
    ?>
</div>

<div class="education-info">
    <?php get_template_part(
        'includes/components/information',
        'documents',
        array(
            'post-type'=>'post',
            'taxanomy'=>'category',
            'title' => "Đào tạo",
            'in'=>$terms,
        )
        ); 
    ?>

</div>


<?php get_footer();?>
