
<?php get_header();?>
<?php 

    $thumbnail_image = get_the_post_thumbnail_url($post, "full");
    $info = get_field('giới_thiệu_chung',get_the_ID());

?>
<div class="event_thumbnail">
    <img src="<? echo $thumbnail_image; ?>" alt="">
</div>

<div class="event_detail VOVeduContainer">
    <div class="detail_header">
        <div class="col1">
            <div class="date_section">
                <img src="/wp-content/uploads/2023/11/🦆-icon-_calendar-1_.svg" alt="">
                <div class="date_data"><?php echo get_the_date('d', get_the_ID()) ?></div>
            </div>
            <div class="month_year"><?php echo get_the_date('m / Y', get_the_ID()) ?></div>
        </div>
        <div class="col2">
            <div class="status"><?php echo get_field('thời_gian',get_the_ID()); ?></div>
            <div class="title"><?php echo the_title() ?></div>
        </div>
    </div>

    <div class="detail_content">
        <div class="event_content_item">
            <div class="col1">
                <div class="title">Giới thiệu chung</div>
            </div>
            <div class="col2">
                <div class="content_wrapper">
                    <?php 
                    if ($info['chọn_cach_thức_giới_thiệu'] =='Bằng Văn Bản'){
                        echo $info['mo_tả'];
                    }else{ 
                        foreach($info['dầu_mục'] as $item){
                        ?>
                        <div class="bullet_item">
                            <div class="title_bullet"><?php echo $item['ten_dầu_mục'] ?></div>
                            <div class="content_bullet"><?php echo $item['nội_dung_dầu_mục'] ?></div>
                        </div>
                    <?php }};
                    ?>
                </div>
            </div>
        </div>
        <div class="event_content_item">
            <div class="col1">
                <div class="title">Hình ảnh</div>
            </div>
            <div class="col2">
            <?php get_template_part(
            'includes/components/component', 
            'gallery', 
            array(
            'gallery'=>get_field('hinh_ảnh',get_the_ID()),
            )
        ); 
        ?>
            </div>
        </div>
    </div>
</div>

<?php 
$args = array(
    'post_type'              => 'su_kien',
    'posts_per_page'         => '5',
    'meta_key' => 'ngay_bắt_dầu_hoặc_ngay_diễn_ra_sự_kiện',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
    'post__not_in'   => [get_the_ID()]
);


$related_events = get_posts($args);

get_template_part(
    'includes/components/event', 
    'blocks',
    array(
        'data'=> $related_events,
        'title'=> 'SỰ KIỆN KHÁC'
    )
    ); 
    
?>


<?php get_footer();?>
