<?
    // 값이 없을 때, 기본으로 들어가는 
    // 서브페이지 기본 값
    $idx = "ceoIs"; // 폴더
    $pages = "about"; // 페이지
    
    // 로그인페이지 기본 값
    $loginIdx = "login";
    $loginPage = "login";

    // extract() 배열속의 키값들을 변수화 시켜주는 함수
    // GET을~, ~POST 로 변환
    extract($_GET);
    extract($_POST);

    // TOP메뉴는 1차메뉴만 나오게 레이아웃 되어 있어 연관배열로
    $topMenu = [
        "perfume"=>"brand", 
        "soap"=>"brand", 
        "ceoNews"=>"notice", 
        "ceoIs"=>"about"
    ];
    
    // 2차 메뉴는 다차원 배열로
    // "1차메뉴(폴더명)"=>["2차메뉴(파일이름)"=>"메뉴이름"]
    $twoMenuExi = [
        "perfume" => [
            "brand"=>"브랜드 관"
        ],
        "soap" => [
            "brand"=>"브랜드 관"
        ],
        "ceoNews" => [
            "notice"=>"공지사항",
            "event"=>"이벤트안내",         
            "webzine"=>"웹진",         
            "media"=>"미디어센터"
        ],
        "ceoIs" => [
            "about"=>"회사개요",
            "boss"=>"CEO인사말",         
            "history"=>"연혁",         
            "chart"=>"조직도",
            "map"=>"오시는길"
        ]
    ];

    $loginMenu = [
        "login"=>"login", 
        "login"=>"join", 
        "member"=>"check"];

    // 2차메뉴 반복문으로 쓰일 변수
    $twoSubArr = $twoMenuExi[$idx];

    // 출력할 서브페이지 경로
    $pageArr = "sub/$idx/$pages.php";

    // 로그인 경로
    $loginArr = "login/$loginIdx/$loginPage.php";
?>