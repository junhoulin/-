<?php
$host = 'localhost';
$dbuser = 'root';
$dbpassword = '66y.YIEyDEYx';
$dbname = 'db01';
$link = mysqli_connect($host, $dbuser, $dbpassword, $dbname);

if (!$link) {
    echo "Cannot connect to the database: " . mysqli_connect_error();
    exit;
}
?>
