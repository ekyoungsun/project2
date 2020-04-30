<? 
    session_start();
    @extract($_GET); 
    @extract($_POST); 
    @extract($_SESSION);  
    
    include "common/inc/data.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>(주)씨이오인터내셔널</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="common/css/common.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/sub.css">
    <link rel="stylesheet" href="css/sub_ani.css">
    <script src="js/plugins/jquery-1.12.4.min.js"></script>
    <script src="js/plugins/jquery-ui.min.js"></script>
    <script src="js/plugins/jquery-migrate-1.4.1.min.js"></script>
    <script src="js/plugins/prefixfree.min.js"></script>
    <script src="js/plugins/jquery.bxslider.min.js"></script>
    <script src="js/plugins/swiper.min.js"></script>
    <script src="common/js/common.js"></script>
    <script src="js/subJs.js"></script>
    <script>
    // <![CDATA[
    try {
        window.addEventListener('load', function(){
            setTimeout(scrollTo, 0, 0, 1); 
        }, false);
    } 
    catch(e){}
    // ]]>
    </script>
    <!--[if lt IE 9]> 
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>
<body>
        <? include "common/inc/top.php"; ?>
        <? include "common/inc/aside.php"; ?>  
        <? include $pageArr; ?>
        <? include "common/inc/bottom.php"; ?>
</body>
</html>
