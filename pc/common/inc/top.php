<div id="skipNav">
    <a href="#subContainer">본문 바로가기</a>
    <a href="#nav">글로벌네비게이션 바로가기</a>
</div>
    <header class="headerWrap">
        <div class="wrap">
            <h1><a href="index.php">ceo인터내셔널</a></h1>
            <nav id="nav">
                <h2 class="hidden">글로벌 네비게이션</h2>
                <ul class="oneDepth">
                    <? foreach($twoMenuExi as $key => $values){ ?>
                    <li><h3><a href="#none"><span><?=$key?></span></a></h3>
                        <ul class="twoDepth">
                           <? foreach($values as $k => $v){ ?>
                            <li><h4><a href="?idx=<?=$key?>&pages=<?=$k?>"><span><?=$v?></span></a></h4></li>
                            <? } ?>
                        </ul>
                    </li>
                    <? } ?>                       
                    <li><h3><a href="http://www.ceobeaute.kr" target="_blank" title="새창"><span>ceo mall</span></a></h3></li>     
                </ul>
                <div class="infoNav">
                    <ul id="topLogin">
                        <? if(!$userid){ ?>  <!-- login이 되지 않은 상태 -->
                        <li><a href="./loginForm.php" class="topLogin">로그인</a></li>
                        <li>
                        <? $hidden = 'member';
                            foreach($loginMenu as $k => $v){ 
                            if($k == $hidden){
                        ?> 
                        <a href="./loginForm.php?loginIdx=<?=$k?>&loginPage=<?=$v?>">회원가입</a>
                        <?     } 
                            }
                        ?>
                        </li>
                        <? }else{ ?>  <!-- login이 된 상태 -->
                        <li><?=$usernick?> (level:<?=$userlevel?>)</li>
                        <li><a href="./login/logout.php">로그아웃</a></li>
                        <li><a href="./login/member_form_modify.php">정보수정</a></li>
                        <? } ?>
                    </ul>
                    <button class="allMenu siteBtn">전체메뉴</button>
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
                        <li><a href="?idx=perfume&pages=brand"><span>브랜드 관</span></a></li>
                    </ul>
                </li>
                <li><h3>soap</h3>
                    <ul>
                        <li><a href="?idx=soap&pages=brand"><span>브랜드 관</span></a></li>
                    </ul>
                </li>
                <li><h3>ceo news</h3>
                    <ul>
                        <li><a href="?idx=ceoNews&pages=notice"><span>공지사항</span></a></li>
                        <li><a href="?idx=ceoNews&pages=event"><span>이벤트안내</span></a></li>
                        <li><a href="?idx=ceoNews&pages=webzine"><span>웹진</span></a></li>
                        <li><a href="?idx=ceoNews&pages=media"><span>미디어센터</span></a></li>
                    </ul>
                </li>
                <li><h3>ceo is</h3>
                    <ul>
                        <li><a href="?idx=ceoIs&pages=about"><span>회사개요</span></a></li>
                        <li><a href="?idx=ceoIs&pages=boss"><span>ceo인사말</span></a></li>
                        <li><a href="?idx=ceoIs&pages=history"><span>연혁</span></a></li>
                        <li><a href="?idx=ceoIs&pages=chart"><span>조직도</span></a></li>
                        <li><a href="?idx=ceoIs&pages=map"><span>오시는길</span></a></li>
                    </ul>
                </li>
                <li><h3>ceo mall</h3>
                    <ul>
                        <li><a href="http://www.ceobeaute.kr" target="_blank" title="새창"><span>온라인 몰</span></a></li>
                    </ul>
                </li>
            </ul>
            <button class="close siteBtn">닫기</button>
        </div>
    </div>

