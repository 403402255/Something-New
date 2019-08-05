<?php
include("config.php");
$pid=$_POST['brand_id'];
$datatable="follow_shop";

if(isset($_POST['cc']))
{
$sql="insert into ".$datatable."(brand_id,member_name,brand_name,brand_link,brand_pic) ";

$sql.="values('".$_POST["brand_id"]."','".$_POST['member_name']."','".$_POST['brand_name']."','".$_POST['brand_link']."','".$_POST['brand_pic']."')";

$result = mysqli_query($conn,$sql)or die("Query failed : " . mysqli_error($conn));
echo "<meta http-equiv=REFRESH CONTENT=1;url=user.php>";
};
?>
