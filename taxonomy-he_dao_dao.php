<?php
/*
 Template Name: Thông tin Đào tạo
 */

 ?>

<?php get_header();?>


<?php 

$alumini_human = get_field('guong_mặt_tieu_biểu',10270);
$alumini_gallery = get_field('hinh_ảnh',10270);

?>

<?php
    $obj = get_queried_object();
    $posts_per_page = 2000;
    $cat_slug = $obj->slug;
    $args = array(
        'post_type' => 'dao_tao',
        'posts_per_page' => $posts_per_page,
        'tax_query' => array(
            array(
                'taxonomy' => 'he_dao_dao',
                'field' => 'slug',
                'terms' => $cat_slug
            )
         )
    );
    
    $educations = get_posts($args);
    
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
            'first' => $educations,
            'cat_slug'=> $cat_slug,
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
       'title'=> 'Giảng viên',
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




<?php get_footer();?>