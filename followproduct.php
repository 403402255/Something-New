<?php
include("header.php");
?>
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
<!-- breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
			<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			<li>Following products</li>
		</ol>
	</div>
</div>
<!-- //breadcrumbs -->
<br>
<div class="container target">
    <div class="row">
        <div class="col-sm-10">
           <h1 class=""><font face="Antic">Sherlock Holmes</font></h1>
       </div>
       <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.rlsandbox.com/img/profile.jpg"></a>

       </div>
   </div>
</div>
<?php
    $datatable = "shoes";
    $results_per_page = 10;

    

    if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
    $start_from = ($page-1) * $results_per_page;
    $sql = " SELECT *  FROM ".$datatable." LIMIT $start_from, ".$results_per_page;
    $rs_result = $conn->query($sql); 
    ?>
    <?php 
        while($row = $rs_result->fetch_assoc()) {
    ?> 
<br>
    <div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                    <div class="row">
                        <div class="panel panel-default panel-horizontal">
                            <div class="panel-heading text-center" style="width:10em;">
                                <img src="<?echo $row["s_pic"];?>" alt="" class="img-responsive">
                                <hr/>
                                <span><h5>2 weeks</h5><span>
                            </div>
                            
                            <div class="panel-body">                

                        <div class="col-xs-12 col-md-12 section-box">
                            <h2><div class="email" style="padding-top: 20px;"><?echo $row["s_name"];?></div></h2>
                            <p>
                                OFFICIAL <a href="<?echo $row["s_site"];?>" target="_blank"><span class="glyphicon glyphicon-new-window">
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
<?php
include("footer.php");
?>