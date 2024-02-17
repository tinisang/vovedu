<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?
        $title = '';
        if ($title) {

        } else {
            $title = get_the_title();
        }
        echo $title;
        ?>
    </title>

    <?php wp_head(); ?>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5KK4BX5S');</script>
    <!-- End Google Tag Manager -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KK4BX5S" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="main_wrapper">

        <?php
        $fields = get_fields('10256');

        $social = $fields['mạng_xa_hội'];

        ?>
        <div class="float-icons">
            <?php
            foreach ($social as $value) {

                echo '<a href="' . $value['link'] . '" class="social-item"><img src="' . $value['icon'] . '" alt=""></a>';
            }
            ;
            ?>

        </div>

        <header class="VOVeduHeader__wrapper">
            <div class="VOVeduContainer">
                <div class="VOVeduHeader">
                    <a href='/' class="site-image">
                        <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="">
                    </a>

                    <div class="menu-area desktopOnly">
                        <div class="menu-item active">
                            <div class="menu-link">Tin tức tổng hợp</div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-link">Tuyển sinh</div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-link">Đào tạo</div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-link">Học sinh - Sinh viên</div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-link">Về VOVedu</div>
                        </div>
                    </div>
                    <?php echo do_shortcode('[button state="fill" color="red" content="Đăng ký tuyển sinh" icon_visible="false" button="false"]') ?>
                    <!-- <div class="button">Xem chi tiết</div> -->
                    <div class="hambuger_menu mobileOnly">
                        <img src="/wp-content/uploads/2023/11/bar.png" alt="">
                    </div>
                </div>
            </div>


        </header>

        <?php get_template_part('includes/components/dropdowns/dropdown', 'mobile'); ?>
        <?php get_template_part('includes/components/dropdowns/dropdown', '1', array('index' => 1)); ?>
        <?php get_template_part('includes/components/dropdowns/dropdown', '2', array('index' => 2)); ?>
        <?php get_template_part('includes/components/dropdowns/dropdown', '3', array('index' => 3)); ?>
        <?php get_template_part('includes/components/dropdowns/dropdown', '4', array('index' => 4)); ?>
        <?php get_template_part('includes/components/dropdowns/dropdown', '5', array('index' => 5)); ?>
        <?php get_template_part('includes/components/popups/popup', 'main'); ?>
        <?php get_template_part('includes/components/popups/popup', 'success'); ?>