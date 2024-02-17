
(function($){
    var homeFeature = new Swiper(".features_list", {
     
        loop:true,     
        speed: 1000,
        spaceBetween: 40,
        slidesPerView: 4,
        centeredSlides: true,
    centeredSlidesBounds: true,
    grabCursor: true,
    breakpoints: {
       
        // when window width is >= 480px
        300: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 30
        },
        // when window width is >= 640px
        1200: {
          slidesPerView: 4,
          spaceBetween: 40
        }
      }
    });
    
    
    
    
    })(jQuery)