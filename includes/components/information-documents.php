<?php

$postType = $args['post-type'];
$taxanomyType = $args['taxanomy'];
$title = $args['title'];
$first = $args['first'];
$cat_slug = $args['cat_slug'];
$linkType = $args['linkType'];
$in = $args['in'];

$selectindex='';

?>

<div class="information_documents VOVeduContainer">
    <div class="row1">
        <div class="col1">
            <h2 class="title">
                <?php echo $title; ?>
            </h2>
        </div>
        <div class="col2">
            <div class="switch_design">

                <div class="list_view active">
                    <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2.5" cy="2.5" r="2.5" fill="#D9D9D9" />
                        <circle cx="2.5" cy="11.5" r="2.5" fill="#D9D9D9" />
                        <circle cx="2.5" cy="19.5" r="2.5" fill="#D9D9D9" />
                        <rect x="7" width="25" height="5" rx="2.5" fill="#D9D9D9" />
                        <rect x="6.75" y="9" width="25" height="5" rx="2.5" fill="#D9D9D9" />
                        <rect x="6.75" y="17" width="25" height="5" rx="2.5" fill="#D9D9D9" />
                    </svg>

                </div>

                <div class="gallery_view">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="10.3871" height="10.3871" rx="2" fill="#D9D9D9" />
                        <rect y="12.6129" width="10.3871" height="10.3871" rx="2" fill="#D9D9D9" />
                        <rect x="12.6133" width="10.3871" height="10.3871" rx="2" fill="#D9D9D9" />
                        <rect x="12.6133" y="12.6128" width="10.3871" height="10.3871" rx="2" fill="#D9D9D9" />
                    </svg>

                </div>

            </div>
        </div>
    </div>

    <div class="row2">
        <div class="col1">
            <div class="mobileOnly dropdowncat">
                <select id="document_select">
                    <?php

                    $terms = get_terms(
                        array(
                            'taxonomy' => $taxanomyType,
                            'include'=>$in

                        )
                    );
                    foreach ($terms as $key=> $item) { 
                        if ($first) {
                            if ($cat_slug == $item->slug) {
                                $selectindex = $item->slug;
                            }
                            ;
                        } ;
                        ?>
                        <option value="<?php echo $item->slug; ?>">
                            <? echo $item->name ?>
                        </option>

                    <? }

                    ?>
                </select>
            </div>
            <div class="document_category_list">

                <?php

                $terms = get_terms(
                    array(
                        'taxonomy' => $taxanomyType,
                        'include'=>$in

                    )
                );
                $docsArg = array(
                    'post_type' => $postType,
                    'posts_per_page' => '4000',
                    'tax_query' => array(
                        array(
                            'taxonomy' => $taxanomyType,
                            'field' => 'slug',
                            'terms' => $terms[0]->slug,
                            'operator' => 'IN',
                        )
                    ),
                );
                if ($first) {
                    $docs = $first;
                } else {

                    $docs = get_posts($docsArg);
                }
                ;

                foreach ($terms as $key => $value) {
                    $check = '';
                    if ($first) {
                        if ($cat_slug == $value->slug) {
                            $check = 'checked';
                        }
                        ;
                    } else {
                        if ($key == 0) {
                            $check = 'checked';
                        }
                        ;

                    }
                    echo '
                            <div id="' . $value->slug . '" class="category-item ' . $check . ' " href="' . get_term_link($value->term_id) . '">
                            <span class="checkbox" ></span>
                            <div class="cat-title">' . $value->name . '</div>
                            
                            </div>
                            ';
                }
                ;



                ?>
            </div>
        </div>
        <div class="col2">
            <div class="documents_wrapper">
                <?php

                $loopCount = ceil(count($docs) / 2);
                for ($x = 0; $x < $loopCount; $x++) {
                    if ($linkType == 'file') {

                        $url1 = get_field('tai_liệu', $docs[$x * 2]->ID)['url'];
                        $url2 = get_field('tai_liệu', $docs[$x * 2 + 1]->ID)['url'];
                    } else {
                        $url1 = get_permalink($docs[$x * 2]->ID);
                        $url2 = get_permalink($docs[$x * 2 + 1]->ID);
                    }
                    ?>
                    <div class="document_row">


                        <div class="document_item">
                            <div class="image">
                                <img src="<?php echo get_the_post_thumbnail_url($docs[$x * 2]->ID, 'full') ?>" alt="">
                                <?php echo do_shortcode('[button state="fill" content="Xem chi tiết" icon_visible="false" link="' . $url1 . '"]') ?>
                            </div>
                            <a href="<?php echo $url1 ?>" class="title">
                                <?php echo $docs[$x * 2]->post_title; ?>
                            </a>
                            <?php echo do_shortcode('[button state="single" link="' . $url1 . '" content="Xem thêm"]') ?>
                        </div>

                        <?php
                        if ($docs[$x * 2 + 1]) { ?>
                            <div class="document_item">
                                <div class="image">
                                    <img src="<?php echo get_the_post_thumbnail_url($docs[$x * 2 + 1]->ID, 'full') ?>" alt="">
                                    <?php echo do_shortcode('[button state="fill" content="Xem chi tiết" icon_visible="false" link="' . $url2 . '"]') ?>
                                </div>
                                <a href="<?php echo $url2 ?>" class="title">
                                    <?php echo $docs[$x * 2 + 1]->post_title; ?>
                                </a>
                                <?php echo do_shortcode('[button state="single" link="' . $url2 . '" content="Xem thêm"]') ?>
                            </div>
                        <?php }
                        ?>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo get_stylesheet_directory_uri() . '/js/slim_select/select.min.js' ?>"></script>

<script>
    (function ($) {

        function queryDocs(data) {
            $('.information_documents .documents_wrapper').addClass('isLoading');

            $.ajax({
                type: "post", //Phương thức truyền post hoặc get
                dataType: "json", //Dạng dữ liệu trả về xml, json, script, or html
                url: '<?php echo admin_url('admin-ajax.php'); ?>', //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                data: {
                    action: "query_docs", //Tên action
                    data: data,


                },

                beforeSend: function () {



                },
                success: function (response) {
                    if (form == 'list'){

                        $('.information_documents .documents_wrapper').removeClass('isLoading');
                        docSelect.setSelected(dataQueryDocs.categories);

                    }else{
                        $('.information_documents .documents_wrapper').removeClass('isLoading');
                        $('.information_documents .document_category_list .category-item').each((index,
                            element) => {
                            if (dataQueryDocs.categories == $(element).attr('id')) {
                                $('.information_documents .document_category_list .category-item')
                                    .removeClass(
                                        'checked')
                                $(element).addClass('checked');
                            }
                        })

                    }

                    $('.information_documents .documents_wrapper').html(response.data.data)


                },
                error: function (jqXHR, textStatus, errorThrown) {
                    //Làm gì đó khi có lỗi xảy ra
                    console.log('The following error occured: ' + textStatus, errorThrown);
                }
            })
        }




        var dataQueryDocs = {
            'categories': '',
            'categoryID': '',
            'linkType': '<?php echo $linkType; ?>',
            'postType': '<?php echo $postType; ?>',
            'taxanomyType': '<?php echo $taxanomyType; ?>',
            


        }
        var form =''
        var docSelect = new SlimSelect({
            select: '#document_select',
            events: {
                afterChange: (newVal) => {
                    if (form=='list'){

                        
                        form='';
                    }else{
                        var id = newVal[0].value;
                        dataQueryDocs.categories = id;
                        dataQueryDocs.form = 'dropdown';
                        form='';
                        
                        queryDocs(dataQueryDocs)
                    }
                }
            }
        });


        $('.information_documents .document_category_list .category-item').each(function (index, element) {
            $(element).click(function () {
                $('.information_documents .document_category_list .category-item').removeClass(
                    'checked')
                $(element).addClass('checked');
                dataQueryDocs.categories = $(element).attr('id');
                form ='list';
                queryDocs(dataQueryDocs)
            })
        })

        $('.information_documents .gallery_view').click(function () {
            $('.information_documents .documents_wrapper').addClass('image_view')
            $('.information_documents .gallery_view').addClass('active')
            $('.information_documents .list_view').removeClass('active')
        })
        $('.information_documents .list_view').click(function () {
            $('.information_documents .documents_wrapper').removeClass('image_view')
            $('.information_documents .gallery_view').removeClass('active')
            $('.information_documents .list_view').addClass('active')
        })

        
        window.addEventListener("load", (event) => {
            docSelect.setSelected('<?php echo $selectindex;  ?>');
        });

    })(jQuery)
</script>