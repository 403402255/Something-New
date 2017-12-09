<style>
	body{ margin-top:20px;}
	.glyphicon { margin-right:5px;}
	.section-box h2 { margin-top:0px;}
	.section-box h2 a { font-size:15px; }
	.glyphicon-heart { color:#e74c3c;}
	.glyphicon-comment { color:#27ae60;}
	.separator { padding-right:5px;padding-left:5px; }
	.section-box hr {margin-top: 0;margin-bottom: 5px;border: 0;border-top: 1px solid rgb(199, 199, 199);}

	.panel.panel-horizontal {
		display:table;
		width:100%;
	}
	.panel.panel-horizontal > .panel-heading, .panel.panel-horizontal > .panel-body, .panel.panel-horizontal > .panel-footer {
		display:table-cell;
	}
	.panel.panel-horizontal > .panel-heading, .panel.panel-horizontal > .panel-footer {
		width: 25%;
		border:0;
		vertical-align: middle;
	}
	.panel.panel-horizontal > .panel-heading {
		border-right: 1px solid #ddd;
		border-top-right-radius: 0;
		border-bottom-left-radius: 4px;

	}
	.panel.panel-horizontal > .panel-footer {
		border-left: 1px solid #ddd;
		border-top-left-radius: 0;
		border-bottom-right-radius: 4px;
	}

	.email {
		font-size: 1em;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}
</style>

<?php
$datatable = "brands";

$sql = " SELECT *  FROM ".$datatable;
$rs_result = $conn->query($sql); 
while($row = $rs_result->fetch_assoc()) {
	?>
	<br>
	<div class="container">
		<div class="col-md-6 col-md-6">
			<div class="row">
				<div class="col-md-12 col-md-12">
					<div class="row">

						<div class="panel panel-default panel-horizontal">
							<div class="panel-heading text-center" style="width:10em;">
								<img src="<?echo $row["brand_pic"];?>" alt="" height ="100" width ="100">
								<hr/>
								<span><h5>2 weeks</h5><span>
								</div>

								<div class="panel-body">                

									<div class="col-xs-12 col-md-12 section-box">
										<h2><div class="email" style="padding-top: 20px;"><?echo $row["brand_name"];?></div></h2>
										<p>
											OFFICIAL <a href="<?echo $row["brand_site"];?>" target="_blank"><span class="glyphicon glyphicon-new-window">
										</span></a>
									</p>

									<hr />
									<div class="row rating-desc">
										<div class="col-md-12">
											<span class="glyphicon glyphicon-bell"></span>100 Followers<span class="separator">|</span>
										</div>
									</div>
								</div>

							</div>                            
							<script>
								function myFunction()
								{
									var elem = document.getElementById("follow");
									if (elem.value=="Following") elem.value = "+Follow";
									else elem.value = "Following";
								}

							</script>
							<input id="follow" type="button" onclick="myFunction()" value="Following"></input>
						</div>
					</div>
					<!--/div-->
				</div>
			</div>
		</div>
	</div>
	<?php 
}; 
?>	
