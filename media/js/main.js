$(document).ready(function(){
//-------------------------------------------------------//   
    // main script
    
    // scroll header
    var screenSize = $(window).width(); 
    var winHeight = $(window).height();
    var headHeight = $('#headerArea').height();
    
    if(screenSize > 768){
        $(window).on("scroll", function(){
            var headerH = $(this).scrollTop();
            if(headerH > winHeight - headHeight){
                $('#headerArea').css({ top: 0 });
            }else{
                $('#headerArea').css({ top: -160 });
            }
        });
    }else{
        $('#headerArea').css({ top: 0 });
    }
    
    // header resize
    var current = 0;
    $(window).resize(function(){ 
        screenSize = $(window).width();
        
        if(screenSize > 768){
            $('#headerArea').css({ top: -160 });
            $("#gnb").show();
             current = 1;
            
            $(window).on("scroll", function(){
                var headerH = $(this).scrollTop();
                if(headerH > winHeight - headHeight){
                    $('#headerArea').css({ top: 0 });
                }else{
                    $('#headerArea').css({ top: -160 });
                }
            });
        }
        if(current == 1 && screenSize < 768){
            $('#headerArea').css({ top: 0 });
            $("#gnb").hide();
            current = 0;
            $(window).off("scroll");
        }
    }); 
    
    // main gallery 
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationType: 'progress',
        slidesPerView: 'auto',
        paginationClickable: true,
        spaceBetween: 0,
        freeMode: true
    });
    
//-------------------------------------------------------//  
});