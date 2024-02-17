<?php get_header();?>
<?php  
 
    $thumbnail=get_the_post_thumbnail_url($post->ID, 'full');
    $iframe=get_field('video_youtube', $post->ID);
    $type= get_field('loại_video',$post->ID);
    $link=get_field('link_video_tự_tải_len',$post->ID); 
?>

<?php get_template_part(
    'includes/components/page',
    'herosection',
    array(
        'title'=>'VIDEO'
    )
    ); 
    
?>
<div class="VOVeduContainer singlepost">
    <div class="title"><?php echo the_title(); ?></div>
    <div class="content-container">
        <div class="col1">
            <div class="properties">
            
           
                <div class="property-item">
                    <div class="icon"><img src="/wp-content/uploads/2023/10/🦆-icon-_calendar_.svg" alt=""></div>
                    <div class="content"><?php echo get_the_date('d/m/Y',$post->ID); ?></div>
                    
                </div>
             
            </div>

            <div class="feature-image">
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
            
            <div class="content-detail">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="col2">

        <div class="categories">
            <div class="section-title">SỰ KIỆN</div>
            <div class="categories-list">
        
            </div>
        </div>

        
        
        </div>
    </div>

</div>
<?php get_footer();?>

<?php 
    customSetPostViews(get_the_ID());
?>