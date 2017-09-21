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


function getbrands(){

	global $conn;
	$get_brands = "select * from brands where brand_id";
	$run_brands = mysqli_query($conn,$get_brands);

	while($row_brands=mysqli_fetch_array($run_brands)){

		$brand_title = $row_brands['brand_name'];
		$brand_id = $row_brands['brand_id'];
		echo" 
			<li><a href='products.php?$brand_id'><i class='fa fa-arrow-right'><font color='999999'>$brand_title</font></i></a></li>
					";

				}
			}


function getbrandsinfo(){

	global $conn;
	$get_brands = "select * from brands";
	$run_brands = mysqli_query($conn,$get_brands);

	while($row_brands=mysqli_fetch_array($run_brands)){

		$brand_title = $row_brands['brand_name'];
		$brand_id = $row_brands['brand_id'];
		echo
		"";

				}
			}


	?>