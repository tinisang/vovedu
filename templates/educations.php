<?php
/*
 Template Name: Thông tin Đào tạo
 */

 ?>

<?php get_header();?>


<?php 

$alumini_human = get_field('guong_mặt_tieu_biểu',10272);
$alumini_gallery = get_field('hinh_ảnh',10272);

?>


<?php get_template_part(
    'includes/components/page',
    'herosection',
    array(
        'title'=>'Thông tin Đào tạo',
        
        )
    ); 
?>
<?php
  
  $args = array(
      'post_type' => 'post',
      'posts_per_page' => 5,
  );
  
  $posts = get_posts($args);



  
?>
<div class="education-info">
    <?php get_template_part(
        'includes/components/information',
        'documents',
        array(
            'post-type'=>'dao_tao',
            'taxanomy'=>'he_dao_dao',
            'title' => "Đào tạo",
        )
        ); 
    ?>

</div>
<?php get_template_part(
    'includes/components/student', 
    'alumini', 
    array(
       'alumini_human' => $alumini_human,
       'alumini_gallery' => $alumini_gallery,
       'title'=> 'HÌNH ẢNH ĐÀO TẠO',
    )
); 
?>

<?php get_template_part('includes/components/home', 'testimonial'); ?>

<div class="education_news">
    <?php get_template_part(
        'includes/components/news', 
        'component',
        array(
            'data'=> $posts
        )
    ); 
?>

</div>


<div class="VOVeduContainer contact_wrapper_form">
<?php get_template_part('includes/components/forms/form', 'contact',array('id'=>'multiple1')); ?>

</div>



<?php get_footer();?>