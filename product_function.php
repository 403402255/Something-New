<?php
include("config.php");
$pid=$_POST['product_id'];
$datatable="follow_product";
if(isset($_POST['submit']))
{
$sql="insert into ".$datatable."(member_name,product_id,p_pic,p_site,p_name)";
$sql.="values('".$_POST["member_name"]."','".$_POST['product_id']."','".$_POST['p_pic']."','".$_POST['p_site']."','".$_POST['p_name']."')";
$result = mysqli_query($conn,$sql)or die("Query failed : " . mysqli_error($conn));
echo "<meta http-equiv=REFRESH CONTENT=1;url=follow.php>";
};
?>