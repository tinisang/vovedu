<?php get_header(); ?>
<?php

$thumbnail_image = get_field('ảnh_banner', $post->ID);
$info = get_field('giới_thiệu_chung', get_the_ID());

?>


<div class="education_detail VOVeduContainer">
    <div class="detail_header">
        <div class="col1">
            <div class="date_section">
                <img src="/wp-content/uploads/2023/11/graduation.svg" alt="">
            </div>

        </div>
        <div class="col2">
            <div class="status_wrapper">
                <?php
                $terms = get_the_terms($post->ID, 'he_dao_dao');
                foreach ($terms as $item) { ?>
                  <a href="<?php echo get_term_link($item->term_id); ?>" class="taxanomy_item">
                  <?php echo $item->name; ?>
                  </a> 
                <? }
                ;
                ?>
            </div>
            <div class="title">
                <?php echo the_title() ?>
            </div>
        </div>
    </div>
    <div class="education_thumbnail">
        <img src="<?
        if ($thumbnail_image) {

        } else {
            $thumbnail_image = '/wp-content/uploads/2023/11/395368406_193501140458389_8491529833385005449_n.jpg';
        }
        ;
        echo $thumbnail_image;
        ?>" alt="">
    </div>
    <div class="extra_detail_section">
        <div class="extra_item">
            <div class="icon">
                <img src="/wp-content/uploads/2023/11/chi-tieu.svg" alt="">
            </div>
            <div class="extra_content">
                <div class="title">Chỉ tiêu</div>
                <div class="value">
                    <?php echo get_field('chỉ_tieu', $post->ID); ?>
                </div>
            </div>
        </div>
        <div class="extra_item">
            <div class="icon">
                <img src="/wp-content/uploads/2023/11/money.svg" alt="">
            </div>
            <div class="extra_content">
                <div class="title">Học phí</div>
                <div class="value">
                    <?php echo get_field('học_phi', $post->ID); ?>
                </div>
            </div>
        </div>
        <div class="extra_item">
            <div class="icon">
                <img src="/wp-content/uploads/2023/11/time.svg" alt="">
            </div>
            <div class="extra_content">
                <div class="title">Thời gian Đào tạo</div>
                <div class="value">
                    <?php echo get_field('thời_gian_dao_tạo', $post->ID); ?>
                </div>
            </div>
        </div>
        <div class="extra_item">
            <div class="icon">
                <img src="/wp-content/uploads/2023/10/location.svg" alt="">
            </div>
            <div class="extra_content">
                <div class="title">Địa điểm Đào tạo</div>
                <div class="value">
                    <?php echo get_field('dịa_diểm_dao_tạo', $post->ID); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="detail_content">

        <div class="event_content_item">
            <div class="col1">
                <div class="title">Đối tượng tuyển sinh</div>
            </div>
            <div class="col2">
                <div class="content_wrapper">
                    <?php
                    echo get_field('dối_tuợng_tuyển_sinh', $post->ID);
                    ?>
                </div>
            </div>
        </div>

        <div class="event_content_item">
            <div class="col1">
                <div class="title">Nội dung Đào tạo</div>
            </div>
            <div class="col2">
                <div class="content_wrapper">
                    <?php
                    echo get_field('nội_dung_dao_tạo', $post->ID);
                    ?>
                </div>
            </div>
        </div>
        <div class="event_content_item">
            <div class="col1">
                <div class="title">Cơ hội Nghề nghiệp</div>
            </div>
            <div class="col2">
                <div class="content_wrapper">
                    <?php
                    echo get_field('co_hội_việc_lam', $post->ID);
                    ?>
                </div>
            </div>
        </div>
        <div class="event_content_item">
            <div class="col1">
                <div class="title">Giấy tờ, thủ tục</div>
            </div>
            <div class="col2">
                <div class="content_wrapper">
                    <?php
                    echo get_field('giấy_tờ_thủ_tục', $post->ID);
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
                        'gallery' => get_field('nội_dung_dao_tạo', get_the_ID()),
                    )
                );
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('includes/components/calltoaction/calltoaction', '1', array('image' => '/wp-content/uploads/2023/10/DSC_8136-1-3.png')); ?>

