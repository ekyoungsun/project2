<? 
    session_start();
    @extract($_GET); 
    @extract($_POST); 
    @extract($_SESSION);  
    
    include "common/inc/data.php";
    include "../lib/func.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>(주)씨이오인터내셔널</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="common/css/common.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/main_ani.css">
    <link rel="stylesheet" href="css/main.css" >
    <script src="js/plugins/jquery-1.12.4.min.js"></script>
    <script src="js/plugins/jquery-ui.min.js"></script>
    <script src="js/plugins/jquery-migrate-1.4.1.min.js"></script>
    <script src="js/plugins/prefixfree.min.js"></script>
    <script src="js/plugins/jquery.bxslider.min.js"></script>
    <script src="js/plugins/swiper.min.js"></script>
    <script src="js/plugins/scrollMagic/ScrollMagic.min.js"></script>
    <script src="js/plugins/scrollMagic/TweenMax.min.js"></script>
    <script src="js/plugins/scrollMagic/animation.gsap.min.js"></script>
    <script src="js/plugins/scrollMagic/animation.velocity.min.js"></script>
    <script src="js/plugins/scrollMagic/debug.addIndicators.min.js"></script>
    <script src="js/plugins/colorScroll/jquery.colorscroll.js"></script>
    <script src="common/js/common.js"></script>
    <script src="js/mainJs.js"></script>
    <script src="js/mainPopup.js"></script>
    <script>
    // <![CDATA[
    try {
        window.addEventListener('load', function(){
            setTimeout(scrollTo, 0, 0, 1); 
        }, false);
    } 
    catch(e){}
    // ]]>
    </script>
    <!--[if lt IE 9]> 
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>
<body>
<? include "mainInc/top.php"; ?>
  
<section id="mainWrap">
    <h2 class="hidden">메인 비주얼 영역</h2>
    <div class="mainSearch">
        <label for="search" class="hidden">제품명을 입력란</label>
        <input type="text" id="search" placeholder="브랜드 명이나 제품명을 입력하세요." class="searchBox">
        <input type="submit" value="검색" class="searchBtn">
    </div>
    <div class="blackBox"></div>
    <video id="video" autoplay muted loop>
        <source src="video/videoplayback.mp4" type="video/mp4">
    </video>
