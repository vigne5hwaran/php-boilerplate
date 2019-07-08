<?php
//session_destroy();
$pg_slug = $pg_key = $pg_real = 'index';
if(isset($_REQUEST['name'])){
	$step1 = explode('/',rtrim($_REQUEST['name'],' /'));
	$pg_slug = $step1[0];
	$res = explode('.',$pg_slug);
	if(isset($res[0])){
		$pg_key = $res[0];
	}
	$pg_real = $step1[0];
}

// Base URL Start=================
$url = '/derm/';
if(isset($_SERVER['HTTPS'])) {
	$base_url = 'https://'.$_SERVER['HTTP_HOST'].$url;
}
else{
	$base_url = 'http://'.$_SERVER['HTTP_HOST'].$url;
}
// Base URL End=================

if($pg_key=='home' || $pg_key=='index'){
	$pg_slug = 'home.html';
}

// URLConverter Start=================
$pg_slug = str_replace('.html','.php',$pg_slug);
// URLConverter End=================

// Functions Start=================================================================

// To find active menu =============
function crnt_menu($arg1,$arg2){
	if(is_array($arg2) && isset($arg2[$arg1])){
		return 'nav-border';
	}else{
		if(($arg1=='index' || $arg1=='home') && $arg2=='index'){
			return 'nav-border';
		}else if($arg1==$arg2){
			return 'nav-border';
		}
	}
}

// To find page title ==============
function pg_title($in){
	$pg_title = array(
		'about'		=> 'About Us',
		'faq'			=> 'FAQ',
		'contact'		=> 'Reach us',
		);
	if(isset($pg_title[$in])){
		return $pg_title[$in];
	}
}

// To find page title ==============
function pg_meta($in){
	$pg_title = array(
		'about'	=> array(
			'title'=>'About Us',
			'desc'=>'A.N cosmetic clinic is a best clinic in chennai',
			'key'=>'A.N. Skin & Hair clinic, Hair clinc, Skin clinic',
		),
		'contact'	=> array(
			'title'=>'Contact Us',
			'desc'=>'A.N cosmetic clinic is a best clinic in chennai',
			'key'=>'A.N. Skin & Hair clinic, Hair clinc, Skin clinic',
		),
		'faq'	=> array(
			'title'=>'Frequently Asked Questions',
			'desc'=>'A.N cosmetic clinic is a best clinic in chennai',
			'key'=>'A.N. Skin & Hair clinic, Hair clinc, Skin clinic',
		),
		'index'	=> array(
			'title'=>'A.N Skin & Hair clinic',
			'desc'=>'The Aladi Aruna Foundation was started in the year 2007 in memory of Mr. Aladi Aruna – born in a humble family in a small village called Aladipatti, in Tirunelveli district. .',
			'key'=>'aladi aruna public cbse school in chennai, aladi aruna cbse school Royapuram chennai, CBSE school in Royapuram, Best cbse school in chennai, Top cbse school in chennai at Royapuram',
		),
		'home'	=> array(
			'title'=>'A.N Skin & Hair clinic',
			'desc'=>'The Aladi Aruna Foundation was started in the year 2007 in memory of Mr. Aladi Aruna – born in a humble family in a small village called Aladipatti, in Tirunelveli district. .',
			'key'=>'aladi aruna public cbse school in chennai, aladi aruna cbse school Royapuram chennai, CBSE school in Royapuram, Best cbse school in chennai, Top cbse school in chennai at Royapuram',
		),
		'vitiligo-surgery-in-chennai'	=> array(
			'title'=>'Vitiligo Surgery',
			'desc'=>'The Aladi Aruna Foundation was started in the year 2007 in memory of Mr. Aladi Aruna – born in a humble family in a small village called Aladipatti, in Tirunelveli district. .',
			'key'=>'aladi aruna public cbse school in chennai, aladi aruna cbse school Royapuram chennai, CBSE school in Royapuram, Best cbse school in chennai, Top cbse school in chennai at Royapuram',
		),
		'micropigmentation-for-vitiligo-in-chennai'	=> array(
			'title'=>'Micropigmentation for Vitiligo',
			'desc'=>'The Aladi Aruna Foundation was started in the year 2007 in memory of Mr. Aladi Aruna – born in a humble family in a small village called Aladipatti, in Tirunelveli district. .',
			'key'=>'aladi aruna public cbse school in chennai, aladi aruna cbse school Royapuram chennai, CBSE school in Royapuram, Best cbse school in chennai, Top cbse school in chennai at Royapuram',
		),
		'phototheraphy-for-vitiligo-in-chennai'	=> array(
			'title'=>'Phototheraphy for Vitiligo',
			'desc'=>'The Aladi Aruna Foundation was started in the year 2007 in memory of Mr. Aladi Aruna – born in a humble family in a small village called Aladipatti, in Tirunelveli district. .',
			'key'=>'aladi aruna public cbse school in chennai, aladi aruna cbse school Royapuram chennai, CBSE school in Royapuram, Best cbse school in chennai, Top cbse school in chennai at Royapuram',
		),
		'laser-hair-removal-in-chennai'	=> array(
			'title'=>'Laser Hair Removal',
			'desc'=>'The Aladi Aruna Foundation was started in the year 2007 in memory of Mr. Aladi Aruna – born in a humble family in a small village called Aladipatti, in Tirunelveli district. .',
			'key'=>'aladi aruna public cbse school in chennai, aladi aruna cbse school Royapuram chennai, CBSE school in Royapuram, Best cbse school in chennai, Top cbse school in chennai at Royapuram',
		),
		'q-switched-nd-yag-laser-in-chennai'	=> array(
			'title'=>'Q Switched ND YAG Laser',
			'desc'=>'The Aladi Aruna Foundation was started in the year 2007 in memory of Mr. Aladi Aruna – born in a humble family in a small village called Aladipatti, in Tirunelveli district. .',
			'key'=>'aladi aruna public cbse school in chennai, aladi aruna cbse school Royapuram chennai, CBSE school in Royapuram, Best cbse school in chennai, Top cbse school in chennai at Royapuram',
		),
		'laser-for-acnescares-in-chennai'	=> array(
			'title'=>'Laser for Acnescares',
			'desc'=>'The Aladi Aruna Foundation was started in the year 2007 in memory of Mr. Aladi Aruna – born in a humble family in a small village called Aladipatti, in Tirunelveli district. .',
			'key'=>'aladi aruna public cbse school in chennai, aladi aruna cbse school Royapuram chennai, CBSE school in Royapuram, Best cbse school in chennai, Top cbse school in chennai at Royapuram',
		),
	);
	if(isset($pg_title[$in])){
		return $pg_title[$in];
	}
}




