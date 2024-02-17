
(function ($) {
    var homeGallery1 = new Swiper(".home_images .slider_image_area .row_1 .image_area", {

        loop: true,
        speed: 1000,
        spaceBetween: 23,
        slidesPerView: 2,
        slidesPerGroup: 2,
     
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

        grabCursor: true,
        navigation: {
            nextEl: ".home_images .slider_image_area .row_1 .next",
            prevEl: ".home_images .slider_image_area .row_1 .prev",
        },
        breakpoints: {
            // when window width is >= 480px
            300: {
                slidesPerView: 1,
                slidesPerGroup: 1,
            },
            768: {
                slidesPerView: 2,
                slidesPerGroup: 2,
            },
            // when window width is >= 640px
            1200: {
                slidesPerView: 2,
                slidesPerGroup: 2,
            }
        }
});


var homeGallery2 = new Swiper(".home_images .slider_image_area .row_2 .image_area", {

    loop: true,
    speed: 1000,
    spaceBetween: 23,
    slidesPerView: 4,
    slidesPerGroup: 4,

   
 

    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    grabCursor: true,
    navigation: {
        nextEl: ".home_images .slider_image_area .row_1 .next",
        prevEl: ".home_images .slider_image_area .row_1 .prev",
    },
    breakpoints: {
        // when window width is >= 480px
        300: {
            slidesPerView: 3,
            slidesPerGroup: 3,
           
        },
        768: {
            slidesPerView: 4,
            slidesPerGroup: 4,
        },
        // when window width is >= 640px
        1200: {
            slidesPerView: 4,
            slidesPerGroup: 4,
        }
    }
});
    
    
    }) (jQuery)