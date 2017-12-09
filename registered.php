<?php
include("header.php");
?>

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li>Register</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>
<!-- //top-header and slider -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h2>Register Here</h2>
			<div class="login-form-grids">
				<h5>profile information</h5>



				<form action="register_function.php" method="post">
					<input type="text" name="account" placeholder="帳號" required=" " >
					<input type="text" name="name" placeholder="暱稱" required=" " >
					<input type="email" name="email" placeholder="Email" required=" " >
					<input type="text" name="phone" placeholder="電話" required=" " >
					<input type="password" placeholder="密碼" required=" " >
					<input type="password" name="password" placeholder="密碼確認" required=" " >
					<div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>我同意相關規定</label>
						</div>
					</div>
					<input type="submit" value="送出註冊">
				</form>



			</div>
			<div class="register-home">
				<a href="index.php">Home</a>
			</div>
		</div>
	</div>
<!-- //register -->

<?php
include("footer.php");
?>





<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<form name="form" method="post" action="register_finish.php">
帳號：<input type="text" name="id" /> <br>
密碼：<input type="password" name="pw" /> <br>
再一次輸入密碼：<input type="password" name="pw2" /> <br>
電話：<input type="text" name="telephone" /> <br>
地址：<input type="text" name="address" /> <br>
備註：<textarea name="other" cols="45" rows="5"></textarea> <br>
<input type="submit" name="button" value="確定" />
</form>


