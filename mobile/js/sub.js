$(document).ready(function(){
//------------------------------------------------------------------// 
    // 현재 페이지 링크 파라메타값 가져오기
//    function getParam(sname){
//        var params = location.search.substr(location.search.indexOf("?") + 1);
//        var sval = "";
//        params = params.split("&");
//        
//        for (var i = 0; i < params.length; i++){
//            temp = params[i].split("=");
//            if ([temp[0]] == sname){ 
//                sval = temp[1]; 
//            }
//        }return sval;
//    }
//    // console.log(getParam("idx"));
//    getParam();
//------------------------------------------------------------------//
    // 브랜드 hidden처리
    function scrollContent(){
        
        var Li = $(".brandShow li");
        Li.addClass("hide");
        
        for(i=0; i <= 7; i++){
//            console.log(i)
            Li.eq(i).removeClass("hide")
        }
        $(window).scroll(function() {
            $(".hide").each(function(i) {
                var o = $(this).offset().top + $(this).outerHeight();
                $(window).scrollTop() + $(window).height() > o &&
                $(this).animate({ opacity: "1" }, 500);
            });
        });
    };
    scrollContent();
//------------------------------------------------------------------//
});