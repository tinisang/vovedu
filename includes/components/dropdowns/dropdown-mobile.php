<?php
$terms = get_terms(
    array(
        'taxonomy' => 'he_dao_dao',
        'hide_empty' => false,
        'orderby' => 'menu_order',

    )
);


?>

<?php
$svg = '<svg xmlns="http://www.w3.org/2000/svg" width="17" height="13" viewBox="0 0 17 13"
    fill="none">
    <path d="M10.5289 11.7919L15.8208 6.49998L10.5289 1.20807" stroke="white"
        stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round"
        stroke-linejoin="round" />
    <path d="M0.999999 6.49988L15.6726 6.49988" stroke="white" stroke-width="1.8"
        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
</svg>';

$drop= '<svg width="21" height="35" viewBox="0 0 21 35" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="3.42841" width="24.3154" height="4.84853" transform="rotate(45 3.42841 0)" fill="#E93933"/>
<rect x="20.3898" y="17.3229" width="23.9871" height="4.84853" transform="rotate(135 20.3898 17.3229)" fill="#E93933"/>
</svg>
'

?>
<div class="dropdown_mobile mobileOnly hide">
    <div class="dropdown_mobile_wrapper">
        <div class="title">Menu</div>
        <div class="parent_menu_item">
            <a href="/" class="parent_link">Trang chủ</a>
            <div class="children_wrapper">

                <ul class="children_link">

                </ul>
            </div>
        </div>

        <div class="parent_menu_item">
            <div class="parent_link">Giới thiệu <?php echo $drop; ?></div>
            <div class="children_wrapper">
                <ul class="children_link">
                    <li class="link_item"><a href="/gioi-thieu/#history_block">Lịch sử hình thành</a>
                        <?php echo $svg; ?>
                    </li>
                    <li class="link_item"><a href="/gioi-thieu/#vision_mission_block">Tầm nhìn, sứ mệnh</a>
                        <?php echo $svg; ?>
                    </li>
                    <li class="link_item"><a href="/gioi-thieu/#leaders_block">Ban giám hiệu</a>
                        <?php echo $svg; ?>
                    </li>
                    <li class="link_item"><a href="/gioi-thieu/#department">Các phòng ban</a>
                        <?php echo $svg; ?>
                    </li>
                    <li class="link_item"><a href="/lien-he/">Liên hệ</a>
                        <?php echo $svg; ?>
                    </li>
                </ul>
            </div>
        </div>

        <div class="parent_menu_item">
            <div class="parent_link">Tin tức tổng hợp <?php echo $drop; ?></div>
            <div class="children_wrapper">
                <ul class="children_link">
                    <li class="link_item"><a href="/thong-tin-tong-hop/#news_block">Tin tức</a>
                        <?php echo $svg; ?>
                    </li>
                    <li class="link_item"><a href="/thong-tin-tong-hop/#events_block">Sự kiện</a>
                        <?php echo $svg; ?>
                    </li>
                    <li class="link_item"><a href="/thong-tin-tong-hop/#document_block">Văn bản</a>
                        <?php echo $svg; ?>
                    </li>
                    <li class="link_item"><a href="/thong-tin-tong-hop/#video_block">Videos</a>
                        <?php echo $svg; ?>
                    </li>
                </ul>
            </div>
        </div>

        <div class="parent_menu_item">
            <div class="parent_link">Tuyển sinh <?php echo $drop; ?></div>
            <div class="children_wrapper">
                <ul class="children_link">
                    <?php
                    foreach ($terms as $item) { ?>
                        <li class="link_item"><a href="<?php echo get_term_link($item->term_id); ?>">
                                <?php echo $item->name; ?>
                            </a>
                            <?php echo $svg; ?>
                        </li>

                    <?php }
                    ?>
                </ul>
            </div>
        </div>


        <div class="parent_menu_item">
            <div class="parent_link">Học sinh - Sinh viên <?php echo $drop; ?></div>
            <div class="children_wrapper">
                <ul class="children_link">
                    <li class="link_item"><a href="/hoat-dong-sinh-vien/#introduction_section">Phương châm phát triển</a>
                        <?php echo $svg; ?>
                    </li>
                    <li class="link_item"><a href="/hoat-dong-sinh-vien/#events">Sự kiện</a>
                        <?php echo $svg; ?>
                    </li>
                    <li class="link_item"><a href="/hoat-dong-sinh-vien/#student_news">Tin tức sinh viên</a>
                        <?php echo $svg; ?>
                    </li>
                    <li class="link_item"><a href="/hoat-dong-sinh-vien/#club">Câu lạc bộ</a>
                        <?php echo $svg; ?>
                    </li>
                    <li class="link_item"><a href="/hoat-dong-sinh-vien/#dorms">Kí túc xá</a>
                        <?php echo $svg; ?>
                    </li>
                </ul>
            </div>
        </div>





    </div>


</div>