<?php 


$newsArgs = array(
    'post_type'              => 'post',
    'posts_per_page'         => '4',
);

$news = get_posts($newsArgs);


?>

<div class="information_news VOVeduContainer">
    <div class="row1">
        <div class="col1">
            <h2 class="title">TIN TỨC</h2>
        </div>
        <div class="col2">
            <div class="categories_container">
                <div class="categories_wrapper">
                <div class="category_item active">Tất cả</div>
                    <?php 
                    $terms = get_terms( array(
                        'taxonomy'   => 'category',

                        ) ); 
                        foreach($terms as $item){?>
                        <div class="category_item" catId="<?php echo $item->term_id ?>" id="<?php echo $item->slug ?>"><?php echo $item -> name ?></div>

                      <?php  }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row2">
        <div class="col1"></div>
        <div class="col2">
            <div class="first">
                <?php         get_template_part('includes/components/post','loop2',array('id'=> $news[0]->ID));  ?>
            </div>
            <div class="next_wrapper">
                <?php  
                    foreach($news as $key => $item){
                        if ($key >0){ ?>
                    <?php  get_template_part('includes/components/post','loop2',array('id'=> $item->ID));  ?>


                       <?php }
                    }
                ?>
            </div>
            <?php echo do_shortcode('[button content"Xem thêm tin tức" link="/category/news"]', $ignore_html) ?>
        </div>
    </div>
</div>


<script>
    (function($){
        function queryNews(data){
        $('.information_news .row2 .col2').addClass('isLoading');
        
        $.ajax({
            type : "post", //Phương thức truyền post hoặc get
                dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
                url : '<?php echo admin_url('admin-ajax.php');?>', //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                data : {
                    action: "query_news", //Tên action
                    data:data,
                    
                    
                },
                
                beforeSend: function(){
                    
                    
                    
                },
                success: function(response) {
                    if(!response.data.view_more){
                        $('.information_news .row2 .col2 .button_wrapper').addClass('hide');
                    } else{

                        $('.information_news .row2 .col2 .button_wrapper').attr('href',response.data.link);
                        $('.information_news .row2 .col2 .button_wrapper').removeClass('hide');

                    }
                    $('.information_news .row2 .col2').removeClass('isLoading');
                    $('.information_news .row2 .col2 .first').html(response.data.first)
                    $('.information_news .row2 .col2 .next_wrapper').html(response.data.next)
                    
                },
                error: function( jqXHR, textStatus, errorThrown ){
                    //Làm gì đó khi có lỗi xảy ra
                    console.log( 'The following error occured: ' + textStatus, errorThrown );
                }
            })
	}
    var dataQueryNews={
        'categories': '',
        'categoryID': '',
        'posts_per_page':4
     
    }

    $('.information_news .row1 .col2 .category_item').each((index, element)=>{
        $(element).click(function(){

            $('.information_news .row1 .col2 .category_item').removeClass('active')
            $(element).addClass('active');

            gsap.to('.information_news .row1 .col2 .categories_container', { 
                duration: 1, 
                scrollTo:{
                    x: $(element),
                    offsetX:50,
                }  
            });
            dataQueryNews.categories = $(element).attr('id');
            dataQueryNews.categoryID = $(element).attr('catId');
   
            queryNews(dataQueryNews)
        })
    })
    })(jQuery)
</script>