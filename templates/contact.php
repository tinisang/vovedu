<?php
/*
 Template Name: Liên hệ
 */

 ?>

<?php get_header();?>
<?php get_template_part('includes/components/page','herosection',array('title'=>'Liên hệ')); ?>

<?php get_template_part('includes/components/intro', 'departments'); ?> 

<div class="VOVeduContainer contact_wrapper_form">
<?php get_template_part('includes/components/forms/form', 'contact',array('id'=>'multiple1')); ?>

</div>



<?php get_footer();?>
