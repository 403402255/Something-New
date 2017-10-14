<?php
include("header.php");
include("comp.html");
?>
<!-- breadcrumbs -->

<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
			<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			<li>比較頁面</li>
		</ol>
	</div>
</div>
<!--//breadcrumbs -->


<div class="cont_principal">
	<div class="cont_centrar">

		<div class="cont_todo_list_top">
			<div class="cont_titulo_cont">
				<h3>THINGS TO DO</h3>
			</div>
			<div class="cont_add_titulo_cont"><a href="#e" onclick="add_new()"><i class="material-icons">+</i></a>
			</div>
		</div>
		<div class="cont_crear_new">
			<table class="table">
				<tr>
					<th>Brand</th>
					<th>Type</th>
				</tr>
				<tr>
					<td><select name="" id="action_select">
						<option value="bid01">APPLE</option>
						<option value="bid02">ASUS</option>
						<option value="bid03">Acer</option>
					</td>

					<td>
						<select name="" class="input_description_title"  id="date_select">
							<option value="pid01">Macbook Air</option>
							<option value="pid02">Macbook Pro</option>
						</select>
					</td>
				</tr>

				<tr>
					<td colspan="3">
						<button class="btn_add_fin"  onclick="add_to_list()">ADD</button>
					</td>
				</tr>
			</table>
		</div>

		<div class="cont_princ_lists">
			<ul>
				<li class="list_shopping li_num_0_1">
					<div class="col_md_1_list">
						<p>SHOPPIGN</p>
					</div>
					<div class="col_md_2_list">
						<h4>BUY COFFEE BEANS</h4>
						<p>DODIDONE COFFEE STORE</p>
					</div>
					<div class="col_md_3_list">
						<div class="cont_text_date">
							<p>TODAY</p>      
						</div>    
						<div class="cont_btns_options">
							<ul>

								<li><a href="#" onclick="finish_action('0','0_1');"><i class="material-icons">X</i></a></li>
							</ul>    
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>