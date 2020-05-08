$(document).ready(function(){

//------------------------------------------------------------------//
    // header, twoConts fixed script
    function scrollTopWrap(){
        $(window).scroll(function(){
//            console.log($(window).scrollTop())
            if($(this).scrollTop() > 30) {
                $(".subHeader").addClass("subHeaderOn");
                $(".twoConts").show();
            }else{
                $(".subHeader").removeClass("subHeaderOn");
                $(".twoConts").hide();
            }
        });

        $(".now").on("click", function(){
            $(".twoConts ul").slideToggle();
        });

    };
    scrollTopWrap();
//------------------------------------------------------------------//
    // site script
    function siteMap(){

        var evenT = ['mousewheel','touchmove'];
        $.each(evenT, function(i, ee){

            $(".siteOn").on("click", function(){
                $(".siteMap").show("slide", { direction: "right" }, 600, 'easeOutCubic');
                $(".shadow").fadeIn("fade");
                $("#wrapper").bind(ee, function(e){e.preventDefault()});
            });
            $(".siteOff").on("click", function(){
                $(".siteMap").hide("slide", { direction: "right" }, 600, 'easeOutCubic');
                $(".shadow").fadeOut("fade");
                $("#wrapper").unbind(ee);
            });

        });

        var onoff = [false,false,false,false];
        var arrcount = onoff.length;
//        console.log(arrcount);
        $('.siteMap .siteList h3 > a').click(function(){
            var ind=$(this).parents('.siteList').index();
           if(onoff[ind]==false){
            //$('#gnb .depth1 ul').hide();
            $(this).parent('h3').next('ul').slideDown('slow');
            $(this).parents('.siteList').siblings('li').find('ul').slideUp('fast');
             for(var i=0; i<arrcount; i++) onoff[i]=false;
             onoff[ind]=true;

           }else{
             $(this).parent('h3').next('ul').slideUp('fast');
             onoff[ind]=false;
           }
        });
    };
    siteMap();
//------------------------------------------------------------------//
    // partners script
    function partners(){
        $(".partnersBtn").click(function(){
            $(".partners > ul").slideToggle()
        });
    };
    partners();
//------------------------------------------------------------------//
});
