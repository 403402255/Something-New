<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("config.php");
echo '<a href="logout.php">登出</a>  <br><br>';

if($_SESSION['username'] != null)
{
        echo '<a href="register.php">新增</a>    ';
        echo '<a href="update.php">修改</a>    ';
        echo '<a href="delete.php">刪除</a>  <br><br>';
    
        $sql = "SELECT * FROM member_table";
        $result = mysql_query($sql);
        while($row = mysql_fetch_row($result))
        {
                 echo "$row[0] - 名字(帳號)：$row[1], " . 
                 "電話：$row[3], 地址：$row[4], 備註：$row[5]<br>";
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>