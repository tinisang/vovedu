<div class="post_loop_item">
        <a class="image" href="<?php echo get_permalink($args['id']); ?>">
            <img src="<?php echo get_the_post_thumbnail_url($args['id'],$args['size']); ?>" alt="" srcset="">
        </a>
        <div class="content_col">
            <div class="date_info">
                <img src="/wp-content/uploads/2023/10/🦆-icon-_calendar_.svg" alt="" class="icon">
                <div class="date_string"><?php echo get_the_date('d/m/Y', $args['id']);  ?></div>
            </div>
            <a class="title bold-text" href="<?php echo get_permalink($args['id']); ?>"><?php echo get_the_title($args['id']); ?></a>
            <div class="description"><?php echo get_the_excerpt($args['id']); ?></div>
            <?php echo do_shortcode('[button state="single" color="red" content="Đọc thêm" link="'.get_permalink($args['id']).'"]') ?>

        </div>
    </div>