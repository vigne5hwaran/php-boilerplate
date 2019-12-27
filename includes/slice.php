<?php 
include_once'includes/data.php';

class Header{
	public function meta_data($in){
		global $pg_meta;
		if(isset($pg_meta[$in])){
			return $pg_meta[$in];
		}
	}

	public function meta($title, $key, $desc) {
		echo '
		<title>'.$title.' | AMBE CLINIC, Chrompet, Chennai</title>
		<meta name="keywords" content="'.$key.'" />
		<meta name="description" content="'.$desc.'" />
		<meta name="author" content="Brite Infomedia" />
		';
	}
	
	public function links() {
		echo '
			<!-- Bootstrap core CSS -->
			<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
			<!-- Google Font  -->
			<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,700|Raleway:400,400i,500i,600,700"
				rel="stylesheet">
			<!-- flaticon icon -->
			<link rel="stylesheet" href="assets/fonts/icon-font.min.css">
			<!-- icofont icon -->
			<link rel="stylesheet" href="assets/fonts/icofont.css">
			<!--- meanmenu Css-->
			<link rel="stylesheet" href="assets/css/meanmenu.min.css" media="all" />
			<!-- animate CSS -->
			<link rel="stylesheet" href="assets/css/animate.css">
			<!--- owl carousel Css-->
			<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
			<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
			<!-- venobox -->
			<link rel="stylesheet" href="assets/venobox/css/venobox.css" />
			<!-- whatsapp -->
			<link rel="stylesheet" href="assets/venobox/css/floating-wpp.min.css" />
			<!-- Style CSS -->
			<link rel="stylesheet" href="assets/css/style.css">
			<!-- Responsive  CSS -->
			<link rel="stylesheet" href="assets/css/responsive.css">
			';
	}

	public function active($arg1,$arg2){
		if(is_array($arg2) && isset($arg2[$arg1])){
			return 'active';
		}else{
			if(($arg1=='index' || $arg1=='home') && $arg2=='index'){
				return 'active';
			}else if($arg1==$arg2){
				return 'active';
			}
		}
	}

	public function mobile_nav(){
		global $all_pages;
		foreach($all_pages as $k1=>$v1){
			if(is_array($v1)){
				echo '<li><a href="javascript:void(0);">'.$k1.'</a>';
				echo '<ul>';
					foreach($v1 as $k2=>$v2){
						echo '<li><a href="'.$k2.'">'.$v2.'</a></li>';
					}
				echo '</ul>
					</li>';
			}else{
				echo '<li><a href="'.$k1.'">'.$v1.'</a></li>';
			}
		}
	}

	public function desk_nav($key){
		global $all_pages;
		$key = ($key == 'index')?'home':$key;
		foreach($all_pages as $k1=>$v1){
			if(is_array($v1)){
				echo '<li class="dropdown '.$this->active($key,$v1).'"><a href="javascript:void(0);" class="nav-link">'.$k1.'</a>';
				echo '<ul class="dropdown-menu">';
					foreach($v1 as $k2=>$v2){
						echo '<li><a href="'.$k2.'">'.$v2.'</a></li>';
					}
				echo '</ul>
					</li>';
			}else{
				echo '<li class="'.$this->active($key,$k1).'"><a href="'.$k1.'" class="nav-link">'.$v1.'</a></li>';
			}
		}
	}

	public function preloader() {
		echo '	<!-- START PRELOADER -->
				<div id="page-preloader">
					<div class="preloader-wrench"></div>
				</div>
				<!-- END PRELOADER -->';
	}

	public function topbar() {
		echo '
			<!-- START LOGO AREA -->
			<div class="logo-area">
				<div class="auto-container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-7 mx-md-auto mx-sm-auto mx-auto pl-0">
							<div class="logo">
								<a href="home">
									<img class="img-fluid logo-img" src="assets/img/ambe-logo-2.png" alt="logo">
								</a>
							</div>
						</div>
						<!-- end col -->
						<div class="col-lg-9 col-md-12 col-sm-12 col-12">
							<div class="header-info-box">
								<div class="header-info-icon"><span class="lnr lnr-phone-handset"></span></div>
								<p>For Appointments</p>
								<h6>044-43535554</h6>
							</div>
							<div class="header-info-box">
								<div class="header-info-icon"><span class="lnr lnr-map-marker"></span></div>
								<p>Consulting hours</p>
								<h6>Mon - Sat : 5 pm - 7 pm</h6>
							</div>
							<div class="header-info-box">
								<a class="header-quote-btn" href="contact">Appointment <i
										class="icofont icofont-caret-right"></i></a>
							</div>
						</div>
						<!-- end col -->
					</div>
				</div>
			</div>
			<!-- END LOGO AREA -->';
	}

