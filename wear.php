<?php
include("header.php");
include("function.php");
?>
<!--breadcrumbs-->
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
			<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			<li>Wears</li>
		</ol>
	</div>
</div>
<!--//breadcrumbs-->
<!--productsnav-->
<div class="products">
	<div class="container">
		<div class="col-md-4 products-left">
			<div class="categories">
				<h2>Categories</h2>
				<ul class="cate">
					<li><a href="#.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>BRANDS</a></li>
					<ul>
						<?php
						getbrands();//之後改依類別顯示
						?>
					</ul>
				</ul>
			</div>																			
		</div>
		<!--加filter function-->
		<div class="col-md-8 products-right">
			<div class="products-right-grid">
				<div class="products-right-grids">
					<div class="sorting">
						<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
							<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Default sorting</option>
							<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by popularity</option> 
							<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by average rating</option>
							<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by date</option>
						</select>
					</div>
					<div class="sorting-left">
						<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
							<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Item on page 9</option>
							<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Item on page 18</option>
						</select>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--加filter function-->

<!--//productsnav->
<!--products-->
	<?php
	$servername = "rds-mysql.cwougcernbij.ap-northeast-1.rds.amazonaws.com";
	$username = "User";
	$password = "12345678";
	$dbname = "project";
	$datatable = "outfits";//改table:(O+S+A)
	$results_per_page = 18;

	$conn = new mysqli($servername, $username, $password, $dbname);
	mysqli_query($conn, 'SET CHARACTER SET utf8');

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
	$start_from = ($page-1) * $results_per_page;
	$sql = " SELECT * FROM ".$datatable." LIMIT $start_from, ".$results_per_page;
	$rs_result = $conn->query($sql); 
	?>
	<?php 
		while($row = $rs_result->fetch_assoc()) {
	?> 
	<div class="agile_top_brands_grids">
    			<div class="col-md-4 top_brand_left">
    				<div class="hover14 column">
    					<div class="agile_top_brand_left_grid">
    						<div class="agile_top_brand_left_grid_pos">
    							<img src="images/offer.png" alt="" class="img-responsive">
    						</div>
    						<div class="agile_top_brand_left_grid1">
    							<figure>
    								<div class="snipcart-item block">
    									<div class="snipcart-thumb">
    										<a href="single.php"><img src=" <? echo $row["o_pic"]; ?>" alt="" class="img-responsive"></a>
    										<font face = "Noto Sans TC"><p><? echo $row["o_name"]; ?></p></f>
    											<h4><?php 
    											if($row["o_price"]==0){
    												echo $row["o_price"];
    												}else{
    												echo"請洽門市查詢";
    												} ;
    												?></h4>
    										</div>
    										<div class="snipcart-details top_brand_home_details">
    											<form action="#" method="post">
    												<fieldset>
    													<input type="hidden" name="cmd" value="_cart">
    													<input type="hidden" name="add" value="1">
    													<input type="hidden" name="business" value="">
    													<input type="hidden" name="item_name" value="$product_title">
    													<input type="hidden" name="amount" value="$product_price">
    													<input type="hidden" name="currency_code" value="NTD">
    													<input type="hidden" name="return" value="">
    													<input type="hidden" name="cancel_return" value="">
    													<input type="submit" name="SAVE" value="SAVE" class="button">
    												</fieldset>
    											</form>
    										</div>
    									</div>
    								</figure>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
<?php 
}; 
?>
</div>	
<!--//products-->
<!--pagination-->
<?php 
$sql = " SELECT COUNT(product_id) AS total FROM ".$datatable;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $results_per_page); 
//跟下面的合再一起
/*  
for ($i=1; $i<=$total_pages; $i++) {  
            echo "<a href='wear.php?page=".$i."'";
            if ($i==$page)  echo " class='curPage'";
            echo ">".$i."</a> "; 
}; 
*/; 
?>

<nav class="numbering">
	<ul class="pagination paging">
		<li>
			<a href="#" aria-label="Previous">
				<span aria-hidden="true">&laquo;</span>
			</a>
		</li>
		<li class="active"><a href="wear.php?page=1">1<span class="sr-only">(current)</span></a></li>
		<li><a href="wear.php?page=2">2</a></li>
		<li><a href="wear.php?page=3">3</a></li>
		<li><a href="wear.php?page=4">4</a></li>
		<li><a href="wear.php?page=5">5</a></li>
		<li>
			<a href="#" aria-label="Next">
				<span aria-hidden="true">&raquo;</span>
			</a>
		</li>
	</ul>
</nav>
<div class="clearfix"> </div>
</div>
</div>
<!--//pagination-->
<?php
include("footer.php");
?>