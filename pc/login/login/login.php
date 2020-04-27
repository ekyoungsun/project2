<form name="member_form" method="post" action="login/login.php">
    <fieldset class="loginTxt">
        <legend>로그인 관련 폼</legend>
        <label for="id" class="labelTxt">아이디</label>
        <input type="text" id="loginId" name="id" placeholder="아이디"/><span class="warning">영문, 숫자로만 입력해주세요.</span>
        <label for="pw" class="labelTxt">비밀번호</label>
        <input type="password" id="loginPw" name="pass" placeholder="비밀번호"/>
        <input id="login_button" type="submit" title="로그인" value="로그인"/>
    </fieldset>
</form>
<div id="loginBtn">
    <p>아직 회원이 아닙니까?</p>
    <? $hidden = 'member';
       foreach($loginMenu as $k => $v){ 
           if($k == $hidden){
    ?>        
    <a href="?loginIdx=<?=$k?>&loginPage=<?=$v?>">회원가입</a>
    <? 
        }
    }
    ?>
</div>
