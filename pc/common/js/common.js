$(document).ready(function(){
//------------------------------------------------------------------//
    // nav twoDepth script
    function twoDepth(){
        $('.oneDepth').hover(
            function(){ 
                $('.twoDepth').fadeIn('normal',function(){
                    $(this).stop();
                });
                $('.menuBox').slideDown('fast',function(){
                    $(this).stop();
                });
                $('.headerWrap').addClass('backColor');
            },
            function(){
                $('.twoDepth').fadeOut('fast');
                $('.menuBox').slideUp('normal');
                $('.headerWrap').removeClass('backColor');
            });

        // 키보드 탭키처리 
        $('.oneDepth > li > h3 > a').bind('focus', function(){        
            $('.twoDepth').slideDown('normal');
            $('.menuBox').slideDown('fast');
            $('.headerWrap').addClass('backColor');
        });

        $('.oneDepth > li:nth-of-type(5)').find('a').bind('blur', function(){
            $('.twoDepth').slideUp('fast');
            $('.menuBox').slideUp('normal');
            $('.headerWrap').removeClass('backColor');
        }); 
    }
    twoDepth();
//------------------------------------------------------------------//
    // site map script
    function siteMap(){
        $(".siteBtn").click(function(){
            $(".siteMap").fadeToggle("slow");
        })
    }
    siteMap();
//------------------------------------------------------------------//
    // partners script
    function partners(){
        $(".partnersBtn").click(function(){
            $(".partners > ul").slideToggle();
        });
    }
    partners();
//------------------------------------------------------------------//
    // toTop script
    $(window).on("scroll",function(){
        
        var scrollTops = $(this).scrollTop();
        //    0  = 스크롤바 위치값 +     윈도우 높이값    -   푸터 top 위치
        var view = scrollTops + $(window).height() - $("footer").offset().top;
        // foot 노출되면 view는 양수 
        if(view > 0){
            $(".toTop").fadeIn();
        }else{
            $(".toTop").fadeOut();
        }
        $(".toTop a").click(function(){
            $("html, body").stop().animate(
                { scrollTop: 0 }, 'easeOutBack'
            );
        });
    });
//------------------------------------------------------------------//
});