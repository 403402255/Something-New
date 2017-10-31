<?php
include("header.php");
?>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">


<!-- breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
     <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
        <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
        <li>User</li>
    </ol>
</div>
</div>
<!-- //breadcrumbs -->
<script>
    $(document).ready(function(){
   $('[data-toggle="offcanvas"]').click(function(){
       $("#navigation").toggleClass("hidden-xs");
   });
});
</script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<!-- user -->
<?php include("unav.php");?>
<!--換的內容-->
 <?php
    if($_SESSION['username'] != null)
{

        $id = $_SESSION['username'];

        $sql = " SELECT * FROM membership where member_acc ='$id' ";
?> 
      <!-- edit form column -->
      <div class="col-md-9 personal-info">

        <form action="update_finish.php" name="form1" method="Post" class="form-horizontal" role="form">
          
          <div class="form-group">
            <label class="col-lg-3 control-label"> Account Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="member_acc" value="<?php echo $member_id;?>" >
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Password:</label>
            <div class="col-lg-8">
              <input class="form-control" type="password" name="pw" value="<?php echo $member_pwd;?>">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Enter your password again:</label>
            <div class="col-lg-8">
              <input class="form-control" type="password" name="pw2" value="<?php echo $member_pwd;?>">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="name" value="<?php echo $member_name;?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Phone:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="phone" value="<?php echo $member_phone;?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email" value="<?php echo $member_email;?>">
            </div>
          </div>

          
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-lg-8">
              <input type="submit" class="btn btn-default" value="Submit" />
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>

<!--//換的內容-->
</div>
                </div>
            </div>
            <div id="push"></div>
        </div>
</div>
</body>
<br>

<?php
};
include("footer.php");
?>