<?php get_header(); ?>


<?php get_template_part('includes/components/page', 'herosection', array('title' => 'TIN TỨC','h1'=>'no')); ?>
<div class="VOVeduContainer singlepost">
    <h1 class="post_title">
        <?php echo the_title(); ?>
    </h1>
    <div class="content-container">
        <div class="col1">
            <div class="properties">

                <div class="property-item">
                    <div class="icon"><img src="/wp-content/uploads/2023/10/🦆-icon-_calendar_.svg" alt=""></div>
                    <div class="content">
                        <?php echo get_the_date('d/m/Y', $post->ID); ?>
                    </div>

                </div>

            </div>

            <div class="feature-image">
                <img src="<?php echo get_the_post_thumbnail_url($post->ID) ?>" alt="">
            </div>

            <div class="content-detail">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="col2 desktopOnly">

            <div class="categories">
                <h2 class="section-title">DANH MỤC</h2>
                <div class="categories-list">
                    <?php

                    $this_post_cat = get_the_terms($post->ID, 'category');
                    $cat_list = [];
                    foreach ($this_post_cat as $item) {
                        array_push($cat_list, $item->name);
                    }
                    ;
                    $terms = get_the_terms($post->ID, 'category');

                    foreach ($terms as $value) {
                        $check = '';
                        if (in_array($value->name, $cat_list)) {
                            $check = 'checked';
                        }
                        echo '
            <a class="category-item ' . $check . '" href="' . get_term_link($value->term_id) . '">
        <div class="cat-title">' . $value->name . '</div>
        <div class="cat-count">' . $value->count . '</div>
    </a>
            ';
                    }
                    ;



                    ?>
                </div>
            </div>
<?php 
$ads_link = get_field('link',10256);
$adsimage = get_field('ảnh',10256) ;
?>
            <a class="ads" href="<?php echo $ads_link; ?>">
                <img src="<?php echo $adsimage; ?>" alt="">
            </a>

            <div class="events">
                <h2 class="section-title">SỰ KIỆN</h2>
                <div class="separator"></div>
                <div class="events_wrapper">


                    <?php
                    $eventsArg = array(
                        'post_type' => 'su_kien',
                        'post_per_page' => '10000',

                    );
                    $events = get_posts($eventsArg);

                    foreach ($events as $item) { ?>
                        <div class="event_item">
                            <div class="time_section">
                                <div class="date_section">
                                    <img src="/wp-content/uploads/2023/11/calendar-smal.svg" alt="">
                                    <div class="date_data">
                                        <?php echo get_the_date('d', $item->ID) ?>
                                    </div>
                                </div>
                                <div class="month_year">
                                    <?php echo get_the_date('m / Y', $item->ID) ?>
                                </div>

                            </div>
                            <div class="info_section">
                                <a href="<?php echo get_permalink($item->ID) ?>" class="title">
                                    <?php echo $item->post_title; ?>
                                </a>
                                <?php echo do_shortcode('[button state="single" link="' . get_permalink($item->ID) . '"]'); ?>
                            </div>
                        </div>
                    <?php }

                    ?>
                </div>
            </div>




        </div>
    </div>

</div>
<?php

$current_post_id = get_the_ID();


//get the categories of the current post
$cats = get_the_terms($current_post_id, 'category');
$cat_array = array();
foreach ($cats as $key1 => $cat) {
    $cat_array[$key1] = $cat->slug;
}
//get the tags of the current post
$tags = get_the_tags($current_post_id);
$tag_array = array();
foreach ($tags as $key2 => $tag) {
    $tag_array[$key2] = $tag->slug;
}
$related_posts = get_posts(
    array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'tax_query' => array(

            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => $cat_array
            )

        ),
        'posts_per_page' => 5,
        'post__not_in' => array($current_post_id),
        'orderby' => array( 'date' => 'DESC')
    )
);
get_template_part(
    'includes/components/news', 
    'component',
    array(
        'data'=> $related_posts,
        'title'=> 'TIN TỨC LIÊN QUAN'
    )
    );
?>

<div class="VOVeduContainer contact_wrapper_form">
    <?php get_template_part('includes/components/forms/form', 'contact', array('id' => 'multiple1')); ?>

</div>

<?php get_footer(); ?>

<?php
customSetPostViews(get_the_ID());
?>