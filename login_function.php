<?php
session_start(); 
include("config.php");
$id = $_POST['account'];
$pw = $_POST['password'];
//搜尋資料庫資料
$sql = "SELECT * FROM membership where member_acc = '$id'";

$result = mysqli_query($conn,$sql);

while($row_brands=mysqli_fetch_array($result)){
        if($id != null && $pw != null && $row_brands['member_acc'] == $id && $row_brands['member_psw'] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $id;
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
        }

if (empty($_SESSION['username'])) {
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
}

        ?>



