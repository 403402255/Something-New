<?php
session_start();
array_push($_SESSION['laptop_compare'],$_GET['product_id']);
echo "<meta http-equiv=REFRESH CONTENT=1;url=compare.php>";
?>

