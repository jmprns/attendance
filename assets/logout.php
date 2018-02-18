<?php

if(isset($_REQUEST['session_id'])){

	include 'inc/db.php';

	$session_id = $_REQUEST['session_id'];

	$adminSql = "SELECT * FROM admin WHERE id = '$session_id' ";
	$adminQuery = $conn->query($adminSql);
	$adminRow = mysqli_fetch_assoc($adminQuery);
	$adminFname = $adminRow['fname'];
	$adminMname = $adminRow['mname'];
	$adminLname = $adminRow['lname'];
	$adminPos = $adminRow['position'];
	$adminType = $adminRow['type'];

	if($adminType == 0){
		$type = 'Administrator';
	}else{
		$type = 'User';
	}

	$timestamp = time();
	$timestamp2 = date("H:i:s m-d-y");
	$time = date("h:i:s A");
	$date = date("m-d-y");

	$accSql = "INSERT INTO `acc_log` (`id`, `timestamp`, `date`, `time`, `action`, `fname`, `lname`, `mname`, `pos`, `type`) 
				VALUES ('', '$timestamp', '$date', '$time', 'LOG OUT', '$adminFname', '$adminLname', '$adminMname', '$adminPos', '$type')";
	$accQuery = mysqli_query($conn, $accSql);

	$systemSQL = "UPDATE system SET last_logged = '$timestamp' WHERE id = '1' ";
	$systemQuery = mysqli_query($conn, $systemSQL);



	session_start();
	session_destroy();

	$expire = time()-86400;
	setcookie('admin', @$_SESSION['admin'], $expire);

	header('Location:login.php');

}else{
	header('Location:dashboard.php');
}



?>