// Main menu area ===============
function callmenu($pg_key){
	$menus = array(
		'home'		=> 'Home',
		'about'		=> 'About Us',
		'services'		=> array(
			'vitiligo-surgery-in-chennai'		=> 'Vitiligo Surgery',
			'micropigmentation-for-vitiligo-in-chennai'		=> 'Micropigmentation for Vitiligo',
			'phototheraphy-for-vitiligo-in-chennai'	=> 'Phototheraphy for Vitiligo',
			'laser-hair-removal-in-chennai'	=> 'Laser Hair Removal',
			'q-switched-nd-yag-laser-in-chennai'	=> 'Q Switched ND YAG Laser',
			'laser-for-acnescares-in-chennai'	=> 'Laser for Acnescares'
		),
		'faq'	=> 'FAQ',
		'contact'	=> 'Reach Us',
	);
	
	foreach($menus as $k1=>$v1){
		if(is_array($v1)){
			echo '<li class=single-sub parent-nav is-dropdown-submenu-parent opens-right" role="menuitem" aria-haspopup="true" aria-expanded="false" aria-label="Home Page">
			<a class="'. crnt_menu($pg_key,$v1) .'" href="javascript:void(0)" tabindex="0">'.$k1.'</a>
				<ul class="child-nav menu vertical submenu is-dropdown-submenu first-sub" data-submenu="" aria-hidden="true" role="menu">';
				foreach($v1 as $k2=>$v2){
					if(is_array($v2)){
						echo '<li class="dropdown '. crnt_menu($pg_key,$v2) .'"><a href="javascript:void(0)">'.$k2.'</a>
							<ul>';
						foreach($v2 as $k3=>$v3){
							echo '<li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a class="'. crnt_menu($pg_key,$k3) .'" href="'.$k3.'.html">'.$v3.'</a></li>';
						}
						echo '</li>
						</ul>';
					}else{
						echo '<li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a class="'. crnt_menu($pg_key,$k2) .'" href="'.$k2.'.html">'.$v2.'</a></li>';
					}
				}
			echo '</li>
				</ul>';
		}else{
			echo '<li role="menuitem"><a class="'. crnt_menu($pg_key,$k1) .'" href="'.$k1.'.html">'.$v1.'</a></li>';
		}
	}
}

function menuSidebar($pg_key){
	$s_menus = array(
		'vitiligo-surgery-in-chennai'		=> 'Vitiligo Surgery',
		'micropigmentation-for-vitiligo-in-chennai'		=> 'Micropigmentation for Vitiligo',
		'phototheraphy-for-vitiligo-in-chennai'	=> 'Phototheraphy for Vitiligo',
		'laser-hair-removal-in-chennai'	=> 'Laser Hair Removal',
		'q-switched-nd-yag-laser-in-chennai'	=> 'Q Switched ND YAG Laser',
		'laser-for-acnescares-in-chennai'	=> 'Laser for Acnescares'
	);
	foreach($s_menus as $k1 => $v1) {
		echo '<li><a href="'.$k1.'.html">'.$v1.'</a></li>';
	}
}


function menuFooter($pg_key){
	$f_menus = array(
		'faq'		=> 'faq',
		'vitiligo-surgery-in-chennai'		=> 'Vitiligo Surgery',
		'micropigmentation-for-vitiligo-in-chennai'		=> 'Micropigmentation',
		'phototheraphy-for-vitiligo-in-chennai'	=> 'Phototheraphy',
		'laser-hair-removal-in-chennai'	=> 'Laser Hair Removal',
		'q-switched-nd-yag-laser-in-chennai'	=> 'Q Switched ND YAG Laser',
		'laser-for-acnescares-in-chennai'	=> 'Laser for Acnescares'
	);

	foreach ($f_menus as $k1 => $v1) {
		echo '<li><a href="'.$k1.'.html">'.$v1.'</a></li>';
	}
}



?>