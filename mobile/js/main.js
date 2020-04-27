$(document).ready(function(){
//------------------------------------------------------------------// 
    // mainImg slids
    $("#mainWrap > ul").bxSlider({
        auto: true,
        speed: 2000,
        pause: 5000,
        moveSlides: 1,
        controls: false,
        infiniteLoop: true,
        pager: false
    });
//------------------------------------------------------------------// 
    // best slids
//    $(".bestRolling").bxSlider({
//        mode: 'fade',
//        auto: true,
//        speed: 1000,
//        pause: 3000,
//        moveSlides: 1,
//        controls: false,
//        infiniteLoop: true,
//        pager: false
//    });
    
    var swiper = new Swiper('.woman', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
        //        el: '.swiper-pagination',
        clickable: true,
        },
        //      navigation: {
        //        nextEl: '.swiper-button-next',
        //        prevEl: '.swiper-button-prev',
        //      },
    });
    
    var swiper = new Swiper('.man', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
        clickable: true,
        }

    });
//------------------------------------------------------------------//
    // launching slids
    $(".launchingImg > ul").bxSlider({
        mode: 'fade',
        auto: true,
        speed: 1000,
        pause: 5000,
        moveSlides: 1,
        controls: true,
        infiniteLoop: true,
        pager: false,
        touchEnabled: false
    });
    
//------------------------------------------------------------------//
    // popularityWrap slids
    $("#popularityWrap > ul").bxSlider({
        auto: true,
        speed: 1000,
        pause: 5000,
        moveSlides: 1,
        slideWidth: 280,
        controls: false,
        infiniteLoop: true,
        pager: true,
        maxSlides: 3, 
        slideMargin: 30
//        responsive:true
    });
//------------------------------------------------------------------//
    // main hide scroll search
    function scrollSearch(){
        $(window).scroll(function(){
//            console.log($(window).scrollTop())
            var hideTop = $("#bestWrap").offset().top;
            if($(this).scrollTop() > hideTop) { 
                $(".mainSearch").addClass("searchDown");
            }else{ 
                $(".mainSearch").removeClass("searchDown");
            }
        });
    };
    scrollSearch();
//------------------------------------------------------------------//
});