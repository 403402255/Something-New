    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
<?php
include("header.php");
include("function.php");
if(isset($_REQUEST['brand_name']) && $_REQUEST['item']!="")
{
$name =$_REQUEST['brand_name'];
$item = $_REQUEST['item'];

}


$product_id = $_SERVER['QUERY_STRING'];
//session 寫入
$mname = $_SESSION['username'];
//session 寫入
$sql ="SELECT *
FROM brands
INNER JOIN laptop ON brands.brand_id = laptop.brand_id WHERE product_id =  ".$product_id;

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
				<li><a href="products.php?<?php echo $row["brand_id"] ;?>"></a><?php echo $row["brand_name"] ;?></li>
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
<?php
var_dump($_SESSION['laptop_compare']);
 ?>
					<a href="javascript:;" onclick="switchDisplay('chart');" class="glyphicon glyphicon-signal">網路聲量</a>
					<a href="add_compare.php?product_id=<?php echo $product_id;?>" class="glyphicon glyphicon-sort-by-attributes">加入比較</a>

					<div class="w3agile_description">
						<div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <p>產品資訊</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>處理器</td>
                                            <td><?php echo $row["l_processor"]; ?></td>
                                        </tr>
                                        <tr>
                                        	<td></td>
                                            <td>作業系統</td>
                                            <td><?php echo $row["l_os"]; ?></td>
                                        </tr>
                                        <tr>
                                        	<td></td>
                                            <td>記憶體</td>
                                            <td><?php echo $row["l_memory"]; ?></td>
                                        </tr>
                                        <tr>
                                        	<td></td>
                                            <td>顯示器</td>
                                            <td><?php echo $row["l_display"]; ?></td>
                                        </tr>
                                        <tr>
                                        	<td></td>
                                            <td>顯示晶片</td>
                                            <td><?php echo $row["l_graphic"]; ?></td>
                                        </tr>
                                        <tr>
                                        	<td></td>
                                            <td>資料儲存應用</td>
                                            <td><?php echo $row["l_storage"]; ?></td>
                                        </tr>
                                        <tr>
                                        	<td></td>
                                            <td>電池</td>
                                            <td><?php echo $row["l_battery"]; ?></td>
                                        </tr>
                                        <tr>
                                        	<td></td>
                                            <td>產品尺寸及重量</td>
                                            <td><?php echo $row["l_size"]; ?>/<?php echo $row["l_weight"]; ?></td>
                                        </tr>
                                        <tr>
                                        	<td></td>
                                            <td>介面</td>
                                            <td><?php echo $row["l_interface"]; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<span><?php echo $row["l_price"]; ?></span>
						</div>
						<br>
						<div class="snipcart-details agileinfo_single_right_details">
							
							<button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-default">新增評價</button></div>
							<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">關閉</span></button>
											<h3 class="modal-title" id="lineModalLabel">你的評價</h3>
										</div>
										
										<div class="modal-body">
											<form action="input.php" method="POST" >
												
												<div class="form-group">
													<label for="inputComment">評價星等</label>
														<?php include("rating.php");?>
													</div><br>
											
													<div class="form-group">
														<label for="inputComment">標題</label>
														<input name="c_title" type="text" value="" class="form-control"  placeholder="寫下你的評價...">
													</div><br>
													<div class="form-group">
														<label for="inputComment">評價</label>
														<input name="c_content" type="textarea" rows="7" cols="30" class="form-control" placeholder="寫下你的評價...">
													</div><br>
													<!--
													<div class="form-group">
														<label for="inputPicFile">Picture upload</label>
														<input type="file" name="c_pic">
														<p class="help-block"></p>
													</div><br>
													-->
													<input type="hidden" name="product_id" value="<?php echo $product_id?>">
													<?//session 寫入?>
													<input type="hidden" name="member_name" value="<?php echo $mname?>">
													<?//session 寫入?>
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
	}
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

<!-- review -->
<br>
<div class="clearfix"> </div>
<div class="container">		

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
							<div class="review-block-date"><?php echo $row["time"]?><br/></div>
						</div>
						<div class="col-sm-9">
							
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
};
?>			
<!-- //review -->

<?php
include("footer.php");
?>