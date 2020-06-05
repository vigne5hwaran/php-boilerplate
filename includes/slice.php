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
		<title>'.$title.' | Skin & Hair Clinic</title>
		<meta name="keywords" content="'.$key.'" />
		<meta name="description" content="'.$desc.'" />
		<meta name="author" content="Brite Infomedia" />
		';
	}
	
	public function styles() {
		echo '
    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Animation Min CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Font Awesome Min CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Slick Min CSS -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Odometer Min CSS -->
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <!-- FlatIcon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- My styles CSS -->
    <link rel="stylesheet" href="assets/css/mystyles.css">';
	}


	public function preloader() {
		echo '<!-- Preloader -->
    <div class="preloader">
      <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
      </div>
    </div>
    <!-- End Preloader -->';
	}

	public function topbar() {
		echo '
    <div class="top-header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <ul class="header-contact-info">
            <li><i class="far fa-clock"></i> Thus - 6:30 to 8:30 pm</li>
            <li><i class="fas fa-phone"></i> Call Us: <a href="tel:919626262945">+91 96262 62945</a></li>
            <li><i class="far fa-paper-plane"></i> <a href="mailto:lavanya.cosmet@gmail.com">lavanya.cosmet@gmail.com</a></li>
          </ul>
        </div>

        <div class="col-lg-4">
          <div class="header-right-content">
            <ul class="top-header-social">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>

          </div>
        </div>
      </div>
    </div>
  </div>';
	}

	public function nav($key){
    global $all_pages, $service;
    // $key = ($key == 'index')?'home':$key;
    $i=0;
		foreach($all_pages as $k1=>$v1){
			if(is_array($v1)){
        echo '<li class="nav-item"><a href="javascript:void(0);" class="nav-link '.$this->active($key,$v1).'">'.$k1.' <i class="fas fa-angle-down"></i></a>';
            if($i==2) {
              echo '<ul class="dropdown-menu long-dropdown">';
            } else {
              echo '<ul class="dropdown-menu">';
            }
					foreach($v1 as $k2=>$v2){
						if(is_array($v2)) {
              echo '<li class="dropdown '.$this->active($key,$v2).'"><a href="javascript:void(0);">'.$k2.'</a>';
									echo '<ul>';
							foreach($v2 as $k3=>$v3){
                echo '<li class="'.$this->active($key,$k3).'"><a href="'.$k3.'">'.$v3.'</a></li>';
							}
							echo '</ul>';
						} else {
              if($v2 == "Blog") {
                // echo '<script>console.log("yes bro")</script>';
                echo '<li class="'.$this->active($key,$k2).'"><a href="'.$k2.'" target="blank">'.$v2.'</a></li>';
              } else {
                echo '<li class="nav-item"><a href="'.$k2.'" class="nav-link '.$this->active($key,$k2).'">'.$v2.'</a></li>';
              }
						}
					}
				echo '</ul></li>';
			}else{
        echo '<li class="nav-item"><a href="'.$k1.'" class="nav-link '.$this->active($key,$k1).'">'.$v1.'</a></li>';
			} $i++;
		}
	}

	public function breadcrum($key) {
		$keys = $this->slugtokey($key);
    global $all_key;
    array_push($all_key, 'appointment');
    // unset($all_key[1]);
    // print_r($all_key);
      echo '
      <!-- Start Page Title Area -->
      <section class="page-title-area page-title-bg4">
        <div class="d-table">
          <div class="d-table-cell">
            <div class="container">
              <div class="page-title-content">';
                if(in_array($key, $all_key)){
                  echo '<h2>'.$keys.'</h2>';
                } else {
                  echo '<h2>Page not Found</h2>';
                }
                echo '
                <ul>
                  <li><a href="home">Home</a></li>';
                  if(in_array($key, $all_key)){
                    echo '<li>'.$keys.'</li>';
                  } else {
                    echo '<li>Page not Found</li>';
                  }
                  echo '
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Page Title Area -->
      ';
	}
}

$header = new Header;


class Footer {

