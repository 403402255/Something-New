<?php
include("header.php");
include("function.php");
?>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
<?php 
$mname = $_SESSION['username'];
$bsql = " SELECT *  FROM brands WHERE brand_id= ".$bid;
$rs_result = $conn->query($bsql); 
while($brow = $rs_result->fetch_assoc()) {
    ?>
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
      <div class="container">
       <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
        <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
        <li><?php echo $brow["brand_name"];?>- 新聞</li>
    </ol>
</div>
</div>
<!-- //breadcrumbs -->
<!--brand-->
<br>
<div class="container">
    <div class="col-lg-6 col-sm-6">
        <div class="container target">
            <div class="row">
                <div class="col-sm-10">
                    <h1 class=""><font face="Antic"><?php echo $brow["brand_name"];?></font></h1><br>
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group" role="group">
                            <button type="button" id="stars" class="btn btn-default" href="#tab1">
                                <div class="hidden-xs">228</div>
                                <div class="hidden-xs">產品數</div>
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" id="stars" class="btn btn-default" href="#tab1" data-toggle="tab">
                                <div class="hidden-xs">3242</div>
                                <div class="hidden-xs">追蹤人數</div>
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" id="stars" class="btn btn-default" href="#tab1" data-toggle="tab">
                                <div class="hidden-xs">227</div>
                                <div class="hidden-xs">正在追蹤</div>
                            </button>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</div>
<!-- productsnav -->
<?php
}
include("wenav.php");
?>
<!--//productsnav -->	


<!--news-->
<div class="container">
	<div class="col-md-8 top_brand_left">
		<div class="well">
          <div class="media">
            <?php
            $results_per_page = 10;

            if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
            $start_from = ($page-1) * $results_per_page;
            $mname = $_SESSION['username'];
            $sql = " SELECT *  FROM news WHERE brand_id =".$bid ." LIMIT 0,18";
            $rs_result = $conn->query($sql); 
            while($row = $rs_result->fetch_assoc()) {
                ?> 
                <a class="pull-left" href="#">
                    <img width="300" height="240" src="<?php echo $row["news_pic"];?>">
                </a>
                <div class="media-body">
                    <h4 class="media-heading"><?php echo $row["news_title"]; ?></h4>
                    <span><i class="glyphicon glyphicon-time"></i><?php echo $row["news_date"]; ?></span>
                    <p><?php echo $row["news_context"]; ?></p>
                    <ul class="list-inline list-unstyled">
                     <li></li>
                     <span><i class="glyphicon glyphicon-eye-open"></i> viewed </span>
                     <span><i class="snipcart-details agileinfo_single_right_details">
                        <div class="modal-body">
                            <form action="news_function.php" method="POST" >
                                <div class="form-group">
                                    <input type="hidden" name="news_id" value="<?php echo $row["news_id"]?>">
                                    <input type="hidden" name="member_name" value="<?php echo $mname?>">
                                    <?//session 寫入?>
                                    <input type="hidden" name="news_title" value="<?php echo $row["news_title"]?>">
                                    <?//session 寫入?>
                                    <input type="hidden" name="news_context" value="<?php echo $row["news_context"]?>">
                                    <?//session 寫入?>
                                    <input type="hidden" name="news_pic" value="<?php echo $row["news_pic"]?>">
                                    <input type="hidden" name="news_site" value="<?php echo $row["news_site"]?>">
                                    <button type="submit" name="submit" class="btn btn-default"></i>加入收藏</span></button>  
                                </form>
                            </div>                 
                        </span>  
                        <span><a href ="<?php echo $row["news_site"];?>"><i class="glyphicon glyphicon-plus"></i> see more </a></span>

                    </ul>
                </div>
                <div class="clearfix"> </div>
                <br>
                <?php 
            }; 
            ?>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<!--//news-->


<?php
include("footer.php");
?>