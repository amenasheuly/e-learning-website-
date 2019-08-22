<?php
session_start();
require ('connect.php');
if(@$_SESSION['user']){
    ?>

    <?php include '../include/header.php' ?>

    <header class="main" style="background-color: #3F4B58;">
        <div class="container">
            <nav class="navbar" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="forum.php">
                        <img id="logo"src="../../../resource/front-end/img/logo.png"

                    </a>
                </div>
                <div class="collapse navbar-collapse" color="blue">
                    <div class="navbar-right menu-main" name="logout">
                        <a class="btn btn-theme navbar-btn btn-orange "
                           href="forum.php?action=logout">Logout</a>
                    </div>
                    <div class="navbar-right menu-main" name="logout">
                        <a class="btn btn-theme navbar-btn btn-orange "
                           href="member.php">Member</a>
                    </div>
                    <div class="navbar-right menu-main" name="logout">
                        <a class="btn btn-theme navbar-btn btn-orange "
                           href="account.php">My Account</a>
                    </div>
                    <div class="navbar-right menu-main" name="logout">
                        <a class="btn btn-theme navbar-btn btn-orange "
                           href="forum.php">Home page</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <body>
    <div class="col-md-12">
        <form action="replies.php" method="post">
            <center>
                <br>

                Answer of the Question: <br>
                <textarea style="resize: none;width: 400px;height: 300px;" name="con"></textarea><br>
                <input type="submit" name="submit" value="post" style="width: 400px;">
            </center>
        </form>
    </div>

    </body>
    <?php

    $content = @$_POST['con'];
    $date = date("y-m-d");
    if (isset($_POST['submit'])) {
        if($content){
              if($query = mysqli_query($link,"INSERT INTO `online_learning`.`replies` (`replies_id`, `replies_content`, `replies_creator`, `date`) VALUES ('', '".$content."', '".$_SESSION["user"]."', '".$date."');")){

                    echo 'success';
                }else{
                    echo 'failed';
                }

        }else{
            echo 'Please fill all the field';
        }
    }
}else {
    echo 'You must be logged in';
}
?>