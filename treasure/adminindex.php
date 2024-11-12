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
    <?php require './connect101/connect.php'; ?>
    <?php
        //SQL1---------------------------
        $sql = "SELECT * FROM data101";
        $result = mysqli_query($link,$sql);
        //SQL2---------------------------
        $countSql0 = "SELECT COUNT(*) AS count0 FROM data101";
        $countResult0 = mysqli_query($link, $countSql0);
        $countRow0 = mysqli_fetch_assoc($countResult0);
        $peopleCount = $countRow0['count0'];
        //SQL3---------------------------
        $countSql1 = "SELECT COUNT(*) AS count1 FROM data101 WHERE data12 = '未繳費'";
        $countResult1 = mysqli_query($link, $countSql1);
        $countRow1 = mysqli_fetch_assoc($countResult1);
        $moneyCount = $countRow1['count1'];
        //SQL4---------------------------
        $countSql2 = "SELECT COUNT(*) AS count2 FROM data101 WHERE data12 = '已繳費'";
        $countResult2 = mysqli_query($link, $countSql2);
        $countRow2 = mysqli_fetch_assoc($countResult2);
        $nomoneyCount = $countRow2['count2'];
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
                <div class="admindata1">
                    <div class=" admindata1-item">
                        <p>已報名人數</p>
                        <h3><?php echo $peopleCount; ?> 人</h3>
                    </div>
                    <div class="admindata1-item">
                        <p>未繳費人數</p>
                        <h3><?php echo $moneyCount; ?> 人</h3>
                    </div>
                    <div class="admindata1-item">
                        <p>已繳費人數</p>
                        <h3><?php echo $nomoneyCount; ?> 人</h3>
                    </div>
                </div>

                <div class="admindata2">
                    <table id="table_id" class="display compact cell-border hover">
                                <thead style="text-align:center;">
                                    <tr style="text-align:center;">
                                        <th>ID</th>
                                        <th>姓名</th>
                                        <th>性別</th>
                                        <th>生日</th>
                                        <th>身分證號</th>
                                        <th>地址</th>
                                        <th>監護人姓名</th>
                                        <th>監護人電話</th>
                                        <th>葷/素調查</th>
                                        <th>匯款後五碼</th>
                                        <th>T次</th>
                                        <th>繳費狀態</th>
                                        <th>送件時間</th>
                                        <th>電話</th>
                                        <th>email</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- 大括號的上、下半部分 分別用 PHP 拆開 ，這樣中間就可以純用HTML語法-->
                                    <?php
                                        if(mysqli_num_rows($result) > 0)
                                        {
                                            foreach($result as $row)
                                            {
                                                // 檢查繳費
                                                $statusClass = ($row['data12'] === '未繳費') ? 'unpaid' : '';
                                                // 計算年齡
                                                $birthDate = new DateTime($row['data4']);
                                                $currentDate = new DateTime();
                                                $age = $currentDate->diff($birthDate)->y;
                                                // 檢查是否未成年
                                                $ageClass = ($age < 18) ? 'underage' : '';
                                    ?>
                                                    <tr>
                                                        <!-- $row['(輸入資料表的欄位名稱)'];  <<用雙引號也行 -->
                                                        <td><?php echo $row['data1']; ?></td> 
                                                        <td><?php echo $row['data2']; ?></td> 
                                                        <td><?php echo $row['data3']; ?></td> 
                                                        <td class="<?php echo $ageClass; ?>"><?php echo $row['data4']; ?></td>
                                                        <td><?php echo $row['data5']; ?></td> 
                                                        <td><?php echo $row['data6']; ?></td> 
                                                        <td><?php echo $row['data7']; ?></td> 
                                                        <td><?php echo $row['data8']; ?></td> 
                                                        <td><?php echo $row['data9']; ?></td> 
                                                        <td><?php echo $row['data10']; ?></td> 
                                                        <td><?php echo $row['data11']; ?></td> 
                                                        <td class="<?php echo $statusClass; ?>"><?php echo $row['data12']; ?></td>
                                                        <td><?php echo $row['data13']; ?></td> 
                                                        <td><?php echo $row['data14']; ?></td>
                                                        <td><?php echo $row['data15']; ?></td>
                                                    </tr>
                                    <?php
                                            }
                                        }
                                    ?>
                                </tbody>

                    </table>
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