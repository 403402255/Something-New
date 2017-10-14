<?php
	$servername = "rds-mysql.cwougcernbij.ap-northeast-1.rds.amazonaws.com";
	$username = "User";
	$password = "12345678";
	$dbname = "project";

	$conn = new mysqli($servername, $username, $password, $dbname);
	mysqli_query($conn, 'SET CHARACTER SET utf8');

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql = " SELECT *  FROM brands ";
    $rs_result = $conn->query($sql);
    $rs_result1 = $conn->query($sql);
?>