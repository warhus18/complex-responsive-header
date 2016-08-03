<?php include_once("functions.php"); ?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

    <link rel="stylesheet" type="text/css" href="style.css" />

    <!-- TypeKit -->
    <script src="https://use.typekit.net/mqp5rrm.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body>    
    
    <header class="header clearfix">
        <div class="clearfix contentHolder display-flex align-items flex-wrap" data-items="center" data-wrap="wrap">
            <div class="logo"><img src="images/SECK_Logo_Color.png" /></div>
            <nav class="menu">
                <ol>
                    <li class="mobileMenu mainMenu"><a>Home</a></li>
                    <li class="mainMenu"><a>Mortgage</a> <?php svg('images/svg/icon_arrow-down.svg','mobileMenu'); ?>
                        <ul class="submenu sub-mortgage">
                            <li><a>Loan Programs</a></li>
                            <li><a>Mortgage Rates</a></li>
                            <li><a>Process</a></li>
                            <li><a>Resources</a></li>
                            <li><a>Get Pre-Approved</a></li>
                            <li><a>FAQ</a></li>
                        </ul>
                    </li>
                    <li class="mainMenu"><a>Investments</a> <?php svg('images/svg/icon_arrow-down.svg','mobileMenu'); ?>
                        <ul class="submenu sub-investments">
                            <li><a>Wealth Management</a></li>
                            <li><a>Financial Planning</a></li>
                            <li><a>Courses</a></li>
                            <li><a>Investment Strategies</a></li>
                            <li><a>About</a></li>
                            <li><a>FAQ</a></li>
                        </ul>
                    </li>
                    <li class="mainMenu"><a>Insurance</a> <?php svg('images/svg/icon_arrow-down.svg','mobileMenu'); ?>
                        <ul class="submenu sub-insurance">
                            <li><a>Auto Insurance</a></li>
                            <li><a>Home Insurance</a></li>
                            <li><a>Life Insurance</a></li>
                            <li><a>Annuities</a></li>
                            <li><a>FAQ</a></li>
                        </ul>
                    </li>
                    <li class="mainMenu"><a>About</a> <?php svg('images/svg/icon_arrow-down.svg','mobileMenu'); ?>
                        <ul class="submenu sub-about">
                            <li><a>Core Team</a></li>
                            <li><a>Testimonials</a></li>
                        </ul>
                    </li>
                    <li class="mainMenu"><a>Contact</a> <?php svg('images/svg/icon_arrow-down.svg','mobileMenu'); ?>
                        <ul class="submenu sub-contact">
                            <li><a>Careers</a></li>
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
            <div class="callButton"><a class="button orange">Call us At 867-5309</a></div>
        </div>
    </header>

    <main class="clearfix">
