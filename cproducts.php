<?php
include("header.php");
include("function.php");
//$name =$_REQUEST['brand_name'];
//$filter=$_REQUEST['brand_id'];//對應的brand_id
$bid=$_SERVER['QUERY_STRING'];
//$brandid = $_SESSION['brand_id'];

?>
<?php 
$bsql = " SELECT *  FROM brands WHERE brand_id= ".$bid;
$rs_result = $conn->query($bsql); 
        while($brow = $rs_result->fetch_assoc()) {
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
                    <h1 class=""><font face="Antic"><?php echo $brow["brand_name"];?></font></h1><br>
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
<?php }?>
<!--//brand-->
<!--productsnav-->
<?php
include("wenav.php");

    $datatable = "laptop"; 
    // $filter="WHERE product_id=14"; |對應的brand_id
    $results_per_page = 18;

    if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
    $start_from = ($page-1) * $results_per_page;
    $sql = " SELECT *  FROM ".$datatable." WHERE brand_id= ".$bid." LIMIT $start_from, ".$results_per_page;
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
                                        <a href="single.php?<?php echo $row["product_id"];?>"><img src=" <?php echo $row["l_pic"]; ?>" alt="" class="img-responsive">
                                        <font face = "Noto Sans TC"><p><?php echo $row["l_name"]; ?></p></f>
                                            <h4><?php echo $row["l_price"]; ?></h4>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <form action="post" method="products.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="savelist">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="business" value="">
                                                    <input type="hidden" name="item_name" value="$product_title">
                                                    <input type="hidden" name="amount" value="$product_price">
                                                    <input type="hidden" name="currency_code" value="NTD">
                                                    <input type="hidden" name="return" value="">
                                                    <input type="hidden" name="cancel_return" value="">
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