	public function breadcrum($key) {
		if($key == 'about' || $key == 'contact') {
			$key .= ' us';
		}
		if($key == 'faq') {
			$key = strtoupper($key);
		}
		$key2 = $key;
		$key = ucwords(str_replace('-', ' ', $key));
		$pages = array('about us', 'FAQ', 'contact us', 'testimonial', 'appointment');
		global $service;
		echo '<!-- START PAGE BANNER AND BREADCRUMBS -->
				<section class="single-page-title-area" data-background="assets/img/bg/heading.png">
					<div class="auto-container">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-12 col-12">
								<div class="single-page-title">';
								if(in_array($key2,$pages) || in_array($key2,$service)) {
									echo	'<h2>'.$key.'</h2>';
								} else {
									echo	'<h2>Page Not Found</h2>';
								}
							echo '</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-12">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="home"><span class="lnr lnr-home"></span></a></li>';
									if(in_array($key2,$service)){
										echo	'<li class="breadcrumb-item">Services</li>';
									}
							echo	'<li class="breadcrumb-item active">'.$key.'</li>
								</ol>
							</div>
						</div>
						<!-- end row-->
					</div>
				</section>
				<!-- END PAGE BANNER AND BREADCRUMBS -->';
	}
}

$header = new Header;


class Page {
	public function services($arg) {
		global $img_path;
		echo '
		<!-- START BLOG SECTION -->
		<section id="blog" class="section-padding">
			<div class="auto-container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-12">
						<div class="single-blog mb-3">
							<div class="single-blog-img">
								<div class="entry-mark"></div>
								<img class="img-fluid" src="'.$img_path.$arg.'.jpg'.'" 
								alt="'.$arg.'">
							</div>
						</div>
						<strong>'.$this->services_data($arg).'</strong>
					</div>
					<!-- end col -->';
					$this->sidebar();
		echo	'</div>
			</div>
			<!--- END CONTAINER -->
		</section>
		<!-- END BLOG SECTION -->
		';
	}
	public function services_data($in){
		global $services_data;
		if(isset($services_data[$in])){
			return $services_data[$in];
		}
	}
	public function photos() {
		$path = 'assets/images/gallery/';
		$images = array(
			'photo 1' => 'gallery-1.jpg',
			'photo 2' => 'gallery-2.jpg',
			'photo 3' => 'gallery-3.jpg',
			'photo 4' => 'gallery-9.jpg',
			'photo 5' => 'gallery-10.jpg',
			'photo 6' => 'gallery-11.jpg'
		);
		foreach($images as $key => $value) {
			$val = $path.$value;
			echo '
			<div style="background: url('.$val.') no-repeat center; background-size: cover"
				class="alldepartment"><img src="'.$val.'" alt="img"
					class="img-responsive">
				<div class="hover-effect">
					<div class="bg-overlay">
						<h4 class="title-hover fadeIn animated"><a
								href="'.$val.'"
								data-fancybox-group="galleryDepartment"
								class="link-gallery zoomIn animated fancybox"></a>'.$key.'</h4>
					</div>
				</div>
			</div>
			';
		}    
	}
	public function sidebar() {
		echo '
		<aside
			class="col-lg-4 col-md-4 col-sm-12 col-12 pl-lg-5 pl-md-5 pl-sm-2 pl-2 mt-lg-0 mt-md-0 mt-sm-0 mt-5">
			<div class="sidebar-widget">
				<h5 class="widget-title">Services</h5>
				<!-- end widget tittle-->
				<div class="servide-list">
					<ul>';
					global $services;
					foreach($services as $k => $v) {
						echo '<li><a href="'.$k.'"><i class="icofont icofont-rounded-right"></i> '.$v.'</a> </li>';
					}
		echo '
					</ul>
				</div>
			</div>
		</aside>
		<!-- end side bar -->
		';
	}
	public function counter() {
		echo '
		<!-- START COUNTER SECTION -->
		<section id="counter" class="counter-section overlay section-back-image"
			data-background="assets/img/bg/counter-bg.jpg">
			<div class="container">
				<div class="row wow fadeInDown">
					<div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
						<div class="single-counter">
							<div class="single-counter-icon">
								<i class="icofont icofont-users-alt-2"></i>
							</div>
							<div class="single-counter-text">
								<h5 class="timer">1250</h5>
								<p>Happy Patients</p>
							</div>
						</div>
					</div>
					<!-- end single counter -->
					<div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
						<div class="single-counter">
							<div class="single-counter-icon">
								<i class="icofont icofont-nurse-alt"></i>
							</div>
							<div class="single-counter-text">
								<h5 class="timer">1350</h5>
								<p>Medical Workers</p>
							</div>
						</div>
					</div>
					<!-- end single counter -->
					<div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
						<div class="single-counter">
							<div class="single-counter-icon">
								<i class="icofont icofont-doctor-alt"></i>
							</div>
							<div class="single-counter-text">
								<h5 class="timer">1560</h5>
								<p>Total Doctors</p>
							</div>
						</div>
					</div>
					<!-- end single counter -->
					<div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
						<div class="single-counter">
							<div class="single-counter-icon">
								<i class="icofont icofont-hat-alt"></i>
							</div>
							<div class="single-counter-text">
								<h5 class="timer">1670</h5>
								<p>Medical Experience</p>
							</div>
						</div>
					</div>
					<!-- end single counter -->
				</div>
			</div>
			<!--- END CONTAINER -->
		</section>
		<!-- END COUNTER SECTION -->
		';
	}
}