	public function script(){
		echo '
    <!-- jQuery Min JS -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Popper Min JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap Min JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Owl Carousel Min JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Slick Min JS -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Mean Menu JS -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- Appear Min JS -->
    <script src="assets/js/jquery.appear.min.js"></script>
    <!-- Odometer Min JS -->
    <script src="assets/js/odometer.min.js"></script>
    <!-- Parallax Min JS -->
    <script src="assets/js/parallax.min.js"></script>
    <!-- Magnific Popup Min JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Nice Select Min JS -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- WOW Min JS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- AjaxChimp Min JS -->
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- jquery Validation -->
    <script src="assets/js/jquery.validate.min.js"></script>
    <!-- jQuery UI -->
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
        rel = "stylesheet">
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <!-- Ajax JS -->
    <script src="assets/js/ajax-script.js"></script>
    <!-- recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- My JS -->
    <script src="assets/js/myscript.js"></script>';
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
		global $images;
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

  public function Countries($in='all'){
		$countries = array('Afghanistan' => '93',
							'Albania' => '355',
							'Algeria' => '213',
							'American Samoa' => '1 684',
							'Andorra' => '376',
							'Angola' => '244',
							'Anguilla' => '1264',
							'Antarctica' => '672',
							'Antigua and Barbuda' => '1268',
							'Antilles, Netherlands' => '599',
							'Argentina' => '54',
							'Armenia' => '374',
							'Aruba' => '297',
							'Australia' => '61',
							'Austria' => '43',
							'Azerbaijan' => '994',
							'Bahamas' => '1242',
							'Bahrain' => '973',
							'Bangladesh' => '880',
							'Barbados' => '1246',
							'Belarus' => '375',
							'Belgium' => '375',
							'Belize' => '501',
							'Benin' => '229',
							'Bermuda' => '1 441',
							'Bhutan' => '975',
							'Bolivia' => '591',
							'Bosnia and Herzegovina' => '387',
							'Botswana' => '267',
							'Brazil' => '55',
							'British Indian Ocean Territory' => '246',
							'British Virgin Islands' => '1 284',
							'Brunei Darussalam' => '673',
							'Bulgaria' => '359',
							'Burkina Faso' => '226',
							'Burundi' => '257',
							'Cambodia' => '855',
							'Cameroon' => '237',
							'Canada' => '1',
							'Cape Verde' => '238',
							'Cayman Islands' => '1 345',
							'Central African Republic' => '236',
							'Chad' => '235',
							'Chile' => '56',
							'China' => '86',
							'Christmas Island' => '64',
							'Cocos (Keeling) Islands' => '61',
							'Colombia' => '57',
							'Comoros' => '269',
							'Congo' => '242',
							'Cook Islands' => '682',
							'Costa Rica' => '506',
							'Cote D\'Ivoire' => '225',
							'Croatia' => '385',
							'Cuba' => '53',
							'Cyprus' => '357',
							'Czech Republic' => '420',
							'Denmark' => '45',
							'Djibouti' => '253',
							'Dominica' => '1 767',
							'Dominican Republic' => '1 809',
							'East Timor (Timor-Leste)' => '670',
							'Ecuador' => '593',
							'Egypt' => '20',
							'El Salvador' => '503',
							'Equatorial Guinea' => '240',
							'Eritrea' => '291',
							'Estonia' => '372',
							'Ethiopia' => '251',
							'Falkland Islands (Malvinas)' => '500',
							'Faroe Islands' => '298',
							'Fiji' => '679',
							'Finland' => '358',
							'France' => '33',
							'French Guiana' => '594',
							'French Polynesia' => '689',
							'Gabon' => '241',
							'Gambia, the' => '220',
							'Georgia' => '995',
							'Germany' => '49',
							'Ghana' => '233',
							'Gibraltar' => '350',
							'Greece' => '30',
							'Greenland' => '299',
							'Grenada' => '1 473',
							'Guadeloupe' => '590',
							'Guam' => '1 671',
							'Guatemala' => '502',
							'Guernsey and Alderney' => '5399',
							'Guinea' => '224',
							'Guinea-Bissau' => '245',
							'Guinea, Equatorial' => '240',
							'Guiana, French' => '594',
							'Guyana' => '592',
							'Haiti' => '509',
							'Holy See (Vatican City State)' => '379',
							'Holland' => '31',
							'Honduras' => '504',
							'Hong Kong, (China)' => '852',
							'Hungary' => '36',
							'Iceland' => '354',
							'India' => '91',
							'Indonesia' => '62',
							'Iran' => '98',
							'Iraq' => '964',
							'Ireland' => '353',
							'Isle of Man' => '44',
							'Israel' => '972',
							'Italy' => '39',
							'Jamaica' => '1 876',
							'Japan' => '81',
							'Jersey' => '44',
							'Jordan' => '962',
							'Kazakhstan' => '7',
							'Kenya' => '254',
							'Kiribati' => '686',
							'Korea(North)' => '850',
							'Korea(South)' => '82',
							'Kosovo' => '381',
							'Kuwait' => '965',
							'Kyrgyzstan' => '996',
							'Lao People\'s Democratic Republic' => '856',
							'Latvia' => '371',
							'Lebanon' => '961',
							'Lesotho' => '266',
							'Liberia' => '231',
							'Libyan Arab Jamahiriya' => '218',
							'Liechtenstein' => '423',
							'Lithuania' => '370',
							'Luxembourg' => '352',
							'Macao, (China)' => '853',
							'Macedonia, TFYR' => '389',
							'Madagascar' => '261',
							'Malawi' => '265',
							'Malaysia' => '60',
							'Maldives' => '960',
							'Mali' => '223',
							'Malta' => '356',
							'Marshall Islands' => '692',
							'Martinique' => '596',
							'Mauritania' => '222',
							'Mauritius' => '230',
							'Mayotte' => '262',
							'Mexico' => '52',
							'Micronesia' => '691',
							'Moldova' => '373',
							'Monaco' => '377',
							'Mongolia' => '976',
							'Montenegro' => '382',
							'Montserrat' => '1 664',
							'Morocco' => '212',
							'Mozambique' => '258',
							'Myanmar' => '95',
							'Namibia' => '264',
							'Nauru' => '674',
							'Nepal' => '977',
							'Netherlands' => '31',
							'Netherlands Antilles' => '599',
							'New Caledonia' => '687',
							'New Zealand' => '64',
							'Nicaragua' => '505',
							'Niger' => '227',
							'Nigeria' => '234',
							'Niue' => '683',
							'Norfolk Island' => '672',
							'Northern Mariana Islands' => '1 670',
							'Norway' => '47',
							'Oman' => '968',
							'Pakistan' => '92',
							'Palau' => '680',
							'Palestinian Territory' => '970',
							'Panama' => '507',
							'Papua New Guinea' => '675',
							'Paraguay' => '595',
							'Peru' => '51',
							'Philippines' => '63',
							'Pitcairn Island' => '872',
							'Poland' => '48',
							'Portugal' => '351',
							'Puerto Rico' => '1787',
							'Qatar' => '974',
							'Reunion' => '262',
							'Romania' => '40',
							'Russia' => '7',
							'Rwanda' => '250',
							'Sahara' => '212',
							'Saint Helena' => '290',
							'Saint Kitts and Nevis' => '1869',
							'Saint Lucia' => '1758',
							'Saint Pierre and Miquelon' => '508',
							'Saint Vincent and the Grenadines' => '1784',
							'Samoa' => '685',
							'San Marino' => '374',
							'Sao Tome and Principe' => '239',
							'Saudi Arabia' => '966',
							'Senegal' => '221',
							'Serbia' => '381',
							'Seychelles' => '248',
							'Sierra Leone' => '232',
							'Singapore' => '65',
							'Slovakia' => '421',
							'Slovenia' => '386',
							'Solomon Islands' => '677',
							'Somalia' => '252',
							'South Africa' => '27',
							'S. Georgia and S. Sandwich Is.' => '500',
							'Spain' => '34',
							'Sri Lanka (ex-Ceilan)' => '94',
							'Sudan' => '249',
							'Suriname' => '597',
							'Svalbard and Jan Mayen Islands' => '79',
							'Swaziland' => '41',
							'Sweden' => '46',
							'Switzerland' => '41',
							'Syrian Arab Republic' => '963',
							'Taiwan' => '886',
							'Tajikistan' => '992',
							'Tanzania' => '255',
							'Thailand' => '66',
							'Timor-Leste (East Timor)' => '670',
							'Togo' => '228',
							'Tokelau' => '690',
							'Tonga' => '676',
							'Trinidad and Tobago' => '1 868',
							'Tunisia' => '216',
							'Turkey' => '90',
							'Turkmenistan' => '993',
							'Turks and Caicos Islands' => '1 649',
							'Tuvalu' => '688',
							'Uganda' => '256',
							'Ukraine' => '380',
							'United Arab Emirates' => '971',
							'United Kingdom' => '44',
							'United States' => '1',
							'US Minor Outlying Islands' => '808',
							'Uruguay' => '598',
							'Uzbekistan' => '998',
							'Vanuatu' => '678',
							'Vatican City State (Holy See)' => '379',
							'Venezuela' => '58',
							'Viet Nam' => '84',
							'Virgin Islands, British' => '1284',
							'Virgin Islands, U.S.' => '1340',
							'Wallis and Futuna' => '681',
							'Western Sahara' => '212',
							'Yemen' => '967',
							'Zambia' => '260',
							'Zimbabwe' => '263');
		if($in=='all'){
			return $countries;
		}else if(isset($countries[$in])) {
			return $countries[$in];
		}

	}

  public function search() {
    echo '';
  }
}

$page = new Page;

?>