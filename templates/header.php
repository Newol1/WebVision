<?php include_once "function.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Kolya Butko">
    <link rel="stylesheet" href="<?php home_url()?>/css/normalize-reset.min.css">
    <link rel="stylesheet" type="text/css" href="<?php home_url()?>/css/fonts.min.css">
    <link rel="stylesheet" href="<?php home_url()?>/css/style.min.css">
    <title>Site</title>
</head>

<body class="no-x-scroll">
<!-- HEADER START -->
<header>
    <div class="header-top">
        <div class="wrapper">
            <div class="contact-info left">
                <div class="email"><img src="<?php home_url()?>/img/icons/mail.svg" alt="mail">info@shopy.com</div>
                <div class="phone"><img src="<?php home_url()?>/img/icons/phone.svg" alt="phone">453-5553-996</div>
            </div>
            <div class="social-media right">
                <img src="<?php home_url()?>/img/icons/facebook.svg" alt="facebook">
                <img src="<?php home_url()?>/img/icons/twitter.svg" alt="twitter">
                <img src="<?php home_url()?>/img/icons/google.svg" alt="google">
                <img src="<?php home_url()?>/img/icons/instegram.svg" alt="instegram">
            </div>
        </div>
    </div>
    <nav class="resized-nav">
        <div class="cross"> &#10005;</div>
        <ul>
            <li class="active-li"><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Hot Deals</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div class="logo">s
            <img src="<?php home_url()?>/img/logo.png" alt="logo">
        </div>
    </nav>
    <div class="header-main">
        <div class="wrapper">
            <div class="logo">
                <img src="<?php home_url()?>/img/logo.png" alt="logo">
            </div>
            <div class="resized-nav-button">
                <div>
                    <hr>
                    <hr>
                    <hr>
                </div>
                <p>MENU</p>
            </div>
            <nav class="main-nav">
                <ul>
                    <li class="active-li"><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Hot Deals</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <div class="user-actions">
                <div class="search">
                    <img src="<?php home_url()?>/img/icons/search.svg" alt="search">
                </div>
                <div class="user">
                    <img src="<?php home_url()?>/img/icons/user.svg" alt="user">
                </div>
                <div class="cart">
                    <img src="<?php home_url()?>/img/icons/cart_2.svg" alt="cart">
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER END -->