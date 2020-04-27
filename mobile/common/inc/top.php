<div id="skipNav">
    <a href="#container">본문 바로가기</a>
    <a href="#gnb">네비게이션 바로가기</a>
</div>
<header class="headerWrap subHeader">
    <h1><a href="index.php">ceo인터내셔널</a></h1>
    <div class="twoConts">
        <a href="#none" class="now"><?=$idx?></a>
        <ul>
            <? foreach($twoSubArr as $k => $v){ ?>           
            <li><a href="?idx=<?=$idx?>&page=<?=$k?>"><span><?=$v?></span></a></li>
            <? } ?>            
        </ul>
    </div>
    <a href="#none" class="navBtn siteOn siteBtn">전체 메뉴</a>
    <div class="siteMap">
        <nav class="siteBg">
            <a href="#" class="navLogo">ceo인터내셔널</a>
            <h2 class="hidden">글로벌 네비게이션 영역</h2>
            <ul class="siteList">
                <? foreach($twoMenuExi as $key => $values){ ?>
                <li>
                    <h3><a href="#none"><?=$key?></a></h3>
                    <ul class="twoMenu">
                        <? foreach($values as $k => $v){ ?>
                        <li><a href="?idx=<?=$key?>&page=<?=$k?>"><?=$v?></a></li>
                        <? } ?>
                    </ul>
                </li> 
                <? } ?>
                <li><h3><a href="#none">ceo mall</a></h3></li>
            </ul>
            <ul class="navLogin">
                <li><a href="sub/login.html">로그인</a></li>
                <li><a href="sub/join.html">회원가입</a></li>
            </ul>
            <a href="#none" class="close siteOff siteBtn">닫기</a>
        </nav>
    </div>
    <div class="shadow"></div>
</header>