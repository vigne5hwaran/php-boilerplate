<?php 
include_once('pack.php');
$asset_path = $base_url.'assets/';
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from www.webfulcreations.com/html-templates/dermatology/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2019 10:01:49 GMT -->
<head>
    <!-- important for compatibility charset -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title><?php echo pg_meta($pg_key)['title']; ?></title>
    
    <meta name="author" content="Brite Infomediaa">
    <meta name="keywords" content="<?php echo pg_meta($pg_key)['key']; ?>">
    <meta name="description" content="<?php echo pg_meta($pg_key)['desc']; ?>">
    
    <!-- FavIcon for Website /-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    
    <!-- important for responsiveness remove to make your site non responsive. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Theme Styles CSS File -->
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <style>
        .mb-0 {
        margin-bottom: 0;
        }
        .color-red {
            color: #d12f0a;
        }
    </style>
</head>

<body>
    
    <div class="main-container">
		
    	<div class="header">
        	<div class="grid-container grid-x grid-padding-x">
            	
                <div class="small-12 large-3 medium-3 cell">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/images/logoo.png" alt="Logo"/>
                        </a>
                    </div>
                </div><!-- Cell /  -->
                
                <div class="small-12 large-9 medium-9 cell margin-auto">
                	<div class="info-container">
                        <div class="icon-box">
                            <div class="icon-side">
                                <img src="assets/images/help/icons/tablet.png" alt="icon"/>
                            </div><!-- Icon Side /-->
                            <div class="info-side">
                                <p><strong>+91 94442 61695</strong><br>
                                Book an Appointment
                                </p>
                            </div><!-- Info Side /-->
                        </div>
                        <div class="icon-box">
                            <div class="icon-side">
                                <img src="assets/images/help/icons/pointer.png" alt="icon"/>
                            </div><!-- Icon Side /-->
                            <div class="info-side">
                                <p><strong>Address:</strong><br>
                                Mylapore, Chennai.
                                </p>
                            </div><!-- Info Side /-->
                        </div>
                    </div><!-- Info Container /-->
                </div><!-- Cell /  -->
            	
            </div><!-- Grid Container /-->
        </div>
        <!-- Header /-->
        
        <div class="navigation">
            <div class="grid-container grid-x grid-padding-x nav-wrap">
            	
            	<div class="small-6 large-10 medium-9 cell">
                	<div class="top-bar float-left">
                    	<div class="top-bar-title">
                            <span data-responsive-toggle="responsive-menu" data-hide-for="large">
                                <a data-toggle=""><span class="menu-icon dark float-left"></span></a>
                            </span>
                        </div>
                  		<nav id="responsive-menu">
                            <ul class="menu vertical large-horizontal dropdown" data-responsive-menu="accordion medium-dropdown" role="menubar" data-dropdown-menu="4gg5js-dropdown-menu" data-disable-hover="true">
                                <?php callmenu($pg_key); ?>
                            </ul>
                        </nav>
                    </div><!-- top-bar Ends -->
                </div><!-- Cell /  -->
                
            </div><!-- right Ends /-->
        </div>
        <!-- navigation CSS Ends /-->
        <?php
        if($pg_key !== 'home' && $pg_slug !== 'home.php') {
            echo '<div class="title-section dark-bg module">

                    <div class="grid-container grid-x grid-padding-x">

                        <div class="small-12 cell">
                        <h1>'. pg_meta($pg_key)["title"] .'</h1>
                        </div>

                    </div>  

                </div>';
        }
        ?>