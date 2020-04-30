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
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet"href="common/css/common.css">
    <link rel="stylesheet"href="css/login.css">
    <script src="js/plugins/jquery-1.12.4.min.js"></script>
    <script src="js/plugins/jquery-migrate-1.4.1.min.js"></script>
    <script src="js/plugins/prefixfree.min.js"></script>
<!--    <script src="js/login.js"></script>-->
</head>
<body>
    <div id="wrapper" class="loginWrapper">
        <div class="loginWrap">
            <div class="wrap">
                <h1 class="loginLogo">
                    <a href="index.php">
                        <img src="img/login_logo.png" alt="">
                    </a>
                </h1>
                <? include $loginArr; ?>
            </div>
        </div>
    </div>
</body>
</html>
