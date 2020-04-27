$(document).ready(function(){
//-------------------------------------------------------//
    // common script 
    
    // nav 
    $(".menuOpen").toggle(function(){
        $("#gnb").slideDown('slow');
    }, function(){
        $("#gnb").slideUp('fast');
    });
    
    // scroll down
    $('.down').click(function(){
        screenHeight = $(window).height();
        $('html, body').animate({'scrollTop':screenHeight}, 1000);
        
    });
    
    // toTop script
    $(window).on("scroll",function(){
        //현재 스크롤바의 top값
        var scrollTops = $(this).scrollTop();
        //    0  = 스크롤바 위치값 +     윈도우 높이값    -   푸터 top 위치
        var view = scrollTops + $(window).height() - $("footer").offset().top;
        // foot 노출되면 view는 양수 
        if(view > 0){
            $(".toTop").addClass('toTopAni').fadeIn();
        }else{
            $(".toTop").removeClass('toTopAni').fadeOut();
        }
        $(".toTop a").click(function(){
            $("html, body").stop().animate(
                { scrollTop: 0 }, 'easeOutBack'
            );
        });
    });
//-------------------------------------------------------//   
});