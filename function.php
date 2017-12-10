<?php
include("config.php");


function getwbrands(){

	global $conn;
	$get_brands = "select * from brands where brand_category = 1 ";
	$run_brands = mysqli_query($conn,$get_brands);

	while($row_brands=mysqli_fetch_array($run_brands)){

		$brand_title = $row_brands['brand_name'];
		$filter = $row_brands['brand_id'];
		echo" 
			<li><a href='products.php?$filter'><i class='fa fa-arrow-right'><font color='999999'>$brand_title</font></i></a></li>
					";

				}
			}

function getcbrands(){

	global $conn;
	$get_brands = "select * from brands where brand_category = 2 ";
	$run_brands = mysqli_query($conn,$get_brands);

	while($row_brands=mysqli_fetch_array($run_brands)){

		$brand_title = $row_brands['brand_name'];
		$filter = $row_brands['brand_id'];
		echo" 
			<li><a href='cproducts.php?$filter'><i class='fa fa-arrow-right'><font color='999999'>$brand_title</font></i></a></li>
					";

				}
			}


function getbrandsinfo(){

	global $conn;
	$get_brands = "select * from brands";
	$run_brands = mysqli_query($conn,$get_brands);

	while($row_brands=mysqli_fetch_array($run_brands)){

		$brand_title = $row_brands['brand_name'];
		$brand_id = $row_brands['brand_id'];
		echo
		"";

				}
			}


function get3cinfo(){

	global $conn;
	$get_brands = "select * from laptop";
	$run_brands = mysqli_query($conn,$get_brands);

	while($row_brands=mysqli_fetch_array($run_brands)){

		$product_id = $row_brands['product_id'];
		$brand_id = $row_brands['brand_id'];
		$l_price = $row_brands['l_price'];
		$l_pic = $row_brands['l_pic'];
		$l_site = $row_brands['l_site'];
		$l_name = $row_brands['l_name'];
		$l_processor = $row_brands['l_processor'];
		$l_os = $row_brands['l_os'];
		$l_memory = $row_brands['l_memory'];
		$l_display = $row_brands['l_display'];
		$l_graphic = $row_brands['l_graphic'];
		$l_storage = $row_brands['l_storage'];
		$l_interface = $row_brands['l_interface'];
		$l_battery = $row_brands['l_battery'];
		$l_size = $row_brands['l_size'];
		$l_weight = $row_brands['l_weight'];
		$l_warranty = $row_brands['l_warranty'];
		$l_date = $row_brands['l_date'];
		$l_internet = $row_brands['l_internet'];
		echo "
		";

				}
			}
function getmeminfo(){

	global $conn;
	$get_brands = "select * from membership";
	$run_brands = mysqli_query($conn,$get_brands);

	while($row_brands=mysqli_fetch_array($run_brands)){

		$member_acc = $row_brands['member_acc'];
		$member_name = $row_brands['member_name'];
		$member_phone = $row_brands['member_phone'];
		$member_email = $row_brands['member_email'];
		echo
		"
		<tr>
   		  <td>$member_acc</td>
		  <td>$member_name</td>
  		  <td>$member_phone</td>
  		  <td>$member_email</td>
  		  <td><a href='mem_comm.php?mem=$member_acc'>檢視</a></td>
  		  <td><a href='manager.php?mem=$member_acc'>刪除</a></td>
 		</tr>
 		";

				}
			}



