<?php
session_start();

if (isset($_GET['login'])) {
    loginFunction();
}else if (isset($_GET['logout'])) {
    logoutFunction();
}else if (isset($_GET['SELECTDATA'])) {
    SELECTDATA();
}else if (isset($_GET['DELDATA'])) {
    DELDATA();
}else if (isset($_GET['UPDATEDATA'])) {
    UPDATEDATA();
}

function DELDATA(){
    header("Location: ../adminindex02.php?asdasdasdada");
    exit();
}

function noteAction($link, $action) {
    if (isset($_SESSION['accountpower'])) {
        // 取得本地時間並格式化
        $time = date('Y-m-d H:i:s');
        
        // 使用 mysqli_real_escape_string 函數來避免 SQL 注入攻擊
        $name = mysqli_real_escape_string($link, $_SESSION['accountpower']);
        $action = mysqli_real_escape_string($link, $action);
        
        // 構建 SQL 語句
        $query = "INSERT INTO data303 (`name`, `time`, `doing`) VALUES ('$name', '$time', '$action')";
        
        // 執行 SQL 語句
        $result = mysqli_query($link, $query);
        
        // 檢查是否成功插入
        if ($result) {
            echo "動作記錄成功插入";
        } else {
            echo "動作記錄失敗: " . mysqli_error($link);
        }
    } else {
        echo "動作記錄失敗: 未設置 session 'accountpower'";
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
            header("Location: ../login.php?error=UserName is required");
            exit();
        } elseif (empty($pass)) {
            header("Location: ../login.php?error=Password is required");
            exit();
        } else {
            require "connect.php";
            $query = "SELECT * FROM data202 WHERE account = '$accon' AND password = '$pass'";
            $result = mysqli_query($link, $query);

            if ($result && mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                if(strtolower($row['account']) === strtolower($accon) && $row['password'] === $pass){
                    $_SESSION['account'] = $row['account'];
                    $_SESSION['accountpower'] = $row['accountpower'];
                    noteAction($link, 'logining');
                    header("Location:../adminindex.php");
                    exit();
                }
            } else {
                // 帳號密碼驗證失敗
                header("Location: ../login.php?error=Incorrect account or password");
                exit(); // 確保在重定向之後立即退出腳本
            }
        }
    } else {
        header("Location: ../login.php"); // 如果未提交账号和密码，重定向回登录页面
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

?>
