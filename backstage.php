<?php
include("header.php");
?>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<style>
.grafico {
  min-width: 310px;
  max-width: 400px;
  height: 280px;
  margin: 0 auto
}

.main-header {
    font-size: x-large;
    color : #888;
    font-family: Verdana;
    margin-bottom: 20px;
}

.destaque {
    color: #f88;
    font-weight: bolder;
}

.highcharts-tooltip h3 {
    margin: 0.3em 0;
}
</style>
<!-- breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
     <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
        <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>首頁</a></li>
        <li>管理中心</li>
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
<div class="clearfix"></div>
<br>

<body>
<div class="container">
  <div class="row">
<!--第一橫排-->

  <div class="col-md-3">
      
      <div class="panel panel-info">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-code-fork fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <font color="999999" size="0.2"><p>上次更新時間：11/29</p></font>
                <p class="announcement-text">爬蟲更新</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  <a href="temp.php">查看</a>
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
        
  </div>
  
  
  

  <div class="col-md-3">
      
      <div class="panel panel-danger">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-address-book fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <br>
                <p class="announcement-text">管理帳號</p>
              </div>
            </div>
          </div>
          <a href="manager.php">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  查看
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>     
  </div>  

  <div class="col-md-3">
      
      <div class="panel panel-warning">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-line-chart fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <font color="999999" size="0.2"><p>上次匯出時間：11-30</p></font>

                <p class="announcement-text">聲量分析</p>
              </div>
            </div>
          </div>
          <a href="b/html/index.php">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  <a href="b/html/index.php">查看</a>
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
        
  </div>    

  <div class="col-md-3">
      
      <div class="panel panel-success">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-object-ungroup fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <br>
                <p class="announcement-text">關鍵字處理<i class=""></i></p>
              </div>
            </div>
          </div>
          <a href="b/html/index.php">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  查看
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
        
  </div>      
</div>
</div>
</body>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br>
<div class="clearfix"></div>
<!-- //user -->
<?php
include("footer.php");
?>