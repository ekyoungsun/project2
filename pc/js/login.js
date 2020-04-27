$(document).ready(function(){
    function login(){
        $("#loginId").on("keyup", function(e){
//            console.log(e.keyCode)
            var num = /[0-9]/;	// 숫자 
            var numEng = /[0-9a-zA-Z]/;	// 숫자 + 영문
            var eng = /[a-zA-Z]/;	// 영문 
            var spc = /[~!@#$%^&*()-_=+|<>?:{}]/; // 특수문자
            var kor = /[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/; // 한글
            var code = [8,9,20,27,13,37,38,39,40]; // keyCode 숫자
            var str = $(this).val();
            var war = $(".warning");
            
            // 숫자와 영문을 제외한 특수문자, 한글 입력 시
            if( (numEng.test(str)) && !(spc.test(str)) && !(kor.test(str)) ){
                war.css({ display: 'none' });
            }else{
                war.css({ display: 'block' });
            }
            
            // 해당하는 key 코드 입력시
            for(var i in code){
                if(e.keyCode == code[i]){
                    war.css({ display: 'none' });
                }
            }
        });
        
        // 아이디와 비밀번호에 값이 있는지
        $("#loginBtn").on("click", function(){
            var valId = $("#loginId").val();
            var valPw = $("#loginPw").val();
            var idPwChk = true;
            
            if(valId == valPw == !idPwChk){
                idPwChk = false;
                alert("아이디와 비밀번호를 다시 확인해주세요.");
            }return idPwChk;
        });
        
        //회원가입 체크
        function chk(reg, ee, msg){
            var ret = !reg.test($(ee).val());

            if(ret){
                alert(msg);
                $(ee).focus();   
            }
            return ret;
        }
        
        $("#submitGo").on("click",function(){
            // 아이디
            if(chk(/^[0-9a-zA-Z]{6,}$/i,
                    "#pid",
                    "아이디는 숫자, 영문 6자 이상 입력해 주세요." ))
            return
            
            // 비밀번호
            if($("#pw").val().trim() != $("#pw1").val().trim() || $("#pw").val().trim().length < 4 ){
                alert("비밀번호가 일치하지 않습니다. 다시 입력해 주세요.");
                $("#pw").focus();
                return
            }
            
            // 이메일
            if(chk(/^[0-9a-z]{6,}@[a-z]{2,}[.][a-z]{2,}$/i,
                    "#mail",
                    "형식에 맞지 않는 이메일입니다. 다시 입력해 주세요."))
            return

            // 전화번호
            if(!(/^[0-9]{3,4}$/.test($("#tel1").val().trim()) && 
                  /^[0-9]{4}$/.test($("#tel2").val().trim()) ))
            {
                alert("전화번호를 다시 입력해 주세요.");
                $("#tel1").focus();
                return
            }

            // 이름
            if(chk(/^[가-힣]{2,}$/,"#name","2자 이상 한글만 입력이 가능합니다."))
            return

            alert("가입 되었습니다!");
            document.frm.submit();
        });

        function idDup(o){
            var ids = ["aaaaaa","bbbbbb","cccccc","dddddd","eeeeee"];
            return ids.indexOf($(o).val().trim()) >= 0
        }

        $("#idChk").on("click",function(){
            if(chk(/^[0-9a-zA-Z]{6,}$/i,
                   "#pid",
                   "아이디는 숫자, 영문 6자 이상 입력해 주세요." ))
            return

            if(idDup("#pid")){
                alert("중복된 ID 있습니다.");
            }else{
                alert("사용이 가능한 ID입니다.");
            }
        });
        
    };
    login();
    
});