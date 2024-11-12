<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="2024足下寶藏教育推廣活動 - 教育推廣活動的詳細資訊和活動內容">
    <meta name="keywords" content="足下寶藏, 教育推廣, 活動, 2024">
    <meta property="og:title" content="2024足下寶藏教育推廣活動">
    <meta property="og:description" content="2024足下寶藏教育推廣活動 - 教育推廣活動的詳細資訊和活動內容">
    <meta property="og:image" content="./index2024style/banner1.jpg">
    <meta property="og:url" content="https://2024treasure.com/">
    <title>2024足下寶藏教育推廣活動 - 臺南左鎮化石園區</title>
    <link rel="icon" href="./index2024style/icon1.ico" type="image/x-icon">
    <link href="./index2024style/2024style.css?v1.0.1.7" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
    <?php require './treasure/connect101/connect.php'; 
        //SQL1
        function getsqldata($TTTT, $link){  
            $maxSlots = 30;
            $countSql1 = "SELECT COUNT(*) AS count1 FROM data101 WHERE data11 = '$TTTT'";
            $countResult1 = mysqli_query($link, $countSql1);
            $countRow1 = mysqli_fetch_assoc($countResult1);
            $peopleCount = $countRow1['count1'];
            $remainingSlots = $maxSlots - $peopleCount;
            return $remainingSlots; 
        }
    ?>
</head>

