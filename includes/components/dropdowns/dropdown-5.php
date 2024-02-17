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

<div class="dropdown-menu hide dropdown-item-<?php echo $args['index']; ?>">
    <div class="dropdown_wrapper">
        <div class="close-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/close.png" alt=""></div>
        <div class="dropdown-content-area">
            <h3 class="title">GIỚI THIỆU</h3>
            <div class="general_page_link">

                <?php echo do_shortcode('[button state="single" content="Xem tổng quan" link="/gioi-thieu/"]') ?>
            </div>
            <div class="separator"></div>

            <div class="detailed">
                <!------------- Content Area ---------------->
                <div class="grid-layout">

                    <div class="menu-item-dropdown">
                        <a href="/gioi-thieu/#history_block" class="menu_link">
                            <h4>Lịch sử hình thành</h4>
                            <?php echo $svg; ?>
                        </a>
                    </div>

                    <div class="menu-item-dropdown">
                        <a href="/gioi-thieu/#vision_mission_block" class="menu_link">
                            <h4>Tầm nhìn, sứ mệnh</h4>
                            <?php echo $svg; ?>
                        </a>
                    </div>

                    <div class="menu-item-dropdown">
                        <a href="/gioi-thieu/#leaders_block" class="menu_link">
                            <h4>Ban giám hiệu</h4>
                            <?php echo $svg; ?>
                        </a>
                    </div>

                    <div class="menu-item-dropdown">
                        <a href="/gioi-thieu/#department" class="menu_link">
                            <h4>Các phòng ban</h4>
                            <?php echo $svg; ?>
                        </a>
                    </div>
                  
                    
                    <div class="menu-item-dropdown">
                        <a href="/lien-he/" class="menu_link">
                            <h4>Liên hệ</h4>
                            <?php echo $svg; ?>
                        </a>
                    </div>

                    



                </div>
            </div>

        </div>

    </div>
</div>