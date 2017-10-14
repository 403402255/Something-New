<?php

if(isset($_GET['page'])) { $page = $_GET['page']; }else{ $page = 1;  }
$num = 18;
$pageNum = 10;
$limit_start = ($page-1)*$num;
$start = (int)(($page-1) / $pageNum) * $pageNum + 1;
$end = $start + $pageNum -1;
$next = $page+1;
$pre = $page-1;

$sql = "SELECT * FROM shoes";
$result = mysqli_query($conn,$sql);
$total = mysqli_num_rows($result);
$pages = ceil($total / $num);

$sql = "SELECT * FROM shoes LIMIT $limit_start , $num"; 
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_row($result);

if($page > 1) {
    
    
    echo "<td><a href=\"products.php?page=" . $pre . "\" aria-label='Previous'>
                <span aria-hidden='true'>&laquo;</span></a></td>"; 

}

if($pages <= $pageNum){ 

    for($i=$start; $i<=$pages; $i++){ 
        if($i == $page){ 
                echo "<td><a href=\"products.php?page=" . $i ."\" >". $i . "</a></td>"; 
            }else{
                echo "<td><a href=\"products.php?page=" . $i ."\">" . $i . "</a> </td>";
                }
        } 
    }else{
        if($page > 5){ 
            $end = $page+5;
            if ($end > $pages) {
                $end = $pages;
            }
            $start = $end-9;

            for($i=$start; $i<=$end; $i++){

                if($i == $page){
                    echo "<td><a href=\"products.php?page=" . $i ."\" >". $i . "</a></td>";  
                }else{
                    echo "<td><a href=\"products.php?page=" . $i ."\">" . $i . "</a> </td>";
                }

            }
        }else{
            if ($end > $pages) {
                $end = $pages;
            }
            for($i=$start; $i<=$end; $i++){

                if($i == $page){
                    echo "<td><a href=\"products.php?page=" . $i ."\" >". $i . "</a></td>"; 
                }else{
                    echo "<td><a href=\"products.php?page=" . $i ."\">" . $i . "</a> </td>";
                }

            }

        }

    }

    if($page < $pages) { 

        echo "<td><a href=\"products.php?page=" . $next . "\" aria-label='Next'>
                <span aria-hidden='true'>&raquo;</span>
            </a></td>";

    }

?>