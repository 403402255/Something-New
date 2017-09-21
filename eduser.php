<?php
include("header.php");
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
<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>
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
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a>This is an <strong>.alert</strong>.
        </div>
        <br>

        <form action="" name="form1" method="Post" class="form-horizontal" role="form">
          
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="fname" value="userfName">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="lname" value="userlName">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email" value="usermail@gmail.com">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="phone" value="userAddress">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Account Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="userid" value="userId">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Password:</label>
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