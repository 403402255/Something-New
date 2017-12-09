<?php
include("config.php");
$pid=$_POST['news_id'];
$datatable="follow_news";
if(isset($_POST['submit']))
{
$sql="insert into ".$datatable."(news_id,member_name,news_title,news_context,news_pic,news_site) ";
$sql.="values('".$_POST["news_id"]."','".$_POST["member_name"]."','".$_POST['news_title']."','".$_POST['news_context']."','".$_POST['news_pic']."','".$_POST['news_site']."')";
$result = mysqli_query($conn,$sql)or die("Query failed : " . mysqli_error($conn));
echo "<meta http-equiv=REFRESH CONTENT=1;url=user.php>";
};
?>


