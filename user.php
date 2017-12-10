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
    <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>首頁</a></li>
    <li>會員中心</li>
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
<!-- usernav -->
                <?php include("unav.php");?>
<!--//usernav -->
                    <div class="user-dashboard">
                        <h1>Hello, <?php echo $_SESSION['username'];?></h1>
                        <div class="row">
                            <div class="col-md-5 col-sm-5 col-xs-12 gutter">
                                <div class="sales report">
                                    <h2>Following brands:</h2><br><br>

                                    <?php
                                    $datatable = "follow_shop";
                                    $results_per_page = 5;
                                    $username = $_SESSION['username'];
                                    if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
                                    $start_from = ($page-1) * $results_per_page;
                                    $sql = " SELECT DISTINCT*  FROM ".$datatable." WHERE member_name = '$username' LIMIT $start_from, ".$results_per_page;
                                    $rs_result = $conn->query($sql); 
                                    ?>
                                    <?php 
                                    while($row = $rs_result->fetch_assoc()) {
                                        ?> 
                                        <div class="panel panel-default panel-horizontal">
                                            <div class="panel-heading text-center" style="width:10em;">
                                                <img src="<?php if ($_SESSION['username']== $row['member_name']) echo $row["brand_pic"];?>" alt="" class="img-responsive">
                                                <hr/>
                                                <span><h5><?php if ($_SESSION['username']== $row['member_name'])echo $row["brand_id"];?></h5><span>
                                                </div>

                                                <div class="panel-body">                

                                                    <div class="col-xs-12 col-md-12 section-box">
                                                        <h2><div class="" style="padding-top: 20px;"><?php if ($_SESSION['username']== $row['member_name'])echo $row["brand_name"];?></div></h2>
                                                        <br><p>OFFICIAL <a href="<?php echo $row["brand_link"];?>" target="_blank"><span class="glyphicon glyphicon-new-window">
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
                                    <h2>Following news
                                    :</h2><br><br>
                                    <?php
                                    $datatable = "follow_news";
                                    $results_per_page = 10;
                                    $username = $_SESSION['username'];
                                    if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
                                    $start_from = ($page-1) * $results_per_page;
                                    $sql = " SELECT DISTINCT*  FROM ".$datatable." WHERE member_name = '$username' LIMIT $start_from, ".$results_per_page;
                                    $rs_result = $conn->query($sql); 
                                    while($row = $rs_result->fetch_assoc()) {
                                        ?> 
                                        <div class="panel panel-default panel-horizontal">
                                          <div class="panel-heading text-center" style="width:10em;">
                                            <img src="<?php if ($_SESSION['username']== $row['member_name']) echo $row["news_pic"];?>" alt="" class="img-responsive">
                                            <hr/>
                                            <span><h5><?php if ($_SESSION['username']== $row['member_name'])echo $row["news_id"];?></h5><span>
                                            </div>

                                            <div class="panel-body">                

                                                <div class="col-xs-12 col-md-12 section-box">
                                                    <h2><div class="" style="padding-top: 10px;"><?php if ($_SESSION['username']== $row['member_name']) echo $row["news_title"];?></div></h2>

                                                    <h2><div class="" style="padding-top: 10px;"><?php if ($_SESSION['username']== $row['member_name']) echo $row["news_context"];?></div></h2>

                                                    <br><p>OFFICIAL <a href="<?php if ($_SESSION['username']== $row['member_name']) echo $row["news_site"];?>" target="_blank"><span class="glyphicon glyphicon-new-window">
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
                        </div>
                    </div>
                </div>
                <!--//換的內容-->
            </div>
            <div id="push"></div>
        </div>
</div>
</body>
<br>
<!-- //user -->
<?php
include("footer.php");
?>