<?php
//Load Style sheets
function load_styles() {
  
    wp_register_style( 'global-style', get_template_directory_uri() . '/css/global.css', 'all' );

    wp_register_style( 'swiper-style', get_template_directory_uri() . '/css/swiper/swiper.min.css', 'all' );
    wp_register_style( 'slim-select-style', get_template_directory_uri() . '/css/select/select.css', 'all' );
    wp_register_style( 'desktop-style', get_template_directory_uri() . '/css/responsive/desktop.css', 'all' );
    wp_register_style( 'tablet-style', get_template_directory_uri() . '/css/responsive/tablet.css', 'all' );
    wp_register_style( 'mobile-style', get_template_directory_uri() . '/css/responsive/mobile.css', 'all' );
    
    wp_enqueue_style( 'global-style' );
    wp_enqueue_style( 'swiper-style' );
    wp_enqueue_style( 'slim-select-style' );
    wp_enqueue_style( 'desktop-style' );
    wp_enqueue_style( 'tablet-style' );
    wp_enqueue_style( 'mobile-style' );

    wp_enqueue_script( 'header-script', get_stylesheet_directory_uri() . '/js/components/header.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'swiper-script', get_stylesheet_directory_uri() . '/js/swiper/swiper-bundle.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'home-swiper-script', get_stylesheet_directory_uri() . '/js/swiper/home-slider.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'home-video-script', get_stylesheet_directory_uri() . '/js/components/home-video.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'home-feature-script', get_stylesheet_directory_uri() . '/js/swiper/home-feature.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'home-testimonial-script', get_stylesheet_directory_uri() . '/js/swiper/home-testimonial.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'home-history-script', get_stylesheet_directory_uri() . '/js/components/home-history.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'home-images-script', get_stylesheet_directory_uri() . '/js/swiper/home-images.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'intro-humans-script', get_stylesheet_directory_uri() . '/js/components/intro-humans.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'student-alumini-script', get_stylesheet_directory_uri() . '/js/components/student-alumini.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'slim-select-script', get_stylesheet_directory_uri() . '/js/slim_select/select.min.js', array( 'jquery' ),'',true );
  }
  add_action( 'wp_enqueue_scripts', 'load_styles' );


//Themes Option
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
register_nav_menus(
    array(
        'header-menu' => 'Header Menu'
    )
);
function generateRandomString($length = 10) {
  return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
};
// Add Components

add_action( 'init', 'add_custom_shortcode' );

function formatJSON($item){
  echo "<pre>";
  print_r($item);
  echo "</pre>";
};

function isMobile() {
  return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
function button_component( $atts) {
    $attributes = shortcode_atts( array(
		'state' => 'fill',
		'size' => 'small',
        'color'=>'red',
        'icon_visible'=>'true',
        'icon'=>'<svg xmlns="http://www.w3.org/2000/svg" width="17" height="13" viewBox="0 0 17 13" fill="none">
        <path d="M10.5289 11.7919L15.8208 6.49998L10.5289 1.20807" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M0.999999 6.49988L15.6726 6.49988" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>',
        'content'=>'Xem thêm',
        'link'=>'/',
        'button'=>'true'
	), $atts );
    ob_start();
    get_template_part('includes/components/button','component',$attributes);
    return ob_get_clean();
	// return $content;
}

function add_custom_shortcode() {
	add_shortcode( 'button', 'button_component' );
}


//SMTP Configuration

function mail_to_customer($data){
 

  wp_mail($data,'VOVedu',"Data"); 
  };
  function wpse27856_set_content_type(){
      return "text/html";
  };
  add_filter( 'wp_mail_content_type','wpse27856_set_content_type' );


//Send Mail
add_action( 'wp_ajax_mail', 'sendmail' );
add_action( 'wp_ajax_nopriv_mail', 'sendmail' );
function sendmail(){
	
	$data = $_POST['dataContent'];
  // wp_mail('spham8011@gmail.com',"HRehr","<b>Data</b>"); 
 
  wp_remote_post(
		'https://script.google.com/macros/s/AKfycbx0Oi4wocbbeATPMlFpSV7yLuMF5EwlX3M_CoZ-YjigUc5jwClIR06daBX7fHOy497Z/exec',
		[
			'body' => $data,
     
		]
	);
	wp_send_json_success($data);
};

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );


//Views

function customSetPostViews($postID) {
  $countKey = 'view';
  $count = get_post_meta($postID, $countKey, true);
  if($count==''){
      $count = 0;
      delete_post_meta($postID, $countKey);
      add_post_meta($postID, $countKey, '1');
  }else{
      $count++;
      update_post_meta($postID, $countKey, $count);
  }
}


