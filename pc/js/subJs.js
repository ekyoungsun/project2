$(document).ready(function(){
//------------------------------------------------------------------// 
    // 서브상단 고정 script
    function scrollTopWrap(){
        $(window).scroll(function(){
            // console.log($(window).scrollTop())
            if($(this).scrollTop() > 50){ 
                $("header").addClass("headerUp");
                $(".siteMap .siteBtn").addClass("closeUp");
            }else{ 
                $("header").removeClass("headerUp");
                $(".siteMap .siteBtn").removeClass("closeUp");
            }
        });
    }
    scrollTopWrap();
//------------------------------------------------------------------//
    // 현재 페이지 링크 파라메타값 가져오기
    function getParam(sname){
        var params = location.search.substr(location.search.indexOf("?") + 1);
        var sval = "";
        params = params.split("&");
        
        for(var i = 0; i < params.length; i++){
            temp = params[i].split("=");
            if ([temp[0]] == sname)
                sval = temp[1]; 
        }return sval;
    }
    // console.log(getParam("idx"));
    getParam();
//------------------------------------------------------------------//    
    // perfumne, soap 페이지에만 적용! 
    function hid(){
        var hidden = ["perfume", "soap"];
        // console.log(hidden);
        for(var i in hidden){
            if(getParam("idx") == hidden[i]){
                // twoConts 안보이게
                $(".twoConts").css({ display: "none" });
                // h2에 클래스 추가
                $("#subImg").find("h2").addClass("brandTit");
            }    
            // console.log(hidden[i]);
        }
    }
    hid();
//------------------------------------------------------------------//    
    // 현재 페이지 2차메뉴 활성화
    function on(){
        var pages = getParam("pages");
        var table = getParam("table");
        var newLi = $(".twoConts").children();
        var liLeng = newLi.length;
//         console.log(table);
        
        for(var i=0; i < liLeng; i++){
            var alink = newLi.eq(i).find("a").attr("href");
            // 2차메뉴 li 중 a링크에 현재 페이지 page파라메타 값이 있는지
            
            if(alink.indexOf(table) != 0){
                // alink.indexOf(table) 있으면 첫번째 a링크에만 클래스 추가
                newLi.eq(0).find("a").addClass("on");
            }else if(alink.indexOf(pages) != -1){
                // alink.indexOf(pages) 있으면 해당 a링크에 클래스 추가
                newLi.eq(i).find("a").addClass("on");
            }else{ }
        }
    }
    on();
//------------------------------------------------------------------//
    // perfume, soap 상품페이지 script
    $(".prodImg > ul").bxSlider({
        auto: true,
        speed: 1000,
        pause: 3000,
        moveSlides: 1,
        controls: false,
        pager: true,
        minSlides: 1,
        infiniteLoop: true
    });
//------------------------------------------------------------------//    
    // 연혁 script
    function history(){
        // 커튼 open
        $(window).scroll(function(){
            var ml = $(".historyWrap > .middle .mL");
            var mR = $(".historyWrap > .middle .mR");
            // console.log(ml.offset().top);
            if($(this).scrollTop() > 100){
                $(ml).stop().animate(
                    { left: -1000 },2000,"easeInOutQuart"
                );
                $(mR).stop().animate(
                    { right: -1000 },2000,"easeInOutQuart"
                );
            }
        });
        // content 옆으로 scroll
        var swiper = new Swiper(".swiper-container",{
            autoHeight: true,
            speed: 500,
            onSlideChangeStart: function(){
                $(".historyList .active").removeClass("active");
                $(".historyList a").eq(swiper.activeIndex).addClass("active");
                }
            });

            $(".historyList a").on("touchstart mousedown", function(e){
                e.preventDefault();
                $(".historyList .active").removeClass("active");
                $(this).addClass("active");
                //swiper.swipeTo($(this).index());					
                swiper.slideTo($(this).index());
            });

            $(".historyList li a").click(function(e){
                e.preventDefault();
            });
        // history 페이지 전용 totop
        $(window).on("scroll",function(){
            
            var scrollTops = $(this).scrollTop();
            var view = scrollTops + $(window).height() - $("footer").offset().top;
            if(view > 0)
                $(".toTop").fadeIn();
            else
                $(".toTop").fadeOut();
            
            var his = ["history"]
            if(getParam("page") == his){
                $(".toTop a").click(function(){
                    $("html, body").stop().animate(
                        { scrollTop: 370, }, 'easeOutBack'
                    );
                });
            }    
        });
    }
    history();
//------------------------------------------------------------------//
});