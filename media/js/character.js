$(document).ready(function(){
//-------------------------------------------------------// 
    // sub script
    
    // sub character
    
    $(window).on("scroll", function(){
        var headerH = $(this).scrollTop();
        var mauiTop = $('.maui').offset().top;
        var screenHeight = $(window).height(); 
        
        if(headerH > screenHeight - 200){
            $('.character .moana > img').addClass('characterUp')
        }
        if(headerH > mauiTop - 200){
            $('.character .maui > img').addClass('characterUp')
        }
    });
//-------------------------------------------------------//   
});