<?php get_header(); ?>
<h1 style="display:none;">VOVedu - Trường Cao đẳng Phát thanh Truyền hình 1</h1>
<?php

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
);

$posts = get_posts($args);

?>
<?php get_template_part('includes/components/home', 'slider'); ?>
<?php get_template_part('includes/components/home', 'marquee'); ?>


<?php get_template_part('includes/components/home', 'features'); ?>
<?php get_template_part('includes/components/home', 'video'); ?>
<?php get_template_part('includes/components/home', 'testimonial'); ?>
<?php get_template_part('includes/components/home', 'history'); ?>
<?php get_template_part('includes/components/home', 'education'); ?>
<?php get_template_part('includes/components/calltoaction/calltoaction', '1', array('image' => '/wp-content/uploads/2023/10/DSC_8136-1-3.png')); ?>

<?php get_template_part(
    'includes/components/video',
    'component',
);
?>

<?php get_template_part('includes/components/home', 'activities'); ?>


<?php get_template_part(
    'includes/components/home',
    'images',
    array(
        'images' => get_field('thu_viện_ảnh', '8'),
        'title' => 'ẢNH HOẠT ĐỘNG',
        'small_title' => 'Hoạt động sôi nổi',
        'description' => 'Một số hình ảnh hoạt động của sinh viên'
    )
);
?>
<?php get_template_part(
    'includes/components/news',
    'component',
    array(
        'data' => $posts
    )
); ?>

<?php

?>

<?php

$questions = get_field('cau_hỏi_thuờng_gặp', 8);


?>


<?php
$argsEvent = array(
    'post_type' => 'su_kien',
    'posts_per_page' => '5',
    'meta_key' => 'ngay_bắt_dầu_hoặc_ngay_diễn_ra_sự_kiện',
    'orderby' => 'meta_value_num',
    'order' => 'DESC'

);

$events = get_posts($argsEvent);

get_template_part(
    'includes/components/event',
    'blocks',
    array(
        'data' => $events,
        'title' => "SỰ KIỆN"
    )
);

?>



<?php get_template_part(
    'includes/components/home',
    'question',
    array(
        'data' => $questions
    )
); ?>

<div class="VOVeduContainer contact_wrapper_form">
    <?php get_template_part('includes/components/forms/form', 'contact', array('id' => 'multiple1')); ?>

</div>


<?php get_template_part('includes/components/popups/popup', 'ads'); ?>
<?php get_footer(); ?>