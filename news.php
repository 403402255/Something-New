<?php
include("header.php");
include("function.php");
?>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li>Converse - News</li>
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
                    <h1 class=""><font face="Antic">Converse</font></h1><br>
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group" role="group">
                            <button type="button" id="stars" class="btn btn-default" href="#tab1">
                                <div class="hidden-xs">228</div>
                                <div class="hidden-xs">Products</div>
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" id="stars" class="btn btn-default" href="#tab1" data-toggle="tab">
                                <div class="hidden-xs">3242</div>
                                <div class="hidden-xs">Followers</div>
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" id="stars" class="btn btn-default" href="#tab1" data-toggle="tab">
                                <div class="hidden-xs">227</div>
                                <div class="hidden-xs">Following</div>
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
include("wenav.php");
?>
<!--//productsnav -->	


<!--news-->
<div class="container">
	<div class="col-md-8 top_brand_left">
		<div class="well">
		<div class="media">
<?php
    $datatable = "news";
    $results_per_page = 10;
    $item = $_REQUEST['item'];

    if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
    $start_from = ($page-1) * $results_per_page;
    
    $sql = " SELECT *  FROM news WHERE brand_id =12 LIMIT 0,18";
    $rs_result = $conn->query($sql); 
        while($row = $rs_result->fetch_assoc()) {
    ?> 
			<a class="pull-left" href="#">
				<img class="img-responsive"  src="<?php echo $row["news_pic"];?>">
			</a>
			<div class="media-body">
				<h4 class="media-heading"><?php echo $row["news_title"]; ?></h4>
				<span><i class="glyphicon glyphicon-time"></i><?php echo $row["news_date"]; ?></span>
				<p><?php echo $row["news_context"]; ?></p>
				<ul class="list-inline list-unstyled">
					<li></li>
					<span><i class="glyphicon glyphicon-eye-open"></i> viewed </span>
					<li></li>
					<span><i class="glyphicon glyphicon-heart-empty"></i> liked </span>
					<li></li>
					<span><a href ="<?php echo $row["news_site"];?>"><i class="glyphicon glyphicon-plus"></i> see more </a></span>

				</ul>
			</div>
                    <?php 
}; 
?>
		</div>
        </div>
        </div>
        </div>
	



			
<!--//news-->


<?php
include("footer.php");
?>