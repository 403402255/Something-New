<?php
include("header.php");
?>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<!-- breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
     <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
        <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>首頁</a></li>
        <li>分頁名稱</li>
    </ol>
</div>
</div>
<!-- //breadcrumbs -->
<script>
    $(document).ready(function(){
   $('[data-toggle="offcanvas"]').click(function(){
       $("#navigation").toggleClass("hidden-xs");
   });
});
</script>
<div class="clearfix"></div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="clearfix"></div>
<!-- //user -->
<?php
include("footer.php");
?>