<?php 

    if(file_exists('configs/config.php')){
		include 'configs/config.php';
	}else{
		die(' not found.');
	}
	
	if(file_exists('config/database.php')){
		include 'config/database.php';
	}else{
		die('no ta');
	}
	$v = 
	require_once($v);
?>