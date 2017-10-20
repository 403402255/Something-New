<?php
session_start(); 

$servername = "rds-mysql.cwougcernbij.ap-northeast-1.rds.amazonaws.com";
$username = "User";
$password = "12345678";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn, 'SET CHARACTER SET utf8');

if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
} 
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