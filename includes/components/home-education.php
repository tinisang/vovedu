<?php
         $terms = get_terms( array(
            'taxonomy'   => 'he_dao_dao',
            'hide_empty' => false,
            'orderby' => 'menu_order',  
     
        ) ); 
        

?>

<div class="intro_education_title_section VOVeduContainer">
    <div class="title_section section_general">

        <h2 class="title">CHƯƠNG TRÌNH ĐÀO TẠO</h2>
    </div>
</div>
<div class=" VOVeduContainer educations">

    
  

        <div class="education_wrapper">
                
                <div class="education_container">

                    <?php 
                    
                        foreach($terms as $index => $item){
                            
                            ?>
                            <div class="education_item <?php if ($index == 0){echo '';}; ?>">
                                <div class="col1">
                                    <h3 class="education_name"><?php echo $item-> name; ?></h3>
                                </div>
                                <div class="columns_wrapper">
                                    <div class="col2">
                                        <?php 

                                       $args = array(
                                            'post_type' => 'dao_tao',
                                            'posts_per_page' => 10000, 
                                            'tax_query' => array(
                                              array(
                                                  'taxonomy' => 'he_dao_dao',
                                                  'field' => 'id',
                                                  'terms' => $item->term_id,
                                                  'operator' => 'IN',  
                                              )
                                            ),
                                           
                                        );
                                        $edus = get_posts($args);
                                        
                                        foreach($edus as $human_item){ ?>
    
                                            <div class="field_item">
                                                <div class="image">
                                                    <img src="<?php 
                                                    $imageurl = get_the_post_thumbnail_url($human_item->ID, 'full'); 
                                                    if ($imageurl){

                                                    }else{
                                                        $imageurl ='/wp-content/uploads/2023/10/Thu-1.png';
                                                    }
                                                    echo $imageurl;
                                                    ?>" alt="">

                                                        <?php echo do_shortcode('[button content="Xem thêm" state="stroke" color="white" link="'.get_permalink($human_item->ID).'"]') ?>
                                                    
                                                </div>
                                                <div class="detail_info">
                                                    
                                                    <a href="<?php echo get_permalink($human_item->ID) ?>" class="name"><?php echo $human_item-> post_title; ?></a>
                                                </div>
                                            </div>
                                     <?php   }

                                        ?>
                                    </div>

                                </div>
                            </div>
                     <?php   };
                    
                    ?>
                
                    
                </div>

            </div>



  

    
</div>
<script>

    (function($){
    
      
    
    
    
    
    
    
    $('.educations .education_item .col1').each((index, element) => {
            $(element).click(function() {
                if ($(element).closest('.education_item').hasClass('active')) {
                    $('.educations .education_item').removeClass('active')
                    $('.educations .education_item .columns_wrapper').css('height', '0px');
    
                } else {
    
                    $('.educations  .education_item').removeClass('active')
                    $('.educations  .education_item .columns_wrapper').css('height', '0px');
                    $(element).closest('.education_item').addClass('active')
                    var height = $('.col2', $(element).closest('.education_item')).innerHeight()
                    $('.columns_wrapper', $(element).closest('.education_item')).css('height',
                        `${height}px`);
                }
            })
        })
    })(jQuery)
</script>
