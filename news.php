<?php
include("header.php");
?>

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li>New Balance - News</li>
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
                    <h1 class=""><font face="Antic">New Balance</font></h1><br>
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
                <div class="col-sm-2">
                <div class="pull-right"><img title="profile image" class="img-responsive" src="images/newbalance.png"></div>
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
<?php

    $datatable = "news";
    $results_per_page = 9;

    
    if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
    $start_from = ($page-1) * $results_per_page;
    $sql = " SELECT *  FROM ".$datatable." LIMIT $start_from, ".$results_per_page;
    $rs_result = $conn->query($sql); 
    ?>
    <?php 
        while($row = $rs_result->fetch_assoc()) {
    ?> 

<!--news-->
<div class="container">
	<div class="col-md-8 top_brand_left">
		<div class="well">
		<div class="media">
			<a class="pull-left" href="#">
				<img class="img-responsive" width="100px" height="100px" src="<?echo $row["news_pic"];?>">
			</a>
			<div class="media-body">
				<h4 class="media-heading"><? echo $row["news_title"]; ?></h4>
				<span><i class="glyphicon glyphicon-time"></i><? echo $row["news_date"]; ?></span>
				<p><? echo $row["news_context"]; ?></p>
				<ul class="list-inline list-unstyled">
					<li></li>
					<span><i class="glyphicon glyphicon-eye-open"></i> viewed </span>
					<li></li>
					<span><i class="glyphicon glyphicon-heart-empty"></i> liked </span>
				</ul>
			</div>
		</div>

	</div>

</div>

</div>
		<?php 
}; 
?>	
<!--//news-->
			
			
				
				<nav class="numbering">
					<ul class="pagination paging">
						<li>
							<a href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
							<a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

<?php
include("footer.php");
?>