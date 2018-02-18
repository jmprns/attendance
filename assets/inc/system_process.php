<?php
 
include 'db.php';

function smsDevice(){
	include 'db.php';

	$smsFetchSql = "SELECT * FROM sms_device";
	$smsFetchQuery = $conn->query($smsFetchSql);

	while($smsRow = mysqli_fetch_assoc($smsFetchQuery)){
		
		echo '
			<tr>
				<td>'.$smsRow['sms_id'].'</td>
				<td width="10%"><a href="?delete_sms_id='.$smsRow['id'].'" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a></td>
			</tr>
		';

	}
}

if(isset($_POST['btnDevice'])){
	$deviceId = $_POST['deviceId'];
	$addDeviceSql = "INSERT INTO `sms_device` (`id`, `sms_id`) VALUES ('', '$deviceId')";
	$addDeviceQuery = $conn->query($addDeviceSql);
	if(!$addDeviceQuery){
		header("Location:system.php?device=error");
	}else{
		header("Location:system.php?device=success");
	}
}



if(isset($_POST['btnMode'])){
	$mode = $_POST['smsMode'];
	$modeSQL = "UPDATE system SET sms_mode = '$mode' WHERE id = '1' ";
	$modeQuery = $conn->query($modeSQL);
	header('Location:?edit=success');
}

if(isset($_POST['btnTimeJunior'])){
	$juniorType = $_POST['juniorType'];
	$juniorMTIF = $_POST['juniorMTIF'];
	$juniorMTIS = $_POST['juniorMTIS'];
	$juniorMTOF = $_POST['juniorMTOF'];
	$juniorMTOS = $_POST['juniorMTOS'];
	$juniorATIF = $_POST['juniorATIF'];
	$juniorATIS = $_POST['juniorATIS'];
	$juniorATOF = $_POST['juniorATOF'];
	$juniorATOS = $_POST['juniorATOS'];

	if($juniorType == 0){
		$juniorTimeSql = "UPDATE time SET type = '0', mtif = 'open', mtis = 'open', mtof = 'open', mtos = 'open', atif = 'open', atis = 'open', atof = 'open', atos = 'open' WHERE id = '1' ";
		$juniorQuery = $conn->query($juniorTimeSql);
		header('Location:?edit=success');
	}elseif($juniorType == 1){
		$juniorTimeSql = "UPDATE time SET type = '1', mtif = '$juniorMTIF', mtis = '$juniorMTIS', mtof = '$juniorMTOF', mtos = '$juniorMTOS', atif = '$juniorATIF', atis = '$juniorATIS', atof = '$juniorATOF', atos = '$juniorATOS' WHERE id = '1' ";
		$juniorQuery = $conn->query($juniorTimeSql);
		header('Location:?edit=success');
	}else{
		header('Location:?edit=error');
	}
}

if(isset($_POST['btnTimeSenior'])){
	$seniorType = $_POST['seniorType'];
	$seniorMTIF = $_POST['seniorMTIF'];
	$seniorMTIS = $_POST['seniorMTIS'];
	$seniorMTOF = $_POST['seniorMTOF'];
	$seniorMTOS = $_POST['seniorMTOS'];
	$seniorATIF = $_POST['seniorATIF'];
	$seniorATIS = $_POST['seniorATIS'];
	$seniorATOF = $_POST['seniorATOF'];
	$seniorATOS = $_POST['seniorATOS'];

	if($seniorType == 0){
		$seniorTimeSql = "UPDATE time SET type = '0', mtif = 'open', mtis = 'open', mtof = 'open', mtos = 'open', atif = 'open', atis = 'open', atof = 'open', atos = 'open' WHERE id = '2' ";
		$seniorQuery = $conn->query($seniorTimeSql);
		header('Location:?edit=success');
	}elseif($seniorType == 1){
		$seniorTimeSql = "UPDATE time SET type = '1', mtif = '$seniorMTIF', mtis = '$seniorMTIS', mtof = '$seniorMTOF', mtos = '$seniorMTOS', atif = '$seniorATIF', atis = '$seniorATIS', atof = '$seniorATOF', atos = '$seniorATOS' WHERE id = '2' ";
		$seniorQuery = $conn->query($seniorTimeSql);
		header('Location:?edit=success');
	}else{
		header('Location:?edit=error');
	}
}

if(isset($_POST['btnTimeCollege'])){

	$open = "open";

	$college0 = 0;
	$college1 = 1;

	$collegeType = $_POST['collegeType'];
	$collegeMTIF = $_POST['collegeMTIF'];
	$collegeMTIS = $_POST['collegeMTIS'];
	$collegeMTOF = $_POST['collegeMTOF'];
	$collegeMTOS = $_POST['collegeMTOS'];
	$collegeATIF = $_POST['collegeATIF'];
	$collegeATIS = $_POST['collegeATIS'];
	$collegeATOF = $_POST['collegeATOF'];
	$collegeATOS = $_POST['collegeATOS'];

	if($collegeType == $college0){
		$collegeTimeSql = "UPDATE time SET type = '0', mtif = 'open', mtis = 'open', mtof = 'open', mtos = 'open', atif = 'open', atis = 'open', atof = 'open', atos = 'open' WHERE id = '3' ";
		$collegeQuery = $conn->query($collegeTimeSql);
		header('Location:?edit=success');
	}elseif($collegeType == $college1){
		$collegeTimeSql = "UPDATE time SET type = '1', mtif = '$collegeMTIF', mtis = '$collegeMTIS', mtof = '$collegeMTOF', mtos = '$collegeMTOS', atif = '$collegeATIF', atis = '$collegeATIS', atof = '$collegeATOF', atos = '$collegeATOS' WHERE id = '3' ";
		$collegeQuery = $conn->query($collegeTimeSql);
		header('Location:?edit=success');
	}else{
		header('Location:?edit=error');
	}
}

if(isset($_POST['btnTruncate'])){
	$truncateSQL = "TRUNCATE TABLE `users`, `attendance_o`, `attendance_t` ";
	$truncateQuery = $conn->query($truncateSQL);
	header('Location:?action=success');
}

if(isset($_REQUEST['delete_sms_id'])){
	$smsDelId = $_REQUEST['delete_sms_id'];
	$smsDeleteSql = "DELETE FROM sms_device WHERE id = '$smsDelId' ";
	$smsDelQuery = mysqli_query($conn, $smsDeleteSql);
	if(!$smsDelQuery){
		header("Location:?deletesms=error");
	}else{
		header("Location:?deletesms=success");
	}
}

//FETCHING SYSTEM INFO


$systemSql = "SELECT * FROM system WHERE id = '1' ";
$systemQuery = $conn->query($systemSql);
$systemRow = mysqli_fetch_assoc($systemQuery);







?>