<?php
include("header.php");
include("function.php");
?>

<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

<!-- breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
     <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
        <li><a href="manager.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
        <li>User</li>
    </ol>
</div>
</div>
<!-- //breadcrumbs -->

<script>
    $(document).ready(function() {
        $(".btn-pref .btn").click(function () {
            $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
    });
</script>	

<!-- userinfo -->
<br>


<div class="container target">
    <div class="row">
        <div class="col-sm-10">
           <h1 class=""><font face="Antic">評論檢視</font></h1>
       </div>
       
   </div>
   <br>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<?php
 $mem = $_GET['mem'];
  if (isset($_GET['commid'])) {
   $commid= $_GET['commid'];
    memcommdel($mem,$commid);
  }
?>
   <div class="row">
    <!--不能寫死 但資料表好像沒有這些欄位TT-->
    <div class="col-sm-9" style="" contenteditable="false">
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <div class="panel-body">
            <table>
        <tr>
          <th>會員帳號</th>
          <th>評論標題</th>
          <th>評論內容</th>
          <th></th>
        </tr>
     <?php  getmemcomm($mem)?>


</table>











            </div>
        </div>
        <!--news of following brands-->
</div>

<div id="push"></div>
</div>
</div>
<?php
include("footer.php");
?>