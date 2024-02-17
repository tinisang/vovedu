<?php get_header(); ?>
<?php get_template_part('includes/components/page', 'herosection', array('title' => "Tin tức")); ?>

<?php
$obj = get_queried_object();
$posts_per_page = 20;
$cat_slug = $obj->slug;
$args = array(
    'post_type' => 'post',
    'posts_per_page' => $posts_per_page,
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => $cat_slug
        )
    )
);

$query = new WP_Query($args);
$selectindex = '';

?>



<div class="VOVeduContainer archive_area">
    <div class="search-bar">
        <h4 class="title">Tìm kiếm:</h4>
        <div class="search_wrapper">

            <input type="text" class="input-search-text" placeholder="Nhập từ khoá tìm kiếm">
            <div class="submit-button">
                <img src="<?php echo get_template_directory_uri() ?>/assets/search.svg" alt="" srcset="">
            </div>
        </div>
    </div>
    <div class="separator"></div>
    <div class="main_area">
        <div class="col1">
            <div class="categories">
                <h4 class="title-section">Categories</h4>
                <div class="category_list">
                    <?php

                    $terms = get_terms(
                        array(
                            'taxonomy' => 'category',

                        ));

                    foreach ($terms as $value) {
                        $check = '';
                        if ($cat_slug == $value->slug) {
                            $check = 'checked';
                        }
                        ;
                        echo '
                        <div id="' . $value->slug . '" class="category-item ' . $check . ' " href="' . get_term_link($value->term_id) . '">
                        <span class="checkbox" ></span>
                        <div class="cat-title">' . $value->name . '</div>
                        <div class="cat-count">' . $value->count . '</div>
                        </div>
                        ';
                    }
                    ;



                    ?>
                </div>
                <div class="mobileOnly category_list_dropdown">
                    <select id="news_select" multiple>
                        <?php

                        $terms = get_terms(
                            array(
                                'taxonomy' => 'category',
                            )
                        );
                        foreach ($terms as $key => $item) {
                            if ($first) {
                                if ($cat_slug == $item->slug) {
                                    $selectindex = $item->slug;
                                }
                                ;
                            }
                            ;
                            ?>
                            <option value="<?php echo $item->slug; ?>">
                                <? echo $item->name ?>
                            </option>

                        <? }

                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="col2">

            <div class="extension">
                <div class="year">
                    <h4 class="title-section">
                        Năm:
                    </h4>
                    <select name="year" id="year">
                        <option value="">Tất cả</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                    </select>
                </div>
            </div>
            <div class="separator"></div>
            <div class="posts_area ">
                <?php if($query->post_count==0){echo "Không có bài viết nào";}; ?>
                <?php while ($query->have_posts()):
                    $query->the_post(); // standard WordPress loop. ?>

                    <?php get_template_part('includes/components/post', 'loop', array('id' => get_the_ID())); ?>

                <?php endwhile; // end of the loop. ?>
            </div>
            <?php
            $total = $query->found_posts;
            $pages = ceil($total / $posts_per_page);
            $pagination_output = '';
            if ($pages > 1) {
                for ($x = 1; $x <= $pages; $x++) {
                    if ($x == 1) {
                        $pagination_output .= "<span class='pagination-item active'>$x </span>";
                    } else {

                        $pagination_output .= "<span class='pagination-item'>$x </span>";
                    }
                    ;
                }
                ;

            }
            ?>
            <div class="pagination_area">
                <?php echo $pagination_output; ?>
            </div>

        </div>
    </div>

</div>


<script src="<?php echo get_stylesheet_directory_uri() . '/js/slim_select/select.min.js' ?>"></script>

<script>


    (function ($) {

        function queryPosts(data) {
            $('.archive_area').addClass('isLoading');

            $.ajax({
                type: "post", //Phương thức truyền post hoặc get
                dataType: "json", //Dạng dữ liệu trả về xml, json, script, or html
                url: '<?php echo admin_url('admin-ajax.php'); ?>', //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                data: {
                    action: "query", //Tên action
                    data: data,


                },

                beforeSend: function () {



                },
                success: function (response) {

                    $('.archive_area').removeClass('isLoading');
                    $('.posts_area').html(response.data.post);
                    $('.pagination_area').html(response.data.pagination);
                    if (formSelect==''){
                        $('.archive_area .col1 .categories .category-item').each((index, element) => {
                            var slug = $(element).attr('id');
                            if(dataQuery.categories.includes(slug)){
                                $(element).addClass('checked');
                            }else{
                                $(element).removeClass('checked');
                            }
                        })

                    }else{
                        newsSelect.setSelected(dataQuery.categories);
                    }

                    $('.archive_area .col2 .pagination_area .pagination-item').each((index, element) => {
                        $(element).click(function () {
                            dataQuery.page_num = index + 1;
                            $('.archive_area .col2 .pagination_area .pagination-item').removeClass('active');
                            $(element).addClass('active')
                            queryPosts(dataQuery)
                        })
                    })
                    gsap.to(window, { duration: 0.7, scrollTo: 400 });

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    //Làm gì đó khi có lỗi xảy ra
                    console.log('The following error occured: ' + textStatus, errorThrown);
                }
            })
        }




        var dataQuery = {
            'categories': ['<?php echo $cat_slug ?>'],
            'key': '',
            'year': 'all',
            'posts_per_page': <?php echo $posts_per_page ?>,
            'page_num': 1,
            'key':''
        }
        var formSelect='';


        var newsSelect = new SlimSelect({
            select: '#news_select',
            events: {
                afterChange: (val) => {
                    if(formSelect=='list'){

                    }else{
                        var values = val.map((e)=>e.value)
                        dataQuery.categories = values;
                        queryPosts(dataQuery)
                        
                    }

                    formSelect='';

                }
            }
        });

        $('.archive_area .col1 .categories .category-item').each((index, element) => {
            $(element).click(function () {

                var slug = $(element).attr('id');
                dataQuery.year = '';
                $('.archive_area .extension .year select').val('')
                if (dataQuery.categories.includes(slug)) {
                    var index = dataQuery.categories.indexOf(slug);
                    dataQuery.categories.splice(index, 1);
                    queryPosts(dataQuery)
                } else {
                    dataQuery.categories.push(slug)
                    queryPosts(dataQuery)
                }

                $(element).toggleClass('checked');
                formSelect = 'list';
            })

        })

        $('.archive_area .col2 .pagination_area .pagination-item').each((index, element) => {
            $(element).click(function () {
                dataQuery.page_num = index + 1;
                $('.archive_area .col2 .pagination_area .pagination-item').removeClass('active');
                $(element).addClass('active')
                queryPosts(dataQuery)
            })
        })
        $('.archive_area .extension .year select').change(function () {

            dataQuery.year = $(this).val();
            dataQuery.page_num = 1;

            queryPosts(dataQuery)
        })


        window.addEventListener("load", (event) => {
            newsSelect.setSelected('<?php echo $cat_slug;  ?>');
        });
       
        $('.archive_area .search-bar .submit-button').click(function(){
            var keyword = $('.archive_area .search-bar input').val();
            dataQuery.key = keyword;
            queryPosts(dataQuery);
        })

    })(jQuery)
</script>
<?php get_footer(); ?>