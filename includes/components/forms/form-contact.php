<?php
$terms = get_terms(
    array(
        'taxonomy' => 'he_dao_dao',
        'hide_empty' => false,
        'orderby' => 'menu_order',

    )
);
$id = $args['id'];


?>

<div class="form_area">
    <div class="col1">
        <div class="image">
            <img src="/wp-content/uploads/2023/10/DSC_9651-1.png" alt="">
        </div>
    </div>
    <div class="col2">
        <div class="calltoaction">
            <h2 class="title">GỬI THÔNG TIN</h2>
            <div class="description">Điền ngay vào Form Tư vấn Tuyển sinh để nhận được sự hỗ trợ đặc biệt và thông tin chi tiết cho quyết định của bạn.</div>
        </div>


        <form class="contact-form" action="">
            <div class="form-box name-box">
                <label for="fullname">Họ và tên</label>
                <input type="text" name="fullname" id="fullname" placeholder="Họ và tên" required>
            </div>

            <div class="form-box phone-box">
                <label for="phone">Số điện thoại</label>
                <input type="tel" name="phone" id="phone" placeholder="Số điện thoại" required>
            </div>
            <div class="form-box date-box">
                <label for="date">Ngày sinh</label>
                <input type="date" name="date" id="date" placeholder="Ngày sinh" required>
            </div>
            <div class="form-box location-box">
                <label for="location">Địa điểm</label>
                <input type="text" name="location" id="location" placeholder="Địa điểm" required>
            </div>
        
            <div class="form-box mail-box">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Nhập email của bạn" required>
            </div>
            <div class="form-box select-box">
                <label for="cat">Chọn hệ Đào tạo</label>
                <select name="education_type" id="<? echo $id; ?>" multiple>
                    <?php


                    $terms = get_terms(
                        array(
                            'taxonomy' => 'he_dao_dao',

                        )
                    );
                    foreach ($terms as $item) { ?>
                        <option value="<?php echo $item->name; ?>">
                            <? echo $item->name ?>
                        </option>

                    <? }

                    ?>

                </select>



            </div>
            <div class="form-box mess-box">
                <label for="message">Nội dung</label>
                <textarea name="message" id="message" rows="5"></textarea>
            </div>

            <input class="submit" type="submit" value="Gửi thông tin">

        </form>

    </div>
</div>