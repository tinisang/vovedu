<?php wp_footer(); ?>
<?php
$fields = get_fields('10256');
$description = $fields['description'];
$sitemap = $fields['thong_tin'];
$contact = $fields['thong_tin_lien_hệ'];
$social = $fields['mạng_xa_hội'];

?>
<footer class="VOVeduFooter__wrapper">
    <div class="VOVeduContainer">
        <div class="VOVeduFooter">
            <div class="top-section">
                <div class="general">
                    <div class="footer-logo-image">
                        <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="">
                    </div>
                    <div class="description-footer">
                        <?php echo $description; ?>
                    </div>
                    <?php echo do_shortcode('[button state="single" color="red" content="Đăng ký tuyển sinh" button="false"]') ?>

                </div>
                <div class="sitemap">
                    <div class="col-title">THÔNG TIN</div>
                    <ul class="links">
                        <?php
                        foreach ($sitemap as $value) {

                            echo '<li class="link-item"><a href="' . $value['link'] . '">' . $value['text'] . '</a></li>';
                        }
                        ;
                        ?>
                    </ul>
                </div>
                <div class="contact">
                    <div class="col-title">THÔNG TIN LIÊN HỆ</div>
                    <div class="items">
                        <?php
                        foreach ($contact as $value) {

                            echo '
                                    <div class="contact-item">
                                    <div class="icon"><img src="' . $value['icon'] . '" alt=""></div>
                                    <div class="detail-items">
                                        <div class="title">' . $value['title'] . '</div>
                                        <div class="content">' . $value['content'] . '</div>
                                    </div>
                                </div>
                                    ';
                        }
                        ;
                        ?>

                    </div>
                </div>
                <div class="social-media">
                    <div class="col-title">MẠNG XÃ HỘI</div>
                    <div class="social_wrapper">
                        <?php
                        foreach ($social as $value) {

                            echo '<a href="' . $value['link'] . '" class="social-link"><img src="' . $value['icon'] . '" alt=""></a>';
                        }
                        ;
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="copyright">© VOVedu - Bản quyền thuộc Trường CĐ Phát thanh - Truyền hình I</div>
</footer>
</div>

<script>
    (function ($) {



        var openYet = false;
        var activeDropdown = 0;

        $('.dropdown-menu').click(function (e) {
            if (openYet) {
                var container = $(`.dropdown-item-${activeDropdown} .dropdown-content-area`);
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    $(`.dropdown-item-${activeDropdown}`).toggleClass('hide');
                    openYet = false;
                }

            }
        });

        $('.popup_wrapper').each((index, element) => {

            $(element).click(function (e) {

                var container = $(`.popup-container`, $(element));
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    $(element).toggleClass('hide');
                    $('body').removeClass('stopScroll');

                }

            });
        })

        $('.menu-item').each(function (index, element) {
            $(element).click(function () {
                if ($(`.dropdown-item-${index + 1}`).length != 0) {
                    openYet = true;
                    activeDropdown = index + 1;
                    $(`.dropdown-item-${index + 1}`).toggleClass('hide')
                }
            })
        })
        $('.dropdown-menu .close-icon').click(function () {
            openYet = false;
            $(this).closest('.dropdown-menu').toggleClass('hide')
        })


        $('.VOVeduHeader .button_wrapper').click(function () {
            $('.popup_wrapper.popup-item-1').toggleClass('hide')
            $('body').addClass('stopScroll');
        });


        $('.popup_wrapper').each((index, element) => {
            $('.close-icon', $(element)).click(function () {
                $(element).toggleClass('hide')
                $('body').removeClass('stopScroll');
            })
        })


        $('.popup_wrapper form ul.select li label').click(function () {
            $('.label-option', $(this).closest('.option-item')).toggleClass('check')

        })

        $('.VOVeduFooter__wrapper .general .button_wrapper').click(function () {
            $('.popup_wrapper.popup-item-1').toggleClass('hide');
            $('body').addClass('stopScroll');
        })

        $('form.contact-form').each(function (index, element) {
            $(element).submit(function (e) {
                e.preventDefault();
                var data = $(element).serializeArray();
                $(element).addClass('isLoading');
                sendData($(element).serializeArray())
            })
        })

        $('.button_trigger_contact_form').each((index, element) => {
            $(element).click(function () {
                $('.popup_wrapper.popup-item-1').toggleClass('hide');
                $('body').addClass('stopScroll');

            })
        })

        new SlimSelect({
            select: '#multiple',
            settings: {
                placeholderText: 'Chọn thông tin cần tư vấn',
                allowDeselect: true
            }
        })




        new SlimSelect({
            select: '#multiple1',
            settings: {
                placeholderText: 'Chọn thông tin cần tư vấn',
                allowDeselect: true
            }
        })
        function sendData(data) {
            var newData = {};
            data.map(x => {
                newData[x.name] = x.value;
                return x
            })
            $.ajax({
                type: "post", //Phương thức truyền post hoặc get
                dataType: "json", //Dạng dữ liệu trả về xml, json, script, or html
                url: '<?php echo admin_url('admin-ajax.php'); ?>', //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                data: {
                    action: "mail", //Tên action
                    dataContent: newData,


                },

                beforeSend: function () {



                },
                success: function (response) {
                    $('form.contact-form').removeClass('isLoading');
                    $('form.contact-form input:not(.submit)').val('');
                    $('form.contact-form textarea').val('');
                    $('form.contact-form select').val('');
                    $('.popup_wrapper.popup-item-success').removeClass('hide')
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    //Làm gì đó khi có lỗi xảy ra
                    console.log('The following error occured: ' + textStatus, errorThrown);
                }
            })
        }



        // window.addEventListener("load", (event) => {
        //     setTimeout(openPopUp, 2000);
        // });

        function openPopUp() {
            $('.popup-item-ads').removeClass('hide')
        }



        $('.dropdown_mobile .parent_link').each((index, element) => {
            $(element).click(function () {
                if ($(element).closest('.parent_menu_item').hasClass('active')) {
                    $('.parent_menu_item').removeClass('active')
                    $('.dropdown_mobile .children_wrapper').css('height', '0px');

                } else {

                    $('.parent_menu_item').removeClass('active')
                    $('.dropdown_mobile .children_wrapper').css('height', '0px');
                    $(element).closest('.parent_menu_item').addClass('active')
                    var height = $('.children_wrapper .children_link', $(element).closest('.parent_menu_item')).height()
                    $('.children_wrapper', $(element).closest('.parent_menu_item')).css('height', `${height}px`);
                }
            })
        })

        $('.hambuger_menu').click(function () {
            $('.dropdown_mobile').removeClass('hide')
        })





        $('.dropdown_mobile').click(function (e) {

            var container = $(`.dropdown_mobile .dropdown_mobile_wrapper`);
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                $('.dropdown_mobile').addClass('hide')
                // $('body').removeClass('stopScroll');

            }

        })

        var lastScrollTop = 0;

        // element should be replaced with the actual target element on which you have applied scroll, use window in case of no target element.
        window.addEventListener("scroll", function () { // or window.addEventListener("scroll"....
            var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
            if (st > lastScrollTop && st > 150) {
                // downscroll code
                $('.VOVeduHeader__wrapper').addClass('hide')
            } else if (st < lastScrollTop) {
                // upscroll code
                $('.VOVeduHeader__wrapper').removeClass('hide')
            } // else was horizontal scroll
            lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
        }, false);


        $('.dropdown-menu .menu_link').each((index, element) => {
            $(element).click(function () {
                $(element).closest('.dropdown-menu').addClass('hide')
            })
        })


    })(jQuery)






</script>
</body>

</html>