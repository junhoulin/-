<?php
session_start();

if (isset($_GET['login'])) {
    loginFunction();
}else if (isset($_GET['logout'])) {
    logoutFunction();
}else if (isset($_GET['SELECTDATA'])) {
    SELECTDATA();
}else if (isset($_GET['UPDATEDATA'])) {
    UPDATEDATA();
}else if (isset($_GET['givedata'])){
    givedata();
}else if (isset($_GET['searchdata'])){
    searchdata();
}else if (isset($_GET['DELDATA'])){
    DELDATA();
}


function noteAction($link, $action) {
    if (isset($_SESSION['accountpower'])) {
        $query = "INSERT INTO data303 (`name`, `time`, `doing`) VALUES ('" . $_SESSION['accountpower'] . "', NOW(), '$action')";
        $result = mysqli_query($link, $query);
        
        if (!$result) {
            echo "動作記錄失敗: " . mysqli_error($link);
        }
    } else {
        echo "動作記錄失敗: 未設置 session 'accountpower'";
    }
}

function searchdata(){
    if (isset($_POST['searchdata1'])&&isset($_POST['searchdata2'])) {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $searchdata1 = validate($_POST['searchdata1']);
        $searchdata2 = validate($_POST['searchdata2']);
        
        
        require "connect.php";
        $query = "SELECT * FROM data101 WHERE RIGHT(data5, 4) = '$searchdata1' AND data11 = '$searchdata2'";
        $result = mysqli_query($link, $query);

        if ($result && mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            
            $_SESSION['data11'] = $row['data1'];
            $_SESSION['data22'] = $row['data2'];
            $_SESSION['data33'] = $row['data3'];
            $_SESSION['data44'] = $row['data4'];
            $_SESSION['data55'] = $row['data5'];
            $_SESSION['data66'] = $row['data6'];
            $_SESSION['data77'] = $row['data7'];
            $_SESSION['data88'] = $row['data8'];
            $_SESSION['data99'] = $row['data9'];
            $_SESSION['data100'] = $row['data10'];
            $_SESSION['data111'] = $row['data11'];
            $_SESSION['data122'] = $row['data12'];
            header("Location:../../search.php?successsearch");
            exit();
            
        } else {
            
            header("Location: ../../index2024.php?IDisfault");
            exit(); // 確保在重定向之後立即退出腳本
        }
        
        
    } else {
        header("Location: ../../index2024.php"); // 如果未提交账号和密码，重定向回登录页面
        exit();
    }
}

function givedata(){
    if (isset($_POST['givedata1']) && isset($_POST['givedata2'])&& isset($_POST['givedata3'])&& isset($_POST['givedata4'])
    && isset($_POST['givedata5'])&& isset($_POST['givedata6'])&& isset($_POST['givedata7'])&& isset($_POST['givedata8'])
    && isset($_POST['givedata9'])&& isset($_POST['givedata10'])&&isset($_POST['givedata11'])&&isset($_POST['givedata12'])) {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $givedata1 = validate($_POST['givedata1']);
        $givedata2 = validate($_POST['givedata2']);
        $givedata3 = validate($_POST['givedata3']);
        $givedata4 = validate($_POST['givedata4']);
        $givedata5 = validate($_POST['givedata5']);
        $givedata6 = validate($_POST['givedata6']);
        $givedata7 = validate($_POST['givedata7']);
        $givedata8 = validate($_POST['givedata8']);
        $givedata9 = validate($_POST['givedata9']);
        $givedata10 = validate($_POST['givedata10']);
        $givedata11 = validate($_POST['givedata11']);
        $givedata12 = validate($_POST['givedata12']);
        
        require "connect.php";
        $query = "INSERT INTO data101 (data11, data2, data3, data4, data5, data6, data7, data8, data9, data10, data12, data13,data14,data15) 
                  VALUES ('$givedata1', '$givedata2', '$givedata3', '$givedata4', '$givedata5', '$givedata6', 
                          '$givedata7', '$givedata8', '$givedata9', '$givedata10', '未繳費', NOW(),'$givedata11','$givedata12')";
        
        $result = mysqli_query($link, $query);
        
        if ($result) {
            header("Location: ../../index2024.php?successgivedata");
            exit();
        } else {
            echo "更新失敗: " . mysqli_error($link);
        }

    } else {
        header("Location: ../../index2024.php"); // 如果未提交账号和密码，重定向回登录页面
        exit();
    }
}

