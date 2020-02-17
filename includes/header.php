<?php
    include_once'includes/pack.php';
    include_once'includes/slice.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- SITE TITLE, KEYWORD, DESCRIPTION -->
    <?php
        $title = $header->slugtokey($pg_key);
        $title = ($title=='Index') ? 'Home' : $title;
        $title = ($title=='Faq') ? 'FAQ' : $title;
        $key = $header->meta_data($pg_key)['key'];
        $desc = $header->meta_data($pg_key)['desc'];
        $header->meta($title, $key, $desc);
    ?>

    <?php $header->styles(); ?>

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600,700,800" rel="stylesheet">

</head>

<body>


    <!-- Start Header Top 
    ============================================= -->
    <?php $header->topbar(); ?>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">
            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="home">
                        <img src="assets/img/logo-180.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <?php $header->nav($pg_key); ?>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h4 class="title">About Us</h4>
                    <p>
                        Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy
                        eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means
                        few blind.
                    </p>
                </div>
                <div class="widget">
                    <h4 class="title">Treatment</h4>
                    <ul>
                        <li><a href="gi-oncology"> Gi Oncology</a></li>
                        <li><a href="urology"> Urology</a></li>
                        <li><a href="breast"> Breast</a></li>
                        <li><a href="gynaec-oncology"> Gynaec oncology</a></li>
                        <li><a href="bone"> Bone</a></li>
                        <li><a href="skin"> Skin</a></li>
                        <li><a href="thyroid"> Thyroid</a></li>
                        <li><a href="hipec-surgery"> HIPEC Surgery</a></li>
                    </ul>
                </div>
                <div class="widget social">
                    <h4 class="title">Connect With Us</h4>
                    <ul class="link">
                        <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <?php
        if($pg_key != 'index' && $pg_key != 'home') {
            echo '<!-- Start Breadcrumb 
            ============================================= -->';
            $header->breadcrum($pg_key);
            echo '<!-- End Breadcrumb -->';
        }
    ?>