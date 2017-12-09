<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <?php
    if(isset($_post['search'])){
     $query = $_post['search'];
     $query = pref_replace("#[0-9a-z]#i","",$query);
         
    }
    
    //mysql_query("SET NAMES 'utf8'");  
    $ssql = "SELECT * FROM products where p_name like '%$query%'";
    $count = mysql_num_rows($ssql);
    if($count == 0){
        $output = '找不到商品,請再試試！';
        echo $output; 
    }else{
    while($srow = mysql_fetch_array(ssql)){
       echo $srow['p_name']." ";
       echo $srow['p_model']."<br>";   
   }
};
   ?>
</body>