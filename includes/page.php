<?php include_once('includes/header.php'); ?>
<?php
$base_dir  = __DIR__;
$page_path = 'pages/'.$pg_slug;

if(file_exists($base_dir.'/../'.$page_path)){
	// echo $pg_slug;
	// echo $page_path;
	include_once($page_path);
}else{
    // echo $page_path.'<br>';
	include_once('pages/404.php');
}
?>
<?php include_once('includes/footer.php'); ?>