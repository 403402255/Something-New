<?php
session_start(); 
include("config.php");

$account = $_POST['account'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
//搜尋資料庫資料
$sql = "INSERT INTO `project`.`membership`
(`member_acc`,
`member_psw`,
`member_name`,
`member_phone`,
`member_email`)
VALUES ('$account','$password','$name','$phone','$email');";
// $result = mysqli_query($conn,$sql);
// $_SESSION['username'] = $account;
$result = mysqli_query($conn,$sql);
$_SESSION['username'] = $account;
echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
        
        ?>
