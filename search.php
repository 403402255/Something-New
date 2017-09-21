<?php
 $servername = "rds-mysql.cwougcernbij.ap-northeast-1.rds.amazonaws.com";
 $username = "User";
 $password = "12345678";
 $dbname = "project";

    $conn=mysql_connect($db_local,$db_username,$db_passwd);
    mysql_select_db($db_select);

    $query=mysql_query("SELECT * FROM `shoes` WHERE `name` like '%" . $_GET['term'] . "%'"); 
    while($row=mysql_fetch_array($query)){
    }

    
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
                                            <a href="single.php?<? echo $row["product_id"];?>"><img src=" <? echo $row["s_pic"]; ?>" alt="" class="img-responsive"></a>
                                            <font face = "Noto Sans TC"><p><? echo $row["s_name"]; ?></p></f>
                                                <h4><? echo $row["s_price"]; ?></h4>
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
<?
mysql_close();
?>