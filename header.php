<!-- //SQL -->
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
<!-- //SQL -->
<!DOCTYPE html>
<html>
<head>
	<title>SOMETHING NEW</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="SOMETHING NEW, new products" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //for-mobile-apps -->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/mstyle.css" rel="stylesheet" type="text/css" media="all" />
		<!-- font-awesome icons -->
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<!-- //font-awesome icons -->
		<!-- js -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<!-- //js -->
		<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Antic" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/earlyaccess/notosanstc.css" />
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){     
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!--//start-smoth-scrolling -->
		<style>

		</style>
	</head>
	<body>
		<!-- header -->
		<div class="agileits_header">
			<div class="container">
				<div class="w3l_offers">
					<p>新品出爐 <a href="products.php">CHECK NOW</a></p>
				</div>
				<div class="agile-login">
					<ul>
						<li><a href="registered.php"> Create Account </a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="contact.php">Help</a></li>
						<li><span class="glyphicon glyphicon-user"></span><a href="user.php">User</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

		<div class="logo_products">
			<div class="container">
				<div class="w3ls_logo_products_left1">
					<ul class="phone_email">
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> Mail us : SOMETHING NEW</li>

					</ul>
				</div>
				<div class="w3ls_logo_products_left">

					<div id="myNav" class="overlay">
						<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
						<div class="overlay-content">
							<a href="wear.php"><u>WEARs</u></a>
							<div class="newspaper">
								<a href="products.php">Addias</a>
								<a href="products.php">Converse</a>
								<a href="products.php">Nike</a> 
								<a href="products.php">NewBalance</a>
								<a href="products.php">Vans</a>
							</div>
						</div>
						<div class="overlay-content">
							<a href="3c.php"><u>3Cs</u></a>
							<div class="newspaper">
								<a href="products.php">Acer</a>
								<a href="products.php">Asus</a>
								<a href="products.php">Apple</a>
								<a href="products.php">Lenovo</a>
							</div>
						</div>
					</div>
					<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; SOMETHING NEW</span>
				</div>
				<!--SEARCH |search.php很容易被玩壞-->

				<ul class="nav navbar-nav navbar-right">
					<div style="padding:20px">
						<li><a href="#search" onclick="on()" class="glyphicon glyphicon-search"></a></li>
					</div>
				</ul>


				<div id="overlay" onclick="off()">
					<div id="search">
						<button type="button" class="close">×</button>
						<form  action="search.php" method="get">
							<input type="search" id="auto_autocomplete" type="text" placeholder="Search for something NEW..." />
							<button type="submit" class="btn">Search</button>
						</form>
					</div>
				</div>

				<!--//SEARCH 很容易被玩壞-->   
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //header -->

		<script>

			function openNav() {
				document.getElementById("myNav").style.width = "100%";
			}

			function closeNav() {
				document.getElementById("myNav").style.width = "0%";
			}
			function on() {
				document.getElementById("overlay").style.display = "block";
			}

			function off() {
				document.getElementById("overlay").style.display = "none";
			}

			$(function () {
				$('a[href="#search"]').on('click', function(event) {
					event.preventDefault();
					$('#search').addClass('open');
					$('#search > form > input[type="search"]').focus();
				});

				$('#search, #search button.close').on('click keyup', function(event) {
					if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
						$(this).removeClass('open');
					}
				});


				$('form').submit(function(event) {
					event.preventDefault();
					return false;
				})

			});
			$(function() {
            $('#auto_autocomplete').autocomplete({
                source: "search.php",
                minLength: 1
            });
            });


		</script>

	</body>
</html>