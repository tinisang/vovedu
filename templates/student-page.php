<?php
/*
 Template Name: Hoạt động sinh viên
 */

 ?>

<?php 
    $description = get_field('lời_dẫn','10270');
    $type = get_field('loại_video','10270');
    $thumbnail = get_field('thumbnail','10270');
    $iframe = get_field('link_video_youtube',10270);
    $link= get_field('file_video_tự_tải_len',10270);
    
    $gallery= get_field('khoảnh_khắc_vovedu',10270);
    $alumini_human = get_field('guong_mặt_tieu_biểu',10270);
    $alumini_gallery = get_field('hinh_ảnh',10270);

?>
 
<?php get_header();?>

    <?php get_template_part(
        'includes/components/page',
        'herosection',
        array(
            'title'=>'TRANG HỌC SINH, SINH VIÊN',
            'image'=> get_field('ảnh_banner','10270')
            )
        ); 
    ?>

<div id="introduction_section">
    <?php get_template_part(
        'includes/components/student',
        'introduction',
        array(
            'description'=>$description,
            'big-title'=> 'PHƯƠNG CHÂM ĐÀO TẠO',
            'title'=> 'Cộng đồng sinh viên',
            'type'=> $type,
            'thumbnail'=> $thumbnail,
            'iframe' => $iframe,
            'link' => $link

            )
        ); 
    ?>
</div>

<?php get_template_part(
    'includes/components/student',
    'gallery',
    array(
       'gallery'=> $gallery

        )
    ); 
?>
<?php get_template_part('includes/components/home', 'testimonial'); ?>

<?php
  
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5,
    );
    
    $posts = get_posts($args);

    
?>
<div id="club">

    <?php get_template_part('includes/components/student', 'clb'); ?>
</div>
<div id="dorms">
    <?php get_template_part(
        'includes/components/home', 
        'images', 
        array(
            'images'=> get_field('thu_viện_ảnh','8'),
            'title'=>'ẢNH HOẠT ĐỘNG',
            'small_title'=>'Hoạt động sôi nổi',
            'description' => 'Một số hình ảnh hoạt động của sinh viên'
        )
    ); 
    ?>

</div>
<div id="events">
<?php 
$argsEvent = array(
    'post_type'              => 'su_kien',
    'posts_per_page'         => '5',
    'meta_key' => 'ngay_bắt_dầu_hoặc_ngay_diễn_ra_sự_kiện',
    'orderby' => 'meta_value_num',
    'order' => 'DESC'
   
);

$events = get_posts($argsEvent);

get_template_part(
    'includes/components/event', 
    'blocks',
    array(
        'data'=> $events,
        'title' => "SỰ KIỆN"
    )
    ); 
    
?>


</div>    


<div class="student_news" id="student_news">
<?php get_template_part(
    'includes/components/news', 
    'component',
    array(
        'data'=> $posts
    )
); ?>

</div>





<?php get_footer();?>