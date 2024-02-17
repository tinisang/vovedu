<div class="property-item">
                    <div class="icon"><img src="/wp-content/uploads/2023/10/🦆-icon-_eye_.svg" alt=""></div>
                    <div class="content">
                        <?php
                        $post_views_count = get_post_meta($post->ID, 'view', true);
                        // Check if the custom field has a value.
                        
                        echo $post_views_count . " ";

                        ?>lượt xem
                    </div>

                </div>
                <div class="property-item">
                    <div class="icon"><img src="/wp-content/uploads/2023/10/🦆-icon-_clock_.svg" alt=""></div>
                    <div class="content">
                        <?php echo get_the_time('g:i a', $post->ID); ?>
                    </div>

                </div>
                <div class="property-item">
                    <div class="icon"><img src="/wp-content/uploads/2023/10/🦆-icon-_calendar_.svg" alt=""></div>
                    <div class="content">
                        <?php echo get_the_date('d/m/Y', $post->ID); ?>
                    </div>

                </div>
                <div class="property-item">
                    <div class="icon"><img src="/wp-content/uploads/2023/10/🦆-icon-_user_.svg" alt=""></div>
                    <div class="content">Tác giả:
                        <?php echo get_field('tac_giả', $post->ID); ?>
                    </div>

                </div>