<? 
    session_start();
    @extract($_GET); 
    @extract($_POST); 
    @extract($_SESSION);  
    
    include "../../../common/inc/data.php";
?>
<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <title>(주)씨이오인터내셔널</title>
    <link rel="shortcut icon" type="image/x-icon" href="../../../favicon.ico">
    <link rel="stylesheet" href="../../../common/css/common.css">
    <link rel="stylesheet" href="../../../css/swiper.min.css">
    <link rel="stylesheet" href="../../../css/sub.css">
    <link rel="stylesheet" href="../../../css/sub_ani.css">
    <script src="../../../js/plugins/jquery-1.12.4.min.js"></script>
    <script src="../../../js/plugins/jquery-ui.min.js"></script>
    <script src="../../../js/plugins/jquery-migrate-1.4.1.min.js"></script>
    <script src="../../../js/plugins/prefixfree.min.js"></script>
    <script src="../../../js/plugins/jquery.bxslider.min.js"></script>
    <script src="../../../js/plugins/swiper.min.js"></script>
    <script src="../../../common/js/common.js"></script>
    <script src="../../../js/subJs.js"></script>
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
<div id="skipNav">
    <a href="#subContainer">본문 바로가기</a>
    <a href="#nav">글로벌네비게이션 바로가기</a>
</div>
    <header class="headerWrap">
        <div class="wrap">
            <h1><a href="../../../index.php">ceo인터내셔널</a></h1>
            <nav id="nav">
                <h2 class="hidden">글로벌 네비게이션</h2>
                <ul class="oneDepth">
                    <? foreach($twoMenuExi as $key => $value){ ?>                    
                    <li><h3><a href="#none"><span><?=$key?></span></a></h3>
                        <ul class="twoDepth">
                            <? foreach($value as $k => $v){ ?>
                            <li><h4><a href="../../../subForm.php?idx=<?=$key?>&pages=<?=$k?>"><span><?=$v?></span></a></h4></li>
                            <? } ?>
                        </ul>
                    </li>
                    <? } ?>                       
                    <li><h3><a href="http://www.ceobeaute.kr" target="_blank" title="새창"><span>ceo mall</span></a></h3></li>     
                </ul>
                <div class="infoNav">
                    <ul id="topLogin">
                        <? if(!$userid){ ?>  <!-- login이 되지 않은 상태 -->
                        <li><a href="../../../loginForm.php" class="topLogin">로그인</a></li>
                        <li>
                        <? $hidden = 'member';
                            foreach($loginMenu as $k => $v){ 
                            if($k == $hidden){
                        ?> 
                        <a href="../../../loginForm.php?loginIdx=<?=$k?>&loginPage=<?=$v?>">회원가입</a>
                        <?     } 
                            }
                        ?>
                        </li>
                        <? }else{ ?>  <!-- login이 된 상태 -->
                        <li><?=$usernick?> (level:<?=$userlevel?>)</li>
                        <li><a href="../../../login/logout.php">로그아웃</a></li>
                        <li><a href="../../../login/member_form_modify.php">정보수정</a></li>
                        <? } ?>
                    </ul>
<!--                    <a class="topLogin" href="loginForm.php">login</a>-->
                    <a class="allMenu siteBtn" href="#none">전체메뉴</a>
                </div>
            </nav>
        </div>
        <div class="menuBox"></div> 
    </header>
    <div class="siteMap">
        <div class="wrap">
            <h2>site map</h2>
            <ul class="siteList">
                <li><h3>perfume</h3>
                    <ul>
                        <li><a href="../../../subForm.php?idx=perfume&pages=brand"><span>브랜드 관</span></a></li>
                    </ul>
                </li>
                <li><h3>soap</h3>
                    <ul>
                        <li><a href="../../../subForm.php?idx=soap&pages=brand"><span>브랜드 관</span></a></li>
                    </ul>
                </li>
                <li><h3>ceo news</h3>
                    <ul>
                        <li><a href="../../../subForm.php?idx=ceoNews&pages=notice"><span>공지사항</span></a></li>
                        <li><a href="../../../subForm.php?idx=ceoNews&pages=event"><span>이벤트안내</span></a></li>
                        <li><a href="../../../subForm.php?idx=ceoNews&pages=webzine"><span>웹진</span></a></li>
                        <li><a href="../../../subForm.php?idx=ceoNews&pages=media"><span>미디어센터</span></a></li>
                    </ul>
                </li>
                <li><h3>ceo is</h3>
                    <ul>
                        <li><a href="../../../subForm.php?idx=ceoIs&pages=about"><span>회사개요</span></a></li>
                        <li><a href="../../../subForm.php?idx=ceoIs&pages=boss"><span>ceo인사말</span></a></li>
                        <li><a href="../../../subForm.php?idx=ceoIs&pages=history"><span>연혁</span></a></li>
                        <li><a href="../../../subForm.php?idx=ceoIs&pages=chart"><span>조직도</span></a></li>
                        <li><a href="../../../subForm.php?idx=ceoIs&pages=map"><span>오시는길</span></a></li>
                    </ul>
                </li>
                <li><h3>ceo mall</h3>
                    <ul>
                        <li><a href="http://www.ceobeaute.kr" target="_blank" title="새창"><span>온라인 몰</span></a></li>
                    </ul>
                </li>
            </ul>
            <a class="close siteBtn">닫기</a>
        </div>
    </div>
<? 
    $on = 'ceoNews';
    if($idx = $on){ 
?>
<div id="subImg" class="<?=$idx?>">
    <div class="wrap">
        <h2><?=$idx?></h2>
        <? } ?>
        <ul class="twoConts">
            <? $on = 'ceoNews'; 
            foreach($twoMenuExi as $k => $v){
                foreach($v as $kk => $vv){
                    if($k == $on){
            ?>
            <li><a href="../../../subForm.php?idx=<?=$k?>&pages=<?=$kk?>"><span><?=$vv?></span></a></li>
            <?      }
                } 
            }
            ?>            
        </ul>
        <? 
            $hidden = ['perfume', 'soap'];
            foreach($hidden as $i){
                if($i == $idx){
                    include ("sub/".$idx."/search.php");
                }    
            }
        ?>
    </div>
</div>
