<?php 
include_once'includes/header.php'; 

$base_dir  = __DIR__;
$page_path = 'views/'.$pg_slug;
// echo $page_path;
// echo $pg_slug;
// echo $pg_key;
if(file_exists($base_dir.'/../'.$page_path)) {
	// echo $page_path;
	include_once($page_path);
} else {
    // echo $page_path.'<br>';
	include_once('views/error.php');
}

include_once'includes/footer.php'; 
?>