//Query Posts
add_action( 'wp_ajax_query', 'queryPosts' );
add_action( 'wp_ajax_nopriv_query', 'queryPosts' );
function queryPosts(){
	
      $data = $_POST['data'];
      $posts_per_page = $data['posts_per_page'];

      $args = array(
        'post_type' => 'post',
        'posts_per_page' => $posts_per_page,
        'offset' => $posts_per_page*($data['page_num'] - 1), 
        's' => $data['key'],       
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => $data['categories'],
                'operator' => 'IN',  
            )
          ),
          'date_query' => array(  
            array(
            'year' => $data['year'],                         
            'relation' => 'IN',         
            ),
          ),

    );

    ob_start(); //bắt đầu bộ nhớ đệm
    $query = new WP_Query($args);

    $total = $query -> found_posts ;
    $pages= ceil($total/$posts_per_page);
    $pagination_output='';
    if ($pages > 1){

      for ($x = 1; $x <= $pages; $x++) {
        if ($x == $data['page_num']){

          $pagination_output.="<span class='pagination-item active'>$x </span>";
        } else{

          $pagination_output.="<span class='pagination-item'>$x </span>";
        };
      };
    };

    while ( $query -> have_posts() ) : $query ->the_post(); // standard WordPress loop. 

        get_template_part('includes/components/post','loop',array('id'=>get_the_ID())); 

      endwhile; // end

      wp_reset_query();
      $result = ob_get_clean(); 
      wp_send_json_success(
      array(
        'post' => $result,
        'pagination' => $pagination_output
        )
    ); 
    die();
};
//Query News - Information
add_action( 'wp_ajax_query_news', 'queryNews' );
add_action( 'wp_ajax_nopriv_query_news', 'queryNews' );
function queryNews(){
	
      $data = $_POST['data'];
      $posts_per_page = $data['posts_per_page'];

      $args = array(
        'post_type' => 'post',
        'posts_per_page' => $posts_per_page, 
        'category_name' => $data['categories'],
       
    );

    $view_more= true;
   
   
    $news = get_posts($args);
    if(count($news)<4){
      $view_more=false;
    };
    ob_start(); //bắt đầu bộ nhớ đệm
    foreach($news as $key=> $item){
      if ($key==0){

        get_template_part('includes/components/post','loop2',array('id'=> $item->ID));
      };
    };
    wp_reset_query();
    $first = ob_get_clean(); 
    ob_start(); //bắt đầu bộ nhớ đệm
    foreach($news as $key=> $item){
      if ($key>0){

        get_template_part('includes/components/post','loop2',array('id'=> $item->ID));
      };
    };
    wp_reset_query();
    $second = ob_get_clean(); 
    $link='/news';
    if ($data['categoryID']!=''){
      $link=get_term_link((int)$data['categoryID']);
    }
    wp_send_json_success(
      array(
        'first' =>$first ,
        'next' => $second,
        'view_more' => $view_more,
        'link' => $link,

        )
    ); 
    die();
};


//Query DOCS - Information
add_action( 'wp_ajax_query_docs', 'queryDocs' );
add_action( 'wp_ajax_nopriv_query_docs', 'queryDocs' );
function queryDocs(){
	
      $data = $_POST['data'];
     $linkType = $data['linkType'];

      $args = array(
        'post_type' =>  $data['postType'],
        'posts_per_page' => 10000, 
        'tax_query' => array(
          array(
              'taxonomy' => $data['taxanomyType'],
              'field' => 'slug',
              'terms' => $data['categories'],
              'operator' => 'IN',  
          )
        ),
       
    );

    $docs = get_posts($args);
    
    ob_start(); //bắt đầu bộ nhớ đệm
    $loopCount = ceil(count($docs)/2);
                    for ($x = 0; $x < $loopCount; $x++) {
                      if ($linkType == 'file'){

                        $url1= get_field('tai_liệu',$docs[$x*2]->ID)['url'];
                        $url2= get_field('tai_liệu',$docs[$x*2 + 1]->ID)['url'];
                    }else{
                        $url1= get_permalink($docs[$x*2]->ID);
                        $url2= get_permalink($docs[$x*2 + 1]->ID);
                    };                      ?>
                        <div class="document_row">

                        
                        <div class="document_item">
                            <div  class="image">
                                <img src="<?php echo get_the_post_thumbnail_url($docs[$x*2]->ID,'full') ?>" alt="">
                                <?php echo do_shortcode('[button state="fill" content="Xem chi tiết" icon_visible="false" link="'.$url1.'"]') ?>
                    </div>
                            <a href="<?php echo $url1 ?>" class="title"><?php echo $docs[$x*2]->post_title; ?></a>
                            <?php echo do_shortcode('[button state="single" link="'.$url1.'" content="Xem thêm"]') ?>
                        </div>

                        <?php 
                            if ($docs[$x*2+1]){?>
                            <div class="document_item">
                            <div  class="image">
                                <img src="<?php echo get_the_post_thumbnail_url($docs[$x*2 +1]->ID,'full') ?>" alt="">
                                <?php echo do_shortcode('[button state="fill" content="Xem chi tiết" icon_visible="false" link="'.$url2.'"]') ?>
                            </div>
                                <a href="<?php echo $url2 ?>" class="title"><?php echo $docs[$x*2 +1 ]->post_title; ?></a>
                                <?php echo do_shortcode('[button state="single" link="'.$url2.'" content="Xem thêm"]') ?>
                            </div>
                          <?php  }
                        ?>
                </div>
                  <?php  }
    wp_reset_query();
    $result = ob_get_clean(); 

    wp_send_json_success(
      array(
        'data'=>$result

        )
    ); 
    die();
};




//Query DOCS - Information
add_action( 'wp_ajax_query_video', 'queryVideo' );
add_action( 'wp_ajax_nopriv_video', 'queryVideo' );
function queryVideo(){
	
      $id = $_POST['data'];

    
    ob_start(); //bắt đầu bộ nhớ đệm
    $type=get_field('loại_video',$id);
    $thumbnail = get_the_post_thumbnail_url($id, 'full');
    $iframe = get_field('video_youtube',$id);
    $link = get_field('link_video_tự_tải_len',$id);

    get_template_part(
        'includes/components/video',
        'item',
        array(
            'type'=> $type,
            'thumbnail'=> $thumbnail,
            'iframe' => $iframe,
            'link' => $link,
            'height'=> '100%',
            )
        ); 
    wp_reset_query();
    $result = ob_get_clean(); 

    wp_send_json_success(
      array(
        'data'=>$result

        )
    ); 
    die();
};
?>