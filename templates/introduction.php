<?php
/*
 Template Name: Giới thiệu
 */

 ?>

<?php get_header();?>
<?php get_template_part('includes/components/page','herosection',array('title'=>'Giới thiệu')); ?>
<?php get_template_part('includes/components/home', 'history'); ?>
<?php get_template_part('includes/components/home', 'video'); ?>
<div id="leaders_block">

    <?php get_template_part('includes/components/intro', 'leaders'); ?> 
</div>
<div id="department">

    <?php get_template_part('includes/components/intro', 'departments'); ?> 
</div>
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
<?php get_footer();?>
