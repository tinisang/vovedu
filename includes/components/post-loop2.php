<?php 
    $id = $args['id']
?>

<div class="news_item">
    <a href="<?php echo get_permalink($id) ?>" class="image">
        <img src="<?php echo get_the_post_thumbnail_url($id, 'full') ?>" alt="">
    </a>
    <div class="detailed_info">
        <div class="date_section">
            <div class="icon"><img src="/wp-content/uploads/2023/10/🦆-icon-_calendar_.svg" alt=""></div>
            <div class="date_data"><?php echo get_the_date('d/m/Y', $id) ?></div>
        </div>
        <a href="<?php echo get_permalink($id) ?>" class="title"><?php echo get_the_title($id); ?></a>
        <div class="description"><?php echo get_the_excerpt($id) ?></div>
        <?php echo do_shortcode('[button state="single" link="'.get_permalink($id).'" content="Đọc chi tiết"]') ?>
    </div>
</div>