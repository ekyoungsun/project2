<?
    function latest_article($table, $loop, $char_limit){
        include "dbconn.php";

        $sql = "select * from $table order by num desc limit $loop";
        $result = mysql_query($sql, $connect);

        while($row = mysql_fetch_array($result)){
            $num = $row[num];  // 9
            $len_subject = mb_strlen($row[subject], 'utf-8');  // 글자 길이
            // mb_strlen 한글일 때만 씀
            $subject = $row[subject];  // 제목

            if($len_subject > $char_limit){
                $subject = str_replace("&#039;", "'", $subject);               
                $subject = mb_substr($subject, 0, $char_limit, 'utf-8');
                $subject = $subject."...";
            }
            $regist_day = substr($row[regist_day], 0, 10);

            // 갤러리 추출 '갤러이름'
            if($table == 'board'){
                if($row[file_copied_0]){
                    $concertimg = '../pc/sub/ceoNews/board/data/'.$row[file_copied_0];
                }else{
                    $concertimg = '../pc/sub/ceoNews/board/data/default.jpg';
                }
            }
            
            // 게시판 추출 '게시판이름'
            if($table == 'greet'){ 
                echo "<div class='col1'>
                        <a href='sub/ceoNews/$table/notice_view.php?table=$table&num=$num'>$subject</a>
                      </div>
                      <div class='col2'>$regist_day</div>
                      <div class='clear'></div>";
            }else if($table == 'board'){
                echo "<li><a href='sub/ceoNews/$table/notice_view.php?table=$table&num=$num'>$subject<span>$regist_day</span></a></li>";
            }
            /*<img src='$concertimg' alt='' width='50' height='50'>$subject*/
        }
        mysql_close();
    }
?>