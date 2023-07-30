<?php

	session_start();
	if(!isset($_SESSION["isLoggedIn"]) || !$_SESSION["isLoggedIn"]){

		header("Location: login.php");
		die();
	} else{

		header("Location: home.php");
		die();
	
	}
	
 ?>