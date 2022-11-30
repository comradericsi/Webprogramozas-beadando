<?php
	include('config.inc.php');
    $keres = $pages['main page'];
	if (isset($_GET['oldal'])) {
		$oldal = $_GET['oldal'];
		if (isset($pages[$oldal]) && file_exists("./templates/pages/{$pages[$oldal]['file']}.tpl.php")) {
			$keres = $pages[$oldal];
		}
		else { 
			$keres = $error_page;
			header("HTTP/1.0 404 Not Found");
		}
	}
	
	include('./templates/index.tpl.php'); 
?>