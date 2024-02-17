<?php
$svg = '<svg xmlns="http://www.w3.org/2000/svg" width="17" height="13" viewBox="0 0 17 13"
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
            <h3 class="title">HỌC SINH - SINH VIÊN</h3>
            <div class="general_page_link">

                <?php echo do_shortcode('[button state="single" content="Xem tổng quan" link="/hoat-dong-sinh-vien/"]') ?>
            </div>
            <div class="separator"></div>

            <div class="detailed">
                <!------------- Content Area ---------------->
                <div class="grid-layout">

                    <div class="menu-item-dropdown">
                        <a href="/hoat-dong-sinh-vien/#introduction_section" class="menu_link">
                            <h4>Phương châm phát triển</h4>
                            <?php echo $svg; ?>
                        </a>
                    </div>

                    <div class="menu-item-dropdown">
                        <a href="/hoat-dong-sinh-vien/#events" class="menu_link">
                            <h4>Sự kiện</h4>
                            <?php echo $svg; ?>
                        </a>
                    </div>

                    <div class="menu-item-dropdown">
                        <a href="/hoat-dong-sinh-vien/#student_news" class="menu_link">
                            <h4>Tin tức sinh viên</h4>
                            <?php echo $svg; ?>
                        </a>
                    </div>

                    <div class="menu-item-dropdown">
                        <a href="/hoat-dong-sinh-vien/#club" class="menu_link">
                            <h4>Câu lạc bộ</h4>
                            <?php echo $svg; ?>
                        </a>
                    </div>

                    <div class="menu-item-dropdown">
                        <a href="/hoat-dong-sinh-vien/#dorms" class="menu_link">
                            <h4>Kí túc xá</h4>
                            <?php echo $svg; ?>
                        </a>
                    </div>



                </div>
            </div>

        </div>

    </div>
</div>