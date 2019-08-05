<?php session_start(); ?>

<?php
include("config.php");


        $id = $_SESSION['username'];

        $sql = "SELECT * FROM membership where member_acc='$id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_row($result);
    
        echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
        echo "帳號：<input type=\"text\" name=\"account\" value=\"$row[1]\" />(此項目無法修改) <br>";
        echo "密碼：<input type=\"text\" name=\"password\" value=\"$row[2]\" /> <br>";
        echo "member_name：<input type=\"text\" name=\"name\" value=\"$row[3]\" /> <br>";
        echo "member_phone：<input type=\"text\" name=\"phone\" value=\"$row[4]\" /> <br>";
        echo "member_email：<input type=\"text\" name=\"email\" value=\"$row[5]\" /> <br>";
        



      
        echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
        echo "</form>";
?>

