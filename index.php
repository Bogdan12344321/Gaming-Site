<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gaming Maniacs</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--Slider -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.5/jquery.bxslider.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.5/jquery.bxslider.css">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="style/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="style/css/magazine.css"/>
    <link rel="stylesheet" type="text/css" href="style/css/forms.css"/>
</head>
<body>
<div id="header">
    <div class="nav-bar">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.php">Gaming Maniacs</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-th-list"></span> Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><span class="glyphicon glyphicon-headphones"></span> Gaming</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-hdd"></span> Hardware</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-briefcase"></span> Software</a></li>
                            </ul>
                        </li>
                        <li><a href="#">News</a></li>
                        <li><a href="view/reviews.php">Reviews</a></li>
                        <li><a href="#">Indie</a></li>
                        <li><a href="view/magazine.php">Magazine</a></li>
                        <li><a href="view/about.php">About</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if(isset($_SESSION['email'])){
                                echo $_SESSION['email'];
                                echo '<li><form action="model/logout.php" method="POST"><button type="submit" name="submit" value="submit">LogOut</button></form></li>';
                            } else {
                                echo '<li><a href="view/forms/Signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                      <li><a href="view/forms/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<div id="slider">
    <ul class="bxslider">
        <li><a href="http://store.steampowered.com"><img src="style/bxslider/img/img1.png" /></a></li>
        <li><a href="https://www.pcgarage.ro"><img src="style/bxslider/img/img2.png" /></a></li>
        <li><a href="https://assassinscreed.ubisoft.com/game/en-us/home/"><img src="style/bxslider/img/img3.jpg" /></a></li>
        <li><a href="http://wolfenstein.wikia.com/wiki/Wolfenstein_II:_The_New_Colossus"><img src="style/bxslider/img/img4.jpg" /></a></li>
    </ul>
</div>
<div id="content">
</div>
<div id="footer">
</div>
<? include('model/login.php'); ?>
<script>
    $(document).ready(function(){
        $('.bxslider').bxSlider();
    });
</script>
<?php include_once 'view/footer.php' ?>