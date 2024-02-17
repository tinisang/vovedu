
(function($){
    var homeTestimonial = new Swiper(".testimonial_wrapper .slide1_wrapper .image_slide", {
     
    
        speed: 1000,
        spaceBetween: 30,
        slidesPerView: 1,
        loopedSlides:5,
        grabCursor: true,
        navigation: {
            nextEl: ".testimonial .next-button",
            prevEl: ".testimonial .prev-button",
        },
    });
    
    var homeTestimonialText = new Swiper(".testimonial_wrapper .slide2_wrapper .text_slide", {
     
             
        speed: 1000,
        spaceBetween: 30,
        slidesPerView: 1,
        loopedSlides:5,
        grabCursor: true,
        effect: 'fade',
      fadeEffect: {           // added
        crossFade: true,     // added(resolve the overlapping of the slides)
    },
       
    });
    
    homeTestimonialText.controller.control = homeTestimonial;
    homeTestimonial.controller.control = homeTestimonialText;
    
    })(jQuery)