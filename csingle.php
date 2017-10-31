<?php
include("header.php");
include("function.php");


$name =$_REQUEST['brand_name'];
$item = $_REQUEST['item'];
$product_id = $_REQUEST['product_id'];
$sql = " SELECT *  FROM laptop WHERE product_id =  ".$product_id;

$rs_result = $conn->query($sql); 
while($row = $rs_result->fetch_assoc()) {
	?>
<script>
function switchDisplay(item) {
    var TargetArea = document.getElementById(item);
    TargetArea.style.display = (TargetArea.style.display == 'block'?'none':'block');    
}
</script>
<style>
	.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}

.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
</style>
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li><a href="products.php?<?php echo $name ;?>">Apple</a></li>
				<li class="active"><?php echo $row["l_name"]; ?></li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<link href="modal.css" rel="stylesheet"> 
<script src="modal.js"></script>
	<div class="products">
		<div class="container">
			<div class="agileinfo_single">
				
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="<?php echo $row["l_pic"]; ?>" alt=" " class="img-responsive">
					
				</div>
				<div class="col-md-8 agileinfo_single_right">
					<h2><?php echo $row["l_name"]; ?>	
						<div class="popup" onclick="myFunc()"><div class="glyphicon glyphicon-plus-sign"></div>
  						<span class="popuptext" id="myPopup"><h4>Added to your save list!</h4></span>
				</div>
			</h2>
<script>
	//popups
function myFunc() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>
					<a href="javascript:;" onclick="switchDisplay('chart');" class="glyphicon glyphicon-signal">網路聲量</a>
					<a href="compare.php" class="glyphicon glyphicon-sort-by-attributes">加入比較</a>
					<div class="w3agile_description">
						<h4>Description :</h4>
					<br>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<span><?php echo $row["l_price"]; ?></span>
						</div>
						<br>
						<div class="snipcart-details agileinfo_single_right_details">
							
							<button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-default">Add Your Review</button></div>
							<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
											<h3 class="modal-title" id="lineModalLabel">Your comment</h3>
										</div>
										
										<div class="modal-body">
											<form action="input.php" method="POST" >

												<div class="form-group">
														<label for="inputComment">Your Name</label>
														<input name="member_name" type="text" value="" class="form-control"  placeholder="Write your name...">
													</div><br>

													<div class="form-group">
														<label for="inputComment">Title</label>
														<input name="c_title" type="text" value="" class="form-control"  placeholder="Write SOMETHING NEW...">
													</div><br>
													<div class="form-group">
														<label for="inputComment">Comment</label>
														<input name="c_content" type="textarea" rows="7" cols="30" class="form-control" placeholder="Write SOMETHING NEW...">
													</div><br>
													<!--
													<div class="form-group">
														<label for="inputPicFile">Picture upload</label>
														<input type="file" name="c_pic">
														<p class="help-block"></p>
													</div><br>
													-->
													<button type="submit" name="submit" class="btn btn-default">Submit</button>
												</form>
												
											
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<?php 
	//}
	; 
	?>
	<hr/>
	
<div id="chart" style="display: none">
<div class="container">		
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-4">
<!--chart-->
<br><script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "網路聲量"
	},
	axisX:{
		valueFormatString: "DD MMM",
		crosshair: {
			enabled: true,
			snapToDataPoint: true
		}
	},
	axisY: {
		title: "聲量統計",
		crosshair: {
			enabled: true
		}
	},
	toolTip:{
		shared:true
	},  
	legend:{
		cursor:"pointer",
		verticalAlign: "bottom",
		horizontalAlign: "left",
		dockInsidePlotArea: true,
		itemclick: toogleDataSeries
	},
	data: [{
		type: "line",
		showInLegend: true,
		name: "聲量",
		markerType: "square",
		xValueFormatString: "MMM, YYYY",
		color: "#011936",
		dataPoints: [
			{ x: new Date(2016, 10), y: 943 },
			{ x: new Date(2016, 11), y: 970 },
			{ x: new Date(2016, 12), y: 869 },
			{ x: new Date(2017, 1), y: 650 },
			{ x: new Date(2017, 2), y: 700 },
			{ x: new Date(2017, 3), y: 710 },
			{ x: new Date(2017, 4), y: 658 },
			{ x: new Date(2017, 5), y: 734 },
			{ x: new Date(2017, 6), y: 963 },
			{ x: new Date(2017, 7), y: 847 },
			{ x: new Date(2017, 8), y: 853 },
			{ x: new Date(2017, 9), y: 869 },
			

		]
	},
	{
		type: "line",
		showInLegend: true,
		name: "Unique Visit",
		lineDashType: "dash",
		color: "#9DD1F1",
		dataPoints: [
			{ x: new Date(2016, 10), y: 673 },
			{ x: new Date(2016, 11), y: 660 },
			{ x: new Date(2016, 12), y: 562 },
			{ x: new Date(2017, 1), y: 510 },
			{ x: new Date(2017, 2), y: 560 },
			{ x: new Date(2017, 3), y: 540 },
			{ x: new Date(2017, 4), y: 558 },
			{ x: new Date(2017, 5), y: 544 },
			{ x: new Date(2017, 6), y: 693 },
			{ x: new Date(2017, 7), y: 657 },
			{ x: new Date(2017, 8), y: 663 },
			{ x: new Date(2017, 9), y: 639 },
		]
	}]
});
chart.render();

function toogleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	} else{
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>
<div id="chartContainer" style="height: 450px; width: 300%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>
</div>
<hr/>
</div>
</div>
<!--//chart-->

<!-- review -->
<br>
<div class="clearfix"> </div>
<div class="container">		
	<div class="row">
		<div class="col-sm-3">
		</div>
		<div class="col-sm-4">
			<div class="rating-block">
				<h4>Average user rating</h4>
				<h1 class="bold padding-bottom-7">4.3 <small>/ 5</small></h1>
				<br>
			</div>
		</div>
		<div class="col-sm-4">
			<h4>Rating breakdown</h4>
			<div class="pull-left">
				<div class="pull-left" style="width:35px; line-height:1;">
					<div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
				</div>
				<div class="pull-left" style="width:180px;">
					<div class="progress" style="height:9px; margin:8px 0;">
						<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 100%">
							<span class="sr-only">80% Complete (danger)</span>
						</div>
					</div>
				</div>
				<div class="pull-right" style="margin-left:10px;">10</div>
			</div>
			<div class="pull-left">
				<div class="pull-left" style="width:35px; line-height:1;">
					<div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
				</div>
				<div class="pull-left" style="width:180px;">
					<div class="progress" style="height:9px; margin:8px 0;">
						<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
							<span class="sr-only">80% Complete (danger)</span>
						</div>
					</div>
				</div>
				<div class="pull-right" style="margin-left:10px;">8</div>
			</div>
			<div class="pull-left">
				<div class="pull-left" style="width:35px; line-height:1;">
					<div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
				</div>
				<div class="pull-left" style="width:180px;">
					<div class="progress" style="height:9px; margin:8px 0;">
						<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
							<span class="sr-only">80% Complete (danger)</span>
						</div>
					</div>
				</div>
				<div class="pull-right" style="margin-left:10px;">6</div>
			</div>
			<div class="pull-left">
				<div class="pull-left" style="width:35px; line-height:1;">
					<div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
				</div>
				<div class="pull-left" style="width:180px;">
					<div class="progress" style="height:9px; margin:8px 0;">
						<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
							<span class="sr-only">80% Complete (danger)</span>
						</div>
					</div>
				</div>
				<div class="pull-right" style="margin-left:10px;">4</div>
			</div>
			<div class="pull-left">
				<div class="pull-left" style="width:35px; line-height:1;">
					<div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
				</div>
				<div class="pull-left" style="width:180px;">
					<div class="progress" style="height:9px; margin:8px 0;">
						<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
							<span class="sr-only">80% Complete (danger)</span>
						</div>
					</div>
				</div>
				<div class="pull-right" style="margin-left:10px;">2</div>
			</div>
		</div>			
	</div>
</div>
	<?php
	$datatable = "comment";
	$results_per_page = 6;


	if (isset($_GET["page"])) { 
		$page  = $_GET["page"]; 
	} else { 
		$page=1; 
	}; 
	$start_from = ($page-1) * $results_per_page;
	$sql = " SELECT *  FROM ".$datatable." LIMIT $start_from, ".$results_per_page;
	$rs_result = $conn->query($sql); 

	while($row = $rs_result->fetch_assoc()) {
		?> 
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				
				<div class="review-block">
					<div class="row">
						<div class="col-sm-3">
							<img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
							<div class="review-block-name"><?php echo $row["member_id"]?></div>
							<div class="review-block-date">January 29, 2016<br/>1 day ago</div>
						</div>
						<div class="col-sm-9">
							<div class="review-block-rate">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
							</div>
							<div class="review-block-title"><?php echo $row["c_title"]?></div>
							<div class="review-block-description"><?php echo $row["c_content"]?></div>
						</div>
					</div>
				</div>
				<hr/>
			</div>
		</div>
	</div>
	<br>
	<?php
}
};
?>			
<!-- //review -->

<?php
include("footer.php");
?>