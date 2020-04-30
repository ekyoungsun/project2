<div id="subContainer">
    <div class="brandWrap">
        <div class="wrap">
            <div>
                <ul class="brandPerfumeList brandsoapumeList"> 
                    <script>
                        var txt = ["랑팔라투스","프라고라르"]

                        $.each(txt, function(i, ee){
                            // 태그 객체 추가
                            var newLi = $("<li>")
                            var newA = $("<a>")
                            var newImg = $("<img>")
                            var newP = $("<p>")
                            newA.attr("href","?idx=soap&pages=product")
                            // img 태그에 반복문
                            newImg.attr(
                                "src","img/sub_brand_img"+(i+28)+".gif"
                            )
                            newP.append(ee)
                            newA.append(newImg,newP)
                            newLi.append(newA)
                            $(".brandPerfumeList").append(newLi)
                        })
                    </script>
                </ul> 
            </div>
        </div>
    </div>
</div><!-- #container -->
