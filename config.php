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
?>