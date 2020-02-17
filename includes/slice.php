<?php 
include_once'includes/data.php';

class Func {
	public function keytoslug($arg) {
		$arg = strtolower($arg);
		$arg = str_replace(' ', '-', $arg);
		return $arg;
	}

	public function slugtokey($arg) {
		$arg = ucwords(str_replace('-', ' ', $arg));
		return $arg;
	}

	public function meta_data($in) {
		global $pg_meta;
		if(isset($pg_meta[$in])) {
			return $pg_meta[$in];
		}
	}

	public function active($arg1,$arg2) {
		if(is_array($arg2) && isset($arg2[$arg1])) {
			return 'active';
		} else {
			if(($arg1=='index' || $arg1=='home') && $arg2=='index') {
				return 'active';
			} else if($arg1==$arg2) {
				return 'active';
			}
		}
	}

}


class Header extends Func {

	public function meta($title, $key, $desc) {
		echo '
		<title>'.$title.' | AMBE CLINIC, Chrompet, Chennai</title>
		<meta name="keywords" content="'.$key.'" />
		<meta name="description" content="'.$desc.'" />
		<meta name="author" content="Brite Infomedia" />
		';
	}
	
	public function styles() {
		echo '
		<!-- ========== Start Stylesheet ========== -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
		<link href="assets/css/flaticon-set.css" rel="stylesheet" />
		<link href="assets/css/magnific-popup.css" rel="stylesheet" />
		<link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
		<link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
		<link href="assets/css/animate.css" rel="stylesheet" />
		<link href="assets/css/bootsnav.css" rel="stylesheet" />
		<link href="style.css" rel="stylesheet">
		<link href="assets/css/responsive.css" rel="stylesheet" />
		<!-- ========== End Stylesheet ========== -->
		<link type="text/css" rel="Stylesheet" 
    	href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />';
	}


	public function preloader() {
		echo '	<!-- Preloader Start -->
				<div class="se-pre-con"></div>
				<!-- Preloader Ends -->';
	}

	public function topbar() {
		echo '
			<div class="top-bar-area inline inc-border">
				<div class="container">
					<div class="row">
						<div class="col-md-8 address-info text-left">
							<div class="info box">
								<ul>
									<li>
										<i class="fas fa-map-marker-alt"></i> Kilpauk, Chennai, 600010
									</li>
									<li>
										<i class="fas fa-envelope-open"></i> ayyappas1@yahoo.co.uk
									</li>
									<li>
										<i class="fas fa-phone"></i> +044 - 4295 6777
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4 bar-btn text-right">
							<a href="contact">Make Appoinment</a>
						</div>
					</div>
				</div>
			</div>';
	}

	public function nav($key){
		global $all_pages;
		// $key = ($key == 'index')?'home':$key;
		foreach($all_pages as $k1=>$v1){
			if(is_array($v1)){
				echo '<li class="dropdown '.$this->active($key,$v1).'"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">'.$k1.'</a>';
				echo '<ul class="dropdown-menu">';
					foreach($v1 as $k2=>$v2){
						if(is_array($v2)) {
							$kt = $k2;
							$kt = $this->keytoslug($kt);
							echo '<li class="dropdown '.$this->active($key,$v2).'"><a href="'.$kt.'" class="dropdown-toggle" data-toggle="dropdown">'.$k2.'</a>
									<ul class="dropdown-menu">';
							foreach($v2 as $k3=>$v3){
								echo '<li class="'.$this->active($key,$k3).'"><a href="'.$k3.'">'.$v3.'</a></li>';
							}
							echo '</ul>';
						} else {
							echo '<li class="'.$this->active($key,$k2).'"><a href="'.$k2.'">'.$v2.'</a></li>';
						}
					}
				echo '</ul></li>';
			}else{
				echo '<li class="'.$this->active($key,$k1).'"><a href="'.$k1.'">'.$v1.'</a></li>';
			}
		}
	}

	public function breadcrum($key) {
		if($key == 'contact') {
			$key .= ' us';
		}
		$key2 = $key;
		$key = $this->slugtokey($key);
		$pages = array('specialist', 'contact us', 'photo-gallery', 'video-gallery', 'appointment');
		global $service_keys;
		// print_r($service_keys);
		echo '<div class="breadcrumb-area shadow dark bg-fixed text-light"
				style="background-image: url(assets/img/banner/12.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-md-6">';
							if(in_array($key2,$pages) || in_array($key2,$service_keys)) {
								echo '<h1>'.$key.'</h1>';
							} else {
								echo '<h1>Page Not Found</h1>';
							}
						echo '</div>
						<div class="col-md-6 text-right">
							<ul class="breadcrumb">
								<li><a href="home"><i class="fas fa-home"></i> Home</a></li>';
								if(in_array($key2,$service_keys)){
									echo	'<li><a href="javascript:void();">Treatment</a></li>';
								}
							echo '<li class="active">'.$key.'</li>
							</ul>
						</div>
					</div>
				</div>
			</div>';
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
					<h1>"We Make Quality Healthcare"</h1>
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

	public function script(){
		echo '
			<script src="assets/js/jquery-1.12.4.min.js"></script>
			<script src="assets/js/bootstrap.min.js"></script>
			<script src="assets/js/equal-height.min.js"></script>
			<script src="assets/js/jquery.appear.js"></script>
			<script src="assets/js/jquery.easing.min.js"></script>
			<script src="assets/js/jquery.magnific-popup.min.js"></script>
			<script src="assets/js/modernizr.custom.13711.js"></script>
			<script src="assets/js/owl.carousel.min.js"></script>
			<script src="assets/js/wow.min.js"></script>
			<script src="assets/js/isotope.pkgd.min.js"></script>
			<script src="assets/js/imagesloaded.pkgd.min.js"></script>
			<script src="assets/js/count-to.js"></script>
			<script src="assets/js/jquery.nice-select.min.js"></script>
			<script src="assets/js/bootsnav.js"></script>
			<script src="assets/js/main.js"></script>
			<!-- recaptcha -->
        	<script src="https://www.google.com/recaptcha/api.js" async defer></script>';
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