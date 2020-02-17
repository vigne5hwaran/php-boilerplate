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