<?php
    include_once'includes/pack.php';
    include_once'includes/slice.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- SITE TITLE, KEYWORD, DESCRIPTION -->
    <?php
        // $title = $header->slugtokey($pg_key);
        if(in_array($pg_key,$all_key)) {
          $title = $header->meta_data($pg_key)['title'];
        } else {
          $title = "Page not Found";
        }
        // $title = ($title=='Index') ? 'Home' : $title;
        // $title = ($title=='Faq') ? 'FAQ' : $title;
        $key = $header->meta_data($pg_key)['key'];
        $desc = $header->meta_data($pg_key)['desc'];
        $header->meta($title, $key, $desc);
    ?>

    <?php $header->styles(); ?>

</head>

<body>

  <?php $header->preloader(); ?>

  <!-- Start Header Area -->
  <header class="header-area">

    <?php $header->topbar(); ?>

  <!-- Start Navbar Area -->
  <div class="navbar-area">
      <div class="fovia-responsive-nav">
        <div class="container">
          <div class="fovia-responsive-menu">
            <div class="logo">
              <a href="home">
                <img src="assets/img/nav-logo.jpg" alt="logo">
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="fovia-nav">
        <div class="container">
          <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="home">
              <img src="assets/img/nav-logo.jpg" alt="logo">
            </a>

            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
              <ul class="navbar-nav">
                  <?php $header->nav($pg_key); ?>
              </ul>

              <div class="others-options">
                <a href="appointment" class="btn btn-primary">Appointment</a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- End Navbar Area -->
  </header>
  <!-- End Header Area -->

    <?php
        if($pg_key != 'index' && $pg_key != 'home') {
            $header->breadcrum($pg_key);
        }
    ?>