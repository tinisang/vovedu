<?php
$terms = get_terms(
    array(
        'taxonomy' => 'he_dao_dao',
        'hide_empty' => false,
        'orderby' => 'menu_order',

    )
);


?>

<div class="dropdown-menu hide dropdown-item-<?php echo $args['index']; ?>">
    <div class="dropdown_wrapper">
        <div class="close-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/close.png" alt=""></div>
        <div class="dropdown-content-area">
            <h3 class="title">Tuyển sinh</h3>
            <div class="general_page_link">

                <?php echo do_shortcode('[button state="single" content="Xem tổng quan" link="/tuyen-sinh"]') ?>
            </div>
            <div class="separator"></div>

            <div class="detailed">
                <!------------- Content Area ---------------->
                <div class="grid-layout">
                    <?php foreach ($terms as $index => $item) {

                        ?>
                        <div class="education-item">
                            <a href="<?php echo get_term_link($item->term_id); ?>" class="type_title">
                                <h4 class="edu-title">
                                    <?php echo $item->name; ?>
                                </h4>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="13" viewBox="0 0 17 13"
                                    fill="none">
                                    <path d="M10.5289 11.7919L15.8208 6.49998L10.5289 1.20807" stroke="white"
                                        stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M0.999999 6.49988L15.6726 6.49988" stroke="white" stroke-width="1.8"
                                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                           
                        </div>
                    <?php }
                    ; ?>

                </div>

            </div>

        </div>

    </div>
</div>