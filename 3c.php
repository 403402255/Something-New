<?php
include("header.php");
include("function.php");
?>
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
<!--breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>首頁</a></li>
            <li>3C類</li>
        </ol>
    </div>
</div>
<!--//breadcrumbs-->
<!--productsnav-->
<div class="products">
    <div class="container">
        <div class="col-md-4 products-left">
            <div class="categories">
                <h2>類別</h2>
                <ul class="cate">
                    <li><a href="products.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>品牌列表</a></li>
                    <ul>
                        <?php
                        getcbrands();//之後改依類別顯示
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
                            <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>最相關</option>
                            <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>最高人氣</option> 
                            <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>價格由高至低</option>
                            <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>價格由低至高</option>
                            <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>上架日期</option>
                        </select>
                    </div>
                    <div class="sorting-left">
                        <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>每頁18項產品數</option>
                            <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>每頁36項產品數</option>
                        </select>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>


<!--//productsnav->
<!--products-->
    <?php
    $datatable = "laptop";
    $results_per_page = 18;

    if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
    $start_from = ($page-1) * $results_per_page;
    $sql = " SELECT * FROM laptop LIMIT $start_from, ".$results_per_page;
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
                                <div class="popup" onclick="myFunc()"><div class="glyphicon glyphicon-plus-sign"></div>
                        <span class="popuptext" id="myPopup"><h4>加入收藏清單</h4></span>
                </div>
<script>
    //popups
function myFunc() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="csingle.php?<?php echo $row["product_id"];?>"><img src=" <?php echo $row["l_pic"]; ?>" alt="" class="img-responsive"></a>
                                            <font face = "Noto Sans TC"><p><?php echo $row["l_name"]; ?></p></f>
                                                <h4><?php 
                                                if($row["l_price"]==0){
                                                    echo $row["l_price"];
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
</div>  
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
<?php
include("footer.php");
?>