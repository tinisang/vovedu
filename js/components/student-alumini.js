
(function($){
    var studentAluminiSwiper = new Swiper(".alumini_human .alumini_slider", {   
          
        slidesPerView: 3,
        loop:true,
        speed:1000,
        loopPreventsSliding:false,
       
        navigation: {
            nextEl: ".alumini_human .next",
            prevEl: ".alumini_human .prev",
        },
        breakpoints: {
       
           
            300: {
              slidesPerView: 1,
              centeredSlides:true,

           
            },
            768: {
              slidesPerView: 3,
          
            },
            
            1200: {
              slidesPerView: 3,
            
            }
          }

    });

})(jQuery)