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
$url = '/onco/';
if(isset($_SERVER['HTTPS'])) {
	$base_url = 'https://'.$_SERVER['HTTP_HOST'].$url;
}
else{
	$base_url = 'http://'.$_SERVER['HTTP_HOST'].$url;
}
// Base URL End=================

if($pg_key=='home' || $pg_key=='index'){
	$pg_slug = 'home';
}
$pg_key = ($pg_key == 'index')?'home':$pg_key;

// URLConverter Start=================
$pg_slug .= '.php';
// URLConverter End=================

?>