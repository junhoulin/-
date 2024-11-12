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
    <link href="./admindatastyle/admindata.css?v1.0.1.7" rel="stylesheet" type="text/css">
    <link rel='stylesheet' type='text/css' href="./loading/loading.css?v1.0.0.3"> 
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
    <?php require './connect101/connect.php'; 
        //SQL1
        function getsqldata($TTTT, $link){
            $countSql1 = "SELECT COUNT(*) AS count1 FROM data101 WHERE data11 = '$TTTT'";
            $countResult1 = mysqli_query($link, $countSql1);
            $countRow1 = mysqli_fetch_assoc($countResult1);
            $peopleCount = $countRow1['count1'];
            return $peopleCount; // 返回人數計數
        }
        
    ?>
    
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
                <div class="admindata101">
                    <div class=" admindata1-item2">
                        <p>A01</br>08/03 (六)</p>
                        <?php $peopleCountT01 = getsqldata('A01', $link); ?>
                        <h3><?php echo $peopleCountT01; ?>  人</h3>
                    </div>
                    <div class="admindata1-item2">
                        <p>A02</br>08/17 (六)</p>
                        <?php $peopleCountT02 = getsqldata('A02', $link); ?>
                        <h3><?php echo $peopleCountT02; ?> 人</h3>
                    </div>
                    <div class="admindata1-item2">
                        <p>A03</br>08/24 (六)</p>
                        <?php $peopleCountT03 = getsqldata('A03', $link); ?>
                        <h3><?php echo $peopleCountT03; ?> 人</h3>
                    </div>
                    <div class="admindata1-item2">
                        <p>A04</br>09/21 (六)</p>
                        <?php $peopleCountT04 = getsqldata('A04', $link); ?>
                        <h3><?php echo $peopleCountT04; ?> 人</h3>
                    </div>
                    <div class="admindata1-item2">
                        <p>A05</br>09/28 (六)</p>
                        <?php $peopleCountT05 = getsqldata('A05', $link); ?> 
                        <h3><?php echo $peopleCountT05; ?> 人</h3>
                    </div>
                    <div class="admindata1-item2">
                        <p>B01</br>08/04 (日)</p>
                        <?php $peopleCountT06 = getsqldata('B01', $link); ?>
                        <h3><?php echo $peopleCountT06; ?> 人</h3>
                    </div>
                    <div class="admindata1-item2">
                        <p>B02</br>08/18 (日)</p>
                        <?php $peopleCountT07 = getsqldata('B02', $link); ?>
                        <h3><?php echo $peopleCountT07; ?> 人</h3>
                    </div>
                    <div class="admindata1-item2">
                        <p>B03</br>08/23 (五)</p>
                        <?php $peopleCountT08 = getsqldata('B03', $link); ?>
                        <h3><?php echo $peopleCountT08; ?> 人</h3>
                    </div>
                    <div class="admindata1-item2">
                        <p>B04</br>08/25 (日)</p>
                        <?php $peopleCountT09 = getsqldata('B04', $link); ?>
                        <h3><?php echo $peopleCountT09; ?> 人</h3>
                    </div>
                    <div class="admindata1-item2">
                        <p>B05</br>09/22 (日)</p>
                        <?php $peopleCountT10 = getsqldata('B05', $link); ?>
                        <h3><?php echo $peopleCountT10; ?> 人</h3>
                    </div>
                    <div class="admindata1-item2">
                        <p>C01</br>09/29(日)</p>
                        <?php $peopleCountT11 = getsqldata('C01', $link); ?>
                        <h3><?php echo $peopleCountT11; ?> 人</h3>
                    </div>
                    <div class="admindata1-item2">
                        <p>C02</br>10/05 (六)</p>
                        <?php $peopleCountT12 = getsqldata('C02', $link); ?>
                        <h3><?php echo $peopleCountT12; ?> 人</h3>
                    </div>
                    <div class="admindata1-item2">
                        <p>C03</br>10/06 (日)</p>
                        <?php $peopleCountT13 = getsqldata('C03', $link); ?>
                        <h3><?php echo $peopleCountT13; ?> 人</h3>
                    </div>
                    <div class="admindata1-item2">
                        <p>C04</br>10/19 (六)</p>
                        <?php $peopleCountT14 = getsqldata('C04', $link); ?>
                        <h3><?php echo $peopleCountT14; ?> 人</h3>
                    </div>
                    <div class="admindata1-item2">
                        <p>C05</br>10/20 (日)</p>
                        <?php $peopleCountT15 = getsqldata('C05', $link); ?>
                        <h3><?php echo $peopleCountT15; ?> 人</h3>
                    </div>
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
?>