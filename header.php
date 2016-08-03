<?php include_once("functions.php"); ?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>    
    
    <header class="header clearfix">
        <div class="clearfix contentHolder display-flex align-items flex-wrap" data-items="center" data-wrap="wrap">
            <div class="logo"><img src="images/logo.jpg" /></div>
            <nav class="menu">
                <ol>
                    <li class="mobileMenu mainMenu"><a>Home</a></li>
                    <li class="mainMenu"><a>Ice Cream</a> <?php svg('images/svg/icon_arrow-down.svg','mobileMenu'); ?>
                        <ul class="submenu">
                            <li><a>Rocky Road</a></li>
                            <li><a>Chocolate</a></li>
                            <li><a>Vanilla</a></li>
                            <li><a>Butter Pecan</a></li>
                            <li><a>Coffee</a></li>
                            <li><a>Cookie Dough</a></li>
                            <li><a>Mint Chocolate Chip</a></li>
                            <li><a>Pistachio</a></li>
                            <li><a>Cookies &amp; Cream</a></li>
                        </ul>
                    </li>
                    <li class="mainMenu"><a>Candy</a> <?php svg('images/svg/icon_arrow-down.svg','mobileMenu'); ?>
                        <ul class="submenu">
                            <li><a>Tootsie Roll</a></li>
                            <li><a>Twix</a></li>
                            <li><a>Butterfinger</a></li>
                            <li><a>Snickers</a></li>
                            <li><a>3 Musketeers</a></li>
                            <li><a>Krackel</a></li>
                            <li><a>Almond Joy</a></li>
                            <li><a>Mounds</a></li>
                        </ul>
                    </li>
                    <li class="mainMenu"><a>Cookies</a> <?php svg('images/svg/icon_arrow-down.svg','mobileMenu'); ?>
                        <ul class="submenu">
                            <li><a>Chocolate Chunk</a></li>
                            <li><a>Sugar</a></li>
                            <li><a>Snickerdoodle</a></li>
                            <li><a>M&amp;M</a></li>
                            <li><a>Peanut Butter</a></li>
                            <li><a>White Chocolate</a></li>
                        </ul>
                    </li>
                    <li class="mainMenu"><a>Wine</a> <?php svg('images/svg/icon_arrow-down.svg','mobileMenu'); ?>
                        <ul class="submenu">
                            <li><a>Cabernet Sauvignon</a></li>
                            <li><a>Pinot Grigio</a></li>   
                        </ul>
                    </li>
                    <li class="mainMenu"><a>Beer</a> <?php svg('images/svg/icon_arrow-down.svg','mobileMenu'); ?>
                        <ul class="submenu">
                            <li><a>Pacifico</a></li>
                        </ul>
                    </li>
                    <li class="mobileMenu mobileSocial">
                        <ul class="social">
                            <li><a><?php svg('images/svg/social_linkedIn.svg'); ?></a></li>
                            <li><a><?php svg('images/svg/social_facebook.svg'); ?></a></li>
                            <li><a><?php svg('images/svg/social_twitter.svg'); ?></a></li>
                            <li><a><?php svg('images/svg/social_youtube.svg'); ?></a></li>
                        </ul>
                    </li>
                </ol>
                <div class="hamburger"><span></span></div>
                <div class="dimmer"></div>
            </nav> 
            <ul class="social">
                <li><a><?php svg('images/svg/social_linkedIn.svg'); ?></a></li>
                <li><a><?php svg('images/svg/social_facebook.svg'); ?></a></li>
                <li><a><?php svg('images/svg/social_twitter.svg'); ?></a></li>
                <li><a><?php svg('images/svg/social_youtube.svg'); ?></a></li>
            </ul>
        </div>
    </header>

    <main class="clearfix">
