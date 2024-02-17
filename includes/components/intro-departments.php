<?php

    $departments = get_field('loại_phong_ban',10264);

?>

<div class=" VOVeduContainer departments">
    <?php
    
    foreach ($departments as $department_item){?>


        <div class="department_type">
                <div class="intro_departments_title_section ">
                    <div class="title_section section_general">

                        <h2 class="title"><?php echo $department_item['ten_loại_phong_ban'] ?></h2>
                    </div>
                </div>
                
                <div class="departments_wrapper">

                    <?php 
                    
                        foreach($department_item['cac_phong_ban'] as $index => $item){
                            
                            ?>
                            <div class="department_item <?php if($index==0){echo " ";}; ?>">
                                <div class="col1">
                                    <div class="department_name"><?php echo $item['ten_phong_ban']; ?></div>
                                </div>
                                <div class="columns_wrapper">
                                    <div class="col2 contact_info">
                                        <div class="phone contact-item">
                                            <div class="icon"><img src="/wp-content/uploads/2023/10/phone.svg" alt=""></div>
                                            <div class="detail_area">
                                                <div class="title_contact">Số điện thoại</div>
                                                <div class="detail_contact"><?php echo $item['số_diện_thoại']; ?></div>
    
                                            </div>
                                        </div>
                                        <div class="location contact-item">
                                            <div class="icon"><img src="/wp-content/uploads/2023/10/location.svg" alt=""></div>
                                            <div class="detail_area">
                                                <div class="title_contact">Địa chỉ</div>
                                                <div class="detail_contact"><?php echo $item['dịa_diểm']; ?></div>
    
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col3 department_human">
                                        <?php 
                                        
                                            foreach($item['nhan_sự'] as $human_item){ ?>
    
                                                <div class="human_item">
                                                    <div class="image">
                                                        <img src="<?php echo $human_item['ảnh']; ?>" alt="">
                                                    </div>
                                                    <div class="detail_info">
                                                        <div class="position"><?php echo $human_item['chức_vụ']; ?></div>
                                                        <div class="name"><?php echo $human_item['ten']; ?></div>
                                                    </div>
                                                </div>
                                         <?php   }
                                        
                                        ?>
                                       
                                    </div>

                                </div>
                            </div>
                     <?php   }
                    
                    ?>
                
                    
                </div>

            </div>



   <?php }
    
    ?>

  

    
</div>

<script>
(function($){

  






$('.departments .department_type .department_item .col1').each((index, element) => {
        $(element).click(function() {
            if ($(element).closest('.department_item').hasClass('active')) {
                $('.departments .department_type .department_item').removeClass('active')
                $('.departments .department_type .department_item .columns_wrapper').css('height', '0px');

            } else {

                $('.departments .department_type .department_item').removeClass('active')
                $('.departments .department_type .department_item .columns_wrapper').css('height', '0px');
                $(element).closest('.department_item').addClass('active')
                var height = $('.col2', $(element).closest('.department_item')).innerHeight()
                $('.columns_wrapper', $(element).closest('.department_item')).css('height',
                    `${height}px`);
            }
        })
    })
})(jQuery)
</script>