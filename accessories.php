<?php
include("header.php");
include("function.php");
    $name1 =$_REQUEST['brand_name'];
    $filter=$_REQUEST['brand_id'];
    $gender = $_REQUEST['gender_id']; 
?>
<!--breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li><?php echo $name1; ?></li>
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
                    <h1 class=""><font face="Antic"><? echo $name1; ?></font></h1><br>

                    <div class="btn-group btn-group-justified">
                        <div class="btn-group" role="group">
                            <button type="button" id="stars" class="btn btn-default" href="#tab1">
                                <div class="hidden-xs">228</div>
                                <div class="hidden-xs">Products</div>
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" id="stars" class="btn btn-default" href="#tab1" data-toggle="tab">
                                <div class="hidden-xs">3242</div>
                                <div class="hidden-xs">Followers</div>
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" id="stars" class="btn btn-default" href="#tab1" data-toggle="tab">
                                <div class="hidden-xs">227</div>
                                <div class="hidden-xs">Following</div>
                            </button>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
</div>
<!--//brand-->
<!--productsnav-->
<?php
include("wenav.php");//productsnav
//---product---

    //$name =$_REQUEST['brand_name'];
    $results_per_page = 18;
    $gender = 2;
    $item = $_REQUEST['item'];

    if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
    $start_from = ($page-1) * $results_per_page;
    $sql = " SELECT *  FROM product WHERE brand_id = ".$filter." AND gender_id=".$gender." AND category_id = 1 LIMIT 0,18";
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
                                        <a href="single.php?item=<?echo $item;?>&product_id=<? echo $row["product_id"];?>"><img src=" <? echo $row["p_pic"]; ?>" alt="" class="img-responsive"></a>
                                        <font face = "Noto Sans TC"><p><? echo $row["p_name"]; ?></p></f>
                                            <h4><? echo $row["p_price"]; ?></h4>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="savelist">
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