function getlaptopinfo($mem){

	global $conn;

	foreach ($mem as $value) {
 	$get_brands = "select * from laptop where product_id='$value'";
 	$run_brands = mysqli_query($conn,$get_brands);

 	while($row_brands=mysqli_fetch_array($run_brands)){
	$brand_id = $row_brands['brand_id'];
	$l_price_site = $row_brands['l_price_site'];
	$l_price = $row_brands['l_price'];
	$l_pic = $row_brands['l_pic'];
	$l_site = $row_brands['l_site'];
	$l_name = $row_brands['l_name'];
	$l_processor = $row_brands['l_processor'];
	$l_os = $row_brands['l_os'];
	$l_memory = $row_brands['l_memory'];
	$l_display = $row_brands['l_display'];
	$l_graphic = $row_brands['l_graphic'];
	$l_storage = $row_brands['l_storage'];
	$l_interface = $row_brands['l_interface'];
	$l_battery = $row_brands['l_battery'];
	$l_weight = $row_brands['l_weight'];
	$l_warranty = $row_brands['l_warranty'];
	$l_internet = $row_brands['l_internet'];
	$l_size = $row_brands['l_size'];
	$c_size = $row_brands['c_size'];
	$c_cpu_rank = $row_brands['c_cpu_rank'];
	$c_ram = $row_brands['c_ram'];
	$c_weight = $row_brands['c_weight'];
	$updatetime = $row_brands['updatetime'];

	$get_cpu = "select * from laptop_cpu_rank where cpu_id='$c_cpu_rank'";
	$run_brands = mysqli_query($conn,$get_cpu);
	while($row_brands=mysqli_fetch_array($run_brands)){  //cpu
		$cpu_name= $row_brands['name'];
		$Ghz= $row_brands['Ghz'];
		$rank= $row_brands['rank'];
	}
	}
		echo
		"
         	 <li class='product'>
                <div class='top-info'>
                    <div><a href='remove_compare.php?product_id=$value'><i class='fa fa-times' aria-hidden='true'></i></a></div>
                         <img src='$l_pic' height='180px' width='200px' alt='product image'>
                            <h3>$l_name</h3>
                    </div> 
                    	 <ul class='cd-features-list'>
                            <li style='height:70px'><a href='$l_price_site'>$l_price</a></li>
                            <li style='height:70px' class='rate'><span>-</span></li>
                            <li style='height:70px' ram='$c_ram'>$l_memory</li>
                            <li style='height:70px' rank='$rank'>$l_processor</li>
                            <li style='height:110px'>$l_storage</li>
                            <li style='height:120px'>$l_display</li>
                            <li style='height:100px'>$l_graphic</li>
                            <li style='height:70px' weight='$c_weight'>$l_weight</li>
							<li style='height:120px'>$l_size</li>
                            <li style='height:70px'>$l_os</li>
                            <li style='height:70px'><a href='$l_site'>$l_name</a></li>
                        </ul>
                    </li>
 		";
}
				
			}

function getmemcomm($mem){

	global $conn;
	$get_brands = "select * from member_comments where member_acc='$mem'";
	$run_brands = mysqli_query($conn,$get_brands);

	while($row_brands=mysqli_fetch_array($run_brands)){

		$member_acc = $row_brands['member_acc'];
		$member_title = $row_brands['member_title'];
		$member_content = $row_brands['member_content'];
		$member_state = $row_brands['member_state'];
		$member_commentid = $row_brands['member_commentid'];
		echo
		"
		<tr>
   		  <td>$member_acc</td>
		  <td>$member_title</td>
  		  <td>$member_content</td>
  		  <td><a href='mem_comm.php?mem=$member_acc&commid=$member_commentid'>刪除</a></td>
 		</tr>
 		";

				}
			}

function memcommdel($mem,$commid){

	global $conn;
	$get_brands = "delete from member_comments where member_commentid='$commid'";
	$run_brands = mysqli_query($conn,$get_brands);
	$get_brands = "select * from membership";
	$run_brands = mysqli_query($conn,$get_brands);
	while($row_brands=mysqli_fetch_array($run_brands)){

		$member_acc = $row_brands['member_acc'];
		$member_title = $row_brands['member_title'];
		$member_content = $row_brands['member_content'];
		$member_state = $row_brands['member_state'];
		$member_commentid = $row_brands['member_commentid'];
		echo
		"";

				}
			}


function memdel($mem){

	global $conn;
	$get_brands = "delete from membership where member_acc='$mem'";
	$run_brands = mysqli_query($conn,$get_brands);
	$get_brands = "select * from member_comments where member_acc='$mem'";
	$run_brands = mysqli_query($conn,$get_brands);
	
	while($row_brands=mysqli_fetch_array($run_brands)){

		$member_acc = $row_brands['member_acc'];
		$member_name = $row_brands['member_name'];
		$member_phone = $row_brands['member_phone'];
		$member_email = $row_brands['member_email'];

				}
			}


	?>