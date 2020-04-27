<? 
	session_start();

    @extract($_POST);
    @extract($_GET);
    @extract($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>회원가입</title>
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
	<link rel="stylesheet" href="../common/css/common.css">
	<link rel="stylesheet"href="../css/login.css">
	<link rel="stylesheet" href="css/member_form.css">
	<script src="../js/plugins/jquery-1.12.4.min.js"></script>
    <script src="../js/plugins/jquery-migrate-1.4.1.min.js"></script>
    <script src="../js/plugins/prefixfree.min.js"></script>
	<script>
        $(document).ready(function(){
            // id 중복검사
            $("#id").keyup(function(){  // id입력 상자에 id값 입력시
                var id = $('#id').val();  // a
                $.ajax({
                    type: "POST",
                    url: "check_id.php",
                    data: "id="+id,
                    cache: false,
                    success: function(data)
                    { $("#loadtext").html(data); }  // data => echo "문자열"이 저장된
                });
            });
            // nick 중복검사		 
            $("#nick").keyup(function(){  // id입력 상자에 id값 입력시
                var nick = $('#nick').val();
                $.ajax({
                    type: "POST",
                    url: "check_nick.php",
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
//            if(!document.member_form.id.value){
//                alert("아이디를 입력하세요");    
//                document.member_form.id.focus();
//                return;
//            }
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
</head>
<?
    // $userid='aaa';
    include "../../lib/dbconn.php";

    $sql = "select * from member where id='$userid'";
    $result = mysql_query($sql, $connect);

    $row = mysql_fetch_array($result);
    // $row[id]....$row[level]

    $hp = explode("-", $row[hp]);  // 000-0000-0000
    // explode("특정문자", ~) 특정의 문자열을 찾아서 끊어주고 배열 형태로 만듦
    $hp1 = $hp[0]; // 000
    $hp2 = $hp[1]; // 0000
    $hp3 = $hp[2]; // 0000

    $email = explode("@", $row[email]);
    $email1 = $email[0]; // bini
    $email2 = $email[1]; // nate.com

    mysql_close();
?>
<body>
    <div id="wrapper" class="loginWrapper">
        <div class="loginWrap">
            <div class="wrap">
                <h1 class="loginLogo">
                    <a href="../index.php">
                        <img src="../img/login_logo.png" alt="">
                    </a>
                </h1>     
                <h2 class="hidden">회원정보 수정</h2>
                <form name="member_form" method="post" action="modify.php" class="memberForm joinBox"> 
                    <fieldset class="idBox">
                        <legend>아이디 입력 란</legend>
                        <label for="id" class="labelTxt">아이디</label>
                        <p><?=$row[id]?></p><!-- 로그인 된 상태-->
                        <span>한번 등록한 아이디는 변경이 불가능 합니다.</span>
                    </fieldset>     
                    <fieldset class="pwBox">
                        <legend>비밀번호 입력 란</legend>
                        <label for="pass" class="labelTxt">비밀번호</label>
                        <input type="password" name="pass" id="pass" required value="" class="mb10 pwBg1" placeholder="비밀번호">
                        <label for="pass_confirm" class="labelTxt">비밀번호 확인</label>
                        <input type="password" name="pass_confirm" id="pass_confirm" class="pwBg2" placeholder="비밀번호 재확인" required value="">
                    </fieldset> 
                    <fieldset class="nameBox"> 
                        <legend>이름 입력 란</legend>       
                        <label for="name" class="labelTxt">이름</label>
                        <input type="text" name="name" id="name" placeholder="이름" required value="<?=$row[name]?>"> 
                    </fieldset>
                    <fieldset class="nameBox nameBox1">
                        <legend>닉네임 입력 란</legend>       
                        <label for="nick" class="labelTxt">닉네임</label>
                        <input type="text" name="nick" id="nick" required value="<?=$row[nick]?>" placeholder="닉네임">
                        <span id="loadtext2"></span> <!-- 실시간 메세지를 찍기 위해 -->
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
                        <input type="text" class="hp" name="hp2" id="hp2" required value="<?=$hp2?>"> ㅡ <label class="hidden" for="hp3">전화번호 끝4자리</label>
                        <input type="text" class="hp" name="hp3" id="hp3" required value="<?=$hp3?>">
                    </fieldset>
                    <fieldset class="mailBox">
                        <legend>이메일 입력 란</legend>
                        <label for="email1" class="labelTxt" >이메일</label>
                        <input type="text" id="email1" name="email1" required value="<?=$email1?>"> @ 
                        <label class="hidden" for="email2">이메일주소</label>
                        <input type="text" name="email2" id="email2" required value="<?=$email2?>">
                    </fieldset>
                    <fieldset class="subMit">
                        <input type="button" id="submitGo" onclick="check_input()" value="회원정보 수정완료">
                        <input  type="reset" onclick="reset_form()" value="다시 작성" >
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


