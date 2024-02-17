<?php 


$videosArg = array(
    'post_type'              => 'video_section',
    'posts_per_page'         => '4000',
);

$videos = get_posts($videosArg);
$first = $videos[0];


?>
<div class="video_container_section">
    <div class="news_wrapper">
        <div class="VOVeduContainer">
            <div class="section_general">
                <h2 class="title">VIDEO</h2>
                <div class="separator"></div>
                <?php echo do_shortcode('[button state="stroke" color="red" content="Xem trên Youtube" link="https://www.youtube.com/@phatthanh-truyenhinhic8511"]') ?>
    
            </div>
    
            <div class=" video_component">
                <div class="video_section_wrapper">
                    <div class="col1">
                        <?php 
                        
                        $type=get_field('loại_video',$first->ID);
                        $thumbnail = get_the_post_thumbnail_url($first->ID, 'full');
                        $iframe = get_field('video_youtube',$first->ID);
                        $link = get_field('link_video_tự_tải_len',$first->ID);
                    
                        get_template_part(
                            'includes/components/video',
                            'item',
                            array(
                                'type'=> $type,
                                'thumbnail'=> $thumbnail,
                                'iframe' => $iframe,
                                'link' => $link,
                                'height'=> '100%',
                                )
                            ); 
                        ?>
                    </div>
                    <div class="col2">
                        <div class="items_video_wrapper">
                            <?php 
                            foreach($videos as $key => $item){?>
                                <div class="video_item_thumb <?php if ($key==0){echo "active";} ?> " videoID="<?php echo $item->ID ?>">
                                    <div class="image">
                                        <img src="<?php echo get_the_post_thumbnail_url($item->ID, 'medium') ?>" alt="">
                                    </div>
                                    <div class="title"><?php echo $item->post_title; ?></div>
                                </div>
                            <?php }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    (function($){


        function getVideo(data){
            $('.video_component .col1').addClass('isLoading');
            $.ajax({
                type : "post", //Phương thức truyền post hoặc get
                dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
                url : '<?php echo admin_url('admin-ajax.php');?>', //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                data : {
                    action: "video", //Tên action
						data:data ,
                        
						
                    },
                    
                    beforeSend: function(){
                        
                        
                        
                    },
                    success: function(response) {
                        $('.video_component .col1').html(response.data.data);
                        $('.video_component .col1').removeClass('isLoading');
                      
                    },
                    error: function( jqXHR, textStatus, errorThrown ){
                        //Làm gì đó khi có lỗi xảy ra
                        console.log( 'The following error occured: ' + textStatus, errorThrown );
                    }
                })
	};
        
        
            $('.video_section_wrapper .video_item_thumb').each((index,element)=>{
                $(element).click(function(){
                    $('.video_section_wrapper .video_item_thumb').removeClass('active');
                    $(element).addClass('active');
                    console.log($(element).attr('videoID'));
                    getVideo($(element).attr('videoID'));
                    

                })
            })
    })(jQuery)
</script>