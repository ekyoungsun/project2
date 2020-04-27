<? 
    $table = "board";
    
    include "../lib/dbconn.php";
    
    if(!$scale)
        $scale = 10;  // 한 화면에 표시되는 글 수
    
    if($mode == "search"){
		if(!$search){
			echo("<script>
                     window.alert('검색할 단어를 입력해 주세요!');
                     history.go(-1);
				  </script>");
			exit;
		}
		$sql = "select * from $table where $find like '%$search%' order by num desc";
	}else{
		$sql = "select * from $table order by num desc";
	}

	$result = mysql_query($sql, $connect);
	$total_record = mysql_num_rows($result);  // 전체 글 수

	// 전체 페이지 수($total_page) 계산 
	if($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	if(!$page)  // 페이지번호($page)가 0 일 때
        $page = 1;  // 페이지 번호를 1로 초기화

    // 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      
	$number = $total_record - $start;
?>
<div id="subContainer">
    <div class="boardListWrap">
        <div class="wrap noticeWrap">
            <select name="scale" onchange="location.href='subForm.php?idx=ceoNews&pages=notice&table=<?=$table?>&page=<?=$page?>?scale='+this.value">
                <option value=''>보기</option>
                <option value='1'>10개씩</option>
                <option value='2'>15개씩</option>
                <option value='3'>20개씩</option>
                <option value='4'>30개씩</option>
            </select>
            <table>
                <caption>공지사항 게시판 영역</caption>
                <thead id="list_top_title">
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>작성자</th>
                        <th>작성일</th>
                        <th>조회수</th>
                    </tr>
                </thead>
                <tbody id="list_content">
                    <?		
                        for($i = $start; $i < $start + $scale && $i < $total_record; $i++){
                            mysql_data_seek($result, $i);       
                            // 가져올 레코드로 위치(포인터) 이동  
                            $row = mysql_fetch_array($result);       
                            // 하나의 레코드 가져오기
                            
                            $item_num = $row[num];
                            $item_id = $row[id];
                            $item_name = $row[name];
                            $item_nick = $row[nick];
                            $item_hit = $row[hit];
                            $item_date = $row[regist_day];
                            $item_date = substr($item_date, 0, 10);  
                            $item_subject = str_replace(" ", "&nbsp;", $row[subject]);

                            if($row[file_copied_0]){ 
                                $item_img = 'board/data/'.$row[file_copied_0];  
                            }else{
                                $item_img = 'board/data/default.jpg';
                            }
                    ?>
                    <tr>
                        <td><?=$number?></td>
                        <td><a href="sub/ceoNews/board/notice_view.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$page?>"><?=$item_subject?></a></td>
                        <td><?=$item_nick?></td>
                        <td><?=$item_date?></td>
                        <td><?=$item_hit?></td>
                    </tr>
                    <? $number--; } ?>
                </tbody>
            </table>
            <div id="view_button">
                <a href="subForm.php?idx=ceoNews&pages=notice&table=<?=$table?>&page=<?=$page?>" class="postList">
                    목록
                </a>
                <? if($userid){ ?>
                    <a href="sub/ceoNews/board/write_form.php?table=<?=$table?>" class="postList">글쓰기</a>
                <? } ?>
            </div>
            <div class="boardPage">
                <a href="#none" class="prev"></a>
                <ul>
                        <? // 게시판 목록 하단에 페이지 링크 번호 출력
                           for($i = 1; $i <= $total_page; $i++){
                                if($page == $i){  // 현재 페이지 번호 링크 안함
                                    echo "<li><a class='on' href='#none'> $i </a></li>";
                                }else{ 
                                    if($mode == "search"){
                                        echo "<li><a href='subForm.php?idx=ceoNews&pages=notice&table=$table&page=$i&scale=$scale&mode=search&find=$find&search=$search'> $i </a></li>"; 
                                    }else{    
                                        echo "<li><a href='subForm.php?idx=ceoNews&pages=notice&table=$table&page=$i&scale=$scale'> $i </a></li>";
                                    }
                                }      
                            }
                            ?>	
<!--                        <a href="#" class="on">1</a>-->
                </ul>
                <a href="#none" class="next"></a>
            </div>
            <form name="board_form" method="post" action="subForm.php?idx=ceoNews&pages=notice&table=<?=$table?>&mode=search"> 
                <div id="searchBox">
                    <div class="searchTxt">▷ 총 <?=$total_record?> 개의 게시물이 있습니다.</div>
                    <div class="searchList">
                        <select name="find">
                            <option value='subject'>제목</option>
                            <option value='content'>내용</option>
                            <option value='nick'>별명</option>
                            <option value='name'>이름</option>
                        </select>
                    </div>
                    <div id="search">
                        <input type="text" name="search" placeholder="검색어를 입력해주세요.">
                        <span><input type="submit" value="검색"></span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!-- #container -->