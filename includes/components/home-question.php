<?php 
    $questions = $args['data'];
?>


<div class="question_area">
    <div class="VOVeduContainer question_wrapper">
        <div class="col1">
            <img src="/wp-content/uploads/2023/11/DSC_8136-1-1.png" alt="" class="thumb">
            <img src="/wp-content/uploads/2023/10/Group-154.png" alt="" class="decor">
        </div>
        <div class="col2">
            <div class="title_area">
                <h2 class="title">CÂU HỎI THƯỜNG GẶP</h2>
                <div class="separator"></div>
            </div>
            <div class="main_area">

                <?php
                foreach ($questions as $item){?>
                <div class="question_item">
                    <div class="question"><?php echo $item['cau_hỏi']; ?></div>
                    <div class="answer_wrapper">
                        <div class="answer"><?php echo $item['cau_trả_lời']; ?></div>

                    </div>
                </div>
                <?php }
            ?>


            </div>
        </div>

    </div>
</div>

<script>
(function($) {

    // $('.question_area .question_item .question').each(function(index, element) {
    //     $(element).click(function() {
    //         $('.question_area .question_item').removeClass('active');
    //         $(element).closest('.question_item').toggleClass('active')
    //     })
    // })



    $('.question_area .question_item .question').each((index, element) => {
        $(element).click(function() {
            if ($(element).closest('.question_item').hasClass('active')) {
                $('.question_area .question_item').removeClass('active')
                $('.question_area .question_item .answer_wrapper').css('height', '0px');

            } else {

                $('.question_area .question_item').removeClass('active')
                $('.question_area .question_item .answer_wrapper').css('height', '0px');
                $(element).closest('.question_item').addClass('active')
                var height = $('.answer', $(element).closest('.question_item')).innerHeight()
                $('.answer_wrapper', $(element).closest('.question_item')).css('height',
                    `${height}px`);
            }
        })
    })



})(jQuery)
</script>