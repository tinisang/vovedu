(function($){
    var size= $('.history .col1 .milestone_item').size();
    
    $('.history .col1 .milestone_item').each(function(index, element){
        $(element).click(function(){
            $('.history .col1 .milestone_item').removeClass('active')
            $(element).addClass('active');
            // if (index == (size - 1)){
            //     $('.history .col2').removeClass('up')
            //     $('.history .col2').addClass('down')
            // } else{
            //     $('.history .col2').removeClass('down')
            //     $('.history .col2').addClass('up')
                
            // }
            gsap.to($('.history .col2 .wrapper_image_history'), { 
                duration: 0.7, 
                scrollTo: {
                    y: $('.history .col2 .milestone_item_image').eq(index)
                },
                onComplete: function(){
                    if (index == (size - 1)){
                        $('.history .col2').removeClass('up')
                        $('.history .col2').addClass('down')
                    } else{
                        $('.history .col2').removeClass('down')
                        $('.history .col2').addClass('up')
                        
                    }
                }
            })
        })
    })

})(jQuery)