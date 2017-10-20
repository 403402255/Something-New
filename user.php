<?php
include("header.php");
?>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

<!-- breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
     <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
        <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
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
           <h1 class=""><font face="Antic">Sherlock Holmes</font></h1>
       </div>
       <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.rlsandbox.com/img/profile.jpg"></a>

       </div>
   </div>
   <br>
   <div class="row">
    <div class="col-sm-3">
        <ul class="list-group">
            <li class="list-group-item text-muted" contenteditable="false">Profile  <a href="eduser.php"><i class="glyphicon glyphicon-pencil">&#xe3c9;</i></a></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span> 2.13.2017</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Last seen</strong></span> Yesterday</li>
        </ul>
        <div class="panel panel-default">
            <div class="panel-heading">Daily Mission<i class="fa fa-link fa-1x"></i>

            </div>
            <div class="panel-body"><a href="game.php" class=""> >>GO! </a>

            </div>
        </div>
        
        <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Saved</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Following</strong></span> 78</li>
        </ul>
    </div>
    <!--不能寫死 但資料表好像沒有這些欄位TT-->
    <div class="col-sm-9" style="" contenteditable="false">
        <div class="panel panel-default">
            <div class="panel-heading">User Name Bio</div>
            <div class="panel-body"> A long description about me.</div>
        </div>
        <!--news of following brands-->
        <div class="panel panel-default target">
            <div class="panel-heading" contenteditable="false">Following</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-white post panel-shadow">
                            <div class="post-heading">
                                <div class="pull-left image">
                                <img src="images/nike.png" class="img-circle avatar" alt="user profile image">
                                </div>
                                <div class="pull-left meta">
                                    <div class="title h5">
                                        <a href="#"><b>NIKE</b></a>
                                        made a SALE post.
                                    </div>
                                    <h6 class="text-muted time">1 minute ago</h6>
                                </div>
                            </div> 
                            <div class="post-description"> 
                                <p>Nike is going to hold a SALE on Oct. 09.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="panel panel-white post panel-shadow">
                            <div class="post-heading">
                                <div class="pull-left image">
                                    <img src="images/apple.png" class="img-circle avatar" alt="user profile image">
                                </div>
                                <div class="pull-left meta">
                                    <div class="title h5">
                                        <a href="#"><b>Apple</b></a>
                                        made a post.
                                    </div>
                                    <h6 class="text-muted time">10 minute ago</h6>
                                </div>
                            </div> 
                            <div class="post-description"> 
                                <p>iPhone 8 will be released on Nov. 22.</p>

                            </div>
                        </div>

                    </div>
                </div>
                <br>
            <ul><a href="#" class="pull-right"><font color = "black">SEE MORE>> </font></a></ul> 
        </div>
        <!--//news of following brands-->       
    </div>

<div class="panel panel-default">
    <div class="panel-heading">Pionts</div>
    <div class="panel-body">123 pts</div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Gifts Lists</div>
    <div class="panel-body"><a href="giftshop.php">CHECK it NOW!</a></div>
</div>
</div>

<div id="push"></div>
</div>
</div>
<?php
include("footer.php");
?>