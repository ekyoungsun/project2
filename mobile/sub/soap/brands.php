<div id="subContainer">
    <ul class="brandAllList"> 
        <script>
            var txt = ["랑팔라투스","프라고나르"]

            $.each(txt, function(i, ee){
                // 태그 객체 추가
                var newLi = $("<li>")
                var newA = $("<a>")
                var newSpan = $("<span>")
                var newP = $("<p>")
                newA.attr("href","?idx=soap&page=products")
                // img 태그에 반복문
                newSpan.css({
                    background: "url(img/sub_brand_img"+(i+28)+".gif) center no-repeat",
                    backgroundSize: "auto 150px"
                })
                newP.append(ee)
                newA.append(newSpan,newP)
                newLi.append(newA)
                $(".brandAllList").append(newLi)
            })
        </script>
    </ul> 
</div>