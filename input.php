<?php
include("config.php");
$pid=$_REQUEST['product_id'];
$datatable="comment";
if(isset($_POST['submit']))
{
$sql="insert into ".$datatable."(member_id,c_title,c_content) ";
$sql.="values('".$_POST["member_name"]."','".$_POST["c_title"]."','".$_POST["c_content"]."')";
$result = mysqli_query($conn,$sql)or die("Query failed : " . mysqli_error($conn));
echo '<meta http-equiv=REFRESH CONTENT=1;url=single.php>';
};
?>