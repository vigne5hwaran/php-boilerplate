<?php 
    include_once'includes/pack.php';
    include_once'includes/slice.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/ambe-icon.png" />
    <?php
        $title = ucwords(str_replace('-', ' ', $pg_key));
        $title = ($title=='Index') ? 'Home' : $title;
        $title = ($title=='Faq') ? 'FAQ' : $title;
        $key = $header->meta_data($pg_key)['key'];
        $desc = $header->meta_data($pg_key)['desc'];
        $header->meta($title, $key, $desc);
        $header->links();
    ?>
</head>
<body>
    <?php $header->preloader(); ?>
    <!-- START HEADER SECTION -->
	<header class="main-header header-1">
        <?php $header->topbar(); ?>
        <!-- START NAVIGATION AREA -->
		<div class="sticky-menu">
			<div class="mainmenu-area">
				<div class="auto-container">
					<div class="row">
						<div class="col-lg-12 d-lg-block d-md-none d-sm-none d-none ">
							<nav class="navbar navbar-expand-lg justify-content-center">
								<ul class="navbar-nav">
                                    <?php $header->desk_nav($pg_key); ?>
                                </ul>
							</nav>
						</div>
					</div>
				</div>
				<!--- END CONTAINER -->
			</div>
            <!-- END NAVIGATION AREA -->

            <!-- MOBILE-MENU-AREA START -->
			<div class="mobile-menu-area d-lg-none d-md-block d-sm-block d-block">
				<div class="col-md-9">
					<div class="mobile-menu">
						<nav id="dropdown">
							<ul class="navbar-nav">
                                <?php $header->mobile_nav(); ?>
                            </ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- MOBILE-MENU-AREA END -->
		</div>
	</header>
    <!-- END HEADER SECTION -->
    <?php
        if($pg_key != 'index' && $pg_key != 'home') {
            $header->breadcrum($pg_key);
        }
    ?>