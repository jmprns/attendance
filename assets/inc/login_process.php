
<?php

include 'inc/db.php';

$attempSql = "SELECT * FROM attemp";
$attempQuery = mysqli_query($conn, $attempSql);
$attempValue = mysqli_num_rows($attempQuery);



if(isset($_POST['btnAdmin'])){
	$email = @mysqli_real_escape_string($conn, $_POST['adminEmail']);
	$pass = @mysqli_real_escape_string($conn, $_POST['adminPwd']);

	$loginSql = "SELECT * FROM admin WHERE email = '$email' AND pwd = '$pass' ";
	$loginQuery = $conn->query($loginSql);


	 
		


	if(!$row = $loginQuery->fetch_assoc() ){
		if($attempValue >= 5){
			//SQL BLOCK
				header('Location:?block.php');
		}else{
			//SQL ATTEMP PLUS
			$timeAdd = time()+150;
			$attempPlusSql = "INSERT INTO `attemp` (`id`, `timestamp`) VALUES ('', '$timeAdd') ";
			$attempPlusQuery = $conn->query($attempPlusSql);
			header("Location:?error=login&email=$email");
		}
	}else{
		//SQL
		$attempResetSql = "TRUNCATE TABLE `attemp`";
    	$attempResetQuery = mysqli_query($conn, $attempResetSql);
		$cookieName = 'admin';
		$cookieVal = $row['id'];
		$cookieExp = time()+86400;
		setcookie($cookieName, $cookieVal, $cookieExp);
		$_SESSION['admin'] = $row['id'];


		$session_id = $row['id'];

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
	$time = date("h:i:s A");
	$date = date("m-d-y");

	$accSql = "INSERT INTO `acc_log` (`id`, `timestamp`, `date`, `time`, `action`, `fname`, `lname`, `mname`, `pos`, `type`) 
				VALUES ('', '$timestamp', '$date', '$time', 'LOG IN', '$adminFname', '$adminLname', '$adminMname', '$adminPos', '$type')";
	$accQuery = mysqli_query($conn, $accSql);


		header('Location:dashboard.php?welcome=success');
	}

}

?>