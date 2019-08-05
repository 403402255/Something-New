<?php include("config.php"); ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- Animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
                <div class="top-left-part"><a class="logo" href="index.html"><b></b><span class="hidden-xs"></span></a></div>
                
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li style="padding: 10px 0 0;">
                        <a href="index.php" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="supplierman.php" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">合作廠商管理</span></a>
                    </li>
                    <li>
                    <div class="modal-overlay"></div>
                    <a href="#" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i><span class="hide-menu">輸出/寄送報表</span></a>
                </li>

                <li>
                    <a href="404.html" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i><span class="hide-menu">系統設定</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Left navbar-header end -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">合作廠商管理</h4> </div>
                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">合作廠商管理</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">合作廠商列表</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>廠商編號</th>
                                        <th>廠商名稱</th>
                                        <th>最近一次寄送報表</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$sql ="SELECT * FROM brands";
$rs_result = $conn->query($sql); 
while($row = $rs_result->fetch_assoc()) {
    ?>
                                    <tr>
                                        <td><?php echo $row["brand_id"];?></td>
                                        <td><?php echo $row["brand_name"];?></td>
                                        <td><?php echo $row["last_update_time"];?></td>
                                        <td><div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">寄送</a></td>
                                    </tr>
                                        <?php };?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.container-fluid -->
                                <footer class="footer text-center"> 2017 &copy;SOMETHING NEW </footer>
                            </div>
                            <!-- /#page-wrapper -->
                        </div>
                        <!-- /#wrapper -->
                        <!-- jQuery -->
                        <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
                        <!-- Bootstrap Core JavaScript -->
                        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
                        <!-- Menu Plugin JavaScript -->
                        <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
                        <!--slimscroll JavaScript -->
                        <script src="js/jquery.slimscroll.js"></script>
                        <!--Wave Effects -->
                        <script src="js/waves.js"></script>
                        <!-- Custom Theme JavaScript -->
                        <script src="js/custom.min.js"></script>
                        <script>
                            $(document).on('ready', function(){
    $modal = $('.modal-frame');
    $overlay = $('.modal-overlay');

    /* Need this to clear out the keyframe classes so they dont clash with each other between ener/leave. Cheers. */
    $modal.bind('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e){
      if($modal.hasClass('state-leave')) {
        $modal.removeClass('state-leave');
      }
    });

    $('.close').on('click', function(){
      $overlay.removeClass('state-show');
      $modal.removeClass('state-appear').addClass('state-leave');
    });

    $('.open').on('click', function(){
      $overlay.addClass('state-show');
      $modal.removeClass('state-leave').addClass('state-appear');
    });

  });
                        </script>
                    </body>

                    </html>
