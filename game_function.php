<?php
include("config.php");

$datatable="game";

if(isset($_POST['gg']))
{
$sql="insert into ".$datatable."(member_name) ";

$sql.="values('".$_POST['member_name']."')";

$result = mysqli_query($conn,$sql)or die("今日已簽到");
echo "<meta http-equiv=REFRESH CONTENT=1;url=game.php>";

};
?>