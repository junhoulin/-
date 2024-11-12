<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>報名資料查詢系統</title>
</head>
<body>
        <h3>已收到報名資料<h3>
        <div>
            <p>參加者姓名 : <?php echo $_SESSION['data22']; ?></p>
            <p>參加者性別 : <?php echo $_SESSION['data33']; ?></p>
            <p>參加者生日 : <?php echo $_SESSION['data44']; ?></p>
            <p>參加者生份證字號 :<?php echo $_SESSION['data55']; ?></p>
            <p>參加者戶籍地址 :<?php echo $_SESSION['data66']; ?></p>
            <p>監護人姓名 :<?php echo $_SESSION['data77']; ?></p>
            <p>監護人電話 :<?php echo $_SESSION['data88']; ?></p>
            <p>葷/素調查 :<?php echo $_SESSION['data99']; ?></p>
            <p>匯款後四碼 :<?php echo $_SESSION['data100']; ?></p>
            <p>報名梯次 :<?php echo $_SESSION['data111']; ?></p>
            <p style="color: red;">繳費狀態 : <?php echo $_SESSION['data122']; ?></p>
        </div>
</body>

<?php
    unset($_SESSION['data22']);
    unset($_SESSION['data33']);
    unset($_SESSION['data44']);
    unset($_SESSION['data55']);
    unset($_SESSION['data66']);
    unset($_SESSION['data77']);
    unset($_SESSION['data88']);
    unset($_SESSION['data99']);
    unset($_SESSION['data100']);
    unset($_SESSION['data111']);
    unset($_SESSION['data122']);
?>
</html>

