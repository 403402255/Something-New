<?php
include("header.php");
include("function.php");
if(isset($_REQUEST['brand_name']) && $_REQUEST['product_id']!="")
{
    $name =$_REQUEST['brand_name'];
$product =$_REQUEST['product_id']; 

}


$mname = $_SESSION['username'];
$bsql =  "SELECT *  FROM  brands  WHERE brand_id=".$bid ;
$updatetime =  "SELECT *  FROM  crawler_updatetime  WHERE brand_id=".$bid ;
$GLOBALS['id']=$bid;

$GLOBALS['product_id']= $product_id;

$update_result = $conn->query($updatetime); 
$max=0;
while($brow = $update_result->fetch_assoc()) {
if ($brow["craweler_id"]>$max) {
    $max=$brow["craweler_id"];
    $last_updatetime=$brow["updatetime"];
    }
}
$rs_result = $conn->query($bsql); 
while($brow = $rs_result->fetch_assoc()) {
    $GLOBALS['name'] = $brow["brand_name"];
    ?> 
    <!--breadcrumbs-->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>首頁</a></li>
                <li><?php echo $brow["brand_name"];?></li>
            </ol>
        </div>
    </div>
    <!--//breadcrumbs-->
    <br>

    <div class="container">
        <div class="col-lg-6 col-sm-6">
            <div class="container target">
                <div class="row">
                    <div class="col-sm-10">
                        <h1 class=""><font face="Antic"><?php echo $brow["brand_name"];?> <font size="2">最後更新: <?php echo $last_updatetime;?></font>
                            <form action="brand_fuction.php" method="POST" >
                                <div class="form-group">
                                    <input type="hidden" name="brand_id" value="<?php echo $brow["brand_id"]?>">
                                    <input type="hidden" name="member_name" value="<?php echo $mname?>">
                                    <input type="hidden" name="brand_name" value="<?php echo $brow["brand_name"]?>">
                                    <?//session 寫入?>
                                    <input type="hidden" name="brand_link" value="<?php echo $brow["brand_link"]?>">
                                    <?//session 寫入?>
                                    <input type="hidden" name="brand_pic" value="<?php echo $brow["brand_pic"]?>">
                                    <button type="submit" name="cc" class="btn btn-default"><i class="fa fa-bell-o" aria-hidden="true"></i></button>
                                </input>
                            </div>
                        </form>
                    </div>
                </div>
            </font></h1>

            <br>
            <div class="btn-group btn-group-justified">
                <div class="btn-group" role="group">
                    <button type="button" id="stars" class="btn btn-default" href="#tab1">
                        <div class="hidden-xs">228</div>
                        <div class="hidden-xs">產品數</div>
                    </button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" id="stars" class="btn btn-default" href="#tab1" data-toggle="tab">
                        <div class="hidden-xs">3242</div>
                        <div class="hidden-xs">追蹤人數</div>
                    </button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" id="stars" class="btn btn-default" href="#tab1" data-toggle="tab">
                        <div class="hidden-xs">227</div>
                        <div class="hidden-xs">正在追蹤</div>
                    </button>
                </div>
            </div>

   


        </div>
    </div>
</div>
</div>
</div>
</div>
<?php 
};
?>
<!--//brand-->
<!--productsnav-->
<?php
include("wenav.php");
$results_per_page = 50;

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $results_per_page;
$sql = " SELECT *  FROM products WHERE brand_id= ".$bid." ORDER BY product_id LIMIT $start_from, ".$results_per_page;
//echo $sql;



$rs_result = $conn->query($sql); 

while($row = $rs_result->fetch_assoc()) {
    ?> 
    <div class="agile_top_brands_grids">
        <div class="col-md-4 top_brand_left">
            <div class="hover14 column">
                <div class="agile_top_brand_left_grid">
                    <div class="agile_top_brand_left_grid_pos">
                        <input type="image" src=" images/addtolist.png" height="32" width="32" alt="send" onclick="send();" />
                    </div>
                    <div class="agile_top_brand_left_grid1">
                        <figure>
                            <div class="snipcart-item block">
                                <div class="snipcart-thumb">
                                    <a href="single.php?<?php echo $row["product_id"];?>"><img src=" <?php echo $row["p_pic"]; ?>" alt="" class="img-responsive">
                                        <font face = "Noto Sans TC"><p><?php echo $row["p_name"]; ?></p></f>
                                            <h4><?php echo $row["p_price"]; ?></h4>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <form action=" " method=" ">
                                                <fieldset>
                                                    <input type="submit" name="SAVE" value="看更多" class="button">
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
        <!--//products-->
        <!--pagination-->
        <nav class="numbering">
            <ul class="pagination paging">
                <li>
                    <a>
                        <?php
                        include("paging.php");
                        ?>
                    </a>
                </li>
            </ul>
        </nav>
        <!--//pagination-->
    </div>
    <div class="clearfix"> </div>
</div>
</div>
<?php
include("footer.php");
?>