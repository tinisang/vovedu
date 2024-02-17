<?php 

    $posts = $args['data'];
    $title= $args['title'];
    if($title){

    }else{
        $title='TIN TỨC';
    };

?>

<div class="news_wrapper">
    <div class="VOVeduContainer">
        <div class="section_general">
            <h2 class="title"><?php echo $title; ?></h2>
            <div class="separator"></div>
            <?php echo do_shortcode('[button state="stroke" color="red" content="Xem toàn bộ tin tức" link="/category/news"]') ?>

        </div>

    </div>

    <div class="VOVeduContainer">
            <div class="posts_area ">
                <div class="col1">
                    <?php   get_template_part('includes/components/home_post','loop',array(
                            'id'=>$posts[0]->ID,
                            'size'=>'large',
                        )); ?>
                </div>

                <div class="col2">
                <?php 
                   
                   foreach ($posts as $key => $item){
                       if ($key !=0){

                        get_template_part('includes/components/home_post','loop',array(
                            'id'=>$item->ID,
                            'size'=>'medium',
                        ));
                       };
                   };
                  
                  ?>
                </div>
                  

                    <div class="mobileOnly">
                        <?php echo do_shortcode('[button content="Xem tất cả tin tức" link="/thong-tin-tong-hop"] ') ?>
                    </div>
            </div>
    </div>

</div>