
<?php 

        $leaders = get_field('ban_lanh_dạo',10264);

?>

<div class="section_general ">

    <h2 class="title">BAN GIÁM HIỆU</h2>
    <div class="separator"></div>
</div>
<div class="VOVeduContainer">
    <div class="leaders_wrapper">
        <?php 
        
        
        foreach($leaders as $item){?>

            <div class="leader_item">
            <div class="col2">
                    <div class="position"><? echo $item['chức_vụ']; ?></div>
                    <div class="name"><? echo $item['ten']; ?></div>
                </div>
                <div class="col1">
                    <div class="images">
                        <img src="/wp-content/uploads/2023/11/O.png" alt="" class="o-shape">
                        <img src="<?php echo $item['ảnh']; ?>" alt="" class="main_image">
                        <img src="/wp-content/uploads/2023/11/V1.png" alt="" class="v1">
                        <img src="/wp-content/uploads/2023/11/V2.png" alt="" class="v2">
                        
                    </div>
                </div>

            
                
            </div>
      <?php  }
        
        ?>
        
    </div>

</div>