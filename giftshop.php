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

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li>GIFT</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
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
<br>
<!--//giftshop-->
<?php
include("footer.php");
?>