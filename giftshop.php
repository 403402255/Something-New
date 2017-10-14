<style>
* {
  box-sizing: border-box;
}


.cards {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  margin: 0;
  padding: 0;
  text-align: center;
}
@media (max-width: 550px) {
  .cards {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}
}

.card {
  position: relative;
  width: 31.33333%;
  margin: 1%;
  background: whiteSmoke;
  box-shadow: 1px 1px 5px #999;
}
@media (max-width: 815px) {
  .card {
    width: 48%;
}
}
@media (max-width: 550px) {
  .card {
    width: 100%;
}
}
.card__inner {
  position: relative;
  background: url("https://unsplash.it/400?random") no-repeat;
  background-size: cover;
  overflow: hidden;
}
.card__inner h2 {
  color: white;
  margin: 0;
  padding: 30% 0;
  text-shadow: 1px 1px 3px #000;
  line-height: 18px;
  text-transform: uppercase;
}
.card__inner h2 small {
  font-style: italic;
  display: inherit;
}
.card__buttons {
  position: absolute;
  width: 100%;
  -webkit-transform: translateY(0);
  transform: translateY(0);
  -webkit-transition: -webkit-transform .5s ease;
  transition: -webkit-transform .5s ease;
  transition: transform .5s ease;
  transition: transform .5s ease, -webkit-transform .5s ease;
}
.card__buttons a {
  position: relative;
  float: left;
  width: 50%;
  padding: 10px;
  text-decoration: none;
  color: black;
  border-top: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
}
.card__buttons a:first-child {
  background: #fff;
  border-right: 1px solid #ccc;
}
.card__buttons a:last-child {
  background: #ffde00;
}
.card__buttons a:hover {
  color: #ffde00;
  background: #000;
}
.card:hover .card__buttons {
  -webkit-transform: translateY(-38px);
  transform: translateY(-38px);
}
.card__tagline {
  font-size: 1rem;
  font-weight: 100;
}
.card__icons {
  margin: 0 0 50px;
  padding: 0;
  list-style: none;
}
.card__icons li {
  display: inline-block;
  padding: 0 10px 10px;
}
.card__icons .fa {
  font-size: .8rem;
}
.card__icons .fa:before {
  font-size: 1.2rem;
  display: block;
  padding-bottom: 5px;
}
.card p {
  position: absolute;
  bottom: 0;
  text-align: center;
  width: 100%;
}

</style>
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
    $(document).ready(function(){
     $('[data-toggle="offcanvas"]').click(function(){
         $("#navigation").toggleClass("hidden-xs");
     });
 });
</script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<!-- user -->
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="http://www.rlsandbox.com/img/profile.jpg" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="http://www.rlsandbox.com/img/profile.jpg" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li><a href="user.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="follow.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Following List</span></a></li>
                        <li class="active"><a href="#"><i class="fa fa-gift" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Gift Shop</span></a></li>
                        <li><a href="game.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Daliy Game</span></a></li>
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">User</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">

                            </nav>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">

                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://www.rlsandbox.com/img/profile.jpg" alt="user">
                                            <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="navbar-content">
                                                        <span>Sherlock Holmes</span>
                                                        <p class="text-muted small">
                                                            sh@mail.com
                                                        </p>
                                                        <div class="divider">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </header>
                    </div>
                    <div class="user-dashboard">
                        <h1>Hello, SH</h1>
                        <div class="row">
                            <!--giftshop-->
                            <ul class="cards">
                              <li class="card">
                                <div class="card__inner">
                                  <h2>GIFT <small>Available</small></h2>
                                  <div class="card__buttons">
                                    <a href="#">Explore</a><!--彈跳|function：加大圖+資訊說明-->
                                    <a href="#">Purchase</a><!--彈跳|function：兌換資訊說明+點數重新計算-->
                                </div>
                            </div>
                            <br>
                            <h3 class="card__tagline">Available till Sep. 27,2017</h3><br>
                            <p>50 pts</p>
                        </li>
                        <li class="card">
                            <div class="card__inner">
                              <h2>GIFT <small>Available</small></h2>
                              <div class="card__buttons">
                                <a href="#">Explore</a><!--彈跳|function：加大圖+資訊說明-->
                                <a href="#">Purchase</a><!--彈跳|function：兌換資訊說明+點數重新計算-->
                            </div>
                        </div>
                        <br>
                        <h3 class="card__tagline">Available till Dec. 13,2017</h3><br>
                        <p>75 pts</p>
                    </li>
                    <li class="card">
                        <div class="card__inner">
                          <h2>GIFT <small>Available</small></h2>
                          <div class="card__buttons">
                            <a href="#">Explore</a><!--彈跳|function：加大圖+資訊說明-->
                            <a href="#">Purchase</a><!--彈跳|function：兌換資訊說明+點數重新計算-->
                        </div>
                    </div>
                    <br>
                    <h3 class="card__tagline">Available till Mar. 05,2018</h3><br>
                    <p>30 pts</p>
                </li>
            </ul>
            <ul class="cards">
              <li class="card">
                <div class="card__inner">
                  <h2>GIFT <small>Available</small></h2>
                  <div class="card__buttons">
                    <a href="#">Explore</a><!--彈跳|function：加大圖+資訊說明-->
                    <a href="#">Purchase</a><!--彈跳|function：兌換資訊說明+點數重新計算-->
                </div>
            </div>
            <br>
            <h3 class="card__tagline">Available till Sep. 27,2017</h3><br>
            <p>50 pts</p>
        </li>
        <li class="card">
            <div class="card__inner">
              <h2>GIFT <small>Available</small></h2>
              <div class="card__buttons">
                <a href="#">Explore</a><!--彈跳|function：加大圖+資訊說明-->
                <a href="#">Purchase</a><!--彈跳|function：兌換資訊說明+點數重新計算-->
            </div>
        </div>
        <br>
        <h3 class="card__tagline">Available till Dec. 13,2017</h3><br>
        <p>75 pts</p>
    </li>
    <li class="card">
        <div class="card__inner">
          <h2>GIFT <small>Available</small></h2>
          <div class="card__buttons">
            <a href="#">Explore</a><!--彈跳|function：加大圖+資訊說明-->
            <a href="#">Purchase</a><!--彈跳|function：兌換資訊說明+點數重新計算-->
        </div>
    </div>
    <br>
    <h3 class="card__tagline">Available till Mar. 05,2018</h3><br>
    <p>30 pts</p>
</li>
</ul>
<!--//換的內容-->
 </div>
                </div>
              </div>
</div>
</div>
</body>

<div class="clearfix"></div>
<br>
<!-- //user -->
<?php
include("footer.php");
?>