<?php

date_default_timezone_set('Asia/Manila');

$conn = mysqli_connect("mysql.hostinger.ph", "u547885114_gate", "WesleyaN1946", "u547885114_gate");

if(!$conn){

	header('Location:install.php?error=db');
}



?>