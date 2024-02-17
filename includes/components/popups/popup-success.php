<?php
$fields = get_fields('10256');
$social = $fields['mạng_xa_hội'];

?>
<div class="popup_wrapper popup-item-success hide">
    <div class="popup-container">
        <div class="close-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/close.png" alt=""></div>


        <div class="title">
            Thông tin của bạn đã được ghi nhận thành công. Chúng tôi sẽ liên hệ bạn trong thời gian sớm nhất.

        </div>
        <div class="social_wrapper">
            <?php
            foreach ($social as $value) {

                echo '<a href="' . $value['link'] . '" class="social-link"><img src="' . $value['icon'] . '" alt=""></a>';
            }
            ;
            ?>
        </div>

        <div class="image">
            <img src="/wp-content/themes/VOVedu%20Theme/images/DSC_8111.JPG" alt="">
        </div>

    </div>
</div>