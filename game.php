<?php
include("header.php");
?>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<style>
    body{ margin-top:20px;}
.glyphicon { margin-right:5px;}
.section-box h2 { margin-top:0px;}
.section-box h2 a { font-size:15px; }
.glyphicon-heart { color:#e74c3c;}
.glyphicon-comment { color:#27ae60;}
.separator { padding-right:5px;padding-left:5px; }
.section-box hr {margin-top: 0;margin-bottom: 5px;border: 0;border-top: 1px solid rgb(199, 199, 199);}

.panel.panel-horizontal {
    display:table;
    width:100%;
}
.panel.panel-horizontal > .panel-heading, .panel.panel-horizontal > .panel-body, .panel.panel-horizontal > .panel-footer {
    display:table-cell;
}
.panel.panel-horizontal > .panel-heading, .panel.panel-horizontal > .panel-footer {
    width: 25%;
    border:0;
    vertical-align: middle;
}
.panel.panel-horizontal > .panel-heading {
    border-right: 1px solid #ddd;
    border-top-right-radius: 0;
    border-bottom-left-radius: 4px;
    
}
.panel.panel-horizontal > .panel-footer {
    border-left: 1px solid #ddd;
    border-top-left-radius: 0;
    border-bottom-right-radius: 4px;
}

.email {
    font-size: 1em;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
</style>

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
<!-- user --><?php include("unav.php");?>



</div>



<?php 


$mname = $_SESSION['username'];

         
?>

                    <div class="user-dashboard">
                        <h1>Hello, <?php echo $_SESSION['username'];?></h1>

                         <h3>daily game</h3>
                        <form action="game_function.php" method="POST" >
                                                
                                                <div class="form-group">




<?php 


$mname = $_SESSION['username'];

         
?>
                                               
                                                    <input type="hidden" name="member_name" value="<?php echo $mname?>">



                                                    <button type="gg" name="gg" class="btn btn-default">簽到</button>

                                                </div>

                                                </form>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12 gutter">
<p><!DOCTYPE html>
<html lang="zh-tw">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>第二次練習打地鼠</title>

<link rel="stylesheet" type="text/css" href="game.css">


</head>
<body>

<audio id="hitsuccess">
  <source src="success.mp3" type="audio/mpeg">
</audio>
<audio id="hitfail">
    <source src="fail.mp3" type="audio/mpeg">
</audio>

       <div id="content">

                  <input id="gamestart-btn2" data-gamemode=2 type="button" value="無盡模式">


                  <input id="gamestart-btn" data-gamemode=1 type="button" value="開始遊戲" >


                  <input id="gameover-btn" type="button" value="結束遊戲" >
                   
                 <form name="form1">
                  <p></p>
                  <label></label>
                      <label>分數：</label>
                      <input type="text" name="score" size="3">
                      <label>命中率：</label>
                      <input type="text" name="success" size="3">
                      <label>時間剩餘：</label>
                      <input type="text" name="remtime" size="3">
                  </form>
                  <div class="motherbox">
                      <div class="bigbox">
                      </div>
                      <div class="bigbox">
                      </div>
                      <div class="bigbox">
                      </div>
                      <div class="bigbox">
                      </div>
                  </div>
                  <div class="motherbox">
                      <div class="bigbox">
                      </div>
                      <div class="bigbox">
                      </div>
                      <div class="bigbox">
                      </div>
                      <div class="bigbox">
                      </div>
                  </div>
                  <div class="motherbox">
                      <div class="bigbox">
                      </div>
                      <div class="bigbox">
                      </div>
                      <div class="bigbox">
                      </div>
                      <div class="bigbox">
                      </div>
                  </div>
                  <div class="motherbox">
                      <div class="bigbox">
                      </div>
                      <div class="bigbox">
                      </div>
                      <div class="bigbox">
                      </div>
                      <div class="bigbox">
                      </div>
                  </div>



                  
        </div>

</body>

<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
// console.log( $("td").length );

    var gamemode;
    var td = new Array(),      //保存每个格子的地鼠
    playing = false,       //游戏是否开始
    score = 0,             //分数
    beat = 0,              //鼠标点击次数
    success = 0,           //命中率
    knock = 0,             //鼠标点中老鼠图片次数
    countDown = 30,        //倒计时
    interId = null,        //指定setInterval()的变量
    timeId = null,          //指定setTimeout()的变量
    counter=3000,
    lose=5;
            
$("#gamestart-btn2").on('click', GameStart);
$("#gamestart-btn").on('click', GameStart);
$("#gameover-btn").on('click',GameOver);
$(".bigbox").on('click',hit);

function GameStart(){
    gamemode = $(this).attr("data-gamemode");
    if(gamemode==1){
        playing = true;
        interId = setInterval("show()",1000);
        document.form1.score.value = score;
        document.form1.success.value = success;
        timeShow();
    }
    else{
        playing = true;
        mode=true;
        interId = setInterval("show()",1000);
        document.form1.score.value = score;
        document.form1.success.value = success;
        //timeShow();
}
}

function GameOver(){
    timeStop();
        playing = false;
        counter=3000,
        mode=false,
        lose=5;
        clearMouse();
        alert("Game over！\nScore："+score+"\n命中率："+success);
        alert("Game over！\nScore："+score+"\n命中率："+success);


        success = 0;
        score = 0;
        knock = 0;
        beat = 0;
        countDown = 30;

}





function timeStop(){
    clearInterval(interId);
    clearTimeout(timeId);
}

function timeShow(){
    document.form1.remtime.value = countDown;
    if(countDown == 0){
        GameOver();
        return;
    }else{
        countDown = countDown-1;
        timeId = setTimeout("timeShow()",1000);
    }
}



function show(){
    if(playing){
        if(gamemode==1){
            var current = Math.floor(Math.random()*25);
            $(".bigbox").eq(current).html('<img src="http://i.imgur.com/xVLtKYm.png">');
            setTimeout(function(){
              $(".bigbox").eq(current).html("");
            },3000);
        }
        else{
            var current = Math.floor(Math.random()*25);
            $(".bigbox").eq(current).html('<img src="http://i.imgur.com/xVLtKYm.png">');
            if(counter>200){
              setTimeout(function(){counter=counter-700},5000);
            }
            else{
              counter=200;
            }
            setTimeout(function(){
              $(".bigbox").eq(current).html("");
            },counter);
        }

    }
}

function clearMouse(){

    $(".bigbox").html("");
    
}

function hit(){
    if(playing==false)
    {
        alert("请点击开始游戏");
        return;
    }
    else
    {   
         beat +=1;

         if( $(this).html()!="" ){

            // $("#hitsuccess")[0].play();
            $("#hitsuccess").trigger('play');
            score += 1;
            knock +=1;
            success = knock/beat;
            document.form1.success.value = success;
            document.form1.score.value = score;
            $(this).html("");
        }
        else
        {
            if(gamemode==2){
              if (lose==0){
                GameOver();
              }
              else{
                lose--;
              }
            }
            // $("#hitfail")[0].play();
            $("#hitfail").trigger('play');
            score += -1;
            success = knock/beat;
            document.form1.success.value = success;
            document.form1.score.value = score;
        }
    }
}


</script>

</html></p>
            </div>
        </div>
    </div></div></div></div>

</body>
<br>
<div class="clearfix"></div>
<!-- //user -->
<?php
include("footer.php");
?> 



