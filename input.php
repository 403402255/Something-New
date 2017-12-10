<?php
include("config.php");
$pid=$_POST['product_id'];
$datatable="comment";
if(isset($_POST['submit2']))
{
$sql="insert into ".$datatable."(member_name,c_title,c_content,product_id) ";
$sql.="values('".$_POST["member_name"]."','".$_POST["c_title"]."','".$_POST["c_content"]."','".$_POST['product_id']."')";
$result = mysqli_query($conn,$sql)or die("Query failed : " . mysqli_error($conn));
echo "<meta http-equiv=REFRESH CONTENT=1;url=single.php?&pid=".$pid.">";
};
?>

