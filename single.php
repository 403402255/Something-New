<script type="text/javascript">
	var strUrl = location.search;
	var getPara, ParaVal;
	var aryPara = [];

	if (strUrl.indexOf("?") != -1) {
		var getSearch = strUrl.split("?");
		getPara = getSearch[1].split("&");
		for (i = 0; i < getPara.length; i++) {
			ParaVal = getPara[i].split("=");
			aryPara.push(ParaVal[0]);
			aryPara[ParaVal[0]] = ParaVal[1];
		}
    //alert(aryPara);
}
</script>


<?php
include("header.php");
include("function.php");
if(isset($_REQUEST['brand_name']) !="")
{
    $name =$_REQUEST['brand_name'];

}

//$item = $_REQUEST['item'];
$product_id = $_SERVER['QUERY_STRING'];
$mname = $_SESSION['username'];
$GLOBALS['p_id']=$product_id;
$sql ="SELECT *
FROM brands
INNER JOIN products ON brands.brand_id = products.brand_id WHERE product_id =  ".$product_id;
//echo $sql;

$rs_result = $conn->query($sql); 
while($row = $rs_result->fetch_assoc()) {
	?>
	<link rel="stylesheet" href="sstyle.css" />
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
			<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>首頁</a></li>
			<li><a href="products.php?<?php echo $row['brand_id'] ;?>"><?php echo $row["brand_name"];?></a></li>
			<li class="active"><?php echo $row["p_name"]; ?></li>
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
				<img id="example" src="<?php echo $row["p_pic"]; ?>" alt=" " class="img-responsive">

			</div>
			<div class="col-md-8 agileinfo_single_right">
				<h2><?php echo $row["p_name"]; ?></h2>
					<span><i class="snipcart-details agileinfo_single_right_details">
						<form action="product_function.php" method="POST" >
							<input type="hidden" name="product_id" value="<?php echo $product_id?>">
							<?//session 寫入?>
							<input type="hidden" name="p_name" value="<?php echo $row["p_name"]?>">

							<input type="hidden" name="p_pic" value="<?php echo $row["p_pic"]?>">
							<?//session 寫入?>
							<input type="hidden" name="member_name" value="<?php echo $mname?>">
							<?//session 寫入?>
							<input type="hidden" name="p_site" value="<?php echo $row["p_site"]?>">


							<button type="submit" name="submit" class="btn btn-default"></i>加入收藏</span></button>
						</form>
						<form action="delete_product_function.php" method="POST" >
							<input type="hidden" name="product_id" value="<?php echo $product_id?>">
							<?//session 寫入?>
							<input type="hidden" name="product_id" value="<?php echo $product_id?>">
							<?//session 寫入?>
							<input type="hidden" name="member_name" value="<?php echo $mname?>">
							<?//session 寫入?>
							<button type="submit" name="submit3" class="btn btn-default">移除收藏</button>
						</form>
					

<a href="javascript:;" onclick="switchDisplay('chart');" class="glyphicon glyphicon-signal">網路聲量</a>

<div class="w3agile_description">
	<h4>產品型號：<?php echo $row["p_model"]; ?></h4>
</div>
<div class="snipcart-item block">
	<div class="snipcart-thumb agileinfo_single_right_snipcart">
		<span><?php echo $row["p_price"]; ?></span>
	</div>
	<br>

</div>
	<div class="snipcart-details agileinfo_single_right_details">

		<button data-toggle="modal" data-target="#bb" class="btn btn-default">新增你的評價</button></div>

		<div class="modal fade" id="bb" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">關閉</span></button>
						<h3 class="modal-title" id="lineModalLabel">你的評價</h3>
					</div>

					<div class="modal-body">
						<form action="input.php" method="POST" >
<!--
							<div class="form-group">
								<label for="inputComment">星等</label>
								<?php include("rating.php");?>
							</div><br>
-->
							<div class="form-group">
								<label for="inputComment">評價標題</label>
								<input name="c_title" type="text" value="" class="form-control"  placeholder="寫下你的評價...">
							</div><br>
							<div class="form-group">
								<label for="inputComment">評價內容</label>
								<input name="c_content" type="textarea" rows="7" cols="30" class="form-control" placeholder="寫下你的評價...">
							</div><br>
							<input type="hidden" name="product_id" value="<?php echo $product_id?>">
							<?//session 寫入?>
							<input type="hidden" name="member_name" value="<?php echo $mname?>">
							<?//session 寫入?>
							<button type="submit" name="submit2" class="btn btn-default">Submit</button>

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
<?php include ("chart.php");?>
<!--//chart-->
<?php
$datatable = "comment";
$results_per_page = 10;


if (isset($_GET["page"])) { 
	$page  = $_GET["page"]; 
} else { 
	$page=1; 
}; 
$start_from = ($page-1) * $results_per_page;
$sql = " SELECT *  FROM comment WHERE product_id =  ".$product_id." LIMIT $start_from, ".$results_per_page;
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
						<div class="review-block-name"><?php echo $row["member_name"]?></div>
						<div class="review-block-date"><?php echo $row["time"]?><br/>1 day ago</div>
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