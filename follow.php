<?php
include("header.php");
?>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<style>
    body{ margin-top:20px;}
.glyphicon { margin-right:5px;}
.section-box h2 { margin-top:0px;}
.section-box h2 a { font-size:15px; }
.glyphicon-heart { color:#e74c3c;}
.glyphicon-comment { color:#27ae60;}
.separator { padding-right:5px;padding-left:5px; }
.section-box hr {margin-top: 0;margin-bottom: 5px;border: 0;border-top: 1px solid rgb(199, 199, 199);}

.panel.panel-horizontal {
    display:table;
    width:100%;
}
.panel.panel-horizontal > .panel-heading, .panel.panel-horizontal > .panel-body, .panel.panel-horizontal > .panel-footer {
    display:table-cell;
}
.panel.panel-horizontal > .panel-heading, .panel.panel-horizontal > .panel-footer {
    width: 25%;
    border:0;
    vertical-align: middle;
}
.panel.panel-horizontal > .panel-heading {
    border-right: 1px solid #ddd;
    border-top-right-radius: 0;
    border-bottom-left-radius: 4px;
    
}
.panel.panel-horizontal > .panel-footer {
    border-left: 1px solid #ddd;
    border-top-left-radius: 0;
    border-bottom-right-radius: 4px;
}

.email {
    font-size: 1em;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
</style>

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
                        <li ><a href="user.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li class="active"><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Following List</span></a></li>
                        <li><a href="giftshop.php"><i class="fa fa-gift" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Gift Shop</span></a></li>
                        <li><a href="game.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Daliy Game</span></a></li>
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">User</span></a></li>
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
                                                        <p class="text-muted small">sh@mail.com</p>
                                                        <div class="divider">
                                                        <p class="text-muted middle">point:145 pt</p>   
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
                                <div class="sales">
                                    <h2>Following brands:</h2><br><br>

                                        <?php
                                        $datatable = "brands";
                                        $results_per_page = 5;
                                        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
                                        $start_from = ($page-1) * $results_per_page;
                                        $sql = " SELECT *  FROM ".$datatable." LIMIT $start_from, ".$results_per_page;
                                        $rs_result = $conn->query($sql); 
                                        ?>
                                        <?php 
                                        while($row = $rs_result->fetch_assoc()) {
                                            ?> 
                                            <div class="panel panel-default panel-horizontal">
                                                <div class="panel-heading text-center" style="width:10em;">
                                                    <img src="<?echo $row["brand_pic"];?>" alt="" class="img-responsive">
                                                    <hr/>
                                                    <span><h5>2 weeks</h5><span>
                                                    </div>

                                                    <div class="panel-body">                

                                                        <div class="col-xs-12 col-md-12 section-box">
                                                            <h2><div class="" style="padding-top: 20px;"><?echo $row["brand_name"];?></div></h2>
                                                            <p>
                                                                OFFICIAL <a href="<?echo $row["brand_site"];?>" target="_blank"><span class="glyphicon glyphicon-new-window">
                                                                </span></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                            </div> 
<?php 
}; 
?> 
                                        </div>
                                    </div>

                        <div class="col-md-7 col-sm-7 col-xs-12 gutter">

                            <div class="sales report">
                                <h2>Following products:</h2><br><br>
                                        <?php
                                        $datatable = "shoes";
                                        $results_per_page = 5;
                                        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
                                        $start_from = ($page-1) * $results_per_page;
                                        $sql = " SELECT *  FROM ".$datatable." LIMIT $start_from, ".$results_per_page;
                                        $rs_result = $conn->query($sql); 
                                        ?>
                                        <?php 
                                        while($row = $rs_result->fetch_assoc()) {
                                            ?> 
                                            <div class="panel panel-default panel-horizontal">
                                                <div class="panel-heading text-center" style="width:10em;">
                                                    <img src="<?echo $row["s_pic"];?>" alt="" class="img-responsive">
                                                    <hr/>
                                                    <span><h5>2 weeks</h5><span>
                                                    </div>

                                                    <div class="panel-body">                

                                                        <div class="col-xs-12 col-md-12 section-box">
                                                            <h2><div class="" style="padding-top: 20px;"><?echo $row["s_name"];?></div></h2>
                                                            <br><p>OFFICIAL <a href="<?echo $row["s_site"];?>" target="_blank"><span class="glyphicon glyphicon-new-window">
                                                                </span></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                            </div> 
<?php 
}; 
?> 
                        </div>
</div>


                <!--//換的內容-->
            </div>
        </div>
    </div>
</div></div>

</body>
<br>
<div class="clearfix"></div>
<!-- //user -->
<?php
include("footer.php");
?>