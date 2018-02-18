<?php


if(isset($_SESSION['admin']) || isset($_COOKIE['admin']) ){

	if(!isset($_SESSION['admin']) && isset($_COOKIE['admin']) ){
		$_SESSION['admin'] = $_COOKIE['admin'];
		header('Location:dashboard.php');
	}

}





?>