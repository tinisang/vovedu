<?php
/*
 Template Name: Câu lạc bộ
 */

 ?>


<?php get_header();?>
 <?php 
    $gallery = get_field('ảnh_hoạt_dộng_clb_tieu_biểu','11768');
 ?>
<?php get_template_part(
    'includes/components/page',
    'herosection',
    array(
        'title'=>'Câu lạc bộ',
        'image'=> get_field('ảnh_banner','11768')
        )
    ); 
?>
<?php get_template_part(
    'includes/components/clb', 
    'gallery',
    array(
        'gallery'=>$gallery,
    )
    
    ); ?>
<?php get_template_part('includes/components/clb', 'introduction'); ?>
<?php get_template_part('includes/components/home', 'testimonial'); ?>

<?php get_footer();?>