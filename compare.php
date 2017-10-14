<?php
include("header.php");

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
        <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
        <li>Compare Table</li>
    </ol>
</div>
</div>
<!-- //breadcrumbs -->
<div class="container">
    <section class="cd-intro">
        <h1>Products Comparison Table</h1>
    </section> 
    <section class="cd-products-comparison-table">
            <!--放加入商品-->
        <div class="cd-products-table">
            <div class="features">
                <div class="top-info">Models</div>
                <ul class="cd-features-list">
                    <li>Price</li>
                    <li>Customer Rating</li>
                    <li>Resolution</li>
                    <li>Screen Type</li>
                    <li>Display Size</li>
                    <li>Refresh Rate</li>
                    <li>Model Year</li>
                    <li>Tuner Technology</li>
                    <li>Ethernet Input</li>
                    <li>USB Input</li>
                    <li>Scart Input</li>
                </ul>
            </div>
            
            <div class="cd-products-wrapper">
                <ul class="cd-products-columns">
                    <li class="product">
                        <div class="top-info">
                            <div class="check"></div>
                            <img src="images/mb.jpg" alt="product image">
                            <h3>MacBook</h3>
                        </div> 
                        <ul class="cd-features-list">
                            <li>$600</li>
                            <li class="rate"><span>5/5</span></li>
                            <li>1080p</li>
                            <li>LED</li>
                            <li>47.6 inches</li>
                            <li>800Hz</li>
                            <li>2015</li>
                            <li>mpeg4</li>
                            <li>1 Side</li>
                            <li>3 Port</li>
                            <li>1 Rear</li>
                        </ul>
                    </li> 

                    <li class="product">
                        <div class="top-info">
                            <div class="check"></div>
                            <img src="images/dp.gif" height="180px" width="200px" alt="product image">
                            <h3>-</h3>
                        </div> 

                        <ul class="cd-features-list">
                            <li>-</li>
                            <li class="rate"><span>-</span></li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                        </ul>
                    </li>

                     <li class="product">
                        <div class="top-info">
                            <div class="check"></div>
                            <img src="images/dp.gif" height="180px" width="200px" alt="product image">
                            <h3>-</h3>
                        </div> 

                        <ul class="cd-features-list">
                            <li>-</li>
                            <li class="rate"><span>-</span></li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                        </ul>
                    </li> 

                     <li class="product">
                        <div class="top-info">
                            <div class="check"></div>
                            <img src="images/dp.gif" height="180px" width="200px" alt="product image">
                            <h3>-</h3>
                        </div> 

                        <ul class="cd-features-list">
                            <li>-</li>
                            <li class="rate"><span>-</span></li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                        </ul>
                    </li>
            
            <ul class="cd-table-navigation">
                <li><a href="#0" class="prev inactive">Prev</a></li>
                <li><a href="#0" class="next">Next</a></li>
            </ul>
        </div>
    </section>
</div>
<script src="js/jquery-2.1.4.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
<?php
include("footer.php");
?>