<body>
    <div class="header">
        <img src="./index2024style/header.png" alt="2024足下寶藏教育推廣活動">
    </div>
    <div class="banner">
        <img class="img-fluid" src="./index2024style/banner1.jpg" alt="2024足下寶藏教育推廣活動">
    </div>
    <div class="selection">
        <img class="selection1" src="./index2024style/select1.png" onclick="showContent('content1')">
        <img class="selection2" src="./index2024style/select2.png" onclick="showContent('content2')">
        <img class="selection3" src="./index2024style/select3.png" onclick="showContent('content3')">
        <img class="selection4" src="./index2024style/select4.png" onclick="showContent('content4')">
        <img class="selection5" src="./index2024style/select5.png" onclick="showContent('content5')">
    </div>
    <div class="content1 show">
        <img src="./index2024style/content1.png">
    </div>
    <div class="content2">
        <img src="./index2024style/content3.png">
        <img src="./index2024style/content4.png">
        <img src="./index2024style/content5.png">
        <img src="./index2024style/content7.png">
        <img src="./index2024style/content8.png">
        <img src="./index2024style/content9.png">
        <img src="./index2024style/content6.jpg">
    </div>
    <div class="content3">
        <img src="./index2024style/content2.jpg">
    </div>
    <div class="content4">
        <form action="./treasure/connect101/script.php?givedata=givedata" method="post">
        <div class="form-group">
                <label for="exampleInputPassword1">梯次選擇<span>*</span></label>
                <select name="givedata1" class="form-control"
                    id="exampleFormControlSelect1" required>
                    <option value="" disabled selected>請選擇梯次</option>
                    <option <?php $peopleCountT01 = getsqldata('A01', $link); ?><?php if ($peopleCountT01 == 0) echo 'disabled style="color: red;"'; ?>
                        value="A01">行程A 探索化石之謎 08/03(六) A01( 可報名人數 <?php echo $peopleCountT01; ?> 人 )
                    </option>
                    <option <?php $peopleCountT02 = getsqldata('A02', $link); ?><?php if ($peopleCountT02 == 0) echo 'disabled style="color: red;"'; ?>
                        value="A02">行程A 探索化石之謎 08/17(六) A02( 可報名人數<?php echo $peopleCountT02; ?> 人 )
                    </option>
                    <option <?php $peopleCountT03 = getsqldata('A03', $link); ?><?php if ($peopleCountT03 == 0) echo 'disabled style="color: red;"'; ?>
                        value="A03">行程A 探索化石之謎 08/24(六) A03 ( 可報名人數<?php echo $peopleCountT03; ?> 人 )
                    </option>
                    <option <?php $peopleCountT04 = getsqldata('A04', $link); ?><?php if ($peopleCountT04 == 0) echo 'disabled style="color: red;"'; ?>
                        value="A04">行程A 探索化石之謎 09/21(六) A04( 可報名人數<?php echo $peopleCountT04; ?> 人 )
                    </option>
                    <option <?php $peopleCountT05 = getsqldata('A05', $link); ?><?php if ($peopleCountT05 == 0) echo 'disabled style="color: red;"'; ?>
                        value="A05">行程A 探索化石之謎 09/28(六) A05 ( 可報名人數<?php echo $peopleCountT05; ?> 人 )
                    </option>
                    <option <?php $peopleCountT06 = getsqldata('B01', $link); ?><?php if ($peopleCountT06 == 0) echo 'disabled style="color: red;"'; ?>
                        value="B01">行程B 手作精靈&食農共舞 08/04(日) B01( 可報名人數<?php echo $peopleCountT06; ?> 人 )
                    </option>
                    <option <?php $peopleCountT07 = getsqldata('B02', $link); ?><?php if ($peopleCountT07 == 0) echo 'disabled style="color: red;"'; ?>
                        value="B02">行程B 手作精靈&食農共舞 08/18(日) B02 ( 可報名人數<?php echo $peopleCountT07; ?> 人 )
                    </option>
                    <option <?php $peopleCountT08 = getsqldata('B03', $link); ?><?php if ($peopleCountT08 == 0) echo 'disabled style="color: red;"'; ?>
                        value="B03">行程B 手作精靈&食農共舞 08/23(五) B03 ( 可報名人數<?php echo $peopleCountT08; ?> 人 )
                    </option>
                    <option <?php $peopleCountT09 = getsqldata('B04', $link); ?><?php if ($peopleCountT09 == 0) echo 'disabled style="color: red;"'; ?>
                        value="B04">行程B 手作精靈&食農共舞 08/25(日) B04( 可報名人數 <?php echo $peopleCountT09; ?> 人 )
                    </option>
                    <option <?php $peopleCountT10 = getsqldata('B05', $link); ?><?php if ($peopleCountT10 == 0) echo 'disabled style="color: red;"'; ?>
                        value="B05">行程B 手作精靈&食農共舞 09/22(日) B05( 可報名人數 <?php echo $peopleCountT10; ?> 人 )
                    </option>
                    <option <?php $peopleCountT11 = getsqldata('C01', $link); ?><?php if ($peopleCountT11 == 0) echo 'disabled style="color: red;"'; ?>
                        value="C01">行程C 秘境探索&食農共舞 09/29(日) C01( 可報名人數 <?php echo $peopleCountT11; ?> 人 )
                    </option>
                    <option <?php $peopleCountT12 = getsqldata('C02', $link); ?><?php if ($peopleCountT12 == 0) echo 'disabled style="color: red;"'; ?>
                        value="C02">行程C 秘境探索&食農共舞 10/05(六) C02( 可報名人數 <?php echo $peopleCountT12; ?> 人 )
                    </option>
                    <option <?php $peopleCountT13 = getsqldata('C03', $link); ?><?php if ($peopleCountT13 == 0) echo 'disabled style="color: red;"'; ?>
                        value="C03">行程C 秘境探索&食農共舞 10/06(日) C03( 可報名人數 <?php echo $peopleCountT13; ?> 人 )
                    </option>
                    <option <?php $peopleCountT14 = getsqldata('C04', $link); ?><?php if ($peopleCountT14 == 0) echo 'disabled style="color: red;"'; ?>
                        value="C04">行程C 秘境探索&食農共舞 10/19(六) C04( 可報名人數 <?php echo $peopleCountT14; ?> 人 )
                    </option>
                    <option <?php $peopleCountT15 = getsqldata('C05', $link); ?><?php if ($peopleCountT15 == 0) echo 'disabled style="color: red;"'; ?>
                        value="C05">行程C 秘境探索&食農共舞 10/20(日) C05( 可報名人數 <?php echo $peopleCountT15; ?> 人 )
                    </option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">參加者姓名<span>*</span></label>
                <input name="givedata2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">參加者性別<span>*</span></label>
                <select name="givedata3" class="form-control" id="exampleFormControlSelect1" required>
                    <option value="" disabled selected>請選擇性別</option>
                    <option value="男">男</option>
                    <option value="女">女</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">參加者生日(未滿6歲不得參加)<span>*</span></label>
                <input name="givedata4" type="date" class="form-control" id="Inputdate1" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">參加者身份證字號 (投保保險使用)<span>*</span></label>
                <input name="givedata5" type="text" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">參加者戶籍地址 (投保保險使用)<span>*</span></label>
                <input name="givedata6" type="text" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">參加者"監護人"姓名(若成年則免填)</label>
                <input name="givedata7" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">參加者"監護人"聯絡電話(若成年則免填)</label>
                <input name="givedata8" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">葷/素調查<span>*</span></label>
                <select name="givedata9" class="form-control" id="exampleFormControlSelect1" required>
                    <option value="" disabled selected>請選擇葷素</option>
                    <option value="葷">葷</option>
                    <option value="素">素</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">匯款後五碼<span>*</span></label>
                <input name="givedata10" type="text" class="form-control" id="exampleInputPassword1" placeholder="" required pattern="\d{5}" title="請輸入五位數字">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">電話<span>*</span></label>
                <input name="givedata11" type="text" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email<span>*</span></label>
                <input name="givedata12" type="text" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <button type="submit" class="btn btn-primary">提交</button>
        </form>
    </div>
    <div class="content5">
        <form action="./treasure/connect101/script.php?searchdata=searchdata" method="post">
            <div class="form-group">
                <input name="searchdata1" type="text" class="form-control" id="exampleInputPassword1" placeholder="請輸入身分證末四碼" required>
            </div>       
            <select name="searchdata2" class="form-control" id="exampleFormControlSelect1" required>
                    <option value="" disabled selected>請選擇梯次</option>
                    <option value="A01">行程A 探索化石之謎 08/03(六) A01</option>
                    <option value="A02">行程A 探索化石之謎 08/17(六) A02</option>
                    <option value="A03">行程A 探索化石之謎 08/24(六) A03</option>
                    <option value="A04">行程A 探索化石之謎 09/21(六) A04</option>
                    <option value="A05">行程A 探索化石之謎 09/28(六) A05</option>
                    <option value="B01">行程B 手作精靈&食農共舞 08/04(日) B01</option>
                    <option value="B02">行程B 手作精靈&食農共舞 08/18(日) B02</option>
                    <option value="B03">行程B 手作精靈&食農共舞 08/23(五) B03</option>
                    <option value="B04">行程B 手作精靈&食農共舞 08/25(日) B04</option>
                    <option value="B05">行程B 手作精靈&食農共舞 09/22(日) B05</option>
                    <option value="C01">行程C 秘境探索&食農共舞 09/29(日) C01</option>
                    <option value="C02">行程C 秘境探索&食農共舞 10/05(六) C02</option>
                    <option value="C03">行程C 秘境探索&食農共舞 10/06(日) C03</option>
                    <option value="C04">行程C 秘境探索&食農共舞 10/19(六) C04</option>
                    <option value="C05">行程C 秘境探索&食農共舞 10/20(日) C05</option>
                </select>
                <button type="submit" class="btn btn-primary">查詢</button>
        </form> 
    </div>
    <div class="bottom">
        <div class="bottom-item1">
            <img src="./index2024style/bottom1.png">
            <img src="./index2024style/bottom2.png">
        </div>
        <div class="bottom-item2 ">
            <img class="bottom-item2-img1" src="./index2024style/bottom3.png">
            <img class="bottom-item2-img2" src="./index2024style/bottom4.png">
        </div>
        <div class="bottom-item3 ">
            <img class="bottom-item3-img1" src="./index2024style/bottom5.png">
            <img class="bottom-item3-img2" src="./index2024style/bottom6.png">
        </div>  
    </div>

    <div class="bottom1">
        <div class="bottom1-item1">
            <img src="./index2024style/bottom7.png">
        </div>
    </div>

    <div class="bottom">
        <div class="bottom-item1">
            <img src="./index2024style/bottom8.png">
            <img src="./index2024style/bottom9.png">
        </div>
        <div class="bottom-item1">
            <img src="./index2024style/bottom10.png">
            <img src="./index2024style/bottom11.png">
            <img src="./index2024style/bottom12.png">
        </div>
        <div class="bottom-item2 ">
            <img class="bottom-item2-img5" src="./index2024style/bottom13.png">
            <img class="bottom-item2-img6" src="./index2024style/bottom14.png">
            <img class="bottom-item2-img7" src="./index2024style/bottom15.png">
            <img class="bottom-item2-img8" src="./index2024style/bottom16.png">
        </div>
        <div class="bottom-item3 ">
            <img class="bottom-item3-img3" src="./index2024style/bottom17.png">
            <img class="bottom-item3-img4" src="./index2024style/bottom18.png">
        </div>  
    </div>

    <div class="floor">
        <div class="floor-item1">
            <img class="floor-item1-img1" src="./index2024style/floor1.png">
            <img class="floor-item1-img2" src="./index2024style/floor2.png">
            <img class="floor-item1-img3" src="./index2024style/floor3.png">
            <img class="floor-item1-img4" src="./index2024style/floor4.png">
            <img class="floor-item1-img5" src="./index2024style/floor5.png">
            <img class="floor-item1-img6" src="./index2024style/floor6.png">
        </div> 
    </div>
    <div class="floor1">
        <p>&copy; 2024 Jim Lin. All rights reserved.</p>
    </div>
        



</body>

<script src="./index2024style/2024JS.js?v1.0.2.2"></script>

</html>