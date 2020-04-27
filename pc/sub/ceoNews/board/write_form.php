<? include "../inc/top.php"; ?>
<? 
	session_start(); 
    @extract($_POST);
    @extract($_GET);
    @extract($_SESSION);
    //새글쓰기 =>  $table

    include "../../../../lib/dbconn.php";

	if($mode == "modify"){ //수정 글쓰기면
	
        $sql = "select * from $table where num=$num";
		$result = mysql_query($sql, $connect);

		$row = mysql_fetch_array($result);       
	
		$item_subject = $row[subject];
		$item_content = $row[content];

		$item_file_0 = $row[file_name_0];
		$item_file_1 = $row[file_name_1];
		$item_file_2 = $row[file_name_2];

		$copied_file_0 = $row[file_copied_0];
		$copied_file_1 = $row[file_copied_1];
		$copied_file_2 = $row[file_copied_2];
	}
?>
<script>
  function check_input(){
      if(!document.board_form.subject.value){
          alert("제목을 입력하세요!");    
          document.board_form.subject.focus();
          return;
      }
      if(!document.board_form.content.value){
          alert("내용을 입력하세요!");    
          document.board_form.content.focus();
          return;
      }
      document.board_form.submit();
   }
</script>
<div id="subContainer">
    <div class="postWrap">
        <div class="wrap">
            <div class="postBox">
                <? if($mode == "modify"){ ?>
                <form name="board_form" method="post" action="insert.php?mode=modify&num=<?=$num?>&page=<?=$page?>&table=<?=$table?>" enctype="multipart/form-data"> 
                <? }else{ ?>
                    <form name="board_form" method="post" action="insert.php?table=<?=$table?>" enctype="multipart/form-data"> 
                <? } ?>
                        <div id="writeForm">
                            <ul class="wraiteTitle">
                                <li><span>제목</span><input type="text" name="subject" value="<?=$item_subject?>"></li>
                                <li><span>글쓴이</span><?=$usernick?></li>						
                            </ul>
                            <div class="writeTxtBox">
                                <span>내용
                                    <? if($userid && ($mode != "modify")){ //새글쓰기 에서만 HTML 쓰기가 보인다 ?>
                                    <span><input type="checkbox" name="html_ok" value="y">HTML 쓰기</span>
                                    <? } ?>
                                </span>
                                <textarea rows="15" cols="79" name="content"><?=$item_content?></textarea>
                            </div>
                            <ul id="writeFile">
                                <li>
                                    <ul class="fileList">
                                        <li><span>이미지파일1</span><input type="file" name="upfile[]"></li>
                                        <? if($mode == "modify" && $item_file_0){ ?>
                                        <li class="delete_ok">
                                            <?=$item_file_0?>파일이 등록되어 있습니다. 
                                            <input type="checkbox" name="del_file[]" value="0">삭제
                                        </li>
                                        <? } ?>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="fileList">
                                        <li><span>이미지파일2</span><input type="file" name="upfile[]"></li>
                                        <? if($mode == "modify" && $item_file_1){ ?>
                                        <li class="delete_ok">
                                            <?=$item_file_1?>파일이 등록되어 있습니다.
                                            <input type="checkbox" name="del_file[]" value="1">삭제
                                        </li>
                                        <? } ?>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="fileList">
                                        <li><span>이미지파일3</span><input type="file" name="upfile[]"></li>
                                        <? if ($mode == "modify" && $item_file_2){ ?>
                                        <li class="delete_ok">
                                            <?=$item_file_2?>파일이 등록되어 있습니다.
                                            <input type="checkbox" name="del_file[]" value="2">삭제
                                        </li>
                                        <? } ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="view_button">
                            <a href="#" onclick="check_input()" class="postList">완료</a>
                            <a href="../../../subForm.php?idx=ceoNews&pages=notice&table=<?=$table?>&page=<?=$page?>" class="postList">목록</a>
                        </div>
                    </form>
            </div> <!-- // postBox -->
        </div> <!-- // wrap -->
    </div> <!-- // postWrap -->
</div> <!-- // subContainer -->
<? include "../inc/bottom.php"; ?>