$(document).ready(function(){
//------------------------------------------------------------------// 
    // 상단 고정 script
    function scrollTopWrap(){
        $(window).scroll(function(){
//            console.log($(window).scrollTop())
            var winHeight = $(window).height();
            var headHeight = $('.headerWrap').height();
            
            if($(this).scrollTop() > winHeight - headHeight) { 
                $("header").addClass("headerUp")
                $(".siteMap .siteBtn").addClass("closeUp")
            }else{ 
                $("header").removeClass("headerUp")
                $(".siteMap .siteBtn").removeClass("closeUp")
            }
        });
    }
    scrollTopWrap();
//------------------------------------------------------------------//
    function mainVideo(){
        var screenSize = $(window).width();
        var screenHeight = $(window).height();
        
        $(window).resize(function(){  // 웹브라우저 크기 조절시 반응하는 이벤트 메소드()

            if(screenSize){
                $("#video").show();
                $("#video").attr('src', 'video/videoplayback.mp4');
            }
        });  
    }
    mainVideo();
//------------------------------------------------------------------//    
    // best 영역 script
    function bestScript(){
        // 배경 움직임
        $(window).scroll(function(e){
            $(".bestBg1").each(function(){
                $(this).css("margin-top", - $(window).scrollTop() / parseInt($(this).attr("data-scrollSpeed")));
            });
            $(".bestBg0").each(function(){
                $(this).css("margin-top", + $(window).scrollTop() / parseInt($(this).attr("data-scrollSpeed")));
            });
        });
        // 슬라이드
        $(".twoslider").bxSlider({
            mode:"fade",
            auto: true,
            pagerCustom: ".bx-pager",
            controls: false,
            speed: 1000,
            pause: 3000,
            onSlideBefore: function(currentSlideNumber, totalSlideQty, currentSlideHtmlObject){
//                console.log(currentSlideHtmlObject);
                var progressLength = (currentSlideHtmlObject + 1) * 33.33 + "%";
                $(".bestPager .progress span").css("max-width","calc(1px + " + progressLength + ")")}
        });
    }
    bestScript();
//------------------------------------------------------------------//
    // launching banner 영역 script
    function launImg(){
        var index1 = 0;
        var total1 = $(".launImg > li").length; // a태그의 갯수를 세어줌
        var timer1;

        $(".launImg").css({ // width 전체 사이즈
            width: 639*total1 // 600 * 슬라이드 갯수
        });
                    
        $(".launTxt").css({
            height: 175*total1
        });

        function goToSlide1(no1){ // 이동시키는 함수
            index1 = no1;

            if(index1 >= total1) // 다음
                index1 = 0;
            if(index1 < 0) // 이전
                index1 = total1 - 1;
            
            // index 갯수 만큼~
            $(".launRolling .launImg").stop().animate( // ~px 왼쪽으로 이동
                { marginLeft: -639*index1 },500
            );
            $(".launBox .launTxt").stop().animate( // ~px 왼쪽으로 이동
                { marginTop: -175*index1 },500
            );
        };

        function nextSlide1(){ // 1씩 증가하는 함수
            goToSlide1(index1 + 1);
        };

        timer1 = setInterval(nextSlide1, 5000);
        //      timer변수에 대입

        $(".launPager a").on("click", function(){ // 슬라이드 제어
            goToSlide1(index1+eval($(this).attr("data-btn")))
        });
    }
    launImg();
//------------------------------------------------------------------//
    // big banner 영역 script
    function bigScript(){
        // 슬라이드
        $(".banRolling > ul").bxSlider({
            mode: "fade",
            auto: true,
            speed: 1000,
            pause: 6000,
            moveSlides: 1,
            controls: false,
            pager: true
        });
        // 사이즈 변형
        $(window).on("scroll", function(){
            var top = $("header").offset().top;
            var dHigh = $(document).height();
            var wHigh = $(window).height();
            var per = (top / (dHigh - wHigh));
//            console.log(top, dHigh, wHigh, per)
            var controller = new ScrollMagic.Controller();
            var scene = new ScrollMagic.Scene({triggerElement: ".launching .mainTitle", duration: 400, offset: 600})
                                       .setClassToggle(".banRolling", "banRollingS")
                                       .addTo(controller)
            $(".banRollingS").css("transform", "scale("+((0+per)*2.1)+")");
        });
    }
    bigScript();
//------------------------------------------------------------------//
    // popuRolling 영역 슬라이드 script
    $(".popuRolling > ul").bxSlider({
        auto: true,
        autoHover: true,
        preloadImages:'all',
        speed: 1000,
        pause: 3000,
        slideMargin: 60,
        moveSlides: 2,
        controls: false,
        pager: false,
        minSlides: 2,
        maxSlides: 4
    });
//------------------------------------------------------------------//
    // aboutWrap bg 슬라이드 script
    function aboutSlider(){
        var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "800%"}});
        new ScrollMagic.Scene({triggerElement: ".popuRolling"})
                       .setTween(".mainAboutBg", {y: "40%", ease: Linear.easeNone})
                       .addTo(controller)
    }
    aboutSlider();
//------------------------------------------------------------------//
    // 하단 배너 영역 script
    function botBanner(){
        // 리스트 반복
        var txt = ["4711","까르뱅","니니리치","데렉 램 10 크로스비","랑세","메르세데스-벤츠","모노템","발렌티노","베네통","아리아나 그란데","아베크롬비 앤 피치","아자로","아장 프로보카퇴르","에트로","엘리자베스 앤 제임스","장폴고티에","제니퍼 로페즈","존바바토스","쥬시꾸뛰르","캐롤리나 헤레라","크리스티나 아길레라","클린","토카","파코라반","펜할리곤스","폴리스","프라다"];
        $.each(txt, function(i, ee){
            // 태그 객체 추가
            var newLi = $("<li>");
            var newA = $("<a>");
            newA.attr("href","subForm.php?idx=perfume&page=brand");
            // img 반복
            newA.css({
                backgroundImage: "url('img/sub_brand_img"+(i+1)+".gif')",
                backgroundPosition: "center"
            });
            newLi.append(newA);
            $(".botBanWrap").append(newLi);
        });
        //슬라이드
        $(".botBanWrap").bxSlider({
            speed: 100000,
            slideMargin: 60,
            maxSlides: 27,
            ticker: true,
            tickerHover: true,
            controls: false,
            pager: false
        });
    }
    botBanner();
//------------------------------------------------------------------// 
    // scroll color script
    function setupColors(){
        var rawColors = ["#fff", "#fff", "#fff", "#fff", "#dadf7b", "#90e4e2"];
        var topHeight = $("#bgWrap").offset().top;
        if($(window).width() <= topHeight){
            raw_colors = ["#000"];
        }
        var colors = [];
        for(var i = 0; i < rawColors.length; i++){
            colors.push({
                color: rawColors[i],
                position: $(window).height() * i - 310
            });
        }
        $("#container").colorScroll({
            colors: colors
        });
    }
    setupColors();
    $(window).resize(setupColors);
//------------------------------------------------------------------// 
});
