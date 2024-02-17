<div class="post_loop_item">
                            <a class="image" href="<?php echo get_permalink($args['id']); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url($args['id'],'medium'); ?>" alt="" srcset="">
                                <div class="date"><?php echo get_the_date('d/m', $args['id']);  ?></div>
                            </a>
                            <div class="content_col">
                                <a class="title bold-text" href="<?php echo get_permalink($args['id']); ?>"><?php echo the_title(); ?></a>
                                <div class="description"><?php echo the_excerpt(); ?></div>
                                <?php echo do_shortcode('[button state="single" color="red" content="Đọc thêm" link="'.get_permalink($args['id']).'"]') ?>

                            </div>
                        </div>