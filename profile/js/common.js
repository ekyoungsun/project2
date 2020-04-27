$(document).ready(function(){
    function fullSlider(){
        new fullpage('#fullpage', {
            sectionsColor: ['#a127e7', '#a127e7', '#1c1c1c', '#333', '#0b9abd', '#233e83'],
            anchors: ['home', 'profile', 'pcweb', 'mobileweb', 'responsive', 'wordpress'],
//            navigation: true,
//            navigationTooltips: [ 'home', 'profile', 'pcweb', 'mobileweb', 'responsive', 'wordpress'],
            showActiveTooltip: true,
            menu: '#menu'
        });
    }
    fullSlider();
    
    function txt(){
        var el       = document.querySelector('.main-text')
        var options  = {
            text: '웹 \u00A0 퍼 블 리 셔 \n 선 은 경 의 \u00A0 포 트 폴 리 오 \n 페 이 지 \u00A0 입 니 다.',
            textSpeed: 55,
            blinkSpeed: 0.02
        }
        var instance = new tinytyper(el, options);
    }
    txt();
});