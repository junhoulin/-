<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>足下寶藏管理系統</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chocolate+Classical+Sans&display=swap" rel="stylesheet">
    <link href="./loginstyle/loginstyle.css?v1.0.1.5" rel="stylesheet" type="text/css">
    <link rel='stylesheet' type='text/css' href="./loading/loading.css?v1.0.0.2"> 
    
</head>
<body>
    <div class="loading" id="loadingJS">Loading&#8230;</div>
    <form class="loginform" action="./connect101/script.php?login=login" method="post" >
        <h2>後台管理系統</h2>
        <?php if(isset($_GET['error'])) { ?> 
                    <p class="error"><?php echo $_GET['error'] ?></p>
        <?php } ?> 
        <input  name="account" type="text"      placeholder="帳號" >
        <input  name="password" type="password"  placeholder="密碼">
        <button type="submit">登 入</button>
        <span class="line"></span>
        <footer class="loginfooter">
            <p>&copy; 2024 Jim Lin. All rights reserved.</p>
        </footer>
    </form>
</body>
    <script src="./loginstyle/loginJS.js?v1.0.0.2"></script>
</html>

