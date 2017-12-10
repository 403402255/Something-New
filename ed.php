<?php
$servername = "rds-mysql.cwougcernbij.ap-northeast-1.rds.amazonaws.com";
$username = "User";
$password = "12345678";
$dbname = "project";

$fname =$_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$userid = $_REQUEST['userid'];
$userpsw = $_REQUEST['userpsw'];

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn, 'SET CHARACTER SET utf8');

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

$sql_insert = "INSERT INTO membership(member_name, member_acc, member_email, member_phone,member_psw) VALUES ('$fname'+'$lname','$userid','$email','$phone','$userpsw')";
//$sql_update = "Update membership Set name ='$fname'+'$lname', userpsw = '$userpsw', email = '$email', phone = '$phone' WHERE userid = '$userid'";

$sql_query = "select * from membership";
$result = mysqli_query($conn,$sql_query) or die('MySQL query error');

while($row = mysqli_fetch_array($result))
{
	echo $row['fname']."<br>";
	echo $row['email']."<br>";
	echo $row['phone']."<br>";
	echo $row['userid']."<br>"; 
	echo $row['userpsw']."<br><br>"; 
}
?>