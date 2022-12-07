<?php
	//szerver oldali ellenőrzés

	$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
	if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
	{
		exit("Hibás email: ".$_POST['email']);
	}else{
        $email=$_POST['email'];
    }

	if(!isset($_POST['szoveg']) || empty($_POST['szoveg']))
	{
		exit("Hibás szöveg: ".$_POST['szoveg']);
	}else{
        $szoveg=$_POST['szoveg'];
    }

?>
