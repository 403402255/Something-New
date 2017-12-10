<?php
include("config.php");

session_start();
$pid=$_POST['product_id'];
$username = $_SESSION['username'];


$product_id = $_SERVER['QUERY_STRING'];

$datatable="follow_product";
if(isset($_POST['submit3']))
{
$sql = "DELETE FROM ".$datatable." WHERE member_name = '$username' AND  product_id =  ".$pid;

$result = mysqli_query($conn,$sql)or die("Query failed : " . mysqli_error($conn));
echo "<meta http-equiv=REFRESH CONTENT=1;url=single.php?".$pid.">";
};
?>