<?php

$current_post_id = get_the_ID();


//get the categories of the current post
$cats = get_the_terms($current_post_id, 'he_dao_dao');
$cat_array = array();
foreach ($cats as $key1 => $cat) {
    $cat_array[$key1] = $cat->slug;
}
//get the tags of the current post

$args = 
    array(
        'post_type' => 'dao_tao',
        'post_status' => 'publish',
        'tax_query' => array(

            array(
                'taxonomy' => 'he_dao_dao',
                'field' => 'slug',
                'terms' => $cat_array
            )

        ),
        'posts_per_page' => 7,
        'post__not_in' => array($current_post_id),
        'orderby' => array( 'date' => 'DESC')
    );
$related_educations = get_posts($args);

?>
<div class="news_wrapper">
    <div class="VOVeduContainer">
        <div class="section_general">
            <div class="title">CÁC NGÀNH ĐÀO TẠO KHÁC</div>
            <div class="separator"></div>
            <?php echo do_shortcode('[button state="stroke" color="red" content="Xem tất cả" link="/tuyen-sinh"]') ?>

        </div>

        <div class="related_education">

            <div class="navigation_item prev">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M29 57C13.5362 57 1 44.4638 1 29C1 13.536 13.5362 1 29 1C44.464 1 57 13.536 57 29C57 44.4638 44.464 57 29 57Z"
                        stroke="#E93933" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M27.6001 37.4001L19.2001 29.0001L27.6001 20.6001" stroke="#E93933" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M38.8 29H22" stroke="#E93933" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>

            </div>
            <div class="navigation_item next">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M29 1.00001C44.4638 1.00001 57 13.5362 57 29C57 44.464 44.4638 57 29 57C13.536 57 1 44.464 1 29C1.00001 13.5362 13.536 1 29 1.00001Z"
                        stroke="#E93933" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M30.3999 20.5999L38.7999 28.9999L30.3999 37.3999" stroke="#E93933" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M19.2 29L36 29" stroke="#E93933" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>

            </div>

            <div class="education_wrapper swiper">
                <div class="swiper-wrapper">

                    <?php
                    foreach ($related_educations as $item) {

                        $thisterms = get_the_terms($item->ID, 'he_dao_dao');
                        $thumbnail_image1 = get_field('ảnh_banner',$item->ID);
                        ?>
                        <div class="education_item swiper-slide">
                            <div class="education_taxanomy">
                                <?php

                                foreach ($thisterms as $value) { 
                                    
                                    
                                    ?>
                                    <a href="<?php echo get_term_link($value->term_id); ?>" class="education_taxanomy_item">
                                        <?php echo $value->name; ?>

                                    </a>
                                <? } ?>

                            </div>
                            <a href="<?php echo get_permalink($item->ID) ?>" class="education_item_wrapper">
                                <img src="
                                <?
                                if ($thumbnail_image1) {

                                } else {
                                    $thumbnail_image1 = '/wp-content/uploads/2023/11/395368406_193501140458389_8491529833385005449_n.jpg';
                                }
                                ;
                                echo $thumbnail_image1;
                                ?>
                            " alt="">
                                <div class="title">
                                    <?php echo $item->post_title; ?>
                                </div>

                            </a>

                        </div>
                    <?php }

                    ?>
                </div>

            </div>
        </div>
    </div>

</div>



<?php get_footer(); ?>

<script>

    (function ($) {
        var relatedEducation = new Swiper(".related_education .education_wrapper", {
            loop: true,
            speed: 1000,
            slidesPerView: 3,
            spaceBetween: 20,
            grabCursor: true,
            navigation: {
                nextEl: ".related_education .next",
                prevEl: ".related_education .prev",
            },
            breakpoints: {

                // when window width is >= 480px
                300: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                // when window width is >= 640px
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                }
            }

        });

    })(jQuery)
</script>