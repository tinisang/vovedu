
(function ($) {
    var homeSwiperDesktop = new Swiper(".homeSlider.desktopOnly", {
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },

        loop: true,
        speed: 1000,
        grabCursor: true,
    });
    var homeSwiperMobile = new Swiper(".homeSlider.mobileOnly", {
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

        loop: true,
        speed: 400,
        grabCursor: true,
    });
    var marqueeSlide = new Swiper(".marquee_area .marquee_wrapper", {
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },

        loop: true,
        speed: 600,
        grabCursor: true,
        navigation: {
            nextEl: ".marquee_area .next",
            prevEl: ".marquee_area .prev",
        },
    });
    var eventFloatSlide = new Swiper(".event_float .event_float_wrapper", {
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

        loop: true,
        speed: 600,
        spaceBetween:15,
        grabCursor: true,
        slidesPerView: 1,
      
    });

    homeSwiperMobile.on('slideChangeTransitionStart', function (swiper) {

        var string = '';
        var index = swiper.realIndex + 1;
        if (index <= 9) {
            string = '0' + index;
        }

        $('.homeSlider_wraper .countup_section.mobileOnly .main_number .digit').text(string)
    })
    homeSwiperDesktop.on('slideChangeTransitionStart', function (swiper) {

        var string = '';
        var index = swiper.realIndex + 1;
        if (index <= 9) {
            string = '0' + index;
        }

        $('.homeSlider_wraper .countup_section.desktopOnly .main_number .digit').text(string)
    })


    $('.slider_image_popup .top_area .close_icon').each((index,element)=>{
        $(element).click(function(){
            $(element).closest('.slider_image_popup').toggleClass('open')
        })
    })

})(jQuery)