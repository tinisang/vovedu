<?php
$args = array(
    'post_type' => 'post',
    'post_per_page' => 5
);
$posts = get_posts($args);

?>
<?php
    $svg='<svg xmlns="http://www.w3.org/2000/svg" width="17" height="13" viewBox="0 0 17 13"
    fill="none">
    <path d="M10.5289 11.7919L15.8208 6.49998L10.5289 1.20807" stroke="white"
        stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round"
        stroke-linejoin="round" />
    <path d="M0.999999 6.49988L15.6726 6.49988" stroke="white" stroke-width="1.8"
        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
</svg>';

?>

<div class="VOVeduContainer marquee_area">
    <div class="marquee_container">
        <div class="col1">
            <a href='/category/news/' class="title">Tiêu đề tin mới nhất</a>
            <div class="marquee_wrapper swiper">
                <div class="swiper-wrapper">

                    <?php


                    foreach ($posts as $post) { ?>

                        <div class="marquee_item swiper-slide">
                            <a href="<?php echo get_permalink($post->ID); ?>" class="title">
                                <?php echo $post->post_title; ?>
                                <?php echo $svg; ?>
                            </a>
                            <div class="date"><?php echo get_the_date('d/m/Y', $post->ID); ?></div>
                        </div>
                    <?php }

                    ?>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="navigation_area">
                <div class="navigation_item prev">
                    <svg width="21" height="35" viewBox="0 0 21 35" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="17.1936" y="34.2843" width="24.3154" height="4.84853"
                            transform="rotate(-135 17.1936 34.2843)" fill="#E93933" />
                        <rect x="0.232178" y="16.9614" width="23.9871" height="4.84853"
                            transform="rotate(-45 0.232178 16.9614)" fill="#E93933" />
                    </svg>
                </div>
                <div class="navigation_item next">
                    <svg width="21" height="35" viewBox="0 0 21 35" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="3.42841" width="24.3154" height="4.84853" transform="rotate(45 3.42841 0)"
                            fill="#E93933" />
                        <rect x="20.3898" y="17.3229" width="23.9871" height="4.84853"
                            transform="rotate(135 20.3898 17.3229)" fill="#E93933" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

</div>