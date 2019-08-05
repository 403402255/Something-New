<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <?php
    include("header.php");

    if(isset($_POST['search'])){
     $query = $_POST['search'];
    } 
    //mysql_query("SET NAMES 'utf8'");  
    
    $ssql = "SELECT * FROM products where p_name like '%$query%'";
    $tem=$conn->query($ssql);
    $count = mysqli_num_rows($tem);
    if($count == 0){
        $output = '找不到商品,請再試試！';
        echo $output; 
    }else{
    $tem=$conn->query($ssql);
    while($srow = mysqli_fetch_array($tem)){
       echo $srow['p_name']." ";
       echo $srow['p_model']."<br>";   
   }
};
   ?>
</body>