function loginFunction() {
    
    if (isset($_POST['account']) && isset($_POST['password'])) {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $accon = validate($_POST['account']);
        $pass = validate($_POST['password']);

        if (empty($accon)) {
            header("Location: ../login.php?error=使用者名稱為必填");
            exit();
        } elseif (empty($pass)) {
            header("Location: ../login.php?error=密碼為必填");
            exit();
        } else {
            require "connect.php";
            $accon_lower = strtolower($accon);  // 將輸入的帳號轉換為小寫
            $pass = $pass;  // 建議使用安全的密碼雜湊方式

            $query = "SELECT * FROM data202 WHERE LOWER(account) = '$accon_lower' AND password = '$pass'";
            $result = mysqli_query($link, $query);

            if ($result && mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['account'] = $row['account'];
                $_SESSION['accountpower'] = $row['accountpower'];
                noteAction($link, 'logining');
                header("Location:../adminindex.php");
                exit();
            } else {
                // 帳號密碼驗證失敗
                header("Location: ../login.php?error=帳號或密碼不正確");
                exit(); // 確保在重定向後立即退出腳本
            }
        }
    } else {
        header("Location: ../login.php"); // 如果未提交帳號和密碼，重定向回登入頁面
        exit();
    }
}

function logoutFunction(){
    require "connect.php";
    noteAction($link, 'loginout');
    session_start();
    session_unset();
    session_destroy();
    header("location:../login.php"); 

}

function SELECTDATA(){
    if (isset($_POST['ID'])) {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $ID = validate($_POST['ID']);

        if (empty($ID)) {
            header("Location: ../adminindex02.php?error=ID is required");
            exit();
        }else {
            require "connect.php";
            $query = "SELECT * FROM data101 WHERE data1 = '$ID'";
            $result = mysqli_query($link, $query);

            if ($result && mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                if($row['data1']===$ID){
                    $_SESSION['data1'] = $row['data1'];
                    $_SESSION['data2'] = $row['data2'];
                    $_SESSION['data3'] = $row['data3'];
                    $_SESSION['data4'] = $row['data4'];
                    $_SESSION['data5'] = $row['data5'];
                    $_SESSION['data6'] = $row['data6'];
                    $_SESSION['data7'] = $row['data7'];
                    $_SESSION['data8'] = $row['data8'];
                    $_SESSION['data9'] = $row['data9'];
                    $_SESSION['data10'] = $row['data10'];
                    $_SESSION['data11'] = $row['data11'];
                    $_SESSION['data12'] = $row['data12'];
                    header("Location:../adminindex02.php");
                    exit();
                }
            } else {
                
                header("Location: ../adminindex02.php?ID is fault");
                exit(); // 確保在重定向之後立即退出腳本
            }
        }
    } else {
        header("Location: ../adminindex02.php");
        exit();
    }
}

function UPDATEDATA(){
    if (isset($_POST['change1'])&&isset($_POST['change2'])&& isset($_POST['change3'])&& isset($_POST['change4'])
    && isset($_POST['change5'])&& isset($_POST['change6'])&& isset($_POST['change7'])&& isset($_POST['change8'])
    && isset($_POST['change9'])&& isset($_POST['change10'])&& isset($_POST['change11'])&& isset($_POST['change12'])
    ) {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $change1 = validate($_POST['change1']);
        $change2 = validate($_POST['change2']);
        $change3 = validate($_POST['change3']);
        $change4 = validate($_POST['change4']);
        $change5 = validate($_POST['change5']);
        $change6 = validate($_POST['change6']);
        $change7 = validate($_POST['change7']);
        $change8 = validate($_POST['change8']);
        $change9 = validate($_POST['change9']);
        $change10 = validate($_POST['change10']);
        $change11= validate($_POST['change11']);
        $change12= validate($_POST['change12']);
        
        require "connect.php";
        $query = "UPDATE data101 SET 
            `data2`='$change2',
            `data3`='$change3',
            `data4`='$change4',
            `data5`='$change5',
            `data6`='$change6',
            `data7`='$change7',
            `data8`='$change8',
            `data9`='$change9',
            `data10`='$change10',
            `data11`='$change11',
            `data12`='$change12'
            WHERE `data1`='$change1'";

        $result = mysqli_query($link, $query);
        
        if ($result) {
            noteAction($link, 'changedata');
            header("Location: ../adminindex02.php?successchange");
            exit();
        } else {
            echo "更新失敗: " . mysqli_error($link);
        }
            
        
    } else {
        header("Location: ../adminindex02.php");
        exit();
    }
}

function DELDATA(){
    if (isset($_POST['ID1'])) {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $ID1 = validate($_POST['ID1']);

        if (empty($ID1)) {
            header("Location: ../adminindex02.php?error=ID1 is required");
            exit();
        }else {
            require "connect.php";
            $query = "DELETE FROM data101 WHERE data1 = '$ID1'";
            $result = mysqli_query($link, $query);
            noteAction($link, 'deletedata');
            header("Location: ../adminindex02.php");
        }
    } else {
        header("Location: ../adminindex02.php");
        exit();
    }
}


?>
