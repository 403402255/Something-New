<?php
include("header.php");
?>

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li>Login</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- login -->
	<div class="login">
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				
				<form action="login_function.php" method="post">
					<input type="text" placeholder="Account" name="account" required=" " >
					<input type="password" placeholder="Password" name="password" required=" " >
					<input type="submit" value="Login">
				</form>

			</div>
			<h4>For New People</h4>
			<p><a href="registered.php">Register Here</a> (Or) go back to <a href="index.php">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
<!-- //login -->
<?php
include("footer.php");
?>