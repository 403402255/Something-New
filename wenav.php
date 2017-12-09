


  <div class="products">
   <div class="container">
    <div class="col-md-4 products-left">
     <div class="categories">
      <h2>類別</h2>
      <ul class="cate">
       <li><a href="news.php?<?php echo $bid?>"><i class="fa fa-arrow-right" aria-hidden="true"></i>新聞</a></li>
       <li><a href="accessories.php?brand_name=<?php echo $GLOBALS['name1']?>&brand_id=<?php echo $GLOBALS['bid']?>"><i class='fa fa-arrow-right' aria-hidden='true'></i>飾品</a></li>
       <ul>
        <?php
        $sql2 = " SELECT distinct gendercategory.gender_name,gendercategory.gender_id FROM gendercategory INNER JOIN products ON gendercategory.gender_id = products.gender_id where brand_id='.$bid.' ORDER BY products.p_price" ;





        $rs_result = $conn->query($sql2);
        while($row = $rs_result->fetch_assoc()) {

         ?>
         <li><a href="accessories.php?&brand_name=<?php echo $GLOBALS['name1']?>&brand_id=<?php echo $GLOBALS['bid']?>&gender_id=<?php echo $row["gender_id"]?>"><i class="fa fa-arrow-right" aria-hidden="true"></i><?php echo $row["gender_name"]?></a> </li>
         <?php

        }
        ?></ul>



        <li><a href="outfits.php?&brand_name=<?php echo $GLOBALS['name1']?>&brand_id=<?php echo $GLOBALS['bid']?>&gender_id=<?php echo $row["gender_id"]?>""><i class='fa fa-arrow-right' aria-hidden='true'></i>服飾</a></li>
        <ul>
         <?php
         $sql3 = " SELECT distinct gendercategory.gender_name FROM gendercategory INNER JOIN products ON gendercategory.gender_id = products.gender_id where brand_id=".$bid;

         $rs_result = $conn->query($sql3);
         while($row = $rs_result->fetch_assoc()) {

          ?>










          <li><a href="outfits.php?&brand_name=<?php echo $GLOBALS['name1']?>&brand_id=<?php echo $GLOBALS['bid']?>"><i class="fa fa-arrow-right" aria-hidden="true"></i><?php echo $row["gender_name"]?></a> </li>
          <?php

         }
         ?>
        </ul> 
        <li><a href="shoes.php?&brand_name=<?php echo $GLOBALS['name1']?>&brand_id=<?php echo $GLOBALS['bid']?>"><i class='fa fa-arrow-right' aria-hidden='true'></i>鞋子</a></li>

        <ul>
         <?php
         $sql4 = " SELECT distinct shoescategory.shoescategory_name FROM shoescategory INNER JOIN products ON shoescategory.shoescategory_id = products.shoescategory_id where brand_id=".$bid;
         $rs_result = $conn->query($sql4);
         while($row = $rs_result->fetch_assoc()) {

          ?>

          <li><a href="shoes.php?&brand_name=<?php echo $GLOBALS['name1']?>&brand_id=<?php echo $GLOBALS['bid']?>""><i class="fa fa-arrow-right" aria-hidden="true"></i><?php echo $row["shoescategory_name"]?></a> </li>
          <?php
         }
         ?>
        </ul>
       </ul>
      </div>                   
     </div>






      <div class="col-md-8 products-right">
            <div class="products-right-grid">
                <div class="products-right-grids">
                    <div class="sorting">

                         <select id="country" onchange="location.href=this.value" class="frm-field required sect"> <option>依價格排序</option>


                            <option value="http://localhost/1outfitsh.php?&brand_name=<?php echo $GLOBALS['name1']?>&brand_id=<?php echo $GLOBALS['bid']?>"><i class="fa fa-arrow-right" aria-hidden="true"></i> &nbsp&nbsp&nbsp 服飾(高至低)</option>



                            <option value="http://localhost/1outfitsl.php?&brand_name=<?php echo $GLOBALS['name1']?>&brand_id=<?php echo $GLOBALS['bid']?>"><i class="fa fa-arrow-right"><i class="fa fa-arrow-right" aria-hidden="true"></i  > &nbsp&nbsp&nbsp 服飾(低到高)</option> 
                            <option value="http://localhost/1accessoriesh.php?&brand_name=<?php echo $GLOBALS['name1']?>&brand_id=<?php echo $GLOBALS['bid']?>"><i class="fa fa-arrow-right"><i class="fa fa-arrow-right" aria-hidden="true"></i > &nbsp&nbsp&nbsp 飾品(高到低)</option>
                            <option value="http://localhost/1accessoriesl.php?&brand_name=<?php echo $GLOBALS['name1']?>&brand_id=<?php echo $GLOBALS['bid']?>"><i class="fa fa-arrow-right"><i class="fa fa-arrow-right" aria-hidden="true"></i > &nbsp&nbsp&nbsp 飾品(低到高)</option>
                            <option value="http://localhost/1shoesh.php?&brand_name=<?php echo $GLOBALS['name1']?>&brand_id=<?php echo $GLOBALS['bid']?>"><i class="fa fa-arrow-right"><i class="fa fa-arrow-right" aria-hidden="true"></i > &nbsp&nbsp&nbsp 鞋子(高到低)</option>
                            <option value="http://localhost/1shoesl.php?&brand_name=<?php echo $GLOBALS['name1']?>&brand_id=<?php echo $GLOBALS['bid']?>"><i class="fa fa-arrow-right"><i class="fa fa-arrow-right" aria-hidden="true"></i > &nbsp&nbsp&nbsp 鞋子(低到高)</option>
                        </select>







                    </div>
                    <div class="sorting-left">
                        <select id="country" onchange="location.href=this.value" class="frm-field required sect"> <option>依型號排序</option>
                            <option value="http://localhost/1outfits0.php?&brand_name=<?php echo $GLOBALS['name1']?>&brand_id=<?php echo $GLOBALS['bid']?>"><i class="fa fa-arrow-right" aria-hidden="true"></i>   &nbsp&nbsp&nbsp   服飾(0~9,A~Z)</option>
                            <option value="http://localhost/1outfitsz.php?&brand_name=<?php echo $GLOBALS['name1']?>&brand_id=<?php echo $GLOBALS['bid']?>"><i class="fa fa-arrow-right" aria-hidden="true"></i>   &nbsp&nbsp&nbsp   服飾(Z~A-9~0)</option>
                           <option value="http://localhost/1accessories0.php?&brand_name=<?php echo $GLOBALS['name1']?>&brand_id=<?php echo $GLOBALS['bid']?>"><i class="fa fa-arrow-right" aria-hidden="true"></i>   &nbsp&nbsp&nbsp   飾品(0~9,A~Z)</option>
                            <option value="http://localhost/1accessoriesz.php?&brand_name=<?php echo $GLOBALS['name1']?>&brand_id=<?php echo $GLOBALS['bid']?>"><i class="fa fa-arrow-right" aria-hidden="true"></i>   &nbsp&nbsp&nbsp   飾品(Z~A-9~0)</option>
                            <option value="http://localhost/1shoes0.php?&brand_name=<?php echo $GLOBALS['name1']?>&brand_id=<?php echo $GLOBALS['bid']?>"><i class="fa fa-arrow-right" aria-hidden="true"></i>   &nbsp&nbsp&nbsp   鞋子(0~9,A~Z)</option>
                           <option value="http://localhost/1shoesz.php?&brand_name=<?php echo $GLOBALS['name1']?>&brand_id=<?php echo $GLOBALS['bid']?>"><i class="fa fa-arrow-right" aria-hidden="true"></i>   &nbsp&nbsp&nbsp   鞋子(Z~A-9~0)</option>

                        </select>
                    </div>


                    <div class="clearfix"> </div>
                </div>
            </div>



