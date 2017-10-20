<!-- //SQL -->
<?php
session_start(); 
	include("config.php");
	$sql = " SELECT *  FROM brands ";
    $rs_result = $conn->query($sql);
    $rs_result1 = $conn->query($sql);
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
					<?php if (empty($_SESSION['username'])) {
						echo "<li><a href='registered.php'> Create Account </a></li>
						<li><a href='login.php'>Login</a></li>
						<li><a href='contact.php'>Help</a></li>
						<li><span class='glyphicon glyphicon-user'></span><a href='user.php'>User</a></li>";
								}
						else{
							echo "
						<li><a href='contact.php'>Help</a></li>
						<li>
						<span class='glyphicon glyphicon-user'></span>
						<a href='user.php?memacc={$_SESSION['username']}'>{$_SESSION['username']}</a>
						</li>
						<li><a href='log_out.php'>Log out</a></li>";
						}
					 ?>
						
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
						<?php
						while($row = $rs_result->fetch_assoc()) {
							if ($row['brand_category']==1) {
								?> 
								<form action="products.php?<?php echo $row["brand_name"]?>" method="post">
									<input type="hidden" name="brand_id" value="<?php echo $row["brand_id"]?>">
									<input type="hidden" name="brand_name" value="<?php echo $row["brand_name"]?>">
									<button type="submit"><?php echo $row["brand_name"]?></button>
								</form>
								<?php 
							}
						}
						?>
					</div>
				</div>
				<div class="overlay-content">
					<a href="3c.php"><u>3Cs</u></a>
					<div class="newspaper">
						<?php
						while($row1 = $rs_result1->fetch_assoc()) {
							if ($row1['brand_category']==2) {
								?> 
								<form action="products.php?<?echo $row1["brand_name"]?>" method="post">
									<input type="hidden" name="brand_id" value="<?echo $row1["brand_id"]?>">
									<input type="hidden" name="brand_name" value="<?echo $row1["brand_name"]?>">
									<button type="submit"><?echo $row1["brand_name"]?></button>
								</form>
								<?php 
							}
						}
						?>
					</div>
				</div>
			</div>
			<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; SOMETHING NEW</span>
		</div>
<!--SEARCH-->
<div class="w3l_search">
	<form action="#" method="post">
		<input type="search" name="Search" placeholder="Search for a Product..." required="">
		<button type="submit" class="btn btn-default search" aria-label="Left Align">
			<i class="fa fa-search" aria-hidden="true"> </i>
		</button>
		<div class="clearfix"></div>
	</form>
</div>
				</div>
<!--SEARCH-->
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
		</script>

	</body>
</html>