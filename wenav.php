<!--//wproductsnav-->
<div class="products">
	<div class="container">
		<div class="col-md-4 products-left">
			<div class="categories">
				<h2>Categories</h2>
				<ul class="cate">
					<li><a href="news.php?&brand_name=<?echo $name?>&brand_id=<?echo $filter?>"><i class="fa fa-arrow-right" aria-hidden="true"></i>News</a></li>
					<li><a href="accessories.php?&brand_name=<?echo $name?>&brand_id=<?echo $filter?>"><i class='fa fa-arrow-right' aria-hidden='true'></i>Accessories</a></li>
					<ul>
						<li><a href="accessories.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Mens</a></li>
						<li><a href="accessories.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Womens</a></li>
						<li><a href="accessories.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Kids</a></li>
						<li><a href="accessories.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Others</a> </li>

					</ul>
					<li><a href="outfits.php?outfits&brand_name=<?echo $name?>&brand_id=<?echo $filter?>"><i class='fa fa-arrow-right' aria-hidden='true'></i>Outfits</a></li>
					<ul>
						<li><a href="outfits.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Mens Wears</a> </li>
						<li><a href="outfits.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Womens Wears</a> </li>
						<li><a href="outfits.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Kids Wears</a> </li>
						<li><a href="outfits.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Others</a> </li>

					</ul>
					<li><a href="shoes.php?shoes&brand_name=<?echo $name?>&brand_id=<?echo $filter?>"><i class='fa fa-arrow-right' aria-hidden='true'></i>Shoes</a></li>
					<ul>
						<li><a href="shoes.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Mens Shoes</a> </li>
						<li><a href="shoes.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Womens Shoes</a> </li>
						<li><a href="shoes.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Kids Shoes</a> </li>
						<li><a href="shoes.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Others</a> </li>
					</ul>
				</ul>
			</div>																			
		</div>
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

<!--//wproductsnav-->