<?php
session_start();
include("config.php");

$datatable="imageDB";




$mname = $_SESSION['username'];
$kkk= "http://localhost/file/";




if($_FILES['file']['error']>0){
  exit("檔案上傳失敗！");//如果出現錯誤則停止程式
}

move_uploaded_file($_FILES['file']['tmp_name'],'file/'.$_FILES['file']['name']);//複製檔案


$sql="insert into ".$datatable."(image,member_name) ";

$sql.="values('".$kkk.$_FILES['file']['name']."','". $mname."')";




$result = mysqli_query($conn,$sql)or die("Query failed : " . mysqli_error($conn));


echo "<meta http-equiv=REFRESH CONTENT=1;url=user.php>";

?>