</section>
<div id="wrapper">
    <article id="container">
        <h3 class="hidden">본문 영역</h3>
        <section id="bestWrap">
            <div class="best wrap">
                <h3 class="mainTitle">
                    <span>CEO's Choice for customer</span>Best of Perfume
                </h3>
                <div class="bestRolling">
                    <ul class="women twoslider">
                        <li>
                            <a href="#none" class="bextTxtBox">
                                <img src="img/main_best_w_img01.png" alt="랑세 알쉬미 두 마땅 EDT">
                                <p class="bestTxt">
                                    랑세 알쉬미 두 마땅 EDT<span>Rance Alchimie du Matin EDT</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#none" class="bextTxtBox">
                                <img src="img/main_best_w_img02.png" alt="캐롤리나 헤레라 굿 걸 글로리어스 골드 EDP">
                                <p class="bestTxt lp">
                                    캐롤리나 헤레라 굿 걸 글로리어스 골드 EDP<span>CAROLINA HERRERA Good Girl Glorious Gold EDP</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#none" class="bextTxtBox">
                                <img src="img/main_best_w_img03.png" alt="토카 스텔라 EDP">
                                <p class="bestTxt">
                                    토카 스텔라 EDP<span>TOCCA Stella EDP</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="man twoslider">
                        <li>
                            <a href="#none" class="bextTxtBox">
                                <img src="img/main_best_m_img03.png" alt="펜할리곤스 아르테미지아 EDP">
                                <p class="bestTxt">
                                    펜할리곤스 아르테미지아 EDP<span>PENHALIGON'S ARTEMISIA EDP</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#none" class="bextTxtBox">
                                <img src="img/main_best_m_img02.png" alt="프라다 르옴므 프라다 인텐스 EDP">
                                <p class="bestTxt">
                                    프라다 르옴므 프라다 인텐스 EDP<span>PRADA L'homme Prada Intense EDP</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#none" class="bextTxtBox">
                                <img src="img/main_best_m_img01.png" alt="존바바토스 아티산 EDT">
                                <p class="bestTxt">
                                    존바바토스 아티산 EDT<span>John Varvatos Artisan EDT</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>           
                <div class="bestPager bx-pager">
                    <div class="progress"><span></span></div>
                    <ul class="bx-pager">
                        <li><a data-slide-index="0" class="active"><i>01</i></a></li>
                        <li><a data-slide-index="1"><i>02</i></a></li>
                        <li><a data-slide-index="2"><i>03</i></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="launchingWrap">
            <div class="launching wrap">
                <h3 class="mainTitle">
                    <span>CEO's Choice for 2020</span>New Launching<br>Perfume
                </h3>
                <div class="launRolling">
                    <div class="launImgWrap">
                        <ul class="launImg">
                            <li><span>장 폴 고티에<br>르 보 &amp; 라 벨 EDP</span></li>
                            <li><span>쥬시꾸뛰르<br>위 글로우 EDP</span></li>
                            <li><span>펜할리곤스<br>커즌 매튜 EDP</span></li>
                        </ul>
                    </div>
                    <div class="launBox">
                        <div class="launTxtWrap">
                            <ul class="launTxt">
                                <li>
                                    <p><span>BRANDS_Jean Paul Gaultier</span></p>
                                    <p>장 폴 고티에<br>르 보 &amp; 라 벨 EDP</p>
                                </li>
                                <li>
                                    <p><span>BRANDS_Juicy Couture</span></p>
                                    <p>쥬시꾸뛰르<br>위 글로우 EDP</p>
                                </li>
                                <li>
                                    <p><span>BRANDS_Penhaligon's</span></p>
                                    <p>펜할리곤스<br>커즌 매튜 EDP</p>
                                </li>
                            </ul>

                        </div>
                        <ul class="launPager">
                            <li class="prev"><a data-btn="-1">이전</a></li>
                            <li class="next"><a data-btn="1">다음</a></li>
                        </ul>
                    </div>
                    <div class="launBg"></div>
                </div>
            </div>
        </section>
        <div id="bgWrap">
            <div class="background"></div>
            <section id="bannerWrap">
                <h3 class="hidden">상품 배너 존</h3>
                <div class="banRolling">   
                    <ul class="banImg">
                        <li>
                            <img src="img/main_banner_img01.jpg" alt="배너이미지">
                        </li>
                        <li>
                            <img src="img/main_banner_img02.jpg" alt="배너이미지">
                        </li>
                        <li>
                            <img src="img/main_banner_img03.jpg" alt="배너이미지">
                        </li>
                        <li>
                            <img src="img/main_banner_img04.jpg" alt="배너이미지">
                        </li>
                    </ul>
                </div>
            </section>
            <section id="popularityWrap">
                <div class="popuBgWrap">
                    <div class="popuBg popuBg1"></div>
                    <div class="popuBg popuBg2"></div>
                    <div class="popuBg popuBg3"></div>
                    <div class="popuBg popuBg4"></div>
                    <div class="popuBg popuBg5"></div>
                    <div class="butterfly"></div>
                </div>
                <div class="wrap">
                    <h3 class="mainTitle">
                        <span>CEO's Choice</span>Popularity Perfume
                    </h3>
                    <div class="popuRolling">
                        <ul>
                            <li class="popuLi1">
                                <div class="popuImg popuImg1"></div>
                                 <dl class="popuTxt">
                                     <dt>오리지날 오드 콜로뉴 EDC</dt>
                                     <dd>기적의 물 오데토롱의 시초! 나폴레옹, 괴테, 바그너의 향수</dd>
                                </dl>
                                <div class="popuImgColor popuImgColor1"></div>
                            </li>
                            <li class="popuLi2">
                                <div class="popuImg popuImg2"></div>
                                <dl class="popuTxt">
                                    <dt>오리지날 오 드 콜로뉴 플로럴 컬렉션 로즈 EDC</dt>
                                    <dd>아일랜드의 꽃이 가득한 시적인 들판으로 초대합니다.</dd>
                                </dl>
                                <div class="popuImgColor popuImgColor2"></div>
                            </li>
                            <li class="popuLi3">
                                <div class="popuImg popuImg3"></div>
                                <dl class="popuTxt">
                                    <dt>오리지날 오 드 콜로뉴 플로럴 컬렉션 자스민 EDC</dt>
                                    <dd>햇빛 가득한 날의 꿈으로 우리를 데려가 주는 향</dd>
                                </dl>
                                <div class="popuImgColor popuImgColor3"></div>
                            </li>
                            <li class="popuLi4">
                                <div class="popuImg popuImg4"></div>
                                <dl class="popuTxt">
                                    <dt>오리지날 오 드 콜로뉴 플로럴 컬렉션 라일락 EDC</dt>
                                    <dd>지친 몸과 마음을 회복시켜줄 힐링 향수</dd>
                                </dl>
                                <div class="popuImgColor popuImgColor4"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        <div id="ceoWrap">
            <div class="aboutWrap">
                <div class="wrap">
                    <p class="aboutTxt"><strong>With a sweet smell of life, in easy Circumstances<br>CEO INTERNATIONAL introduce</strong></p>
                </div>
                <h3><a href="subForm.php?idx=ceoIs&page=boss">씨 이 오<span>인 사 말</span></a></h3>
                <div class="mainAboutBg"></div>
            </div>
            <div class="boardWrap">
                <div class="wrap">
                    <h3>씨이오 소식</h3>
                        <ul class='boardList'>
                            <? latest_article("board", 2, 30); ?>
                        </ul>
                 </div>
            </div>
            <div class="botBanner">
                <h3 class="hidden">배너 존</h3>
                <ul class="botBanWrap"></ul>
            </div>
        </div>
    </article><!-- #container -->
    <div id="flowerBack">
        <div class="bestBg bestBg0" data-scrollSpeed="8"></div>
        <div class="bestBg bestBg1" data-scrollSpeed="8">
            <div class="butterfly1"></div>
        </div>
    </div>
    <!-- 팝업 공지 -->
    <div id="showimage">
        <script>
            function closeWin(){
               var chk = document.getElementById('Notice');
               if (chk.checked){
                     setCookie( "Notice", "done" , 3);
                    //1이란 숫자는 1일간 안보임을 뜻
                }
            };
            if (getCookie("Notice") =="done") {
               hidebox();
            }
        </script>
        <div>
            <img src="img/pop.png" alt="본 사이트는 상업적 목적이 아닌 개인 포트폴리오 용도로 만들어졌습니다. 홈페이지의 일부 내용과 기타 이미지 등은 그 출처가 따로 있음을 밝힙니다.">
        </div>
        <div class="popTxt">
            <input type="checkbox" name="Notice" id="Notice" value="" title="오늘은 이창을 열지 않음 선택상자"><label for="Notice">오늘은 이창을 열지 않음.</label>
            <a href="#"  onclick="closeWin();hidebox();return false;"> [close] </a>
        </div>
    </div>
    </div><!-- #wrapper -->
    <? include "common/inc/bottom.php"; ?>