$page = new Page;

class Footer {
	public function footer_content(){
		echo '
			<div class="footer-content">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="info-footer">
								<div class="info-footer-img btn-for-icon bottom"><i class="icon1 icon-hphone"></i>
								</div>
								<h2 class="title-footer">+91 97910 57748</h2>
								<div class="footer-description">For emergency case </div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="info-footer">
								<div class="info-footer-img btn-for-icon bottom"><i class="icon1 icon-hmail"></i>
								</div>
								<h2 class="title-footer">vanajahospital@gmail.com</h2>
								<div class="footer-description">Send Email For Help</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		';
	}

	public function script($key){
		echo '
			<!-- Latest jQuery -->
			<script src="assets/js/jquery-2.2.4.min.js"></script>
			<!-- popper js -->
			<script src="assets/bootstrap/js/popper.min.js"></script>
			<!-- Latest compiled and minified Bootstrap -->
			<script src="assets/bootstrap/js/bootstrap.min.js"></script>
			<!-- meanmenu min js  -->
			<script src="assets/js/jquery.meanmenu.min.js"></script>
			<!-- Sticky JS -->
			<script src="assets/js/jquery.sticky.js"></script>
			<!-- gijgo js  -->
			<script src="assets/js/gijgo.js"></script>
			<!-- owl-carousel min js  -->
			<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
			<!-- jquery appear js  -->
			<script src="assets/js/jquery.appear.js"></script>
			<!-- countTo js -->
			<script src="assets/js/jquery.inview.min.js"></script>
			<!-- jquery mixitup js -->
			<script src="assets/js/jquery.mixitup.min.js"></script>
			<!-- venobox js -->
			<script src="assets/venobox/js/venobox.min.js"></script>
			<!-- scrolltopcontrol js -->
			<script src="assets/js/scrolltopcontrol.js"></script>
			<!-- WOW - Reveal Animations When You Scroll -->
			<script src="assets/js/wow.min.js"></script>';
			if($key == 'contact') {
				echo '
				<!-- recaptcha -->
        		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
				<!-- Form Validator JS -->
				<script src="assets/js/form-validator.min.js"></script>
				<!-- Form Validator JS -->
				<script src="assets/js/jquery.validate.min.js"></script>
				<!-- Contact Validator config -->
				<script src="assets/js/validation-script.js"></script>
				<!-- Contact Form JS -->
				<script src="assets/js/ajax-script.js"></script>
				';
			}
		echo '<!-- whatasapp -->
			<script src="assets/js/floating-wpp.min.js"></script>
			<!-- scripts js -->
			<script src="assets/js/scripts.js"></script>';;
	}

	// public function pg_script($in){
	// 	$pg_script = array(
	// 		'index'	=> '
	// 			<script src="assets/libs/isotope/isotope.min.js"></script>
	// 			<script src="assets/js/pages/contact.js"></script>
	// 		',
	// 		'home'	=> '
	// 			<script src="assets/libs/isotope/isotope.min.js"></script>
	// 			<script src="assets/js/pages/contact.js"></script>
	// 		',
	// 		'faq'  => '<script src="assets/js/pages/faq.js"></script>',
	// 		'about' => '<script src="assets/js/pages/services-detail.js"></script>',
	// 		'contact' => '<script src="assets/js/pages/contact.js"></script>',
	// 		'gallery' => '
	// 			<script src="assets/libs/hoverdir/jquery.hoverdir.js"></script>
	// 			<script src="assets/libs/hoverdir/modernizr.custom.97074.js"></script>
	// 			<script src="assets/libs/isotope/isotope.min.js"></script>
	// 			<script src="assets/js/pages/gallery.js"></script>
	// 		'
	// 	);
	// 	if(isset($pg_script[$in])){
	// 		echo $pg_script[$in];
	// 	}
    // }
}

$footer = new Footer;

?>