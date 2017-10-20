<?php
session_start();
include("header.php");
include("config.php");
?>
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li><a href="user.php">User</li></a>
				<li>Edit Profile</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- //top-header and slider -->
<div class="container">
<br>
  <h2>Personal info</h2>
  <hr>
	 <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
        </div>
        <br>
        <input type="file" class="form-control">
        <br>
      </div>
      <?php
    if($_SESSION['username'] != null)
{

        $id = $_SESSION['username'];

        $sql = "SELECT * FROM membership where member_acc='$id'";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
    
        echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
        echo "帳號：<input type=\"text\" name=\"id\" value=\"$row[1]\" />(此項目無法修改) <br>";
        echo "密碼：<input type=\"password\" name=\"pw\" value=\"$row[2]\" /> <br>";
        echo "再一次輸入密碼：<input type=\"password\" name=\"pw2\" value=\"$row[2]\" /> <br>";
        echo "姓名：<input type=\"text\" name=\"telephone\" value=\"$row[3]\" /> <br>";
        echo "地址：<input type=\"text\" name=\"address\" value=\"$row[4]\" /> <br>";
        echo "電話：<textarea name=\"elephone\">$row[5]</textarea> <br>";
        echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
        echo "</form>";
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
;?>

      <!-- edit form column -->
      <div class="col-md-9 personal-info">

        <form action="" name="form1" method="Post" class="form-horizontal" role="form">
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Account Name: </label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="fname" value="" placeholder="<?php echo $member_name;?>">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Password:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="lname" value="userlName">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Enter your password again: </label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email" value="usermail@gmail.com">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Name: </label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="phone" value="userAddress">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Address: </label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="userid" value="userId">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone: </label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="userpsw" value="userPsw">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-lg-8">
              <input type="button" class="btn btn-primary" value="Save Changes" onclick="form1.action='ed.php';form1.submit();"/>
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>

<?php
include("footer.php");
?>