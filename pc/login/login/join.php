<script>
    $(document).ready(function(){
        // id 중복검사
        $("#id").keyup(function() {  // id입력 상자에 id값 입력시
            var id = $('#id').val();  // a
            $.ajax({
                type: "POST",
                url:"login/check_id.php",
                data: "id="+id,
                cache: false,
                success: function(data)
                { $("#loadtext").html(data); } // data => echo "문자열"이 저장된
            });
        });
        // nick 중복검사		 
        $("#nick").keyup(function(){  // id입력 상자에 id값 입력시
            var nick = $('#nick').val();
            $.ajax({
                type: "POST",
                url: "login/check_nick.php",
                data: "nick="+nick,  
                cache: false, 
                success: function(data)
                { $("#loadtext2").html(data); }
            });
        });		 
    });
</script>
<script>
    function check_input(){
        if(!document.member_form.id.value){
            alert("아이디를 입력하세요");    
            document.member_form.id.focus();
            return;
        }
        if(!document.member_form.pass.value){
            alert("비밀번호를 입력하세요");    
            document.member_form.pass.focus();
            return;
        }
        if(!document.member_form.pass_confirm.value){
            alert("비밀번호확인을 입력하세요");    
            document.member_form.pass_confirm.focus();
            return;
        }
        if(!document.member_form.name.value){
            alert("이름을 입력하세요");    
            document.member_form.name.focus();
            return;
        }
        if(!document.member_form.nick.value){
            alert("닉네임을 입력하세요");    
            document.member_form.nick.focus();
            return;
        }
        if(!document.member_form.hp2.value || !document.member_form.hp3.value){
            alert("휴대폰 번호를 입력하세요");    
            document.member_form.nick.focus();
            return;
        }
        if(document.member_form.pass.value != document.member_form.pass_confirm.value){
            alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");    
            document.member_form.pass.focus();
            document.member_form.pass.select();
            return;
        }
        document.member_form.submit(); 
        // insert.php 로 변수 전송
    }
    function reset_form(){
        document.member_form.id.value = "";
        document.member_form.pass.value = "";
        document.member_form.pass_confirm.value = "";
        document.member_form.name.value = "";
        document.member_form.nick.value = "";
        document.member_form.hp1.value = "010";
        document.member_form.hp2.value = "";
        document.member_form.hp3.value = "";
        document.member_form.email1.value = "";
        document.member_form.email2.value = "";

        document.member_form.id.focus();
        return;
    }
</script>
<form name="member_form" method="post" action="member/insert.php" class="joinBox">
    <fieldset class="idBox">
        <legend>아이디 입력 란</legend>
        <label for="id" class="labelTxt">아이디</label>
        <? if(!$userid){ ?> <!-- 로그인 안 된 상태 --> 
        <input type="text" id="id" name="id" placeholder="아이디를 입력하세요." maxlength="10" required>
        <span id="loadtext"></span> <!-- 실시간 메세지를 찍기 위해 -->
        <? }else{ ?>
            <?= $row[id] ?> <!-- 로그인 된 상태-->
        <? } ?>	
<!--        <input type="button" value="중복확인" id="idChk">-->
    </fieldset>
    <fieldset class="pwBox">
        <legend>비밀번호 입력 란</legend>
        <label for="pass" class="labelTxt">비밀번호</label>
        <input type="password" id="pass" name="pass" class="mb10 pwBg1" placeholder="비밀번호" required>
        <label for="pass_confirm" class="labelTxt">비밀번호 확인</label>
        <input type="password" id="pass_confirm" name="pass_confirm" class="pwBg2" placeholder="비밀번호 재확인" required>
    </fieldset>
    <fieldset class="nameBox">
        <legend>이름 입력 란</legend>
        <label for="name" class="labelTxt">이름</label>
        <input type="text" id="name" name="name" placeholder="이름">
    </fieldset>
    <fieldset class="nameBox nameBox1">
        <legend>닉네임 입력 란</legend>
        <label for="nick" class="labelTxt">닉네임</label>
        <input type="text" id="nick" name="nick" placeholder="닉네임">
        <span id="loadtext2"></span>
    </fieldset>
    <fieldset class="telBox">
        <legend>연락처 입력 란</legend>
        <label for="tel" class="labelTxt">연락처</label>
        <label class="hidden" for="hp1">전화번호 앞3자리</label>
        <select name="hp1" id="hp1">
            <option>010</option>
            <option>011</option>
            <option>016</option>
            <option>017</option>
            <option>018</option>
            <option>019</option>
        </select> ㅡ
        <label class="hidden" for="hp2">전화번호 중간4자리</label>
        <input type="text" id="hp2" name="hp2" maxlength="4" required> ㅡ
        <label class="hidden" for="hp3">전화번호 끝4자리</label>
        <input type="text" id="hp3" name="hp3" maxlength="4" required>
    </fieldset>
    <fieldset class="mailBox">
        <legend>이메일 입력 란</legend>
        <label class="labelTxt" for="email1">이메일</label>
        <input type="text" id="email1" name="email1" required> @ 
        <label class="hidden" for="email2">이메일주소</label>
        <input type="text" name="email2" id="email2" required>
<!--        <input type="text" id="mail" name="mail" placeholder="본인확인 이메일"/>-->
    </fieldset>
    <fieldset class="subMit">
        <input type="reset" value="다시 작성" onclick="reset_form()">
        <input type="button" id="submitGo" value="가입 하기" onclick="check_input()">
    </fieldset>
</form>
