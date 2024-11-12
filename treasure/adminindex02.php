<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
    if(isset($_SESSION['account'])){
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>足下寶藏管理系統</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="./admindatastyle/admindata.css?v1.0.1.8" rel="stylesheet" type="text/css">
    <link rel='stylesheet' type='text/css' href="./loading/loading.css?v1.0.0.2"> 
    <script src="https://kit.fontawesome.com/8a17a816b1.js" crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> <!--圖標-->
    <script src="https://kit.fontawesome.com/8a17a816b1.js" crossorigin="anonymous"></script>
    <!-- 表格的CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

</head>

<body>
    <div class="loading" id="loadingJS">Loading&#8230;</div>
    <div class="container-fluid">
        <div class="row">
            <div class="leftlist col-md-2">
                <h1><i class="fa-solid fa-ghost" style="color: #ffffff;"></i>足下寶藏後台</h1>
                <span class="line"></span>
                <ul>
                    <a href="./adminindex.php"><li><i class="fa-regular fa-file" style="color: #ffffff;"></i>主資料查詢</li></a>
                    <a href="./adminindex01.php"><li><i class="fa-solid fa-tag" style="color: #ffffff;"></i>各梯次查詢</li></a>
                    <a href="./adminindex02.php"><li><i class="fa-solid fa-tag" style="color: #ffffff;"></i>主資料修改</li></a>
                    <a href="./connect101/script.php?logout=logout"><li><i class="fa-solid fa-skull-crossbones" style="color: #ffffff;"></i>使用者登出</li></a>
                </ul>
                <img class='leftimg' src="./1.png" alt="怪人">
            </div>

            <div class="rightlist col-md-10 ">
                <header>
                    <ul>
                        <li><i class="fa-solid fa-user-tie"></i><?php echo $_SESSION['accountpower']; ?></li>
                        <li>權限:administrator</li>
                    </ul>
                </header>
                <div class="chdmindata-item">
                    <div class="selectadmindata">
                        <form class="selectadmindataform1"  action="./connect101/script.php?SELECTDATA=SELECTDATA" method="post">
                            <h3>查詢訂單(ID)</h3>
                            <input name="ID" type="text" placeholder="訂單編號" >
                            <button type="submit">查詢</button>
                        </form>
                        <form  class="selectadmindataform2" action="./connect101/script.php?DELDATA=DELDATA" method="post" onsubmit="return confirmSubmit()">
                            <h3>刪除訂單(ID)</h3>
                            <input name="ID1" type="text" placeholder="訂單編號" >
                            <button type="submit">刪除</button>
                        </form>
                    </div>
                                  
                    <form class="changeadmindata" action="./connect101/script.php?UPDATEDATA=UPDATEDATA" method="post" onsubmit="return confirmSubmit()">
                        <h3>訂單修改</h3>
                        <input name="change1" type="text" placeholder="ID" value="<?php echo $_SESSION['data1']; ?>">
                        <input name="change2" type="text" placeholder="姓名" value="<?php echo $_SESSION['data2']; ?>">
                        <select name="change3" id="options" name="options">
                            <option value="<?php echo $_SESSION['data3']; ?>"> <?php echo $_SESSION['data3']; ?></option>
                            <option value="男"> 男</option>
                            <option value="女"> 女</option>
                        </select>
                        <input name="change4" type="date" placeholder="生日" value="<?php echo $_SESSION['data4']; ?>">
                        <input name="change5" type="text" placeholder="身分證號" value="<?php echo $_SESSION['data5']; ?>">
                        <input name="change6" type="text" placeholder="地址" value="<?php echo $_SESSION['data6']; ?>">
                        <input name="change7" type="text" placeholder="監護人姓名" value="<?php echo $_SESSION['data7']; ?>">
                        <input name="change8" type="text" placeholder="監護人電話" value="<?php echo $_SESSION['data8']; ?>">
                        <select name="change9" id="options" name="options">
                            <option value="<?php echo $_SESSION['data9']; ?>"> <?php echo $_SESSION['data9']; ?></option>
                            <option value="葷"> 葷</option>
                            <option value="素"> 素</option>
                        </select>
                        <input name="change10" type="text" placeholder="匯款後五碼" value="<?php echo $_SESSION['data10']; ?>">
                        <select name="change11" id="options">
                            <option value="<?php echo $_SESSION['data11']; ?>"> <?php echo $_SESSION['data11']; ?></option>
                            <option value='A01'> A01</option>
                            <option value='A02'> A02</option>
                            <option value='A03'> A03</option>
                            <option value='A04'> A04</option>
                            <option value='A05'> A05</option>
                            <option value='B01'> B01</option>
                            <option value='B02'> B02</option>
                            <option value='B03'> B03</option>
                            <option value='B04'> B04</option>
                            <option value='B05'> B05</option>
                            <option value='C01'> C01</option>
                            <option value='C02'> C02</option>
                            <option value='C03'> C03</option>
                            <option value='C04'> C04</option>
                            <option value='C05'> C05</option>
                        </select>  
                        <select name="change12" id="options" name="options">
                            <option value="<?php echo $_SESSION['data12']; ?>"> <?php echo $_SESSION['data12']; ?></option>
                            <option value="已繳費"> 已繳費</option>
                            <option value="未繳費"> 未繳費</option>
                        </select>   
                        <button type="submit">修改</button>
                    </form>
                </div>
            </div>
        </div>
</body>
<script src="./admindatastyle/admindata.js?v1.0.0.2"></script>

</html>

<?php
}else{
    header("Location: login.php?error=nononononono");
    exit();
}

unset($_SESSION['data1']);
unset($_SESSION['data2']);
unset($_SESSION['data3']);
unset($_SESSION['data4']);
unset($_SESSION['data5']);
unset($_SESSION['data6']);
unset($_SESSION['data7']);
unset($_SESSION['data8']);
unset($_SESSION['data9']);
unset($_SESSION['data10']);
unset($_SESSION['data11']);
unset($_SESSION['data12']);
?>