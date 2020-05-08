<div id="skipNav">
    <a href="#container">본문 바로가기</a>
    <a href="#gnb">네비게이션 바로가기</a>
</div>
<header class="headerWrap">
    <h1><a href="index.php">ceo인터내셔널</a></h1>
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
                        <li><a href="subForm.php?idx=<?=$key?>&page=<?=$k?>"><?=$v?></a></li>
                        <? } ?>
                    </ul>
                </li>
                <? } ?>
                <li><h3><a href="http://www.ceobeaute.kr">ceo mall</a></h3></li>
            </ul>
            <ul class="navLogin">
                <li><a href="sub/login/login.html">로그인</a></li>
                <li><a href="sub/login/join.html">회원가입</a></li>
            </ul>
            <button class="close siteOff siteBtn">닫기</button>
        </nav>
    </div>
    <div class="shadow"></div>
</header>
