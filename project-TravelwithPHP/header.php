<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F5-Travel</title>
    <link rel="stylesheet" href="./assets/css/user.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/books.css">
    <link rel="stylesheet" href="./assets/css/blog.css">
    <link rel="stylesheet" href="./assets/css/tourDetail.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
    <link rel="stylesheet" href="project.js">
	<link rel="stylesheet" type="text/css" href="./assets/css/contact.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/contact_responsive.css">

</head>
<body>

    <div id = "main">
        <div id = "header">
            <div class = "header-topbar">
                <div class="grid-wide">
                    <div class="header-topbar-container">
                        <div class="row">
                            <div class="left-topbar">
                                <span style = "font-size: 10px;"> +89 797 278 779</span>
                                <a href="#">
                                    <i class = "ti-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class = "ti-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class = "ti-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class = "ti-pinterest-alt"></i>
                                </a>
                            </div>

                            <div class="right-topbar">
                                <b>
                                    <?php
                                        if(!isset($_SESSION['email'])){ 
                                            echo '<a href="';
                                            echo 'login.php">';
                                            echo "LOGIN | SIGN UP";
                                        }
                                        else {
                                            echo '<a href="';
                                            echo 'user.php">';
                                            echo $_SESSION['fname'] . $_SESSION['lname'];
                                        }
                                    ?>
                                    </a> 
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div id="nav-container">
                <ul id="nav">
                    <li><a href = "index.php">HOME</a></li>
                    <li><a href = "about.html">ABOUT</a></li>
                    <li><a href = "books.php">BOOK NOW</a></li>
                    <li><a href = "blog.php">BLOG</a></li>
                    <li><a href = "contact.php">CONTACT</a></li>
                </ul>
            </div>
            <div class="title">
                    <b style = "font-family: 'Courier New', Courier, monospace; color: #fff; font-size: 24px;">F5 TRAVEL</b>
            </div>
            <div class="search-btn">
                <i class="search-icon ti-search"></i>
            </div>
        </div>
    
