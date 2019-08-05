<?php
session_start();
$key=array_search($_GET['product_id'],$_SESSION['laptop_compare']);
if($key!==false)
unset($_SESSION['laptop_compare'][$key]);
$_SESSION["laptop_compare"] = array_values($_SESSION["laptop_compare"]);
echo "<meta http-equiv=REFRESH CONTENT=1;url=compare.php>";

?>

