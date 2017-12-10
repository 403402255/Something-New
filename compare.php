<?php
session_start();
include("header.php");
include("function.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/reset.css"> 
    <link rel="stylesheet" href="css/cstyle.css"> 
    <script src="js/modernizr.js"></script> 
</head>
<body>
<!-- breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
     <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
        <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>首頁</a></li>
        <li>3C比一比</li>
    </ol>
</div>
</div>
<!-- //breadcrumbs -->
<div class="container">
    <section class="cd-intro">
        <h1>3C比一比</h1>
    </section> 
    <section class="cd-products-comparison-table">
            <!--放加入商品-->
        <div class="cd-products-table">
            <div class="features">
                <div class="top-info"><a href='remove_all_compare.php?product_id=$value'><i class='fa fa-times' aria-hidden='true'>移除全部</i></a></div>
                <ul class="cd-features-list">
                    <li style='height:70px'>價格</li>
                    <li style='height:70px'>評價</li>
                    <li style='height:70px'>記憶體</li>
                    <li style='height:70px'>處理器</li>
                    <li style='height:110px'>硬碟</li>
                    <li style='height:120px'>螢幕尺寸</li>
                    <li style='height:100px'>顯示卡</li>
                    <li style='height:70px'>重量</li>
                    <li style='height:120px'>體積</li>               
                    <li style='height:70px'>作業系統</li>
                    <li style='height:70px'>官方網站</li>
                    
                </ul>
            </div>
            
            <div class="cd-products-wrapper">
                <ul class="cd-products-columns">


                    <li class="product">
                        <div class="top-info">
                            <div><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                            <img src="images/mb.jpg" alt="product image">
                            <h3>MacBook</h3>
                        </div> 
                        <ul class="cd-features-list">
                            <li style='height:70px'>$600</li>
                            <li style='height:70px' class="rate"><span>5/5</span></li>
                            <li style='height:70px'>1080p</li>
                            <li style='height:70px'>LED</li>
                            <li style='height:110px'>47.6 inches</li>
                            <li style='height:120px'>800Hz</li>
                            <li style='height:100px'>2015</li>
                            <li style='height:70px'>mpeg4</li>
                            <li style='height:120px'>1 Side</li>
                            <li style='height:70px'>1 Side</li>
                            <li style='height:70px'>3 Port</li>
                        
                        </ul>
                    </li> 

                    <?php  getlaptopinfo($_SESSION['laptop_compare'])?>
            
            <ul class="cd-table-navigation">
                <li><a href="#0" class="prev inactive">Prev</a></li>
                <li><a href="#0" class="next">Next</a></li>
            </ul>
        </div>
    </section>
</div>
<script src="js/jquery-2.1.4.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script>

function getAllElementsWithAttribute(attribute)
{
  var matchingElements = [];
  var allElements = document.getElementsByTagName('*');
  for (var i = 0, n = allElements.length; i < n; i++)
  {
    if (allElements[i].getAttribute(attribute) !== null)
    {
      // Element exists with attribute. Add to array.
      matchingElements.push(allElements[i].getAttribute(attribute));
    }
  }
  return matchingElements;
}
function change(attribute,order)
{
  var allElements = document.getElementsByTagName('*');
  for (var i = 0, n = allElements.length; i < n; i++)
  {
    if (allElements[i].getAttribute(attribute) == order && allElements[i].getAttribute(attribute) !=='')
    {
      // Element exists with attribute. Add to array.
      allElements[i].style.backgroundColor = "#F0FFFF";
    }
  }
}
var arr=[];
arr=getAllElementsWithAttribute('ram');
var i =Math.max.apply(null,arr).toString();
change('ram',i);

var arr=[];
arr=getAllElementsWithAttribute('rank');
var i =Math.min.apply(null,arr).toString();
change('rank',i);

var arr=[];
arr=getAllElementsWithAttribute('weight');
var i =Math.min.apply(null,arr).toString();
change('weight',i);

</script>


</body>
<?php
include("footer.php");
?>