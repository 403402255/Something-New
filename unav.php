<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html">

                        <?php 

                        $mname = $_SESSION['username'];

                        ?>

                        <form action="upload.php" enctype="multipart/form-data" method="post">
                            <li color="ffffff">選擇檔案：</li><input id="file" name="file" type="file" >
                            <input id="submit" name="submit" type="submit" value="更換大頭照">
                        </form>

                        <?php
                        $datatable = "imageDB";
                        $results_per_page = 1;
                        $username = $_SESSION['username'];
                        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
                        $start_from = ($page-1) * $results_per_page;
                        $sql = " SELECT *  FROM ".$datatable." WHERE member_name = '$username' ORDER BY id DESC LIMIT $start_from, ".$results_per_page;

                        $rs_result = $conn->query($sql); 
                        ?>
                        <?php 
                        while($row = $rs_result->fetch_assoc()) {
                            ?> 


                            <img src="<?php echo $row["image"];?>" width="200%" alt="" class="hidden-md">

                            <?php 
                        }; 
                        ?> 

                        
                        <img src="<?php echo $row["image"];?>" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="user.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">個人中心</span></a></li>
                        <li><a href="follow.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">我的追蹤清單</span></a></li>
                        <li><a href="giftshop.php"><i class="fa fa-gift" aria-hidden="true"></i><span class="hidden-xs hidden-sm">禮品小舖</span></a></li>
                        <li><a href="game.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">每日任務</span></a></li>
                        <li><a href="eduser.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">修改會員資料</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">設定</span></a></li>
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
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $row["image"];?>" width="200%" alt="" class="hidden-md">



                                            <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="navbar-content">
                                                        <span><?php echo $_SESSION['username'];?></span>
                                                        <p class="text-muted small">
                                                            <?php echo $member_email;?>
                                                        </p>

                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </header>