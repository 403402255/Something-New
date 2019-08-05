<?php
$servername = "rds-mysql.cwougcernbij.ap-northeast-1.rds.amazonaws.com";
$username = "User";
$password = "12345678";
$dbname = "project";
$s1=$_POST['title'];
$s2=$_POST['message'];


$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn, 'SET CHARACTER SET utf8');

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
	$get_brands="INSERT INTO `project`.`member_comments`
(`member_acc`,
`member_title`,
`member_content`,
`member_state`)
VALUES ('acc','$s1','$s2','0');";
	$run_brands = mysqli_query($conn,$get_brands);
header("Location: contact.php");
die();
?>