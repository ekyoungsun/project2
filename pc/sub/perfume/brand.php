<div id="subContainer">
    <div class="brandWrap">
        <div class="wrap">
            <div>
                <ul class="brandPerfumeList"> 
                    <script>
                        var txt = ["4711","까르뱅","니니리치","데렉 램 10 크로스비","랑세","메르세데스-벤츠","모노템","발렌티노","베네통","아리아나 그란데","아베크롬비 앤 피치","아자로","아장 프로보카퇴르","에트로","엘리자베스 앤 제임스","장폴고티에","제니퍼 로페즈","존바바토스","쥬시꾸뛰르","캐롤리나 헤레나","크리스티나 아길레라","클린","토카","파코라반","펜할리곤스","폴리스","프라다"]

                        $.each(txt, function(i, ee){
                            // 태그 객체 추가
                            var newLi = $("<li>");
                            var newA = $("<a>");
                            var newImg = $("<img>");
                            var newP = $("<p>");
                            newA.attr("href","?idx=perfume&pages=product");
                            // img 태그에 반복문
                            newImg.attr(
                                "src","img/sub_brand_img"+(i+1)+".gif"
                            );
                            newP.append(ee);
                            newA.append(newImg,newP);
                            newLi.append(newA);
                            $(".brandPerfumeList").append(newLi);
                        });
                    </script>
                </ul> 
            </div>
        </div>
    </div>
</div><!-- #container -->
