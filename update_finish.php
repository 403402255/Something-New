
<?php
session_start(); 
include("config.php");

$account = $_POST['account'];
$password = $_POST['password'];
$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];


if($_SESSION['username'] != null && $password != null )
{
        $account = $_SESSION['username'];

        //更新資料庫資料語法
        $sql = "UPDATE membership SET member_acc=$account, member_psw=$password, member_name=$name, member_phone=$phone, member_email=$email where member_acc='$account'";


$result = mysqli_query($conn,$sql);
$_SESSION['username'] = $account;
echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
        

}

        ?>



        