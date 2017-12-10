<?php session_start(); 
include("header.php");
?>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">


<!-- breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
     <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
        <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>首頁</a></li>
        <li><a href="user.php?">會員中心</a></li>
        <li class="active">修改會員資料</li>
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

        $sql = "SELECT * FROM membership where member_acc='$id'";
        $rs_result = $conn->query($sql); 
        while($row = $rs_result->fetch_assoc()) {
?> 
      <!-- edit form column -->
      <div class="col-md-9 personal-info">

        <form action="update_finish.php" name="form1" method="Post" class="form-horizontal" role="form">
          
          <div class="form-group">
            <label class="col-lg-3 control-label"> 帳號:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="account" value="<?php echo $row['member_acc'];?>" >
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">密碼:</label>
            <div class="col-lg-8">
              <input class="form-control" type="password" name="password" value="<?php echo $row['member_psw']?>">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">再輸入一次密碼:</label>
            <div class="col-lg-8">
              <input class="form-control" type="password" name="password" value="<?php echo $row['member_psw']?>">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">姓名:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="name" placeholder="<?php echo $row['member_name']?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">電話:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="phone" value="<?php echo $row['member_phone']?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email" value="<?php echo $row['member_email'];?>">
            </div>
          </div>

          
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-lg-8">
              <input type="submit" class="btn btn-default" name="button" value="修改"/>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
<?php
}
?>
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