<?php $h1 = $args['h1']; ?>

<div class="hero-section">
        <svg class="half-v" width="461" height="630" viewBox="0 0 461 630" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M32.3829 50.9928L170.634 293.091C171.918 295.347 173.777 297.222 176.02 298.527C178.264 299.832 180.813 300.519 183.408 300.519C186.003 300.519 188.551 299.832 190.795 298.527C193.039 297.222 194.897 295.347 196.182 293.091L262.55 176.898C263.34 175.507 263.756 173.935 263.756 172.335C263.756 170.736 263.34 169.163 262.55 167.773L179.301 22.0242C178.024 19.7851 177.358 17.25 177.367 14.6723C177.377 12.0946 178.063 9.56461 179.356 7.33515C180.649 5.10568 182.504 3.25486 184.736 1.96767C186.968 0.680476 189.498 0.00199662 192.075 4.2564e-05H457.311C457.956 -0.00306444 458.591 0.163979 459.151 0.484349C459.711 0.804719 460.177 1.2671 460.501 1.82493C460.826 2.38276 460.998 3.01634 461 3.66185C461.002 4.30736 460.834 4.94201 460.513 5.50189L110.754 617.951C108.662 621.612 105.642 624.654 101.997 626.77C98.3524 628.886 94.2136 630 90 630C85.7864 630 81.6476 628.886 78.003 626.77C74.3584 624.654 71.3376 621.612 69.2464 617.951L-280.513 5.50189C-280.834 4.94201 -281.002 4.30736 -281 3.66185C-280.998 3.01634 -280.826 2.38276 -280.501 1.82493C-280.177 1.2671 -279.711 0.804719 -279.151 0.484349C-278.591 0.163979 -277.956 -0.00306444 -277.311 4.2564e-05H-55.4258C-37.5963 0.000718886 -20.0839 4.71762 -4.66342 13.6727C10.7571 22.6278 23.5376 35.5028 32.3829 50.9928Z" fill="url(#paint0_linear_232_1927)"/>
            <defs>
            <linearGradient id="paint0_linear_232_1927" x1="-280.999" y1="314.997" x2="460.999" y2="314.997" gradientUnits="userSpaceOnUse">
            <stop stop-color="#CE1628"/>
            <stop offset="0.14" stop-color="#D8232C"/>
            <stop offset="0.39" stop-color="#E53431"/>
            <stop offset="0.66" stop-color="#ED3E34"/>
            <stop offset="1" stop-color="#EF4135"/>
            </linearGradient>
            </defs>
         </svg>
            
        <img src="<?php  
        if ($args['image']){ 
            echo $args['image'];
        }else{
            echo '/wp-content/uploads/2023/11/ttttdfdf.png' ;
        } ;
        ?>" alt="" class="hero-image">
        <div class="title-area VOVeduContainer">
            <?php 
            
            if($h1=='no'){ ?>

            <div class="title-page"><?php 

            if ($args['title']){

                echo $args['title'] ;
            } else {
                echo 'TIÊU ĐỀ';
            };
            
            ?></div>
           <? }else{ ?>

            <h1 class="title-page"><?php 

            if ($args['title']){

                echo $args['title'] ;
            } else {
                echo 'TIÊU ĐỀ';
            };
            
            ?></h1>
           <? }
            
            ?>
            <!-- <div class="description normal-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, to. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, toSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, toSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, toSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, to</div> -->
        </div>
        
    </div>