<?php
include("header.php");
?>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">


<!-- breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
     <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
        <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
        <li>Edit Profile</li>
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
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="http://www.rlsandbox.com/img/profile.jpg" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="http://www.rlsandbox.com/img/profile.jpg" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="follow.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Following List</span></a></li>
                        <li><a href="giftshop.php"><i class="fa fa-gift" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Gift Shop</span></a></li>
                        <li><a href="game.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Daliy Game</span></a></li>
                        <li><a href="eduser"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">User</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                            </nav>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://www.rlsandbox.com/img/profile.jpg" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span>Sherlock Holmes</span>
                                                    <p class="text-muted small">
                                                        sh@mail.com
                                                    </p>
                                                    <div class="divider">
                                                    	<span>gift point: 40pt</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">
                    <h1>Hello, SH</h1>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12 gutter">
<!--換的內容--><div class="col-md-9 personal-info">

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

                <!--//換的內容-->
            </div>
        </div>
    </div>


</body>
<br>
<div class="clearfix"></div>
<!-- //user -->
<?php
include("footer.php");
?>